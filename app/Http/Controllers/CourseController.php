<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {

        $courses = course::all();
        return view('courses.index', compact('courses'));
        //$course = course::find(87);

       // dd($course->getlessons);
    }
}
