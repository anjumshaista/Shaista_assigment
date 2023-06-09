<?php

namespace App\Actions\Fortify;

use App\Models\MapClass;
use App\Models\Team;
use App\Models\User;
use App\Models\MapSchool;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'digits:10', 'unique:users'],
            'school_id' => ['required'],
            'school_class' => ['required_if:user_role,student'],
            'user_role' => ['required'],
            'gender' => ['required'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ], [
            'school_id.required' => 'Select a school',
            '*.required' => ':Attribute is required',
            'school_class.required_if' => 'Class is required',
            '*.email' => 'Invalid email',
            '*.unique' => ':Attribute is already taken',
            '*.max' => ':Attribute cannot be more than 255 characters',
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(
                $user = User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'phone' => $input['phone'],
                    'gender' => $input['gender'],
                    'password' => Hash::make($input['password']),
                ])->assignRole($input['user_role']),
                function (User $user) use ($input) {
                    $this->createTeam($user);
                    addMappingIfStudent($input['user_role'], $input['school_class'], $user->id); // app\Helper\functions.php 
                },
                MapSchool::create([
                    'school_id' => $input['school_id'],
                    'user_id' => $user->id,
                ])
            );
        });
    }

    /**
     * Create a personal team for the user.
     */
    protected function createTeam(User $user): void
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0] . "'s Team",
            'personal_team' => true,
        ]));
    }
}
