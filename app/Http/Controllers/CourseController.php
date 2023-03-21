<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() // вывод всех курсов
    {

        $course = course::query()->get();
        $category_courses = Category::query()->get();
        return view('courses.index',['course'=>$course]);
        //$course = course::find(87);

       // dd($course->getlessons);
    }

    //на страницу создания курса
    public  function  create()
    {
        //dd("Создание курса");
        return view('courses.create');
    }

    //сохранение созданного курса
    public function store(){
        $data= request()->validate([
            'course'=>'required|string',
            'courl'=>'string',
            'info'=>'string',
            'img'=>'string',
            'access'=>'string',
        ]);
        $data['courl']="course".time();
        $data['stat_duration']=date('Y-m-d H:i:s');
        $data['author_id'] = auth()->user()->id;

        $post=course::firstOrCreate($data); //создание курса в базе
        //$post->tags()->attach($tags);
        return redirect()->route('courses');

    }
}
