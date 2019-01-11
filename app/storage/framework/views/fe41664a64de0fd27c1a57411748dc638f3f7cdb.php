<?php
$des = $cat->title." ، ".$cat->title." ".$course->title." ، ".$course->title." ".$cat->title." ، تحميل ".$cat->title." ، تحميل ".$course->title." ، دروس ".$course->title." ، تحميل برابط مباشر و مشاهدة ".$course->title."  تعليم الاطفال ".$cat->title;
 ?>
<?php if($status == '1'): ?>
<?php $__env->startSection('pageTitle',  $course->title); ?>
<?php $__env->startSection('pageDesc',  $des); ?>
<?php $__env->startSection('image',  $course->image1); ?>
<?php endif; ?>
<?php $id = $course->id;

$desc = $course->desc; ?>
<?php $__env->startSection('courses'); ?>
       <div class="course-header ">
           <div class="container color">
                <?php if($status =='1'): ?>
					 <h1 class="course-view-title"> <?php echo e($course->title); ?></h1>
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

           <div class="section main-border pad-15 marg-20">
              <?php echo e($des); ?>

           </div>
                 <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb color">
                                        <li class="breadcrumb-item color"><a class="color" href="<?php echo e(url('/كورسات-مجانا/')); ?>"><i style="color:#72b2e2;margin-left: 5px;" class="fa fa-home"></i>الرئيسة</a></li>
                                        <li class="breadcrumb-item color"><a class="color" href="<?php echo e(url('/courses/cat')); ?>">الاقسام</a></li>
                                        <li class="breadcrumb-item color"><a class="color" href="<?php echo e(url('/courses/cat')); ?>/<?php echo e($cat->id); ?>/<?php echo e($cat->slug); ?>"><?php echo e($cat->title); ?></a></li>
                                      </ol>
                                    </nav>


                <?php else: ?>
                <?php endif; ?>
            </div>

        </div>

   <?php if($status =='1'): ?>
 <div class="container course-playlist">


               <div class="row">
                             <div class="col-lg-8 order-lg-2">

                        <div class=" iframe">
                              <iframe id="lesson" height="100%" width="100%" src="https://www.youtube.com/embed/<?php echo e($lessons[0]['link']); ?>/modestbranding=1" frameborder="0" allowfullscreen=""></iframe>
                       </div>


                       </div>

                   <div class="col-lg-4">

                       <div class="section playlist ">
                          <ul>

                              <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <li id="les<?php echo e($lesson->id); ?>" onclick="play('<?php echo e($lesson->id); ?>','<?php echo e($lesson->link); ?>')" > <?php echo e($lesson->title); ?></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ul>

                       </div>

                   </div>

               </div>
               <div class="row">

               	         <div class="col-lg-12">
                  	   <div class="sm-space"></div>

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
					    <div class="sm-space"></div>
						<div class="main-box no-margin">

						  <h2><i class="fa fa-download text-success"></i> <a href="<?php echo e(url('youtube/course/')); ?>/<?php echo e($id); ?>/<?php echo e($course->slug); ?>"><span>لتحميل الكورس بجودة عاليه ومشاهدته بدون انترنت اضغط هنا</span></a></h2>

						</div>
					    <div class="sm-space"></div>

                       <div class="realted-courses courses ">

           <div class="row">
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						  <?php if($course->id != $id ): ?>
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

                                  <h4 title="  <?php echo e($course->title); ?>">
                                   <?php echo e($course->title); ?>

                                 </h4>


                             </div>

                              <div class="view-course">
                               <span class="link" >مشاهدة الدورة <i class="fa fa-play"></i></span>
                              </div>
                         </div>
						    </a>
                             </div>
							 <?php endif; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                           </div>

                  </div>
				        <script>

                               function play(id,link)
                               {
                                   $(".playlist ul li").each(function()
							        {
							             $(this).removeClass("active-lesson");
							        });
                                    src = "https://www.youtube.com/embed/"+link+"";
                                   document.getElementById('lesson').src = src;
                                   if(window.innerWidth < "768")
                                   {
                                   	   $("html, body").animate({ scrollTop:150},400);
                                   }
                                   else
                                   {
                                   	 $("html, body").animate({ scrollTop:322},400);
                                   }
                                   $("#les"+id+"").addClass("active-lesson");
                               }

                           </script>
						    <h3>وصف الكورس</h3>
				       <div class="course-desc">



                           <p>
                              <?php echo e($desc); ?>

                           </p>

                       </div>
               </div>


               </div>

</div>
<?php endif; ?>
<div class="space"></div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>