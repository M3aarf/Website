@extends('admin.layouts.app')
@extends('admin.layouts.sidebar')
@extends('admin.layouts.navbar')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
            <div class="col-lg-offset-2 col-lg-8">

         <form method="POST" class="width" enctype="multipart/form-data" action="{{route('update_course_cat')}}">
              @csrf
           <div class="form-group text-center">

               <img src="{{url('icons/')}}/{{$cat->image}}" width="50">
            </div>
                
           <div class="form-group">
                   
                 <input value="{{$cat->title}}"  class="form-control" name="title">


              </div>
             <div class="form-group">
                   
             <textarea class="form-control"  name="desc" > 
                 {{$cat->desc}}
                 </textarea>

              </div>
               <input value="{{$cat->id}}" type="hidden" class="form-control" name="id">
               <div class="form-group">
                   
                  <input value="{{$cat->image}}" class="form-control" name="image">


              </div>
                <div class="form-group">
                   
                  <input type="submit"  class="btn btn-primary form-control" >


              </div>
                </form>
          </div>
            </div>
</div>

@endsection	  