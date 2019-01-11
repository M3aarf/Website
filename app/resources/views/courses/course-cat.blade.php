
<?php
namespace inoledge\Http\Controllers;

use Illuminate\Http\Request;
use  inoledge\courses;
use  inoledge\course;
$des =$cat->title."، تحميل و مشاهدة ".$cat->title."    ، اقوي كورسات لتعلم مجال ".$cat->title."،   تعليم الاطفال  ".$cat->title."،   اقوي مصدر لتعلم ".$cat->title;

?>
@extends('layouts.app')
 @if($status == '1')
@section('pageTitle',  $cat->title)

@section('pageDesc', $des)
@else
 <?php header('Location: https://www.m3aarf.com'); ?>
@endif

@section('content2')

 @if($status == '1')

     <div class="courses-bg header-course " >


       <div class="container">

           <div class="row">

               <div class="col-lg-12">

                   <div class="courses-container " id="courses-view">

                   <section class="courses ">
				     <h1 class="post_title">{{$cat->title}}</h1>
             <div class="section main-border pad-15 marg-20">
                    {{$des}}
             </div>
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
				       <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/كورسات-مجانا')}}" style="color:#46a6e2">الرئيسة</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/courses/cat')}}" style="color:#46a6e2">الاقسام</a></li>
                                      </ol>
                                    </nav>


                     <div class="row">

                        @foreach($courses as $course)

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

                                  <h3 title="  {{$course->title}}">
                                   {{$course->title}}
                                 </h3>


                             </div>

                              <div class="view-course">
                               <span class="link" >مشاهدة الدورة <i class="fa fa-play"></i></span>
                              </div>
                         </div>
						    </a>
                             </div>

                            @endforeach



                     </div>
					  <?php echo file_get_contents('js/category_ads.js') ?>
					 <div class="row">
					   <div class="col-lg-12">
					   <div class="pagBox">
					   {{$courses->links('pagination.default')}}
						</div>

					   </div>
					 </div>

                    </section>

                   </div>

               </div>

           </div>

       </div>


   </div>
   	 <div class="download-box">
					      <div class="container">
						   <div class="space"></div>
						   <div class="row">
						    <div class="col-lg-3 text-center">
							   <img style='width:200px;' src="{{asset('images/download-course.png')}}">

							</div>
							<div class="col-lg-9">
							  <div class="sm-space"></div>
							  <h3 class="text-right">يمكنك تحميل جميع الدورات التدريبية مجانا وبجودة عالية</h3>
							   <a class="main-btn-blue" href="{{url('/تعليم-مجانا')}}">ابدء التحميل الان</a>
							</div>
						  </div>
						   <div class="space"></div>

						  </div>
					 </div>
      <div class="header-course no-padding">

                           <div class="container">
                               <div class="col-lg-12">
							   <div class="sm-space"></div>
                                   <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/كورسات-مجانا')}}" style="color:#46a6e2">الرئيسة</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/courses/cat')}}" style="color:#46a6e2">الاقسام</a></li>
                                      </ol>
                                    </nav>


                               <p>{{$cat->desc}}</p>
                               </div>
                               <div class="col-lg-7">

                               </div>
                           </div>
   </div>
@else


 <?php header('Location: https://www.m3aarf.com'); ?>

@endif

 <div class="container">
       <div  class="sm-space"></div>
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

</div>

@endsection
