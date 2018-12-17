 
<?php $__env->startSection('pageTitle',  "المقالات - منصة معارف"); ?>
<?php $__env->startSection('pageDesc',   "مقالات عن الحياة العملية و إدارة الوقت و حياة ما بعد التخرج و اخبار التكنولوجيا الاختراعات و الاكتشافات وكيفية تعلم اللغات وكل ما يخص الكليات و التخصصات برمجة كمبيوتر حاسب الى الطب و الصيدلة و الهندسة"); ?>
<?php $__env->startSection('keywords',  "مقالات , مقالات عن البرمجة , بداية تعلم البرمجة من الصفر , بداية تعلم اللغات من الصفر , بداية تعلم الكمبيوتر , الحاسب الالى , اخبار التكنولوجيا "); ?>

<?php $__env->startSection('content'); ?>
<?php use inoledge\Http\Controllers\articles; ?>

<div class="col-lg-9  order-lg-1">

         	<display> 
		     <span> طريقة العرض </span>
			 <ul class="list_item">
			
			 <li>    <a  href="<?php echo e(url('/جميع-المقالات')); ?>" class="view"> جميع المقالات </a></li>
			 <li>    <a  href="<?php echo e(url('/اقسام-المقالات')); ?>" class="view"> جميع الاقسام </a></li>
			 </ul>
			</display>
			 
    <?php if(count($cats) >= 1): ?>
       <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <section class="articles panel ">
                        <h3 class="inoledge-box"><?php echo e($cat->title); ?></h3>
                        <div class="row">
						
                            <?php  $articles = articles::getPostsCat($cat->id);  ?>
                            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
						
                             
                            <div class="col-lg-6 col-md-6 ">
                                <div class="panel">
                                     <div class="post " >
                                         <div class="image_articles">
                                           <img alt="" title="<?php echo e($post->title); ?>" src="/storage/images/<?php echo e($post->image1); ?>" class="img-responsive">
                                        </div>  
                                         <div class="post_container_home">

                                       <h1 title="<?php echo e($post->title); ?>"><?php echo e($post->title); ?> </h1>
                                       <p>
                                            <?php echo e(str_limit(str_replace("&nbsp;", ' ', strip_tags($post->body)), $limit =130, $end = '...')); ?>


                                       </p>   
                                                <a href="/articles/<?php echo e($post->id); ?>/<?php echo e($post->slug); ?>" class="readmore">لقراءة المزيد</a>
                                         </div>    
                                    </div>
                                 </div>
                            </div> 
                              
                             
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>
					 <?php echo file_get_contents('js/category_ads.js') ?>
                     <a href="<?php echo e(url('/articles/cat/'.$cat->id.'/'.$cat->slug)); ?>" class="more">   للمزيد من المقالات بقسم
                        
                        <?php echo e($cat->title); ?>

                        
                        اضغط هنا</a>
                  </section>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
    <div class="pagBox">
      <?php echo e($cats->links('pagination.default')); ?>

    </div>
        <?php endif; ?>
 
           <div class="subsc">
    
                <?php echo $__env->make('inc/subsc', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>         
 
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>