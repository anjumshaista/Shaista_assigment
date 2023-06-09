<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'student_id',
        'month',
        'year',
        'month_year',
        'total_days',
        'total_present',
        'comments',
    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }
    
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
}
