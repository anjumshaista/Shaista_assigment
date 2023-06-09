<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'teacher_id',
        'student_feedback',
        'teacher_remarks',
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
