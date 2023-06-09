<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {

        $courses = course::query()->paginate(5);
        return view('admin.course.index',['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::query()->pluck('title','id')->all();
        return view('admin.course.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'course' => 'required',
            'info' => 'required',
            'category_id' => 'required|integer',
            'img' => 'nullable|image',
        ],[
            'course.required'=>'Поле не должно быть пустым ',
            'info.required'=>'Поле не должно быть пустым ',
            'category_id.required'=>'Поле не должно быть пустым ',
            'img.required'=>'Поле не должно быть пустым ',
            ]);
        /*$request->validate([
            'title'=>'required',
        ],);*/
        $data = $request->all();
        $data['img'] = course::uploadImage($request);
        $courese = course::query()->create($data);
        $request->session()->flash('success','Курс успешно добавлен');
        return redirect()->route('courses.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = course::query()->find($id);
        $categories = Category::query()->pluck('title', 'id')->all();

        return view('admin.course.edit',['categories'=>$categories,'courses'=>$courses]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'course' => 'required',
            'info' => 'required',
            'category_id' => 'required|integer',
            'img' => 'nullable|image',
        ],[
            'course.required'=>'Поле не должно быть пустым ',
            'info.required'=>'Поле не должно быть пустым ',
            'category_id.required'=>'Поле не должно быть пустым ',
            'img.required'=>'Поле не должно быть пустым ',
        ]);
        $courses = course::query()->find($id);
        $data = $request->all();
        $data['img'] = course::uploadImage($request,$courses->img);
        $courses->update($data);
        return redirect()->route('courses.index')->with('success','Изменение сохранены');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $corses = course::find($id);
        Storage::delete($corses->img);
        $corses->delete();
        return redirect()->route('courses.index')->with('success', 'Курс удален');
    }
}
