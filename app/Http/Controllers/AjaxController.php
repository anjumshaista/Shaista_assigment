<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getClassList(Request $request)
    {
        $schoolClasses = SchoolClass::where('school_id', $request->school_id)->get();

        return response()->json([
            'schoolClasses' => $schoolClasses
        ]);
    }
}
