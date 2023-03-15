@extends('layouts.courses')

@section('content')
    <div>
        <a class="btn bg-primary" href="{{route('courses.create')}}">Добавить новый курс</a>
    </div>
    @foreach($courses as $course)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$course->course}}</h5>
                <p class="card-text">{{$course->info}}</p>
                <a href="#" class="btn btn-primary">Подробнее</a>
            </div>
        </div>

    @endforeach
@endsection
