@extends('admin.layouts.app')
@extends('admin.layouts.sidebar')
@extends('admin.layouts.navbar')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
            <div class="col-lg-offset-2 col-lg-8">

         <form method="POST" class="width" enctype="multipart/form-data" action="{{route('update_course')}}">
              @csrf
           <div class="form-group text-center">

               <img src="{{url('/storage/images/')}}/{{$course->image}}" width="50">
            </div>
                
           <div class="form-group">
                   
                 <input value="{{$course->title}}"  class="form-control" name="title">


              </div>
                 <div class="form-group">
                   
                 <input  class="form-control" name="image" type="file">


              </div>
             <div class="form-group">
                   
             <textarea class="form-control"  name="desc" > 
                 {{$course->desc}}
                 </textarea>

              </div>
               <input value="{{$course->id}}" type="hidden" class="form-control" name="id">
           
             <select class="form-control" name="cat_id">
                  <option value="{{$course_cat->id}}">{{$course_cat->title}}</option>
                @foreach($cats_select as $cat)
                  <option value="{{ $cat->id}}">{{ $cat->title}}</option>
                @endforeach
             </select> 
                <div class="form-group">
                   
                  <input type="submit"  class="btn btn-primary form-control" >


              </div>
                </form>
                
               
          </div>

     
            </div>
</div>

@endsection	  