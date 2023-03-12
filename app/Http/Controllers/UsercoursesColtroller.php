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

    public function addcourse()
    {   $user = auth()->user();
        $courses = course::all();
        return view('usercourses.addcourse', compact('courses','user'));
    }


    public function create(course $Course)
    {


       $course =  $Course;
        $data= request()->validate([
            'user_id'=>'unsignedBigInteger',
            'courses_id'=>'unsignedBigInteger',

        ]);
        $user_course = UserCourses::firstOrCreate(['courses_id'=>$Course->id,'user_id'=>auth()->user()->id],$data);
        return redirect()->route('usercourses');

    }






    public function store(course $Course)
    {
        //dd($userCourse);
        $data= request()->validate([
            'user_id'=>'unsignedBigInteger',
            'courses_id'=>'unsignedBigInteger',

        ]);

       // dd($data);

       $user_course = UserCourses::firstOrCreate(['courses_id'=>$Course->id,'user_id'=>auth()->user()->id],$data);
       return redirect()->route('usercourses');
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
