<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_id',
        'user_id',
    ];

    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id', 'id');
    }
}
