<?php

use Illuminate\Http\Request;
use  inoledge\article;
use  inoledge\articlesCat;
use Illuminate\Support\Facades\Storage;
?>
@extends('layouts.app')
@extends('layouts.sidebar')
<!-- Meta Tags !-->
@if($status == '0')



@endif
 @if($status == '1')
@section('pageTitle',  $post->title)
@section('pageDesc',   str_limit(str_replace("&nbsp;", ' ', strip_tags($post->body)), $limit =150, $end = '...'))
@section('keywords',  $post->keywords)
@section('image',  $post->image)
@else
 <?php header('Location: https://www.m3aarf.com'); ?>
@endif
<?php
function insertAd($content, $ad, $pos = 0){
  // $pos = 0 means randomly position in the content
  $count = substr_count($content, "<p>");
  $pos = rand(0,$count-1);
  if($count == 0  or $count <= $pos){
	  return $content;

  }
  else{
    if($pos == 0){
      $pos = rand (1, $count - 1);
    }
    $content = preg_replace('/<p>/', '<hrd>', $content, $pos + 1);
    $content = preg_replace('/<hrd>/', '<p>', $content, $pos);
    $content = str_replace('<hrd>', $ad . "\n<p>", $content);
    return $content;
  }
}


 ?>
@section('content')


           <div class="col-lg-9  ">
                       @if($status == '1')
						                          <h1 class="post_title" title="{{$post->title}}">

                               {{$post->title}}


                     </h1>

				   <div class="section main-border pad-15">
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
                   <div >
                  <nav aria-label="breadcrumb ">
							<ol class="breadcrumb color  main-border">
							<li class="breadcrumb-item color"><a class="color" href="{{url('')}}"><i style="color:#72b2e2;margin-left: 5px;" class="fa fa-home"></i>الرئيسة</a></li>
							<li class="breadcrumb-item color"><a class="color" href="{{url('')}}/مقالات">الاقسام</a></li>
							<li class="breadcrumb-item color"><a class="color" href="{{url('/articles/cat/'.$cat->id)}}/{{$cat->slug}}">{{$cat->title}}</a></li>
							</ol>
							</nav>
                    </div>
               <div style="margin-top:10px;" >
                    @if(!Auth::guest())
                <a href="/admin/articles/edit/{{$post->id}}" class="main-btn-orange">Edit</a>
                {!!Form::open(['action' => ['articles@destroy',$post->id],'method' => 'POST' ])!!}
                     {{Form::hidden('_method','DELETE')}}
                     {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
                    @endif
                   </div>
                 <div class="post_container">



                       <img title="{{$post->title}}" class="post_main_image" src="/storage/images/{{$post->image}}">
                       <div class="post_content">
                           <div class="row">
                               <div class="col-lg-3 ">
                                   <div class="related_posts_side ">
                                       <span class="highlight">مواضيع ذات صلة</span>
                                       <ul>
                                           @foreach($related as $art)
                                         <a href="{{url('/articles')}}/{{$art->id}}/{{$art->slug}}"><li><div class="text">
                                                {{$art->title}}
                                            </div>
                                         </li></a>

                                           @endforeach
                                       </ul>
                                   </div>

                               </div>
                               <div class="col-lg-9 ">
                                   <div class="content">
                                   {!!insertAd($post->body,file_get_contents('js/ads_in_article.js'),0)!!}
                                   </div>
      <?php echo file_get_contents('js/ads_in_article.js') ?>

								   </div>
                           </div>
                           <br>
						   <a href="https://www.facebook.com/m3aarfcom" class="main-btn-blue"> <h5> ليصلك منشورتنا وكل جديد على الفيس بوك اضغط هنا </h5></a>
						   <br>
                 <ul  id="breadcrumb">
                  <li><a href="/"><span style="line-height:40px;" class="fa fa-home fa-2x"> </span></a></li>
                  <li><a href="/مقالات"><span class="title">المقالات</span> </a></li>
                  <li><a href="{{url('/articles/cat/'.$cat->id)}}/{{$cat->slug}}"><span class="title">{{$cat->title}}</span> </a></li>

                </ul>
                     </div>

                 </div>

                  @else


                 @endif
				 <related>
				 <h2 class="title-border">اقرأ ايضا</h2>
				    <div class="row">
                          @foreach($related as $post)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                     <a href="{{url('/articles/'.$post->id.'/'.$post->slug)}}"><div class="ar_category_post " >
                                         <div class="image_articles">
                                           <img alt="   {{$post->title}}" title="" src="/storage/images/{{$post->image1}}" class="img-responsive">
                                        </div>
                                         <div class="cat_post">

                                       <h4 title="  {{$post->title}}">
                                          {{$post->title}} </h4>

                                         </div>
                                </div></a>
                            </div>
                          @endforeach
                     </div>
					 </related>

                                   <div class="subsc">

                        @include('inc/subsc')

                    </div>

 @if($status == '1')
	 <?php $i = count($related); $r = rand(2,$i-1) ?>


	 @if($i > 2)

   	    <a href="{{url('/articles')}}/{{($related[$r])->id}}/{{($related[$r])->slug}}">

			<div class="suggest_article">


			 {{($related[$r])->title}}

			  </div>
		  </a>
	@else
		 <a href="{{url('/articles')}}/{{($related[0])->id}}/{{($related[0])->slug}}">

			<div class="suggest_article">

			 {{($related[0])->title}}

			  </div>
		  </a>
    @endif

  @endif
           </div>







@endsection
