<?php $__env->startSection('pageTitle',  "الكورسات المجانية و الدورات التدريبية - منصة معارف"); ?>
<?php $__env->startSection('pageDesc',   "كورسات محاسبة مجانا كورسات كمبيوتر ببلاش كورسات برمجة كورسات اون لاين كورسات مجانا كورسات لغات دورات تدريبية كورسات فى علم النفس كورسات طب كورسات صيدلة كورسات كلية تجارة"); ?>

<?php $__env->startSection('content2'); ?>


    <section >
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
</div>
	</section>
    <div class="space"></div>
    <section class="white courses-page">
            <div class="container">
      
   
   
                <div class="row">
                
                    <div class="col-lg-12">
					   <div class="sm-space"></div>
                        <h1 class="width text-center title-blue" >خدمات انولدج التعليمية</h1>
                      
                    </div><!--
                    <div class="col-lg-4">
                          <div class="course-service">
                               <img src="<?php echo e(asset('images/presentation.png')); ?>">
                               <h4>تواصل مع متخصصين</h4>
                               <div >
                               يمكنك التواصل مع محاضرين متخصصين فى المجال الذى تريده فى الوقت المناسب لك     
                               </div>
                             <a  href="<?php echo e(url('/courses/cat')); ?>" class="main-btn-blue ">ابدأ الان</a>
                          </div>
                    </div>!-->
                    <div class="col-lg-4">
                          <div class="course-service">
                               <img src="<?php echo e(asset('images/book.png')); ?>">
                               <h4>دورات تعليمية</h4>
                               <div >
                             
                                 كورسات تعليمية فى كافة المجالات<br> 
                                   لتتعلم منها بشكل احترافى مجانى
                                   
                               </div>
                             <a  href="<?php echo e(url('/courses/cat')); ?>" class="main-btn-blue ">ابدأ الان</a>      
                          </div>
                    </div>
					 <div class="col-lg-4">
                          <div class="course-service">
                               <img src="<?php echo e(asset('images/download-course.png')); ?>">
                               <h4>اتعلم بدون انترنت</h4>
                               <div >
                             
                                 إمكانية تحميل و تنزيل<br> 
                                 الدورات التدريبية بشكل مجاني
                                   
                               </div>
                             <a  href="<?php echo e(url('/تعليم-مجانا')); ?>" class="main-btn-blue ">ابدأ الان</a>      
                          </div>
                    </div>
                    <div class="col-lg-4">
                          <div class="course-service">
                               <img src="<?php echo e(asset('images/tracks.png')); ?>">
                               <h4>المسارات التعليمية </h4>
                               <div >
                             قبل ان تبدء فى تعلم اى مجال <br>
                                   عليك ان تعرف مسارك التعليمى
                               </div>
                              
                                 <a  href="<?php echo e(url('/المسارات-التعليمية')); ?>" class="main-btn-blue ">ابدأ الان</a>
                             
                          </div>
                    </div>
                
                </div>
				  <?php if(count($cats) > 0 ): ?> 
               <div class="row">
                  <div class="course-search">
                     
                        
                          <div class="form-group">
                             
                               <select name="id"  >
                                   <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->title); ?></option>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select> 
                              <a href="courses/cat/<?php echo e($cats[0]['id']); ?>/<?php $arr = explode(' ',$cats[0]['title']);echo implode('-',$arr); ?>" class="main-btn-orange"  >ابدأ التعلم الان</a>
                              
                          </div>
                          
                  
                   </div>
               </div>
			   <?php endif; ?>
            </div>
    </section>
	<section  class="container">
	<div class="space"></div>
	    <h1 class="width text-center title-blue">كورسات اون لاين مجانا</h1>
	    <?php echo $__env->make('layouts/courses-ladning-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>