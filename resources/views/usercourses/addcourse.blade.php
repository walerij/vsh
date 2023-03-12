@extends('layouts.courses')

<h3>Выбор курса для пользователя {{$user->name}}</h3>
@section('content')
    @foreach($courses as $course)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$course->course}}</h5>
                <p class="card-text">{{$course->info}}</p>
                <a href="{{route('usercourses.create', $course->id)}}" class="btn btn-primary">Подписаться на курс</a>
            </div>
        </div>

    @endforeach

@endsection
