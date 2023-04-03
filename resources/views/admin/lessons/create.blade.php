@extends('admin.layouts.layout')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Новые уроки</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Новый курс</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('lessons.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                             {{--   <div class="form-group">
                                    <label for="lesson">Название</label>
                                    <input type="text" name="lesson"
                                           class="form-control @error('lesson') is-invalid @enderror" id="title"
                                           placeholder="Название">
                                </div>--}}

                                <div class="form-group">
                                    <label for="category_id">Курс</label>
                                    <select  class="form-control @error('course') is-invalid @enderror" id="course_id" name="course_id">
                                        @foreach($courses as $k=>$v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <table class="table table-bordered " id="table-lessons">
                                    <tr>
                                        <th>Урок</th>
                                        <th>time</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="inputs[0][video]" placeholder="ссылка на ютуб урок" class="form-control"></td>
                                        <td><input type="text" name="inputs[0][video_length]" placeholder="" class="form-control"></td>
                                        <td><input type="text" name="inputs[0][intro]" placeholder="" class="form-control"></td>

                                        <td><button type="button" name="add" id="add" class="btn btn-success">Добавить урок</button></td>
                                    </tr>
                                </table>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                    </div>

                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
