

<?php $__env->startSection('pageTitle',  "الكورسات المجانية و الدورات التدريبية - منصة معارف"); ?>
<?php $__env->startSection('pageDesc',   "مجانا كورسات كمبيوتر ببلاش كورسات برمجة كورسات اون لاين كورسات مجانا كورسات لغات دورات تدريبية كورسات فى علم النفس كورسات طب كورسات صيدلة كورسات كلية تجارة"); ?>

<?php $__env->startSection('content2'); ?>
<div class="container">
       <div class="sm-space">
	   </div>
	   <h1 class="width text-right title-blue">كورسات اون لاين مجانا</h1>
            <div class="row">
           
               <div class="col-lg-12">
               
                   <div class="courses-container">
                   
                     
                   <section class="courses">
                     <div class="row">
                         
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-lg-3 col-md-6 ">
						  <a href="<?php echo e(url('/')); ?>/course/<?php echo e($course->id); ?>/<?php echo e($course->slug); ?>">
                             <div class="course">
                           
                                <div class="media-course">
                               <img title="  <?php echo e($course->title); ?>" src="/storage/images/<?php echo e($course->image); ?>">
                                <div class="overblue">
                                <i class="fa fa-play fa-3x"></i>
                                 </div> 
                                  
                               </div>
                              
                             <div class="content">
                             
                                  <h3 title="  <?php echo e($course->title); ?>">
                                   <?php echo e($course->title); ?>

                                 </h3>
                
                             
                             </div>
                            
                              <div class="view-course">
                               <span class="link" >مشاهدة الدورة <i class="fa fa-play"></i></span>
                              </div>
                         </div>
						    </a>
                             </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                         
                         
                         
                     </div>
					  <?php echo file_get_contents('js/category_ads.js') ?>
					 <div class="row">
					   <div class="col-lg-12">
					   <div class="pagBox">
					   <?php echo e($courses->links('pagination.default')); ?>

						</div>
					   
					   </div>
					 </div>
                    </section>
                       
                   </div>
               
               </div>
           
           </div>
		   
	     <div class="sm-space">
	   </div>
	   
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>