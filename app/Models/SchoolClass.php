<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'school_class',
        'class_section',
        'class_floor',
    ];
}
