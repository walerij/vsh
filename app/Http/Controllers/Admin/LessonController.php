<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\course;
use App\Models\lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.lessons.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $courses=course::query()->pluck('course','id')->all();
        return view('admin.lessons.create',['courses'=>$courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
       /* $request->validate([
            'course' => 'required',
            'info' => 'required',
            'category_id' => 'required|integer',
            'img' => 'nullable|image',
        ],[
            'course.required'=>'Поле не должно быть пустым ',
            'info.required'=>'Поле не должно быть пустым ',
            'category_id.required'=>'Поле не должно быть пустым ',
            'img.required'=>'Поле не должно быть пустым ',
        ]);*/
        /*$request->validate([
            'title'=>'required',
        ],);*/
        $request->validate(['inputs.*.video'=>'required','inputs.*.video_length'=>'required']);
      //  dd($request->all());
        $data = $request->all();
        lesson::query()->create($data);
     /*   foreach ($request->inputs as $key => $value)
        {
            lesson::query()->create($value);
        }
        $data = $request->all();*/
        $request->session()->flash('success','Курс успешно добавлен');
        return redirect()->route('lessons.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
