<?php $__env->startSection('content'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
            <div class="panel panel-container">  
            <h1 class="text-center"><?php echo e($course->title); ?></h1>
                <a style="display: block;text-align: center;" href="<?php echo e(url('course/')); ?>/<?php echo e($course->id); ?>/<?php echo e($course->title); ?>"><i class="fa fa-play fa-4x"></i></a>
                <span style="display:none" id="course_id"><?php echo e($course->id); ?></span>
                
                </div>
         <div class="row">
    
            <div class="col-lg-6">
                
                <div class="panel panel-container"> 
                
                       <table id="lessons" class="table table-hover table-condensed" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%" align="right" style="text-align:right" >رقم</th>
                                        <th width="40%" align="right" style="text-align:right">العنوان</th>
                                        <th width="20%" align="right" style="text-align:right">لينك</th>
                                        <th width="25%" align="right" style="text-align:right">التحكم</th>
                                    </tr>
                                </thead>
                              </table>
                    
                </div>
            
            </div>
            <div class="col-lg-6">
            
                <div class="panel panel-container"> 
                 
                          <form id="add_lesson_form" method="POST" class="width" enctype="multipart/form-data" action="/admin/course/add_lesson/" >
                              <?php echo csrf_field(); ?>


                            <div class="form-group">

                                 <input value="<?php echo e($course->id); ?>"  type="hidden" class="form-control" name="course_id">


                              </div>
                             <div class="form-group">

                                <input  id="lesson_title" type="text" class="form-control" name="title" placeholder="عنوان الدرس">

                              </div>
                               <input value="<?php echo e($course->id); ?>" type="hidden" class="form-control" name="id">
                               <div class="form-group">

                                   <input id="lesson_link"  type="text" class="form-control" name="link" placeholder="رابط الدرس">

                              </div>

                                <div class="form-group">

                                  <input type="submit"  class="btn btn-primary form-control" value="إضافة الدرس" >


                                </div>
                       </form>
                      
                </div>
            </div>
            <div class="col-lg-6">
            
                <div class="panel panel-container"> 
                   <h3>اضف لينك الكورس من اليوتيوب</h3>
                          <form method="POST" class="width" enctype="multipart/form-data" action="<?php echo e(route('crawlcourse')); ?>" >
                              <?php echo csrf_field(); ?>


                            <div class="form-group">

                                 <input value="<?php echo e($course->id); ?>"  type="hidden" class="form-control" name="course_id">


                              </div>
                         
                               <input value="<?php echo e($course->id); ?>" type="hidden" class="form-control" name="id">
                               <div class="form-group">

                                   <input id="lesson_link"  type="text" class="form-control" name="link" placeholder="رابط الكورس">

                              </div>

                                <div class="form-group">

                                  <input type="submit"  class="btn btn-primary form-control" value="اضف الكورس" >


                                </div>
                       </form>
                      
                </div>
            </div>
         </div>
         
</div>

<?php $__env->stopSection(); ?>	  
<?php echo $__env->make('admin.layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>