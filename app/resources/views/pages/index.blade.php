@extends('layouts.app')
@extends('layouts.sidebar')
@extends('layouts.suggest')
<?php 


?>
@section('content')


              <div class="col-lg-6 order-lg-2">
                 
                        
        @if(count($articles) > 0) 
                  <?php $i=0 ?>
                  
                  @foreach($articles as $article)
               
                <div class="post" >
                       <img alt="{{$article->title}}" title="{{$article->title}}" src="/storage/images/{{$article->image}}" class="img-responsive">
                       <br>
                         <div class="post_cat">
                            <a href="{{url('/مقالات')}}">
                                
                                المقالات
                         
                             </a> / <a href="{{url('/articles/cat/')}}/{{($cat_articles[$i])->id}}">
                             
                            <?php  echo $cat_articles[$i]->title?>
                             
                             </a>
                         </div> 
                    <div class="post_container_home">
                        <h1>{{$article->title}} </h1>
                         <p class="substring">
                             {{str_limit(str_replace("&nbsp;", ' ', strip_tags($article->body)), $limit =130, $end = '...')}}
                          
                       </p>   
                      <a href="{{url('/articles/')}}/{{$article->id}}/{{$article->slug}}" class="readmore">لقراءة المزيد</a>
                   </div>
                   
                </div>
                   <?php $i+=1?>
                  @endforeach
                 <?php echo file_get_contents('js/home_ads.js') ?>
       @endif
     @foreach($courses as $course)    
              <div class="post">
              	<img src="/storage/images/{{$course->image1}}" alt="{{$course->title}}" title="{{$course->title}}">  
                      <div class="post_container_home">
                        <h1>{{$course->title}} </h1>
                         <p class="substring">
                             {{$course->desc}}
                          
                       </p>   
                      <a href="{{url('/course/')}}/{{$course->id}}/{{$course->slug}}" class="readmore">مشاهدة الدورة</a>
                   </div>
              </div> 
              @endforeach
         </div>

@endsection
