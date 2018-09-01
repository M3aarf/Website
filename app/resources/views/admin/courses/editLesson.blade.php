@extends('admin.layouts.app')
@extends('admin.layouts.sidebar')
@extends('admin.layouts.navbar')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
            <div class="col-lg-offset-2 col-lg-8">

         <form method="POST" class="width" enctype="multipart/form-data" action="/admin/courses/update/">
              @csrf
          
                
           <div class="form-group">
                   
                 <input value="{{$lesson->title}}"  class="form-control" name="title">

              </div>
        
               <input value="{{$lesson->id}}" type="hidden" class="form-control" name="id">
               <div class="form-group">
                   
                  <input value="{{$lesson->main_link}}" class="form-control" name="link">
              </div>
                <div class="form-group">
                   
                  <input type="submit"  class="btn btn-primary form-control" >


              </div>
                </form>
          </div>
            </div>
</div>

@endsection	  