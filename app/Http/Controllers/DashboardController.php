<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Remark;
use App\Models\StudentResult;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function teacherDashboard()
    {
        $title = 'Welcome '.Auth::user()->name;
        $teacher = User::with('mapSchool.school')->whereId(Auth::id())->first();
        $abbr = getAbbreviation(Auth::id());
        $students = User::role('student')->with('mapClass.schoolClass')->paginate(5, ['*'], 'students')->withQueryString();
        $remarks = Remark::where('teacher_id', Auth::id())->latest()->paginate(5, ['*'], 'remarks')->withQueryString();
        $attendances = Attendance::latest()->paginate(5, ['*'], 'atd')->withQueryString();
        $results = StudentResult::latest()->paginate(5, ['*'], 'rslt')->withQueryString();

        return view('dashboard.teacher-dashboard', compact('title', 'teacher', 'abbr', 'students', 'remarks', 'results', 'attendances'));
    }

    public function studentDashboard()
    {
        $title = 'Welcome '.Auth::user()->name;
        $student = User::with('mapSchool.school', 'mapClass.schoolClass')->whereId(Auth::id())->first();
        $abbr = getAbbreviation(Auth::id());
        $teachers = User::role('teacher')->with('mapSchool.school')->paginate(5, ['*'], 'teachers')->withQueryString();
        $remarks = Remark::where('student_id', Auth::id())->latest()->paginate(5, ['*'], 'remarks')->withQueryString();
        $results = StudentResult::where('student_id', Auth::id())->latest()->paginate(5, ['*'], 'remarks')->withQueryString();
        $attendances = Attendance::where('student_id', Auth::id())->latest()->paginate(5, ['*'], 'atd')->withQueryString();

        return view('dashboard.student-dashboard', compact('title', 'student', 'abbr', 'teachers', 'remarks','results', 'attendances'));
    }
}