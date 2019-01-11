<?php


?>
<?php $__env->startSection('content'); ?>


              <div class="col-lg-6 order-lg-2">


        <?php if(count($articles) > 0): ?>
                  <?php $i=0 ?>
  <div class="row">
                  <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <div class="col-lg-6">
                          <div class="post" >
                                 <img alt="<?php echo e($article->title); ?>" title="<?php echo e($article->title); ?>" src="/storage/images/<?php echo e($article->image); ?>" class="img-responsive">
                                 <br>
                                   <div class="post_cat">
                                      <a href="<?php echo e(url('/مقالات')); ?>">

                                          المقالات

                                       </a> / <a href="<?php echo e(url('/articles/cat/')); ?>/<?php echo e(($cat_articles[$i])->id); ?>">

                                      <?php  echo $cat_articles[$i]->title?>

                                       </a>
                                   </div>
                              <div class="post_container_home">
                                  <h1><?php echo e($article->title); ?> </h1>
                                   <p class="substring">
                                       <?php echo e(str_limit(str_replace("&nbsp;", ' ', strip_tags($article->body)), $limit =130, $end = '...')); ?>


                                 </p>
                                <a href="<?php echo e(url('/articles/')); ?>/<?php echo e($article->id); ?>/<?php echo e($article->slug); ?>" class="readmore">لقراءة المزيد</a>
                             </div>

                          </div>
                        </div>

                   <?php $i+=1?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="panel-header">
                      <a href="<?php echo e(url('/اقسام-المقالات')); ?>">  <h2>نصف ساعه يوميا بوجودك داخل هذا الرابط تعطيك خبرة كبيرة اضغط هنا</h2></a>
                    </div><br>


                    </div>
                 <?php echo file_get_contents('js/home_ads.js') ?>
       <?php endif; ?>
       <div class="row">
     <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-lg-6">
                <div class="post">
                	<img src="/storage/images/<?php echo e($course->image1); ?>" alt="<?php echo e($course->title); ?>" title="<?php echo e($course->title); ?>">
                        <div class="post_container_home">
                          <h1><?php echo e($course->title); ?> </h1>
                           <p class="substring">
                               <?php echo e($course->desc); ?>


                         </p>
                        <a href="<?php echo e(url('/course/')); ?>/<?php echo e($course->id); ?>/<?php echo e($course->slug); ?>" class="readmore">مشاهدة الدورة</a>
                     </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
       </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.suggest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>