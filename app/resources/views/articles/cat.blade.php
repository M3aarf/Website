@extends('layouts.app')
@extends('layouts.sidebar')
   @if($status == '1')
@section('pageTitle', $cat->title)
@section('pageDesc', $cat->desc)
@section('image',  $cat->image)
    @endif
@section('content')


 
<div class="col-lg-9  order-lg-1">
    
    @if($status == '1')
                     <section class="articles">
                        <h3 class="inoledge-box">{{$cat->title}}</h3>
                        <div class="row">
                          @foreach($posts as $post)  
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
                      
                         {{$posts->links('pagination.default')}}
                         
                     </div>
                     </section>
      @else
    
       
       
      @endif
   
          <div class="subsc">

                        @include('inc/subsc')

          </div>
           
            
    
                 
</div>



@endsection
