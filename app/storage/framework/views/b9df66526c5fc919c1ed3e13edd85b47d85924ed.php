

<?php $__env->startSection('content'); ?>


 
<div class="col-lg-9  order-lg-1">
       	<display> 
		     <span> طريقة العرض </span>
			 <ul class="list_item">
			
			 <li>    <a  href="<?php echo e(url('/اقسام-المقالات')); ?>" class="view">  جميع الاقسام </a></li>
			 <li>    <a  href="<?php echo e(url('/مقالات')); ?>" class="view"> الاقسام و المقالات </a></li>
			 </ul>
			</display>
  
                     <section class="articles">
                        <div class="row">
                          <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                     <a href="<?php echo e(url('/articles/'.$post->id.'/'.$post->slug)); ?>"><div class="ar_category_post " >
                                         <div class="image_articles">
                                           <img alt="   <?php echo e($post->title); ?>" title="" src="/storage/images/<?php echo e($post->image1); ?>" class="img-responsive">
                                        </div>  
                                         <div class="cat_post">

                                       <h4 title="  <?php echo e($post->title); ?>">
                                          <?php echo e($post->title); ?> </h4>
                                        
                                         </div>    
                                </div></a>
                            </div>    
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                     </div>
					  <?php echo file_get_contents('js/category_ads.js') ?>
                     <div class="pagBox">
                      
                         <?php echo e($articles->links('pagination.default')); ?>

                         
                     </div>
                     </section>
      
   
          <div class="subsc">

                        <?php echo $__env->make('inc/subsc', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

          </div>
           
            
    
                 
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>