<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
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

//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');



Route::group(['middleware'=>'auth'],function(){
    Route::get('/',[BackendController::class,'index'])->name('back.index');
    Route::resource('subject',SubjectController::class);
    Route::resource('teacher',TeacherController::class);
    Route::resource('guardian',GuardianController::class);
    Route::resource('student',StudentController::class);
});

require __DIR__.'/auth.php';
