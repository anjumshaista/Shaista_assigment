<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RemarkController extends Controller
{
    public function remark()
    {
        return view('teachers.student-remarks');
    }
}
