@extends('layouts.app')

@section('pageTitle',  "الكورسات المجانية و الدورات التدريبية - منصة معارف")
@section('pageDesc',   "مجانا كورسات كمبيوتر ببلاش كورسات برمجة كورسات اون لاين كورسات مجانا كورسات لغات دورات تدريبية كورسات فى علم النفس كورسات طب كورسات صيدلة كورسات كلية تجارة")

@section('content2')
<div class="container">
       <div class="sm-space">
	   </div>
	   <h1 class="width text-right title-blue">كورسات اون لاين مجانا</h1>
            <div class="row">
           
               <div class="col-lg-12">
               
                   <div class="courses-container">
                   
                     
                   <section class="courses">
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
		   
	     <div class="sm-space">
	   </div>
	   
</div>

@endsection