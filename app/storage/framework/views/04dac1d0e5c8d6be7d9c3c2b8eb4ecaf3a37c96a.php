


<?php $__env->startSection('pageTitle',  "الكورسات المجانية و الدورات التدريبية - منصة معارف"); ?>
<?php $__env->startSection('pageDesc',   "كورسات محاسبة مجانا كورسات كمبيوتر ببلاش كورسات برمجة كورسات اون لاين كورسات مجانا كورسات لغات دورات تدريبية كورسات فى علم النفس كورسات طب كورسات صيدلة كورسات كلية تجارة"); ?>



<?php $__env->startSection('courses'); ?>
<div class="container">
<div class="courses-section row">
    
   <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
          <a href="<?php echo e(url('/')); ?>/<?php echo e($c->slug); ?>">
         <div class="text">
           <h5>
               <?php echo e($c->title); ?>

               
             </h5>
         </div> </a>  
     </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
</div>
 <?php echo file_get_contents('js/category_ads.js') ?>
 <div class="row">
	 <div class="col-lg-12">
	  <div class="sm-space"></div>
	 <div class="pagBox">
	     <?php echo e($courses->links('pagination.default')); ?>

	</div>
	 </div>
	 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>