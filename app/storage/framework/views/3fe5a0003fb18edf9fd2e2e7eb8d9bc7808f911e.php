

<?php $__env->startSection('pageTitle',  "وجهات سياحية - منصة معارف"); ?>
<?php $__env->startSection('pageDesc',  "الوجهات السياحية و السفر بيهم معلومات كثيرة فى منصة معارف سوف تتعرف على اجمل الوجهات السياحية فى العالم ومميزات كل وجهة سياحية و كيفية الذهاب اليها"); ?>
<?php $__env->startSection('content'); ?>

<div class="col-lg-9  order-lg-1">
   	<display> 
		     <span> طريقة العرض </span>
			 <ul class="list_item">
			
			 <li>    <a  href="<?php echo e(url('/جميع-المقالات')); ?>" class="view"> جميع المقالات </a></li>
			 <li>    <a  href="<?php echo e(url('/مقالات')); ?>" class="view"> الاقسام و المقالات </a></li>
			 </ul>
			</display>
			
                     <section class="articles panel ">
                       
                        <div class="row">
                         
                          <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                             
                            <div class="col-lg-6 col-md-6 ">
                                <div class="panel">
                                     <div class="post " >
                                         <div class="image_articles">
                                           <img alt="<?php echo e($cat->title); ?>" title="<?php echo e($cat->title); ?>" src="/storage/images/<?php echo e($cat->image); ?>" class="img-responsive">
                                        </div>  
                                         <div class="post_container_home">

                                       <h1 title="<?php echo e($cat->title); ?>"> <?php echo e($cat->title); ?></h1>
                                       <p title="<?php echo e(str_limit(str_replace("&nbsp;", ' ', strip_tags($cat->desc)), $limit =130, $end = '...')); ?>">
                                           
                                         <?php echo e(str_limit(str_replace("&nbsp;", ' ', strip_tags($cat->desc)), $limit =130, $end = '...')); ?>

                                       </p>   
                                                <a href="<?php echo e(url('/articles/cat/')); ?>/<?php echo e($cat->id); ?>/<?php echo e($cat->slug); ?>" class="readmore">لقراءة المزيد</a>
                                         </div>    
                                    </div>
                                 </div>
                            </div> 
                              
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                           
                     </div>
                  
                  </section>
 
   <div class="pagBox">
      <?php echo e($cats->links('pagination.default')); ?>

    </div>
     
 
           <div class="subsc">
    
                <?php echo $__env->make('inc/subsc', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>         
 
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>