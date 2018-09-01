@extends('admin.layouts.app')
@extends('admin.layouts.sidebar')
@extends('admin.layouts.navbar')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
            <div class="col-lg-12"> <h1 class="text-center">{{$track->title}}</h1><div class="space"></div></div>
            <div class="col-lg-6 " id="form_add">
        
                 
                 <form method="POST" class="width" enctype="multipart/form-data" action="  /admin/tracks/addtips">
              @csrf
       
       
             <div class="form-group">
                   
             <textarea style="min-width:100%;max-width:100%;height:100px;" class="form-control"  name="desc" > 
                 
                 </textarea>

              </div>
               <input value="{{$track->id}}" type="hidden" class="form-control" name="track_id">
         
     
                <div class="form-group">
                   
                  <input type="submit" value="إضافة"  class="btn btn-primary form-control" >


              </div>
                </form>
                
               
           </div>
        <div class="col-lg-6">
                
                   <ul class="timeline">
                    @foreach($tips as $tip)
                       <li id="tip{{$tip->id}}">{{$tip->body}}
                       
                           <div class="form">
                              <a href="{{url('/admin/tips/edit/')}}/{{$tip->id}}"><i class="fa fa-pencil"></i></a>
                              <i onclick="delete_tip({{$tip->id}})"   class="fa fa-trash"></i>
                           </div>
                       
                       </li>
                    @endforeach
                    </ul>
            
            </div>
     
            </div>
</div>

@endsection	  