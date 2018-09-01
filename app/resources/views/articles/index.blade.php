@extends('layouts.app')
@extends('layouts.sidebar')

 
@section('pageTitle',  "المقالات - منصة معارف")
@section('pageDesc',   "مقالات عن الحياة العملية و إدارة الوقت و حياة ما بعد التخرج و اخبار التكنولوجيا الاختراعات و الاكتشافات وكيفية تعلم اللغات وكل ما يخص الكليات و التخصصات برمجة كمبيوتر حاسب الى الطب و الصيدلة و الهندسة")
@section('keywords',  "مقالات , مقالات عن البرمجة , بداية تعلم البرمجة من الصفر , بداية تعلم اللغات من الصفر , بداية تعلم الكمبيوتر , الحاسب الالى , اخبار التكنولوجيا ")

@section('content')
<?php use inoledge\Http\Controllers\articles; ?>

<div class="col-lg-9  order-lg-1">

         	<display> 
		     <span> طريقة العرض </span>
			 <ul class="list_item">
			
			 <li>    <a  href="{{url('/جميع-المقالات')}}" class="view"> جميع المقالات </a></li>
			 <li>    <a  href="{{url('/اقسام-المقالات')}}" class="view"> جميع الاقسام </a></li>
			 </ul>
			</display>
			 
    @if(count($cats) >= 1)
       @foreach($cats as $cat)
                     <section class="articles panel ">
                        <h3 class="inoledge-box">{{$cat->title}}</h3>
                        <div class="row">
						
                            <?php  $articles = articles::getPostsCat($cat->id);  ?>
                            @foreach($articles as $post)
                            
						
                             
                            <div class="col-lg-6 col-md-6 ">
                                <div class="panel">
                                     <div class="post " >
                                         <div class="image_articles">
                                           <img alt="" title="{{$post->title}}" src="/storage/images/{{$post->image1}}" class="img-responsive">
                                        </div>  
                                         <div class="post_container_home">

                                       <h1 title="{{$post->title}}">{{$post->title}} </h1>
                                       <p>
                                            {{str_limit(str_replace("&nbsp;", ' ', strip_tags($post->body)), $limit =130, $end = '...')}}

                                       </p>   
                                                <a href="/articles/{{$post->id}}/{{$post->slug}}" class="readmore">لقراءة المزيد</a>
                                         </div>    
                                    </div>
                                 </div>
                            </div> 
                              
                             
                            @endforeach
                     </div>
					 <?php echo file_get_contents('js/category_ads.js') ?>
                     <a href="{{url('/articles/cat/'.$cat->id.'/'.$cat->slug)}}" class="more">   للمزيد من المقالات بقسم
                        
                        {{$cat->title}}
                        
                        اضغط هنا</a>
                  </section>
      @endforeach
   
    <div class="pagBox">
      {{$cats->links('pagination.default')}}
    </div>
        @endif
 
           <div class="subsc">
    
                @include('inc/subsc')

            </div>         
 
</div>



@endsection