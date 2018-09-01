@extends('admin.layouts.app')
@extends('admin.layouts.sidebar')
@extends('admin.layouts.navbar')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
            <div class="col-lg-offset-2 col-lg-8">

         <form method="POST" class="width" enctype="multipart/form-data" action="{{route('updatetrack')}}">
              @csrf
       
                
           <div class="form-group">
                   
                 <input value="{{$tracks->title}}"  class="form-control" name="title">


              </div>
             <div class="form-group">
                   
             <textarea style="min-width:100%;max-width:100%" class="form-control"  name="desc" > 
                 {{$tracks->desc}}
                 </textarea>

              </div>
               <input value="{{$tracks->id}}" type="hidden" class="form-control" name="id">
         
     
                <div class="form-group">
                   
                  <input type="submit"  class="btn btn-primary form-control" >


              </div>
                </form>
                
               
          </div>

     
            </div>
</div>

@endsection	  