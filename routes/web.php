<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\CheckResultController;
use App\Http\Controllers\admin\ResultController;
use App\Http\Controllers\admin\SemesterController;
use App\Http\Controllers\admin\ClassController;
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
Route::get('/dashboard', [App\Http\Controllers\admin\AdminController::class, 'index']);
Route::get('/student',[StudentController::class,'index']);
Route::get('/student/create',[StudentController::class,'create']);
Route::post('/student/store',[StudentController::class,'store']);
Route::get('/student/show/{id}',[StudentController::class,'show']);
Route::get('/student/edit/{id}',[StudentController::class,'edit']);
Route::post('/student/update/{id}',[StudentController::class,'update']);
Route::get('/student/destroy/{id}',[StudentController::class,'destroy']);

Route::get('/result/all',[ResultController::class,'index']);
Route::get('/result/create/',[ResultController::class,'create']);
Route::post('/result/store/',[ResultController::class,'store']);
Route::get('/result/edit/{id}',[ResultController::class,'edit']);
Route::post('/result/update/{id}',[ResultController::class,'update']);
Route::get('/result/delete/{id}',[ResultController::class,'destroy']);



Route::get('/semester/',[SemesterController::class,'index']);
Route::get('/semester/create/',[SemesterController::class,'create']);
Route::post('/semester/store/',[SemesterController::class,'store']);
Route::get('/semester/edit/{id}',[SemesterController::class,'edit']);
Route::post('/semester/update/{id}',[SemesterController::class,'update']);
Route::get('/semester/delete/{id}',[SemesterController::class,'destroy']);


Route::get('/class',[ClassController::class,'index']);
Route::get('/class/create',[ClassController::class,'create']);
Route::post('/class/store',[ClassController::class,'store']);
Route::get('/class/edit/{id}',[ClassController::class,'edit']);
Route::post('/class/update/{id}',[ClassController::class,'update']);
Route::get('/class/delete/{id}',[ClassController::class,'destroy']);





Route::get('/result',[CheckResultController::class, 'index']);
Route::get('/show/{id}',[CheckResultController::class, 'show']);
