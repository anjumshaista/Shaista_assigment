<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapSchool extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'user_id',
    ];

    public function school()
    {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
}
