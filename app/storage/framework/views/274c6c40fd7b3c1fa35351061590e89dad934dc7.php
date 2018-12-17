<?php
namespace inoledge\Http\Controllers;

use Illuminate\Http\Request;
use  inoledge\courses;
use  inoledge\course;
?>

 <?php if($status == '1'): ?>
<?php $__env->startSection('pageTitle',  $cat->title); ?>
<?php $__env->startSection('pageDesc',  $cat->desc); ?>
<?php else: ?>
 <?php header('Location: https://www.m3aarf.com'); ?>
<?php endif; ?>

<?php $__env->startSection('content2'); ?>

 <?php if($status == '1'): ?>
  
     <div class="courses-bg header-course no-background" >

       
       <div class="container">
       
           <div class="row">
           
               <div class="col-lg-12">
               
                   <div class="courses-container " id="courses-view">
                 
                   <section class="courses ">
				     <h1 class="post_title"><?php echo e($cat->title); ?></h1>
					    <div class="section main-border pad-15 marg-20">
				   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar_ads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7381615423486585"
     data-ad-slot="9355923496"
     data-ad-format="link"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
				   </div>
				       <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo e(url('/كورسات-مجانا')); ?>" style="color:#46a6e2">الرئيسة</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo e(url('/courses/cat')); ?>" style="color:#46a6e2">الاقسام</a></li>
                                      </ol>
                                    </nav>
                   
				
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
       
       </div>


   </div>
   	 <div class="download-box">
					      <div class="container">
						   <div class="space"></div>
						   <div class="row">
						    <div class="col-lg-3 text-center">
							   <img style='width:200px;' src="<?php echo e(asset('images/download-course.png')); ?>">
							   
							</div>
							<div class="col-lg-9">
							  <div class="sm-space"></div>
							  <h3 class="text-right">يمكنك تحميل جميع الدورات التدريبية مجانا وبجودة عالية</h3>
							   <a class="main-btn-blue" href="<?php echo e(url('/تعليم-مجانا')); ?>">ابدء التحميل الان</a>
							</div>
						  </div>
						   <div class="space"></div>
						  
						  </div>
					 </div>
      <div class="header-course no-padding">
     
                           <div class="container">  
                               <div class="col-lg-12"> 
							   <div class="sm-space"></div>
                                   <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo e(url('/كورسات-مجانا')); ?>" style="color:#46a6e2">الرئيسة</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo e(url('/courses/cat')); ?>" style="color:#46a6e2">الاقسام</a></li>
                                      </ol>
                                    </nav>
                                   
                             
                               <p><?php echo e($cat->desc); ?></p>
                               </div>
                               <div class="col-lg-7">
                               
                               </div>
                           </div>
   </div>
<?php else: ?>


 <?php header('Location: https://www.m3aarf.com'); ?>

<?php endif; ?>

 <div class="container">
       <div  class="sm-space"></div>
	      <div class="section main-border pad-15 marg-20">
				   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar_ads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7381615423486585"
     data-ad-slot="9355923496"
     data-ad-format="link"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
				   </div>

</div>
   
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>