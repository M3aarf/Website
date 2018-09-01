@extends('layouts.app')


@section('pageTitle',  "الكورسات المجانية و الدورات التدريبية - منصة معارف")
@section('pageDesc',   "كورسات محاسبة مجانا كورسات كمبيوتر ببلاش كورسات برمجة كورسات اون لاين كورسات مجانا كورسات لغات دورات تدريبية كورسات فى علم النفس كورسات طب كورسات صيدلة كورسات كلية تجارة")



@section('courses')
<div class="container">
<div class="courses-section row">
    
   @foreach($courses as $c)
    <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
          <a href="{{url('/')}}/{{$c->slug}}">
         <div class="text">
           <h5>
               {{$c->title}}
               
             </h5>
         </div> </a>  
     </div>
    @endforeach
	
</div>
 <?php echo file_get_contents('js/category_ads.js') ?>
 <div class="row">
	 <div class="col-lg-12">
	  <div class="sm-space"></div>
	 <div class="pagBox">
	     {{$courses->links('pagination.default')}}
	</div>
	 </div>
	 </div>
</div>
@endsection