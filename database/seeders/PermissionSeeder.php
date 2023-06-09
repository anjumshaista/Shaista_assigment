<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $permission1 = Permission::create(['name' => 'Teacher dashboard']);
        // $permission1->assignRole('teacher');

        // $permission2 = Permission::create(['name' => 'All student attendance']);
        // $permission2->assignRole('teacher');

        // $permission3 = Permission::create(['name' => 'All student remarks']);
        // $permission3->assignRole('teacher');

        // $permission4 = Permission::create(['name' => 'Student dashboard']);
        // $permission4->assignRole('student');

        // $permission5 = Permission::create(['name' => 'Student attendance']);
        // $permission5->assignRole('student');

        // $permission6 = Permission::create(['name' => 'Student remarks']);
        // $permission6->assignRole('student');

        $permission2 = Permission::create(['name' => 'All student result']);
        $permission2->assignRole('teacher');

        $permission6 = Permission::create(['name' => 'Student result']);
        $permission6->assignRole('student');
    }
}
