<?php $__env->startSection('pageTitle',  "الكورسات المجانية و الدورات التدريبية - منصة معارف"); ?>
<?php $__env->startSection('pageDesc',   "كورسات محاسبة مجانا كورسات كمبيوتر ببلاش كورسات برمجة كورسات اون لاين كورسات مجانا كورسات لغات دورات تدريبية كورسات فى علم النفس كورسات طب كورسات صيدلة كورسات كلية تجارة"); ?>



<?php $__env->startSection('courses'); ?>
<div class="container">
<div class="courses-section row">
     <div class="col-lg-12">
      
           

    
     </div>
    
  <?php if(count($cats) > 0): ?>  
   <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
          <a href="/courses/cat/<?php echo e($cat->id); ?>/<?php echo e($cat->slug); ?>"><div class="icon">
             <img src="<?php echo e(asset('landingImages/icons')); ?>/<?php echo e($cat->image); ?>">
          </div>
         <div class="text">
           <h5>
               <?php echo e($cat->title); ?>

               
             </h5>
         </div> </a> 
     </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	 <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
          <a href="<?php echo e(url('/دورات-تدريبية')); ?>"><div class="icon">
             <img src="<?php echo e(asset('landingImages/icons')); ?>/043-file-video.png">
          </div>
         <div class="text">
           <h5>
               جميع الكورسات
               
             </h5>
         </div> </a> 
     </div>
	 
  <?php endif; ?>    
 

</div>
 <?php echo file_get_contents('js/category_ads.js') ?>
    <div class="container">
        <div class="space"></div>
    <?php echo $__env->make('inc/subsc', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>