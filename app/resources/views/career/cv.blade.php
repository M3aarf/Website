@extends('layouts.app')
@extends('layouts.sidebar')
@section('pageTitle',  "السيرة الذاتية السى فى  - منصة معارف")
@section('pageDesc', "السيرة الذاتية او ما يعرف بال CV هو من اهم الخطوات و الامور التى تساعدك فى التقديم و القبول فى الوظيفة التى تريد الالتحاق بيها بداخل منصة معارف سوف تتعرف على نصائح كتابة السيرة الذاتية بشكل صحيح")
@section('content')
 
<div class="col-lg-9  order-lg-1">
   
                     <section class="articles panel ">
                       
                        <div class="row">
                         
                          @foreach($articles as $article)  
                             
                            <div class="col-lg-6 col-md-6 ">
                                <div class="panel">
                                     <div class="post " >
                                         <div class="image_articles">
                                           <img alt="{{$article->title}}" title="{{$article->title}}" src="/storage/images/{{$article->image1}}" class="img-responsive">
                                        </div>  
                                         <div class="post_container_home">

                                       <h1 title="{{$article->title}}"> {{$article->title}}</h1>
                                       <p title="{{str_limit(str_replace("&nbsp;", ' ', strip_tags($article->body)), $limit =130, $end = '...')}}">
                                           
                                         {{str_limit(str_replace("&nbsp;", ' ', strip_tags($article->body)), $limit =130, $end = '...')}}
                                       </p>   
                                                <a href="/articles/{{$article->id}}" class="readmore">لقراءة المزيد</a>
                                         </div>    
                                    </div>
                                 </div>
                            </div> 
                              
                          @endforeach    
                           
                     </div>
                  
                  </section>
 
   
<div class="pagBox">
      {{$articles->links()}}
    </div>
     
 
           <div class="subsc">
    
                @include('inc/subsc')

            </div>         
 
</div>



@endsection