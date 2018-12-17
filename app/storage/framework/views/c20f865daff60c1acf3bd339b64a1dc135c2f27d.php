<?php $__env->startSection('pageTitle',  $track_name); ?>
<?php $__env->startSection('pageDesc',  $track_desc); ?>



<?php $__env->startSection('content'); ?>


<section class="col-lg-9  tracks">
           <div class="container">
           
                 <div class="section">
                     <h1><?php echo e($track_name); ?> </h1>
                  </div>
               <?php $__currentLoopData = $tips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indexKey => $tip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                <div class="track_show ">
                     <span><?php echo e($indexKey+1); ?> </span>
                    <?php echo e($tip->body); ?>

                </div>
                
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(url('المسارات-التعليمية')); ?>" class="more">اضغط هنا لقراءة المزيد من المسارات التعليمية</a>
           </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>