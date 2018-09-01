@extends('layouts.app')
@extends('layouts.sidebar')

@section('pageTitle',  "المسارات التعليمية  - منصة معارف")
@section('pageDesc',  "المسار التعليمى هو اهم شئ عليك ان تعلمه قبل البدء فى تعلم مجال معين كمسار الويب ومسار البرمجة بشكل عام و مسار تعلم اللغات و مسار تعلم الكمبيوتر وغيرها من المسارات التعليمية")



@section('content')


<section class="col-lg-9  tracks">
    <div class="container">
           
                    <div class="section">
                           <h1> قم باختار مسارك التعليمى و ابدء الآن  </h1>
                    </div>
        @foreach($tracks as $track)
        <div class="track">
        
            <div class="row">
            
                <div class="col-lg-8">
                
                    <h5>{{$track->title}}</h5>
                </div>
                <div class="col-lg-4">
                    <a href="{{url('tracks/')}}/{{$track->id}}/{{$track->slug}}" class="main-btn-blue" >ابدء الان</a>
                </div>
            </div>
        
        </div>
       @endforeach
        <div class="space"></div>
          <div class="pagBox">
                     
                         {{$tracks->links()}}
                         
                     </div>
           </div>
</section>

@endsection