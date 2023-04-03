<?php

use App\Http\Controllers\HomeController;
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

Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/usercourses', "UsercoursesColtroller@index")->name('user_courses');
Route::get('/usercourses/{course}/create', "UsercoursesColtroller@create")->name('user_courses.create');
Route::get('/usercourses/addcourse', "UsercoursesColtroller@addcourse")->name('user_courses.add_course');
Route::post('/usercourses/store', "UsercoursesColtroller@store")->name('user_courses.store');

Route::get('/courses','CourseController@index')->name('courses');
Route::get('/courses/create','CourseController@create')->name('courses.create');
Route::post('/courses/store', [App\Http\Controllers\CourseController::class, "store"])->name('courses.store');
Route::get('/lesson/{courl}',[\App\Http\Controllers\lessonController::class,'lesson'])->name('lesson');
Auth::routes();

/// admin
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::get('/',[\App\Http\Controllers\Admin\MainController::class,'index'])->name('admin.index');
    Route::resource('/categories','CategoryController');
    Route::resource('/courses','CoursesController');
    Route::resource('/lessons','LessonController');
});
///

