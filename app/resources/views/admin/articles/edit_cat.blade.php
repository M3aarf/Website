@extends('admin.layouts.app')
@extends('admin.layouts.sidebar')
@extends('admin.layouts.navbar')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
            <div class="col-lg-offset-2 col-lg-8">
    {!! Form::open(['action' => ['category_post@update',$cat->id],'method'=>'POST','class'=>'width','enctype'=>'multipart/form-data']) !!}
           <div class="form-group">

               <img src="/storage/images/{{$cat->image}}" width="100">
            </div>
                
            <div class="form-group">

                {{Form::label('title','العنوان')}}
                {{Form::text('title',$cat->title,['class'=>'form-control height','Placeholder'=>'Title'])}}

            </div>
             <div class="form-group">

                {{Form::label('des','وصف القسم')}}
                {{Form::textarea('desc',$cat->desc,['class'=>'form-control height','Placeholder'=>'Title'])}}

            </div>

     
               <div class="form-group">
              {{Form::file('image',['class'=>'form-control'])}}

              </div>
     {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
          </div>
            </div>
</div>

@endsection	  