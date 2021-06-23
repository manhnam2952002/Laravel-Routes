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

Route:: get('/', function (){
    return view('home');
});
Route:: get('/admin/student/create', [\App\Http\Controllers\StudentController::class,'create']);
Route:: get('/admin/student/getList', [\App\Http\Controllers\StudentController::class,'getList']);
Route:: get('/admin/student/getById', [\App\Http\Controllers\StudentController::class,'getById']);
Route:: get('/admin/student/update', [\App\Http\Controllers\StudentController::class,'update']);
Route:: get('/admin/student/delete', [\App\Http\Controllers\StudentController::class,'delete']);
Route:: get('/admin/student/form', [\App\Http\Controllers\StudentController::class,'form']);

//--------------------

Route:: get('/admin/teacher/create', [\App\Http\Controllers\TeacherController::class,'create']);
Route:: get('/admin/teacher/getList', [\App\Http\Controllers\TeacherController::class,'getList']);
Route:: get('/admin/teacher/getById', [\App\Http\Controllers\TeacherController::class,'getById']);
Route:: get('/admin/teacher/update', [\App\Http\Controllers\TeacherController::class,'update']);
Route:: get('/admin/teacher/delete', [\App\Http\Controllers\TeacherController::class,'delete']);
Route:: get('/admin/teacher/form', [\App\Http\Controllers\TeacherController::class,'form']);



