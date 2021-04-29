<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('academics', App\Http\Controllers\AcademicController::class);

Route::resource('admissions', App\Http\Controllers\AdmissionController::class);



Route::resource('batches', App\Http\Controllers\BatchController::class);

Route::resource('classrooms', App\Http\Controllers\ClassroomController::class);

Route::resource('classes', App\Http\Controllers\ClassesController::class);

Route::resource('courses', App\Http\Controllers\CourseController::class);

Route::resource('days', App\Http\Controllers\DayController::class);

Route::resource('departments', App\Http\Controllers\DepartmentController::class);

Route::resource('faculties', App\Http\Controllers\FacultyController::class);

Route::resource('levels', App\Http\Controllers\LevelController::class);

Route::resource('roles', App\Http\Controllers\RoleController::class);

Route::resource('shifts', App\Http\Controllers\ShiftController::class);

Route::resource('teachers', App\Http\Controllers\TeacherController::class);

Route::resource('times', App\Http\Controllers\TimeController::class);

Route::resource('transactions', App\Http\Controllers\TransactionController::class);

Route::resource('semesters', App\Http\Controllers\SemesterController::class);

Route::resource('users', App\Http\Controllers\UserController::class);

Route::resource('classAssignings', App\Http\Controllers\Class_assigningController::class);

Route::resource('schedules', App\Http\Controllers\ScheduleController::class);

Route::resource('rolls', App\Http\Controllers\RollController::class);

Route::resource('statuses', App\Http\Controllers\StatusController::class);

Route::get('/dynamicLevel',[App\Http\Controllers\ScheduleController::class, 'DynamicLevel']);

Route::get('/schedule.edit', [App\Http\Controllers\ScheduleController::class, 'edit']);

Route::post('/insert',array('as'=>'insert','uses'=>[App\Http\Controllers\Class_assigningController::class, 'insert']));


Route::group(['middleware' =>['studentSession'] ], function(){
    Route::match(['get','post'],'account',[App\Http\Controllers\StudentController::class, 'account']);
    Route::match(['get','post'],'student-biodata',[App\Http\Controllers\StudentController::class, 'studentBioData']);
    Route::match(['get','post'],'student-choose-course',[App\Http\Controllers\StudentController::class, 'studentChooseCourse']);
    Route::match(['get','post'],'student-lecture-calender',[App\Http\Controllers\StudentController::class, 'studentLectureCalender']);
    Route::match(['get','post'],'student-lecture-activity',[App\Http\Controllers\StudentController::class, 'studentLectureActivity']);
    Route::match(['get','post'],'student-exam-marks',[App\Http\Controllers\StudentController::class, 'studentExamMarks']);

    Route::match(['get','post'],'/verify-password',[App\Http\Controllers\StudentController::class, 'verifyPassword']);
    Route::match(['get','post'],'student-update-password',[App\Http\Controllers\StudentController::class, 'changePassword']);

});

Route::get('/student',[App\Http\Controllers\StudentController::class, 'studentLogin']);
Route::get('/logout',[App\Http\Controllers\StudentController::class,'studentLogout']);

Route::post('student-login',[App\Http\Controllers\StudentController::class,'LoginStudent']);

Route::get('/student-forgot-password',[App\Http\Controllers\StudentController::class,'getForgotPassword']);
Route::post('/forgot-password',[App\Http\Controllers\StudentController::class,'forgotPassword']);


Route::resource('attendances', App\Http\Controllers\AttendanceController::class);