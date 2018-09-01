@extends('layouts.app')


@section('content')


{!! Form::open(['action' => ['articles@update',$post->id],'method'=>'POST','class'=>'width','enctype'=>'multipart/form-data']) !!}
   <div class="form-group">
        
       <img src="/storage/images/{{$post->image}}" width="100">
    </div>
    <div class="form-group">
        
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=>'form-control height','Placeholder'=>'Title'])}}
      
    </div>
  
    <div class="form-group">
        
        {{Form::label('body','Body')}}
        {{Form::textarea('body',$post->body,['class'=>'form-control','Placeholder'=>'Title'])}}
      
    </div>
    <div class="form-group">

              {{Form::label('body','Body')}}
              <select class="form-control" name="cat_id">
                  <option value="{{$article_cat->id}}">{{$article_cat->title}}</option>
                @foreach($cats_select as $cat)
                  <option value="{{$cat->id}}">{{$cat->title}}</option>
                @endforeach
              </select>
    </div>
      <div class="form-group">
          {{Form::file('image',['class'=>'form-control'])}}
          
      </div>
 {{Form::hidden('_method','PUT')}}
{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection