<?php $__env->startSection('pageTitle',  "وجهات سياحية - منصة معارف"); ?>
<?php $__env->startSection('pageDesc',  "الوجهات السياحية و السفر بيهم معلومات كثيرة فى منصة معارف سوف تتعرف على اجمل الوجهات السياحية فى العالم ومميزات كل وجهة سياحية و كيفية الذهاب اليها"); ?>
<?php $__env->startSection('content'); ?>

<div class="col-lg-9  order-lg-1">
   
                     <section class="articles panel ">
                       
                        <div class="row">
                         
                          <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                             
                            <div class="col-lg-6 col-md-6 ">
                                <div class="panel">
                                     <div class="post " >
                                         <div class="image_articles">
                                           <img alt="<?php echo e($article->title); ?>" title="<?php echo e($article->title); ?>" src="/storage/images/<?php echo e($article->image1); ?>" class="img-responsive">
                                        </div>  
                                         <div class="post_container_home">

                                       <h1 title="<?php echo e($article->title); ?>"> <?php echo e($article->title); ?></h1>
                                       <p title="<?php echo e(str_limit(str_replace("&nbsp;", ' ', strip_tags($article->body)), $limit =130, $end = '...')); ?>">
                                           
                                         <?php echo e(str_limit(str_replace("&nbsp;", ' ', strip_tags($article->body)), $limit =130, $end = '...')); ?>

                                       </p>   
                                                <a href="/articles/<?php echo e($article->id); ?>" class="readmore">لقراءة المزيد</a>
                                         </div>    
                                    </div>
                                 </div>
                            </div> 
                              
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                           
                     </div>
                  
                  </section>
 
   <div class="pagBox">
      <?php echo e($articles->links()); ?>

    </div>
     
 
           <div class="subsc">
    
                <?php echo $__env->make('inc/subsc', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>         
 
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>