<?php

use inoledge\course;
$courses_titles = course::select('slug','title')->orderByRaw("RAND()")->take(18)->get();
?>
	<div class="courses-submenu">
						<div class="container">
							<ul >
							@foreach($courses_titles as $c)
							  <li>
								<a href="{{url('/')}}/{{$c->slug}}">{{$c->title}}</a>
							  </li>
							@endforeach 
                              <li style="background-color:#194a69"> <a href="{{url('/تعليم-مجانا')}}"> للمزيد من الكورسات اضغط هنا </a> </li>							
							</ul>
						</div>
	</div>
