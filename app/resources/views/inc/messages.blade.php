
@if(count($errors) > 0)

    @foreach($errors->all() as $error)
               
        <div class="alert alert-danger text-center" dir="rtl">

            {{$error}}
                 
        </div>  

    @endforeach
 
@endif
@if(session('error'))
     <div class="alert alert-danger text-center" dir="rtl">
           {{session('error')}}
     </div>
@endif
@if(session('success'))
     <div class="alert alert-success text-center" dir="rtl" >
           <span class="direction:rtl">{{session('success')}}</span>
     </div>
@endif
