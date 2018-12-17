<?php $__env->startSection('pageTitle',  "المسارات التعليمية  - منصة معارف"); ?>
<?php $__env->startSection('pageDesc',  "المسار التعليمى هو اهم شئ عليك ان تعلمه قبل البدء فى تعلم مجال معين كمسار الويب ومسار البرمجة بشكل عام و مسار تعلم اللغات و مسار تعلم الكمبيوتر وغيرها من المسارات التعليمية"); ?>



<?php $__env->startSection('content'); ?>


<section class="col-lg-9  tracks">
    <div class="container">
           
                    <div class="section">
                           <h1> قم باختار مسارك التعليمى و ابدء الآن  </h1>
                    </div>
        <?php $__currentLoopData = $tracks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $track): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="track">
        
            <div class="row">
            
                <div class="col-lg-8">
                
                    <h5><?php echo e($track->title); ?></h5>
                </div>
                <div class="col-lg-4">
                    <a href="<?php echo e(url('tracks/')); ?>/<?php echo e($track->id); ?>/<?php echo e($track->slug); ?>" class="main-btn-blue" >ابدء الان</a>
                </div>
            </div>
        
        </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="space"></div>
          <div class="pagBox">
                     
                         <?php echo e($tracks->links()); ?>

                         
                     </div>
           </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>