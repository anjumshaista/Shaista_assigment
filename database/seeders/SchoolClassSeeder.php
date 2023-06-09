<?php

namespace Database\Seeders;

use App\Models\SchoolClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SchoolClass::create(['school_id' => 1, 'school_class' => 'Class - I', 'class_section' => 'A', 'class_floor' => '1st Floor']);
        SchoolClass::create(['school_id' => 1, 'school_class' => 'Class - I', 'class_section' => 'B', 'class_floor' => '1st Floor']);
        SchoolClass::create(['school_id' => 1, 'school_class' => 'Class - I', 'class_section' => 'C', 'class_floor' => '1st Floor']);
        SchoolClass::create(['school_id' => 1, 'school_class' => 'Class - II', 'class_section' => 'A', 'class_floor' => '1st Floor']);
        SchoolClass::create(['school_id' => 1, 'school_class' => 'Class - II', 'class_section' => 'B', 'class_floor' => '1st Floor']);
        SchoolClass::create(['school_id' => 1, 'school_class' => 'Class - II', 'class_section' => 'C', 'class_floor' => '1st Floor']);
        SchoolClass::create(['school_id' => 1, 'school_class' => 'Class - III', 'class_section' => 'A', 'class_floor' => '2nd Floor']);
        SchoolClass::create(['school_id' => 1, 'school_class' => 'Class - III', 'class_section' => 'B', 'class_floor' => '2nd Floor']);
        SchoolClass::create(['school_id' => 1, 'school_class' => 'Class - III', 'class_section' => 'C', 'class_floor' => '2nd Floor']);
        SchoolClass::create(['school_id' => 1, 'school_class' => 'Class - IV', 'class_section' => 'A', 'class_floor' => '2nd Floor']);
        SchoolClass::create(['school_id' => 1, 'school_class' => 'Class - IV', 'class_section' => 'B', 'class_floor' => '2nd Floor']);
        SchoolClass::create(['school_id' => 1, 'school_class' => 'Class - IV', 'class_section' => 'C', 'class_floor' => '2nd Floor']);
        SchoolClass::create(['school_id' => 1, 'school_class' => 'Class - V', 'class_section' => 'A', 'class_floor' => '3rd Floor']);
        SchoolClass::create(['school_id' => 1, 'school_class' => 'Class - V', 'class_section' => 'B', 'class_floor' => '3rd Floor']);
        SchoolClass::create(['school_id' => 1, 'school_class' => 'Class - V', 'class_section' => 'C', 'class_floor' => '3rd Floor']);
    }
}
