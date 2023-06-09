<?php

namespace App\Http\Controllers;

use App\Models\MapClass;
use App\Models\MapSchool;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CommonController extends Controller
{
	public function login()
	{
		return view('auth.login');
	}

	public function logout(Request $request)
	{
		Auth::guard('web')->logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();

		return redirect('/');
	}

	public function dashboardRedirect()
	{
		$allRoles = Auth::user()->getRoleNames()->toArray();

		if (in_array('teacher', $allRoles)) {
			return redirect()->route('teacher.dashboard');
		} else if (in_array('student', $allRoles)) {
			return redirect()->route('student.dashboard');
		}
	}

	public function updateSeededStudentInfo()
	{
		$users = User::where('id', '>', 2)->get();


		DB::beginTransaction();

		try {
			foreach ($users as $user) {
				$user->update([
					'gender' => rand(2, 4)
				]);

				$exists = DB::table('model_has_roles')->where('model_id', $user->id)->exists();
				if (!$exists) {
					$user->assignRole('student');
				}

				$schoolMapExists = MapSchool::where('user_id', $user->id)->exists();
				if (!$schoolMapExists) {
					MapSchool::create([
						'school_id' => 1,
						'user_id' => $user->id,
					]);
				}

				$classMapExists = MapClass::where('user_id', $user->id)->exists();
				if (!$classMapExists) {
					MapClass::create([
						'class_id' => rand(1, 15),
						'user_id' => $user->id,
					]);
				}
			}
			DB::commit();

			return "All OK";
		} catch (\Throwable $th) {

			DB::rollBack();
			return $th->getMessage();
		}
	}
}
