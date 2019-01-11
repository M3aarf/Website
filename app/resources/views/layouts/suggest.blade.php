<?php
use   Illuminate\Http\Request;
use   inoledge\course;
use   Illuminate\Support\Facades\Storage;
$courses = course::all()->take(37);
?>

@section('suggest')

              <div class="col-lg-3 order-lg-1 order-md-1 order-sm-3  order-xs-3  ">
                <div>
                  <div class="panel stickyy">

                     <div class="panel-header">
                         <h2>ابدء اتعلم الآن</h2>
                     </div>
                     <div class="panel-content">
                         @foreach(course::latest('created_at')->get()->take(8) as $course)
                         <div class="sug">

                             <a href="{{url('/course/')}}/{{$course->id}}/{{$course->slug}}">

                             <img src="/storage/images/{{$course->image1}}" alt="{{$course->title}}">
                             <h6>{{$course->title}}</h6></a>
                         </div>
                         @endforeach
                     </div>

                  </div>

              </div>
			  <div class="ads-container">
          @foreach($courses as $c)
           <div class="item ">
                 <a href="{{url('/')}}/{{$c->slug}}">
                <div class="tab-content">
                  <h3>
                      {{$c->title}}

                    </h3>
                </div> </a>
            </div>
           @endforeach
                  </div>
				</div>
@endsection
