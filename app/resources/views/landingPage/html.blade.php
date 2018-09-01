<?php
use  inoledge\lessons;
use  inoledge\course;
$lessons = lessons::where('course_id','23')->get();
$course = course::find('23');
?>
@section('style','landing-page.css')
@extends('layouts.app')
@section('pageTitle',  $course->title)
@section('pageDesc',  $course->desc)
@section('image', $course->image )


@section('content2')
<div class="ladning-wrapper webdesign-background">
      <div class="landing-over-black">
	      <h1>{{$course->title}}</h1>
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
                                    <a href="{{url('/')}}/course/{{$course->id}}/{{$course->slug}}" class="main-btn-orange">ابدء اتعلم الان مجانا</a>
                                  </div>
                              </div>
                          
                          </div>
                      </div>
                      <div class="course-details">
                        <h2 class="course-info-title"> <i class="fa fa-th-list orange-font" aria-hidden="true"></i>
                          ماذا سوف تتعلم داخل الكورس ؟
                          </h2>
                          <div class="course-info main-border">
                          
                              <div class="row">
                                  
                                <div class="col-lg-12">
                                    
                                <table style="margin-bottom: 15px;">  
                                @foreach($lessons as $lesson)
                                 <tr>
								 <td>-</td>
								 <td>
                                  {{$lesson->title}}
                                 <td>
								 </tr>
								@endforeach
                                </table>  
                                </div>
                                  <div class="col-lg-12 text-center">
                                
                                    <a href="{{url('/')}}/course/{{$course->id}}/{{$course->slug}}" class="main-btn-orange">ابدء اتعلم الان مجانا</a>
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
                                    </ul>
                                </div>
                                  <div class="col-lg-12 text-center">
                                
                                    <a href="{{url('/')}}/course/{{$course->id}}/{{$course->slug}}" class="main-btn-orange">ابدء اتعلم الان مجانا</a>
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