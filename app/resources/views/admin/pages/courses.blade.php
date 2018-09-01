@extends('admin.layouts.app')
@extends('admin.layouts.sidebar')
@extends('admin.layouts.navbar')
@section('content')




<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">الكورسات </li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">الكورسات</h1>
			</div>
		</div>

		<div class="row">
            
            <div class="col-lg-6">
                
                <div class="panel panel-default articles">
					<div class="panel-heading">
						عرض الاقسام
               
						<span class="pull-right clickable panel-toggle panel-button-tab-left  panel-collapsed"><em class="fa fa-toggle-down"></em></span></div>
                        <div class="panel-body articles-container" style="display: none;">
                             <table id="cats_courses" class="table table-hover table-condensed" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%"  align="right"  style="text-align:right" >رقم</th>
                                        <th width="30%" align="right" style="text-align:right">العنوان</th>
                                        <th width="15%" align="right" style="text-align:right">مشاهدات</th>
                                        <th width="10%" align="right" style="text-align:right">عدد الكورسات</th>
                                        <th width="40%" align="right" style="text-align:right">التحكم</th>
                                    </tr>
                                </thead>
                              </table>
                        </div>
				</div><!--End .articles-->
            
                      <div class="panel panel-default articles">
					<div class="panel-heading">
						عرض الكورسات
               
						<span class="pull-right clickable panel-toggle panel-button-tab-left  panel-collapsed"><em class="fa fa-toggle-down"></em></span></div>
                        <div class="panel-body articles-container" style="display: none;">
                             <table id="courses" class="table table-hover table-condensed" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%" align="right" style="text-align:right">رقم</th>
                                        <th width="30%" align="right" style="text-align:right">العنوان</th>
                                        <th width="10%" align="right" style="text-align:right">مشاهدات</th>
                                        <th width="20%" align="right" style="text-align:right">قسم</th>
                                        <th width="35%" align="right" style="text-align:right">التحكم</th>
                                    </tr>
                                </thead>
                              </table>
                        </div>
				</div><!--End .articles-->
            
            </div>
            <div class="col-lg-6"> 
        

			         <div class="panel panel-default ">
               <div class="panel-heading">
                 إنشاء قسم 
                   <span class="pull-right clickable panel-toggle panel-button-tab-left panel-collapsed"><em class="fa fa-toggle-down"></em></span>
               </div>
          <div class="panel-body" style="display:none">
                        {!! Form::open(['action' => 'admin\adminCourses@createcat','method'=>'POST','class'=>'width','enctype'=>'multipart/form-data']) !!}
                            <div class="form-group">

                                {{Form::label('title','Title')}}
                                {{Form::text('title','',['class'=>'form-control height','Placeholder'=>'Title'])}}

                            </div>
                            <div class="form-group">

                                {{Form::label('body','Desciption')}}
                                {{Form::textarea('body','',['class'=>'form-control','Placeholder'=>'Title'])}}

                            </div>
                             <div class="form-group">
                                 
                                   {{Form::label('icon','ICON ')}}
                                   {{Form::text('image','',['class'=>'form-control height','Placeholder'=>'icon'])}}


                              </div>
                       <a href="/admin/courses/icons" target="_blank" class="btn btn-success form-control">ICons</a><br><br>
                        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
              
              </div>          
                
                </div>
                			         <div class="panel panel-default ">
               <div class="panel-heading">
                 إنشاء كورس 
                   <span class="pull-right clickable panel-toggle panel-button-tab-left panel-collapsed"><em class="fa fa-toggle-down"></em></span>
               </div>
          <div class="panel-body" style="display:none">
                        {!! Form::open(['action' => 'admin\adminCourse@add','method'=>'POST','class'=>'width','enctype'=>'multipart/form-data']) !!}
                            <div class="form-group">

                                {{Form::label('title','Title')}}
                                {{Form::text('title','',['class'=>'form-control height','Placeholder'=>'Title'])}}

                            </div>
                            <div class="form-group">

                                {{Form::label('body','Desciption')}}
                                {{Form::textarea('body','',['class'=>'form-control','Placeholder'=>'Title'])}}

                            </div>
                            <div class="form-group">

                                {{Form::label('body','Body')}}
                                {{Form::select('cat_id', $course_select,null)}}
                            </div>
                            <div class="form-group">
                                  {{Form::file('image',['class'=>'form-control'])}}

                              </div>
                        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
              
              </div>          
                
                </div>
			
			</div>
			
		</div>
	</div>	



@endsection	  
