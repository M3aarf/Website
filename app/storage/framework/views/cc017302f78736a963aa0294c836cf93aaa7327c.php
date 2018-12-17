<?php $__env->startSection('content'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
            <div class="col-lg-offset-2 col-lg-8">

         <form method="POST" class="width" enctype="multipart/form-data" action="<?php echo e(route('update_course')); ?>">
              <?php echo csrf_field(); ?>
           <div class="form-group text-center">

               <img src="<?php echo e(url('/storage/images/')); ?>/<?php echo e($course->image); ?>" width="50">
            </div>
                
           <div class="form-group">
                   
                 <input value="<?php echo e($course->title); ?>"  class="form-control" name="title">


              </div>
                 <div class="form-group">
                   
                 <input  class="form-control" name="image" type="file">


              </div>
             <div class="form-group">
                   
             <textarea class="form-control"  name="desc" > 
                 <?php echo e($course->desc); ?>

                 </textarea>

              </div>
               <input value="<?php echo e($course->id); ?>" type="hidden" class="form-control" name="id">
           
             <select class="form-control" name="cat_id">
                  <option value="<?php echo e($course_cat->id); ?>"><?php echo e($course_cat->title); ?></option>
                <?php $__currentLoopData = $cats_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select> 
                <div class="form-group">
                   
                  <input type="submit"  class="btn btn-primary form-control" >


              </div>
                </form>
                
               
          </div>

     
            </div>
</div>

<?php $__env->stopSection(); ?>	  
<?php echo $__env->make('admin.layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>