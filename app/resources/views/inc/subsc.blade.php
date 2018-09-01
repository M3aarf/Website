<!--
<div class="subsc-box">

    
    <div class="content ">
       
           {!! Form::open(['method'=>'POST','style="padding-top:35px;width:100%"','class'=>'width table ','enctype'=>'multipart/form-data']) !!}
         
            <span class="icon table-cell">

                 <i class="fa fa-envelope"></i>

            </span>
            <div class="form-group table-cell " style="width:100%">

               
                {{Form::text('title','',['class'=>'form-control height   ','style="width:100%;border-radius:unset;margin-bottom:0px;"','Placeholder'=>'اكتب بريدك الاكترونى هنا'])}}

            </div>

         {{Form::hidden('_method','PUT')}}
        {{Form::submit('اشترك',['class'=>'btn btn-primary subsc-btn table-cell'])}}
        {!! Form::close() !!}
        
        
            <div class="title ">

                <h6>اشترك الان لتصلك (المقالات - الكورسات - المنح ) وكل جديد بالموقع</h6>

            </div>
    </div>

</div>
!-->