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
				<li class="active">المسارات التعليمية   </li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">المسارات التعليمية  </h1>
			</div>
		</div>

		<div class="row">
            
            <div class="col-lg-6">
                
                <div class="panel panel-default articles">
					<div class="panel-heading">
						عرض المسارات
               
						<span class="pull-right clickable panel-toggle panel-button-tab-left  panel-collapsed"><em class="fa fa-toggle-down"></em></span></div>
                        <div class="panel-body articles-container" style="display: none;">
                             <table id="tracks" class="table table-hover table-condensed" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%"  align="right"  style="text-align:right" >رقم</th>
                                        <th width="30%" align="right" style="text-align:right">العنوان</th>
                                        <th width="15%" align="right" style="text-align:right">مشاهدات</th>
                                        <th width="40%" align="right" style="text-align:right">التحكم</th>
                                    </tr>
                                </thead>
                              </table>
                        </div>
				</div>
          
            
            </div>
            <div class="col-lg-6"> 
        

			         <div class="panel panel-default ">
               <div class="panel-heading">
                 إنشاء مسار  
                   <span class="pull-right clickable panel-toggle panel-button-tab-left panel-collapsed"><em class="fa fa-toggle-down"></em></span>
               </div>
          <div class="panel-body" style="display:none">
                        {!! Form::open(['action' => 'admin\adminTracks@add','method'=>'POST','class'=>'width','enctype'=>'multipart/form-data']) !!}
                            <div class="form-group">

                                {{Form::label('title','Title')}}
                                {{Form::text('title','',['class'=>'form-control height','Placeholder'=>'العنوان'])}}

                            </div>
                            <div class="form-group">

                                {{Form::label('body','Desciption')}}
                                {{Form::textarea('body','',['class'=>'form-control','Placeholder'=>'صف المسار'])}}

                            </div>
                     
                        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
              
              </div>          
                
                </div>

			
			</div>
			
		</div>
	</div>	



@endsection	  
