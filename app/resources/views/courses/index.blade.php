@extends('layouts.app')

@section('pageTitle',  "الكورسات المجانية و الدورات التدريبية - منصة معارف")
@section('pageDesc',   "كورسات محاسبة مجانا كورسات كمبيوتر ببلاش كورسات برمجة كورسات اون لاين كورسات مجانا كورسات لغات دورات تدريبية كورسات فى علم النفس كورسات طب كورسات صيدلة كورسات كلية تجارة")

@section('content2')


    <section >
	<div class="container">
	          <div class="courses-section row">
     <div class="col-lg-12">
      
           

    
     </div>

  @if(count($cats) > 0)  
   @foreach($cats as $cat)
    <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
          <a href="/courses/cat/{{$cat->id}}/{{$cat->slug}}"><div class="icon">
             <img src="{{ asset('landingImages/icons') }}/{{$cat->image}}">
          </div>
         <div class="text">
           <h5>
               {{$cat->title}}
               
             </h5>
         </div> </a> 
     </div>
    @endforeach
	 <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
          <a href="{{url('/دورات-تدريبية')}}"><div class="icon">
             <img src="{{ asset('landingImages/icons') }}/043-file-video.png">
          </div>
         <div class="text">
           <h5>
               جميع الكورسات
               
             </h5>
         </div> </a> 
     </div>
	 
  @endif

 

</div>
</div>
	</section>
    <div class="space"></div>
    <section class="white courses-page">
            <div class="container">
      
   
   
                <div class="row">
                
                    <div class="col-lg-12">
					   <div class="sm-space"></div>
                        <h1 class="width text-center title-blue" >خدمات انولدج التعليمية</h1>
                      
                    </div><!--
                    <div class="col-lg-4">
                          <div class="course-service">
                               <img src="{{asset('images/presentation.png')}}">
                               <h4>تواصل مع متخصصين</h4>
                               <div >
                               يمكنك التواصل مع محاضرين متخصصين فى المجال الذى تريده فى الوقت المناسب لك     
                               </div>
                             <a  href="{{url('/courses/cat')}}" class="main-btn-blue ">ابدأ الان</a>
                          </div>
                    </div>!-->
                    <div class="col-lg-4">
                          <div class="course-service">
                               <img src="{{asset('images/book.png')}}">
                               <h4>دورات تعليمية</h4>
                               <div >
                             
                                 كورسات تعليمية فى كافة المجالات<br> 
                                   لتتعلم منها بشكل احترافى مجانى
                                   
                               </div>
                             <a  href="{{url('/courses/cat')}}" class="main-btn-blue ">ابدأ الان</a>      
                          </div>
                    </div>
					 <div class="col-lg-4">
                          <div class="course-service">
                               <img src="{{asset('images/download-course.png')}}">
                               <h4>اتعلم بدون انترنت</h4>
                               <div >
                             
                                 إمكانية تحميل و تنزيل<br> 
                                 الدورات التدريبية بشكل مجاني
                                   
                               </div>
                             <a  href="{{url('/تعليم-مجانا')}}" class="main-btn-blue ">ابدأ الان</a>      
                          </div>
                    </div>
                    <div class="col-lg-4">
                          <div class="course-service">
                               <img src="{{asset('images/tracks.png')}}">
                               <h4>المسارات التعليمية </h4>
                               <div >
                             قبل ان تبدء فى تعلم اى مجال <br>
                                   عليك ان تعرف مسارك التعليمى
                               </div>
                              
                                 <a  href="{{url('/المسارات-التعليمية')}}" class="main-btn-blue ">ابدأ الان</a>
                             
                          </div>
                    </div>
                
                </div>
				  @if(count($cats) > 0 ) 
               <div class="row">
                  <div class="course-search">
                     
                        
                          <div class="form-group">
                             
                               <select name="id"  >
                                   @foreach($cats as $cat)
                                     <option value="{{$cat->id}}">{{$cat->title}}</option>
                                   @endforeach
                              </select> 
                              <a href="courses/cat/{{$cats[0]['id']}}/<?php $arr = explode(' ',$cats[0]['title']);echo implode('-',$arr); ?>" class="main-btn-orange"  >ابدأ التعلم الان</a>
                              
                          </div>
                          
                  
                   </div>
               </div>
			   @endif
            </div>
    </section>
	<section  class="container">
	<div class="space"></div>
	    <h1 class="width text-center title-blue">كورسات اون لاين مجانا</h1>
	    @include('layouts/courses-ladning-page')
	</section>
    

@endsection