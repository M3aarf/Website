<?php
 use Illuminate\Http\Request;
use  inoledge\article;
use  inoledge\course;
use  inoledge\tracks;
use  inoledge\courses;
use  inoledge\articlesCat;
use Illuminate\Support\Facades\Storage;

?>

@section('sidebar')
<div class="col-lg-3 order-lg-3 order-md-3 order-sm-2  order-xs-2    ">
    <div class="">
<div class="">
             <div class="panel-header">
                         <h2>المقالات  <i class="fa fa-angle-down"></i> </h2>
                </div>
            <div class="tab-content">
            <div id="home" class="  ">
                    <?php $articles =article::latest('created_at')->get()->take(5);?>
              @if(count($articles) > 0 )
                    @foreach($articles as $article)
                <a href="/articles/{{$article->id}}/{{$article->slug}}"> <h3>{{$article->title}}</h3></a>
                    @endforeach
              @endif    
               </div>
            </div>    
			<?php echo file_get_contents('js/sidebar_ads.js') ?>
			<div style="padding:4px;"></div>
               <div class="panel-header">
                         <h2> السفر <i class="fa fa-angle-down"></i> </h2>
                </div>
                <div class="tab-content">
               <div id="menu1" class="  ">
                       <?php $articles =article::where('catID',38)->orWhere('catID',37)->orWhere('catID',36)->get()->take(5) ?>
              @if(count($articles) > 0 )
                    @foreach($articles as $article)
                <a href="/articles/{{$article->id}}/{{$article->slug}}"> <h3>{{$article->title}}</h3></a>
                    @endforeach
              @endif 
                </div>
                </div>
                <?php echo file_get_contents('js/sidebar_ads.js') ?>
				<div style="padding:4px;"></div>
                 <div class="panel-header">
                         <h2> الحياة العملية <i class="fa fa-angle-down"></i> </h2>
                </div>
                 <div class="tab-content">
                 	   <div id="menu3" class="  ">    
                    <?php $articles =article::where('catID',34)->orWhere('catID',35)->get()->take(5) ?>
              @if(count($articles) > 0 )
                    @foreach($articles as $article)
                <a href="/articles/{{$article->id}}/{{$article->slug}}"> <h3>{{$article->title}}</h3></a>
                    @endforeach
              @endif 
                </div>
                 </div>
                <?php echo file_get_contents('js/sidebar_ads.js') ?>
				<div style="padding:4px;"></div>
                    <div class="panel-header">
                         <h2> المسارات التعليمية <i class="fa fa-angle-down"></i> </h2>
                </div>
                 <div class="tab-content">
                 	   <div id="menu3" class="">    
                    <?php $articles =tracks::all()->take(5); ?>
              @if(count($articles) > 0 )
                    @foreach($articles as $article)
                <a href="/tracks/{{$article->id}}/{{$article->slug}}"> <h3>{{$article->title}}</h3></a>
                    @endforeach
              @endif 
                </div>
                 </div>
      
        <div class="panel">
		
                <div class="panel-header">
                         <h2>دورات تدريبية مجاناً</h2>
                </div>
          
                <div class="panel-content">
                    @foreach(courses::all()->take(10) as $cat)
                      
                    <a  data-placement="top" title="{{$cat->title}}" data-toggle="popover" data-trigger="hover" data-content="{{count(course::where('cat_id',$cat->id)->get())}}"  href="{{url('courses/cat/')}}/{{$cat->id}}/{{$cat->slug}}"><span class="tag">{{$cat->title}}</span></a>
                    
                    @endforeach
                </div>
        </div>
</div>
</div>
    </div>
@endsection