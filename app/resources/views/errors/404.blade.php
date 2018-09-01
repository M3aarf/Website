@extends('layouts.app')

@section('content')

<div class="col-lg-6 ino-box">
<h1 class="text-center width p404 highlight">404</h1>
  
<h2 class="text-center width ">الصفحة التى تبحث عنها غير موجودة </h2>
  
<h3 class="text-center width ">
    
سوف يتم توجيهك خلال 3 ثوانى الى الصفحة الرئيسية
    </h3>
</div>
<div class="col-lg-6 ino-box">
<div class="text-center">    
<img class="text-center space " style="max-width:100%" src="{{asset('images/404.png')}}">
</div>  
</div>
<script>

     window.setTimeout(function(){

        
        window.location.href = "https://www.m3aarf.com/";

    }, 5000);

</script>
<!--
<div class="col-lg-12">
    <form>
<div class="search-box">    

    <div class="row">
        <div class="col-lg-2 margin-none">
          <button class="btn btn-success width search-btn " type="submit">ابحث</button>
        </div>
        <div class="col-lg-10 margin-none">
          <div class="form-group search-input">
              <input type="text" class="form-control  search-input" id="usr">
          </div>
        </div>
    </div>
 
</div>
</form>        
</div> !-->   
<div class="col-lg-12">

<div class="space"></div>
<div class="space"></div>
</div>
@endsection('content')