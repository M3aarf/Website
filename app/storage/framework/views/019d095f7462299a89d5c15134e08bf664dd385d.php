<?php $__env->startSection('content'); ?>




<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">المقالات </li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">المقالات</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
            <div class="col-lg-6"> 
        
            
     
				   

           <div class="panel panel-default " >
               <div class="panel-heading">
                 إنشاء مقال جديد
                   <span class="pull-right clickable panel-toggle panel-button-tab-left panel-collapsed"><em class="fa fa-toggle-down"></em></span>

               </div>
               <div class="panel-body" style="display:none">
                        <?php echo Form::open(['action' => 'articles@store','method'=>'POST','class'=>'width','enctype'=>'multipart/form-data']); ?>

                            <div class="form-group">

                                <?php echo e(Form::label('title','العنوان')); ?>

                                <?php echo e(Form::text('title','',['class'=>'form-control height','Placeholder'=>'Title'])); ?>


                            </div>
                            <div class="form-group">

                                <?php echo e(Form::label('body','المحتوى')); ?>

                                <?php echo e(Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','Placeholder'=>'Title'])); ?>


                            </div>
                            <div class="form-group">

                                <?php echo e(Form::label('body','القسم')); ?>

                                <?php echo e(Form::select('cat_id', $cats_select,null)); ?>

                            </div>
                             <div class="form-group">
                                  <?php echo e(Form::file('image',['class'=>'form-control'])); ?>


                              </div>
                        <?php echo e(Form::submit('Submit',['class'=>'btn btn-primary'])); ?>

                        <?php echo Form::close(); ?>

              </div>
            </div>
			         <div class="panel panel-default ">
               <div class="panel-heading">
                 إنشاء قسم 
                   <span class="pull-right clickable panel-toggle panel-button-tab-left panel-collapsed"><em class="fa fa-toggle-down"></em></span>
               </div>
          <div class="panel-body" style="display:none">
                        <?php echo Form::open(['action' => 'admin\adminArticles@createcat','method'=>'POST','class'=>'width','enctype'=>'multipart/form-data']); ?>

                            <div class="form-group">

                                <?php echo e(Form::label('title','العنوان')); ?>

                                <?php echo e(Form::text('title','',['class'=>'form-control height','Placeholder'=>'Title'])); ?>


                            </div>
                            <div class="form-group">

                                <?php echo e(Form::label('body','الوصف')); ?>

                                <?php echo e(Form::textarea('body','',['class'=>'form-control','Placeholder'=>'Title'])); ?>


                            </div>
                             <div class="form-group">
                                  <?php echo e(Form::file('image',['class'=>'form-control'])); ?>


                              </div>
                        <?php echo e(Form::submit('Submit',['class'=>'btn btn-primary'])); ?>

                        <?php echo Form::close(); ?>

              </div>            </div>
			
			</div><!--/.col-->
			
			<div class="col-md-6">
		      <div class="panel panel-default articles">
					<div class="panel-heading">
						عرض المقالات
               
						<span class="pull-right clickable panel-toggle panel-button-tab-left  panel-collapsed"><em class="fa fa-toggle-down"></em></span></div>
                        <div class="panel-body articles-container" style="display: none;">
                             <table id="users" class="table table-hover table-condensed" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%" align="right" >رقم</th>
                                        <th width="30%" align="right">العنوان</th>
                                        <th width="20%" align="right">قسم</th>
                                        <th width="10%" align="right">مشاهدات</th>
                                        <th width="35%" align="right">التحكم</th>
                                    </tr>
                                </thead>
                              </table>
                        </div>
				</div><!--End .articles-->
                		
           <div class="panel panel-default articles">
					<div class="panel-heading">
						عرض الاقسام
               
						<span class="pull-right clickable panel-toggle panel-button-tab-left  panel-collapsed"><em class="fa fa-toggle-down"></em></span></div>
                        <div class="panel-body articles-container" style="display: none;">
                             <table id="cats" class="table table-hover table-condensed" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%" align="right" >رقم</th>
                                        <th width="40%" align="right">العنوان</th>
                                        <th width="15%" align="right">مشاهدات</th>
                                        <th width="10%" align="right">عدد المقالات</th>
                                        <th width="30%" align="right">التحكم</th>
                                    </tr>
                                </thead>
                              </table>
                        </div>
				</div><!--End .articles-->
			</div><!--/.col-->
	
		</div><!--/.row-->
	</div>	

<?php $__env->stopSection(); ?>	  

<?php echo $__env->make('admin.layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>