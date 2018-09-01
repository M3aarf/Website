@extends('layouts.app')
@extends('layouts.sidebar')


@section('pageTitle',  $track_name)
@section('pageDesc',  $track_desc)



@section('content')


<section class="col-lg-9  tracks">
           <div class="container">
           
                 <div class="section">
                     <h1>{{$track_name}} </h1>
                  </div>
               @foreach($tips as $indexKey => $tip)
               
                <div class="track_show ">
                     <span>{{$indexKey+1}} </span>
                    {{$tip->body}}
                </div>
                
              @endforeach
              <a href="{{url('المسارات-التعليمية')}}" class="more">اضغط هنا لقراءة المزيد من المسارات التعليمية</a>
           </div>
</section>

@endsection