@extends('layouts.courses')
<h3>Курсы для пользователя {{$user->name}}</h3>
@section('content')
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
    <hr>
    <a class="btn btn-info" href="{{route('usercourses.create')}}">Добавить подписку на курс</a>
    <hr>
@endsection
