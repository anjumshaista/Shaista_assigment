<?php

use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Student\FeedbackController;
use App\Http\Controllers\StudentResultController;
use App\Http\Controllers\Teacher\AttendanceController;
use App\Http\Controllers\Teacher\RemarkController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CommonController::class, 'login'])->name('user.login');

Route::get('/ajax/get-classes', [AjaxController::class, 'getClassList'])->name('get.class.list');

/*------------ For redirection (clear Application/Cookies properly to test) -----------*/
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'prevent.back'])->group(function () {
	Route::get('/dashboard', [CommonController::class, 'dashboardRedirect'])->name('dashboard.redirect');
});

/*------------ For Teacher dashboard -----------*/
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'prevent.back'])->group(function () {
	Route::get('/teacher/dashboard', [DashboardController::class, 'teacherDashboard'])->name('teacher.dashboard')->middleware(['role:teacher']);
});

/*------------ For Student dashboard -----------*/
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'prevent.back'])->group(function () {
	Route::get('/student/dashboard', [DashboardController::class, 'studentDashboard'])->name('student.dashboard')->middleware(['role:student']);
});



/*------------ Teacher routes (last middleware) -----------*/
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'prevent.back', 'role:teacher'])->group(function () {

	Route::get('/update-student', [CommonController::class, 'updateSeededStudentInfo']); // Temp route to seed data
	Route::get('/remark', [RemarkController::class, 'remark'])->name('teacher.remark');
	Route::get('/update-attendance', [AttendanceController::class, 'updateAttendance'])->name('update.attendance');
	Route::get('/student-result', [StudentResultController::class, 'studentResult'])->name('teacher.student.result');
});



/*------------ Student routes (last middleware) -----------*/
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'prevent.back', 'role:student'])->group(function () {

	Route::get('/feedback', [FeedbackController::class, 'feedback'])->name('student.feedback');
});



Route::get('/logout', [CommonController::class, 'logout'])->name('user.logout');