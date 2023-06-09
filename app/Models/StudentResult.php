<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'teacher_id',
        'maths',
        'science',
        'sst',
        'evs',
    ];
    
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
}
