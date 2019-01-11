@extends('layouts.app')
@extends('layouts.sidebar')
<?php
$des = $cat->title." ، ".$cat->title." ".$course->title." ، ".$course->title." ".$cat->title." ، تحميل ".$cat->title." ، تحميل ".$course->title." ، دروس ".$course->title." ، تحميل برابط مباشر و مشاهدة ".$course->title."  تعليم الاطفال ".$cat->title;
 ?>
@if($status == '1')
@section('pageTitle',  $course->title)
@section('pageDesc',  $des)
@section('image',  $course->image1)
@endif
<?php $id = $course->id;

$desc = $course->desc; ?>
@section('courses')
       <div class="course-header ">
           <div class="container color">
                @if($status =='1')
					 <h1 class="course-view-title"> {{$course->title}}</h1>
				   <div class="section main-border pad-15 marg-20">
				   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar_ads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7381615423486585"
     data-ad-slot="9355923496"
     data-ad-format="link"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
				   </div>

           <div class="section main-border pad-15 marg-20">
              {{$des}}
           </div>
                 <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb color">
                                        <li class="breadcrumb-item color"><a class="color" href="{{url('/كورسات-مجانا/')}}"><i style="color:#72b2e2;margin-left: 5px;" class="fa fa-home"></i>الرئيسة</a></li>
                                        <li class="breadcrumb-item color"><a class="color" href="{{url('/courses/cat')}}">الاقسام</a></li>
                                        <li class="breadcrumb-item color"><a class="color" href="{{url('/courses/cat')}}/{{$cat->id}}/{{$cat->slug}}">{{$cat->title}}</a></li>
                                      </ol>
                                    </nav>


                @else
                @endif
            </div>

        </div>

   @if($status =='1')
 <div class="container course-playlist">


               <div class="row">
                             <div class="col-lg-8 order-lg-2">

                        <div class=" iframe">
                              <iframe id="lesson" height="100%" width="100%" src="https://www.youtube.com/embed/{{$lessons[0]['link']}}/modestbranding=1" frameborder="0" allowfullscreen=""></iframe>
                       </div>


                       </div>

                   <div class="col-lg-4">

                       <div class="section playlist ">
                          <ul>

                              @foreach($lessons as $lesson)

                              <li id="les{{$lesson->id}}" onclick="play('{{$lesson->id}}','{{$lesson->link}}')" > {{$lesson->title}}</li>
                              @endforeach
                          </ul>

                       </div>

                   </div>

               </div>
               <div class="row">

               	         <div class="col-lg-12">
                  	   <div class="sm-space"></div>

					      <div class="section main-border pad-15 marg-20">
				   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar_ads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7381615423486585"
     data-ad-slot="9355923496"
     data-ad-format="link"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
				   </div>
					    <div class="sm-space"></div>
						<div class="main-box no-margin">

						  <h2><i class="fa fa-download text-success"></i> <a href="{{url('youtube/course/')}}/{{$id}}/{{$course->slug}}"><span>لتحميل الكورس بجودة عاليه ومشاهدته بدون انترنت اضغط هنا</span></a></h2>

						</div>
					    <div class="sm-space"></div>

                       <div class="realted-courses courses ">

           <div class="row">
                        @foreach ($courses  as $course)
						  @if($course->id != $id )
                               <div class="col-lg-3 col-md-6 ">
						  <a href="{{url('/')}}/course/{{$course->id}}/{{$course->slug}}">
                             <div class="course">

                                <div class="media-course">
                               <img title="  {{$course->title}}" src="/storage/images/{{$course->image}}">
                                <div class="overblue">
                                <i class="fa fa-play fa-3x"></i>
                                 </div>

                               </div>

                             <div class="content">

                                  <h4 title="  {{$course->title}}">
                                   {{$course->title}}
                                 </h4>


                             </div>

                              <div class="view-course">
                               <span class="link" >مشاهدة الدورة <i class="fa fa-play"></i></span>
                              </div>
                         </div>
						    </a>
                             </div>
							 @endif
                           @endforeach

                           </div>

                  </div>
				        <script>

                               function play(id,link)
                               {
                                   $(".playlist ul li").each(function()
							        {
							             $(this).removeClass("active-lesson");
							        });
                                    src = "https://www.youtube.com/embed/"+link+"";
                                   document.getElementById('lesson').src = src;
                                   if(window.innerWidth < "768")
                                   {
                                   	   $("html, body").animate({ scrollTop:150},400);
                                   }
                                   else
                                   {
                                   	 $("html, body").animate({ scrollTop:322},400);
                                   }
                                   $("#les"+id+"").addClass("active-lesson");
                               }

                           </script>
						    <h3>وصف الكورس</h3>
				       <div class="course-desc">



                           <p>
                              {{$desc}}
                           </p>

                       </div>
               </div>


               </div>

</div>
@endif
<div class="space"></div>

@endsection
