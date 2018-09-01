@extends('layouts.app')
@extends('layouts.sidebar')
<?php

$c_title = 'تحميل '.$course->title;
$c_id = $course->id;
$c_desc = 'تحميل  تنزيل '.$course->desc;
$c_img = $course->image; 

?>
@section('pageTitle',  $c_title)
@section('pageDesc',   $c_desc)
@section('image',  $c_img)


@section('content')

<div class="col-lg-9">

<h1 class="post_title">{{$c_title}}</h1>
<a href="{{url('/course')}}/{{$c_id}}/{{$c_title}}"><h4>لمشاهدة الكورس مباشر بدون تحميل اضغط هنا <h4></a>
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

