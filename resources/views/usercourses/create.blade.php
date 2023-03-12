@extends('layouts.courses')


@section('content')
    <form action="{{ route('usercourses.store') }}" method="post">
        @csrf
        <div class="col-auto">
            Вы действительно хотите подписаться на курс:
            <input type="text" readonly value="{{$course->course}}" >
        </div>
        <div class="col-auto">

            <button type="submit" class="btn btn-primary mb-3">Да</button>
            <a class="btn btn-warning" href="{{route('usercourses')}}">Нет</a>
        </div>
    </form>


@endsection
