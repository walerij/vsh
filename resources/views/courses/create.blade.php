@extends('layouts.courses')


@section('content')
    <form action="{{ route('courses.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Название курса</label>
            <input type="text" name="course" id="course" class="form-control"  placeholder="Здесь название Вашего курса">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Краткое описание курса</label>
            <textarea class="form-control" name="info" id="info" rows="3" placeholder="Описание Вашего курса"></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Логотип курса (изображение)</label>
            <input class="form-control" type="file" name="img" id="img">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Доступ</label>
            <select class="form-select"  name="access" id="access" aria-label="Default select example">
                <option selected>none</option>
                <option value="1">none</option>
                <option value="2">free</option>
                <option value="3">club</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить курс</button>
    </form>


@endsection
