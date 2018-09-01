@extends('layouts.app')
@extends('layouts.sidebar')
@section('content')


 
<div class="col-lg-9  order-lg-1">
       	<display> 
		     <span> طريقة العرض </span>
			 <ul class="list_item">
			
			 <li>    <a  href="{{url('/اقسام-المقالات')}}" class="view">  جميع الاقسام </a></li>
			 <li>    <a  href="{{url('/مقالات')}}" class="view"> الاقسام و المقالات </a></li>
			 </ul>
			</display>
  
                     <section class="articles">
                        <div class="row">
                          @foreach($articles as $post)  
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
					  <?php echo file_get_contents('js/category_ads.js') ?>
                     <div class="pagBox">
                      
                         {{$articles->links('pagination.default')}}
                         
                     </div>
                     </section>
      
   
          <div class="subsc">

                        @include('inc/subsc')

          </div>
           
            
    
                 
</div>



@endsection
