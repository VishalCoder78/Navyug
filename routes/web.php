<?php

use App\Http\Controllers\admissionController;
use App\Http\Controllers\examController;
use App\Http\Controllers\teacherController;
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
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/admission', function () {
    return view('admission');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/why', function () {
    return view('why');
});

Route::get('/teacher', function () {
    return view('addteacher');
});

Route::get('/exams', function () {
    return view('exam');
});

Route::get('/teacher', [teacherController::class, 'teacherData']);

Route::post('/add', [admissionController::class,'addmission']);

Route::post('/addteacher', [teacherController::class, 'teacher']);

Route::post('/exam', [examController::class,'handleExam']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

