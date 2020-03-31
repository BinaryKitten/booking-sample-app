<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', static function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('account', 'HomeController@index')->name('home');
Route::get('courses', 'CourseController@listCourses')->name('courses');
Route::get('course/{course}', 'CourseController@viewCourse')->name('view-course');
Route::get('course/{course}/enroll', 'CourseController@enrollOnCourse')
    ->name('enroll-on-course')
    ->middleware('auth');
