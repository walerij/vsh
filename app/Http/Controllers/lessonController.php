<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\lesson;
use Illuminate\Http\Request;

class lessonController extends Controller
{
    public function index()
    {
        return redirect()->route('/');
    }
    public function lesson($courl)
    {
        $courset = course::query()->where('courl', '=', $courl)->first();
        dd($courset);
       //dd($courset);
        return view('lesson',['courset'=>$courset]);
    }
}
