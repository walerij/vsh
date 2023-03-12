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
Route::get('/usercourses', "UsercoursesColtroller@index")->name('usercourses');
Route::get('/usercourses/{course}/create', "UsercoursesColtroller@create")->name('usercourses.create');
Route::get('/usercourses/addcourse', "UsercoursesColtroller@addcourse")->name('usercourses.addcourse');
Route::post('/usercourses/store', "UsercoursesColtroller@store")->name('usercourses.store');

Route::get('/courses','CourseController@index')->name('courses');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
