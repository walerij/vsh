@extends('layouts.layout')

@section('content')
    <div class="video__lesson">
        <div class="container my-4 p-3">
            <div class="row">
                <div class="col-md-12">
                    <a href="" class="btn btn_lesson">C#</a>
                    <a href="" class="btn btn_lesson">JAVA</a>
                    <a href="" class="btn btn_lesson">PHP</a>
                    <a href="" class="btn btn_lesson">WEB</a>
                </div>
            </div>
            <div class="row">
                @foreach($course as $cours)
                    <div class="col-sm-6 col-md-4 col-lg-3 g-3">
                        <div class="card" style=""><a href="{{route('lesson',$cours->courl)}}" style="text-decoration: none; color: #000000">
                                <img src="{{$cours->img}}" class="card-img-top" alt="...">
                                <div class="card-body">

                                    <h5 class="card-title p-2 text-center">{{$cours->course}}</h5></a>
                            <div class="info_block">
                  <span>
                    <i class="fas fa-user-clock"></i> {{$cours->tier}} час
                  </span>
                                <div class="mt-2"></div>
                                <span>
                   <i class="fas fa-th-large"></i> {{$cours->lessons}} уроков
                  </span>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach

        </div>
    </div>
    </div>
@endsection
