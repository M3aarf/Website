@extends('layouts.app')


@section('pageTitle',  "الكورسات المجانية و الدورات التدريبية - منصة معارف")
@section('pageDesc',   "كورسات محاسبة مجانا كورسات كمبيوتر ببلاش كورسات برمجة كورسات اون لاين كورسات مجانا كورسات لغات دورات تدريبية كورسات فى علم النفس كورسات طب كورسات صيدلة كورسات كلية تجارة")



@section('courses')
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
 <?php echo file_get_contents('js/category_ads.js') ?>
    <div class="container">
        <div class="space"></div>
    @include('inc/subsc')
        </div>
</div>
@endsection