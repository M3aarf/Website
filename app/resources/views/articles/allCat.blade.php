@extends('layouts.app')
@extends('layouts.sidebar')
@section('pageTitle',  "وجهات سياحية - منصة معارف")
@section('pageDesc',  "الوجهات السياحية و السفر بيهم معلومات كثيرة فى منصة معارف سوف تتعرف على اجمل الوجهات السياحية فى العالم ومميزات كل وجهة سياحية و كيفية الذهاب اليها")
@section('content')

<div class="col-lg-9  order-lg-1">
   	<display> 
		     <span> طريقة العرض </span>
			 <ul class="list_item">
			
			 <li>    <a  href="{{url('/جميع-المقالات')}}" class="view"> جميع المقالات </a></li>
			 <li>    <a  href="{{url('/مقالات')}}" class="view"> الاقسام و المقالات </a></li>
			 </ul>
			</display>
			
                     <section class="articles panel ">
                       
                        <div class="row">
                         
                          @foreach($cats as $cat)  
                             
                            <div class="col-lg-6 col-md-6 ">
                                <div class="panel">
                                     <div class="post " >
                                         <div class="image_articles">
                                           <img alt="{{$cat->title}}" title="{{$cat->title}}" src="/storage/images/{{$cat->image}}" class="img-responsive">
                                        </div>  
                                         <div class="post_container_home">

                                       <h1 title="{{$cat->title}}"> {{$cat->title}}</h1>
                                       <p title="{{str_limit(str_replace("&nbsp;", ' ', strip_tags($cat->desc)), $limit =130, $end = '...')}}">
                                           
                                         {{str_limit(str_replace("&nbsp;", ' ', strip_tags($cat->desc)), $limit =130, $end = '...')}}
                                       </p>   
                                                <a href="{{url('/articles/cat/')}}/{{$cat->id}}/{{$cat->slug}}" class="readmore">لقراءة المزيد</a>
                                         </div>    
                                    </div>
                                 </div>
                            </div> 
                              
                          @endforeach    
                           
                     </div>
                  
                  </section>
 
   <div class="pagBox">
      {{$cats->links('pagination.default')}}
    </div>
     
 
           <div class="subsc">
    
                @include('inc/subsc')

            </div>         
 
</div>



@endsection