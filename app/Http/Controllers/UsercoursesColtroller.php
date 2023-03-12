<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\UserCourses;
use Illuminate\Http\Request;

class UsercoursesColtroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //dump("вывод курсов пользователя");
        $user = auth()->user();
        $courses =$user->courses;
        return view('usercourses.index', compact('courses','user'));
        //dd($user->courses);

    }

    public function create()
    {
        $courses = course::all();
        return view('usercourses.index', compact('courses'));
    }

    public function store(UserCourses $userCourse)
    {

       return redirect()->route('usercourses.index');
        //    dd("Добавление курса для данного пользователя");
    }


    public function edit()
    {

        dd("Редактирование добавления курса для данного пользователя - а надо ли");
    }

    public function delete()
    {

        dd("Удаление usercouser - а надо ли ");
    }
}
