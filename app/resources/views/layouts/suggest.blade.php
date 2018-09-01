<?php
use   Illuminate\Http\Request;
use   inoledge\course;
use   Illuminate\Support\Facades\Storage;

?>

@section('suggest')

              <div class="col-lg-3 order-lg-1 order-md-1 order-sm-3  order-xs-3  ">
                <div>           
                  <div class="panel stickyy">
                  
                     <div class="panel-header">
                         <h2>ابدء اتعلم الآن</h2>
                     </div>
                     <div class="panel-content">
                         @foreach(course::latest('created_at')->get()->take(8) as $course)
                         <div class="sug">
                             
                             <a href="{{url('/course/')}}/{{$course->id}}/{{$course->slug}}">
                                
                             <img src="/storage/images/{{$course->image1}}" alt="{{$course->title}}">
                             <h6>{{$course->title}}</h6></a>
                         </div>
                         @endforeach
                     </div>
                
                  </div>
                    
              </div>
			  <div class="ads-container">
                  <div style="height:3500px;" class="ads-home" >
                    <div class="panel stickyy">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- suggest_menu -->
					<ins class="adsbygoogle adsSuggest"
						 style="display:block"
						 data-ad-client="ca-pub-7381615423486585"
						 data-ad-slot="7575211611"
						 data-ad-format="auto"
						 data-full-width-responsive="true"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
					
					
                      </div>
                  </div>
                  <div style="height:3500px;" class="ads-home">
                    <div class="panel stickyy">
                     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- suggest_menu -->
						<ins class="adsbygoogle adsSuggest"
							 style="display:block"
							 data-ad-client="ca-pub-7381615423486585"
							 data-ad-slot="7575211611"
							 data-ad-format="auto"
							 data-full-width-responsive="true"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
                      </div>
                  </div>
                  <div style="height:3500px;" class="ads-home">
                    <div class="panel stickyy">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- suggest_menu -->
							<ins class="adsbygoogle adsSuggest"
								 style="display:block"
								 data-ad-client="ca-pub-7381615423486585"
								 data-ad-slot="7575211611"
								 data-ad-format="auto"
								 data-full-width-responsive="true"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
                      </div>
                  </div>
                  
                  </div>
				</div>  
@endsection