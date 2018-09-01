<div class="col-lg-3 order-lg-3 order-md-3 order-sm-2  order-xs-2    ">
    <div>
<div class="">
        <ul class="nav nav-tabs">
                <li><a data-toggle="tab" href="#home">الاحدث</a></li>
                <li><a data-toggle="tab" href="#menu1">الاشهر</a></li>
                <li><a data-toggle="tab" href="#menu2">الاقسام</a></li>
                <li><a data-toggle="tab" href="#menu3">عشوائى</a></li>
        </ul>

        <div class="tab-content">
                <div id="home" class="tab-pane fade in active show">
                    <?php $articles =article::all()->take(15) ?>
              @if(count($articles) > 0 )
                    @foreach($articles as $article)
                <a href="/articles/{{$article->id}}/{{$article->slug}}"> <h3>{{$article->title}}</h3></a>
                    @endforeach
              @endif    
               </div>
                <div id="menu1" class="tab-pane fade">

                </div>
                <div id="menu2" class="tab-pane fade">
                   <?php $cats =articlesCat::all()->take(15) ?>
                  @if(count($cats) > 0 )
                        @foreach($cats as $cat)
                    
                    <a href="/articles/cat/{{$cat->id}}/{{$cat->slug}}"> <h3>{{$cat->title}}</h3></a>
                        @endforeach
                  @endif 

                </div>
                <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
        </div>

        <div class="panel">
                <div class="panel-header">
                         <h2>كلمات دلالية</h2>
                </div>
                <div class="panel-content">
                    <span class="tag">الهندسة</span>
                    <span class="tag">التجارة</span>
                    <span class="tag">فنون</span>
                    <span class="tag">البرمجة</span>
                    <span class="tag">تصميم</span>
                    <span class="tag">الهندسة</span>
                    <span class="tag">التجارة</span>
                    <span class="tag">فنون</span>
                    <span class="tag">البرمجة</span>
                    <span class="tag">تصميم</span>
                </div>
        </div>
</div>
</div>
    </div>