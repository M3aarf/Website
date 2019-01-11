<?php
use  inoledge\lessons;
use  inoledge\course;
if(!isset($course))
{
	echo "d";
	die();
}
$id = $course->id;
$lessons = lessons::where('course_id',$id)->get();
$course = course::find($id);
$desc = " مشاهدة و تحميل ".$course->title."،  تعلم مجال ،".$course->title." أفضل دورة تدريبية لتعليم  ".$course->title;
$tit = 'بداية تعليم '.$course->title;
?>
@section('style','landing-page.css')
@extends('layouts.app')
@section('pageTitle', $tit )
@section('pageDesc', $desc)
@section('image', $course->image1 )


@section('content2')
<div class="ladning-wrapper webdesign-background">
      <div class="landing-over-black">
	      <h1>تحميل و مشاهدة {{$course->title}}</h1>
	  </div>
</div>


   <div class="landing-content">
                <div class="container">
				      <div class="ladning-details text-center main-border">

					   <div class="row">
					   <div class="col-lg-4 details-mb">
                          <i class="fa fa-usd fa-2x" aria-hidden="true"></i>
						  <div class="text" >مجانا</div>
					   </div>
					   <div class="col-lg-4 border-left border-right details-mb">
                          <i class="fa fa-line-chart fa-2x" aria-hidden="true"></i>
						  <div class="text" >مستوى الكورس اساسيات</div>
					   </div>
					   <div class="col-lg-4 details-mb no-margin">
                          <i class="fa fa-list-alt fa-2x" aria-hidden="true"></i>
						  <div class="text" ><span lang="en">{{count($lessons)}}</span> محاضرة</div>
					   </div>
					 </div>
					  </div>
                      <div class="course-details">
                        <h2 class="course-info-title"> <i class="fa fa-question-circle orange-font" aria-hidden="true"></i>  معلومات عن الكورس
                          </h2>
													<div class="section main-border pad-15 marg-20">

															 تحميل
															 {{$course->title}}
															 ،
															 دروس
															 {{$course->title}}
															 ،
							 تحميل برابط مباشر و مشاهدة
							 {{$course->title}}
															 ،
														{{$course->title}}
											تعليم الاطفال

														، البداية لتعلم

															{{$course->title}}
													</div>
													<br>
                          <div class="course-info main-border">

                              <div class="row">

                                <div class="col-lg-8">
                                  <p>
								  {{$course->desc}}
                                  </p>
                                </div>
                                <div class="col-lg-4">
                                   <img src="{{url('/storage/images/')}}/{{$course->image1}}">
                                </div>
                                  <div class="col-lg-12 text-center">
								    <div class="sm-space"></div>
                                    <a href="{{url('/')}}/course/{{$course->id}}/{{$course->slug}}" class="main-btn-orange">شاهد الكورس و ابدء التعلم مجانا</a>
                                  </div>
                              </div>

                          </div>
                      </div>
					   <div class="course-details">
                        <h2 class="course-info-title"> <i class="fa fa-download orange-font" aria-hidden="true"></i>
                          تحميل الكورس بجودة عالية مجانا
                          </h2>
                          <div class="course-info main-border">

                             <a href="{{url('')}}/youtube/course/{{$course->id}}/تحميل-{{$course->slug}}" style="font-size:25px;text-decoration:underline !important">
                                 لتحميل دروس
								  {{$course->title}}
								  مجانا بجودة عالية اضغط هنا
                            </a>

                          </div>
                      </div>
                      <div class="course-details">
                        <h2 class="course-info-title"> <i class="fa fa-th-list orange-font" aria-hidden="true"></i>
                          ماذا سوف تتعلم داخل الكورس ؟
                          </h2>
                          <div class="course-info main-border">

                              <div class="row">

                                <div class="col-lg-12">

                                <ul style="margin-bottom: 15px;">
                                @foreach($lessons as $lesson)
                               <li>
                                  {{$lesson->title}}
                                 </li>
								@endforeach
                                </ul>
                                </div>
                                  <div class="col-lg-12 text-center">

                                 <a href="{{url('/')}}/course/{{$course->id}}/{{$course->slug}}" class="main-btn-orange">شاهد الكورس و ابدء التعلم مجانا</a>
                                  </div>

                              </div>

                          </div>
                      </div>
                      <div class="course-details">
                        <h2 class="course-info-title"> <i class="fa fa-th-list orange-font" aria-hidden="true"></i>
                        مميزات الكورس
                          </h2>
                          <div class="course-info main-border">

                              <div class="row">

                                <div class="col-lg-12">

                                    <ul>
                                       <li>التسجيل فى الكورس مجانا</li>
                                       <li>لن تحتاج الى اعطاء بيانات دخولك لكى تشاهد الكورس</li>
                                       <li>يمكنك الحصول على شهادة معتمده بعد التواصل معنا</li>
                                       <li>تحميل دروس الكورس بالكامل مجانا بجودة عالية</li>
                                    </ul>
                                </div>
                                  <div class="col-lg-12 text-center">

                                    <a href="{{url('/')}}/course/{{$course->id}}/{{$course->slug}}" class="main-btn-orange">شاهد الكورس و ابدء التعلم مجانا</a>
                                  </div>

                              </div>

                          </div>
                      </div>
                   <div class="row">

                       <div class="col-lg-12 ">
                        <a href="{{url('/courses/cat')}}" class="main-btn-blue no-margin"> للذهاب مباشرة الى قسم الكورسات  اضغط هنا <i class="fa   fa-rocket"></i></a>
                       </div>
                   </div>
			    </div>
   </div>


<div class="space"></div>

@endsection
