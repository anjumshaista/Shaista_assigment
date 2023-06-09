<?php

namespace Database\Seeders;

use App\Models\TypeMaster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeMaster::create(['name' => 'Gender']);
        TypeMaster::create(['name' => 'Male', 'parent_id' => 1]);
        TypeMaster::create(['name' => 'Female', 'parent_id' => 1]);
        TypeMaster::create(['name' => 'Not defined', 'parent_id' => 1]);
    }
}
