@extends('layouts.app')


@section('content')


{!! Form::open(['action' => 'articles@store','method'=>'POST','class'=>'width','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control height','Placeholder'=>'Title'])}}
      
    </div>
    <div class="form-group">
        
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class'=>'form-control','Placeholder'=>'Title'])}}
      
    </div>
      <div class="form-group">
          {{Form::file('image',['class'=>'form-control'])}}
          
      </div>
{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection