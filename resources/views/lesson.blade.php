@extends('layouts.layout')

@section('content')

    <div class="lessons">
        <div class="container-fluid py-3">
            <div class="row">
                <div class="col-md-3 col-sm col-3  col">
                    <div class="play__list__lessons">
                        <div class="list-group list-group-flush border-bottom scrollarea">
                            @foreach($courset->lesson as $course)


                            <a  onclick="play('{{$course->video}}')" class="list-group-item list-group-item-action  py-3 " aria-current="true">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <i class="fas fa-lock-open"></i>
                                    <strong class="mb-2 text-center">{{$course->lesson}}</strong>
                                    <small>{{$course->video_length}}</small>
                                </div>
                                <!--<div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>-->
                            </a> @endforeach

                           {{-- <a href="" class="list-group-item list-group-item-action py-3 lh-tight">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <i class="fas fa-lock-open"></i>
                                    <strong class="mb-1">Java.Сапёр — Простое окно</strong>
                                    <small class="text-muted">3:01</small>
                                </div>
                                <!--<div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>-->
                            </a>
                            <a href="" class="list-group-item list-group-item-action py-3 lh-tight">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <i class="fas fa-lock-open"></i>
                                    <strong class="mb-1">Закрытие на выходе</strong>
                                    <small class="text-muted">2:59</small>
                                </div>
                                <!--<div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>-->
                            </a>
                            <a href="" class="list-group-item list-group-item-action py-3 lh-tight">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <i class="fas fa-lock"></i>
                                    <strong class="mb-1">  Полёт над классом</strong>
                                    <small class="text-muted">3:52</small>
                                </div>
                                <!--<div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>-->
                            </a>--}}



                            <!--<a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                               <div class="d-flex w-100 align-items-center justify-content-between">
                                 <strong class="mb-1">List group item heading</strong>
                                 <small class="text-muted">Wed</small>
                               </div>
                               <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                             </a>
                             <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                               <div class="d-flex w-100 align-items-center justify-content-between">
                                 <strong class="mb-1">List group item heading</strong>
                                 <small class="text-muted">Tues</small>
                               </div>
                               <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                             </a>
                             <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                               <div class="d-flex w-100 align-items-center justify-content-between">
                                 <strong class="mb-1">List group item heading</strong>
                                 <small class="text-muted">Wed</small>
                               </div>
                               <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                             </a>
                             <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                               <div class="d-flex w-100 align-items-center justify-content-between">
                                 <strong class="mb-1">List group item heading</strong>
                                 <small class="text-muted">Tues</small>
                               </div>
                               <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                             </a>
                             <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                               <div class="d-flex w-100 align-items-center justify-content-between">
                                 <strong class="mb-1">List group item heading</strong>
                                 <small class="text-muted">Mon</small>
                               </div>
                               <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                             </a>
                             <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                               <div class="d-flex w-100 align-items-center justify-content-between">
                                 <strong class="mb-1">List group item heading</strong>
                                 <small class="text-muted">Wed</small>
                               </div>
                               <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                             </a>
                             <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                               <div class="d-flex w-100 align-items-center justify-content-between">
                                 <strong class="mb-1">List group item heading</strong>
                                 <small class="text-muted">Tues</small>
                               </div>
                               <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                             </a>
                             <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                               <div class="d-flex w-100 align-items-center justify-content-between">
                                 <strong class="mb-1">List group item heading</strong>
                                 <small class="text-muted">Mon</small>
                               </div>
                               <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                             </a>-->
                        </div>
                    </div>
                    <!--    <div class="video__list">
                          <div class="list-group">
                           &lt;!&ndash; <li class="list-group-item active" aria-current="true">An active item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>&ndash;&gt;
                          </div>
                        </div>-->
                    <!--<ul class="video">

                    </ul>-->
                    <!--<section class="vide-playlist">
                      <h3 class="title">Tile of video</h3>
                      <p>10 lessons</p>
                      <div class="videos">
                        <div class="video">
                          <i class="fas fa-play"></i>
                          <p>01. </p>
                          <h3 class="title">title videos</h3>
                        </div>
                        <p class="time">3:46</p>
                      </div>
                    </section>-->
                </div>
                <div class="col-md-9 col-sm-9 col-9 col">
                    <div>

                <h5 class="m-4 text-center">{{$courset->course}}</h5>

</div>

<div class="ratio ratio-16x9">
    @if(isset($courset->lesson[0]))
   <iframe id="player" src="https://www.youtube.com/embed/<?=$courset->lesson[0]->video?>" frameborder="0" width="560" height="315"></iframe>
    @else
    <p>NO</p>
    @endif
</div>
<div class="mt-5"></div>

<!--  <ul class="nav nav-tabs" id="myTab" role="tablist">
   <li class="nav-item" role="presentation">
     <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Об этом курсе</button>
   </li>
   <li class="nav-item" role="presentation">
     <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Отзывы</button>
   </li>
   <li class="nav-item" role="presentation">
     <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Участники курса</button>
   </li>
 </ul>
 <div class="tab-content" id="myTabContent">
   <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam deserunt dolorum esse nemo, praesentium provident! Accusantium adipisci assumenda consequuntur dignissimos fugiat harum nam nemo officiis praesentium, quos ullam voluptate!Ex illo iste repellendus! Atque consequatur harum, laborum necessitatibus odit officiis perferendis perspiciatis quibusdam quo voluptate? Architecto, doloribus enim incidunt inventore itaque minima, nisi nobis quas quisquam ratione unde velit.
   </div>
   <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
     <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab blanditiis cupiditate debitis excepturi facere illo ipsam labore nisi non placeat porro, quae quas quia ratione recusandae sapiente ullam vel velit!</span></p>
   </div>
   <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
     <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, blanditiis enim illum ipsam iusto molestias neque obcaecati porro possimus quam quasi repellendus totam voluptatibus? Deserunt dolorem earum nisi odit ut?</span></p>
   </div>

 </div>-->
<div class="mb-3 py-3">
   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</div>

</div>
</div>
</div>
<script src="/assets/js/main.js"></script>
@endsection
