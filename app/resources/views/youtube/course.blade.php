@extends('layouts.app')
@extends('layouts.sidebar')
<?php

$c_title = 'تحميل '.$course->title;
$c_id = $course->id;
$c_desc =$c_title." ، دروس ".$c_title." ، تحميل برابط مباشر و مشاهدة ".$c_title." ، تعليم الاطفال ".$c_title." ، البداية لتعلم ".$c_title." ، ".$c_title." ، تحميل كورس ".$c_title;
$c_img = $course->image;

?>
@section('pageTitle',  $c_title)
@section('pageDesc',   $c_desc)
@section('image',  $c_img)


@section('content')

<div class="col-lg-9">

<h1 class="post_title">{{$c_title}}</h1>
<div class="section main-border pad-15 marg-20">
{{$c_desc}}
</div><br>
<a href="{{url('/course')}}/{{$c_id}}/{{$course->title}}"><h4>لمشاهدة الكورس مباشر بدون تحميل اضغط هنا <h4></a>
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
<ul>

@foreach($lessons as $lesson)


<li>
<div class="row main-box">

	<div class="col-sm-8">
	<h3 class="lesson-download-title">
	{{$lesson->title}}
	</h3>
	</div>
	<div class="col-sm-4 text-center">

	<a class="main-btn-blue no-margin" target="_blank" href="{{url('/')}}/youtube/{{$c_id}}/lesson/{{$lesson->link}}">تحميل الدرس</a>

	</div>
</div>
</li>

@endforeach
</ul>

</div>

@endsection
