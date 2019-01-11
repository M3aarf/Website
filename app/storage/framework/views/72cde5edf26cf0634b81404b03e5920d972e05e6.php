<?php
use  inoledge\lessons;
use  inoledge\course;
if(!isset($course))
{
	echo "d";
	die();
}
$id = $course->id;
$lessons = lessons::where('course_id',$id)->get();
$course = course::find($id);
$desc = " مشاهدة و تحميل ".$course->title."،  تعلم مجال ،".$course->title." أفضل دورة تدريبية لتعليم  ".$course->title;
$tit = 'بداية تعليم '.$course->title;
?>
<?php $__env->startSection('style','landing-page.css'); ?>

<?php $__env->startSection('pageTitle', $tit ); ?>
<?php $__env->startSection('pageDesc', $desc); ?>
<?php $__env->startSection('image', $course->image1 ); ?>


<?php $__env->startSection('content2'); ?>
<div class="ladning-wrapper webdesign-background">
      <div class="landing-over-black">
	      <h1>تحميل و مشاهدة <?php echo e($course->title); ?></h1>
	  </div>
</div>


   <div class="landing-content">
                <div class="container">
				      <div class="ladning-details text-center main-border">

					   <div class="row">
					   <div class="col-lg-4 details-mb">
                          <i class="fa fa-usd fa-2x" aria-hidden="true"></i>
						  <div class="text" >مجانا</div>
					   </div>
					   <div class="col-lg-4 border-left border-right details-mb">
                          <i class="fa fa-line-chart fa-2x" aria-hidden="true"></i>
						  <div class="text" >مستوى الكورس اساسيات</div>
					   </div>
					   <div class="col-lg-4 details-mb no-margin">
                          <i class="fa fa-list-alt fa-2x" aria-hidden="true"></i>
						  <div class="text" ><span lang="en"><?php echo e(count($lessons)); ?></span> محاضرة</div>
					   </div>
					 </div>
					  </div>
                      <div class="course-details">
                        <h2 class="course-info-title"> <i class="fa fa-question-circle orange-font" aria-hidden="true"></i>  معلومات عن الكورس
                          </h2>
													<div class="section main-border pad-15 marg-20">

															 تحميل
															 <?php echo e($course->title); ?>

															 ،
															 دروس
															 <?php echo e($course->title); ?>

															 ،
							 تحميل برابط مباشر و مشاهدة
							 <?php echo e($course->title); ?>

															 ،
														<?php echo e($course->title); ?>

											تعليم الاطفال

														، البداية لتعلم

															<?php echo e($course->title); ?>

													</div>
													<br>
                          <div class="course-info main-border">

                              <div class="row">

                                <div class="col-lg-8">
                                  <p>
								  <?php echo e($course->desc); ?>

                                  </p>
                                </div>
                                <div class="col-lg-4">
                                   <img src="<?php echo e(url('/storage/images/')); ?>/<?php echo e($course->image1); ?>">
                                </div>
                                  <div class="col-lg-12 text-center">
								    <div class="sm-space"></div>
                                    <a href="<?php echo e(url('/')); ?>/course/<?php echo e($course->id); ?>/<?php echo e($course->slug); ?>" class="main-btn-orange">شاهد الكورس و ابدء التعلم مجانا</a>
                                  </div>
                              </div>

                          </div>
                      </div>
					   <div class="course-details">
                        <h2 class="course-info-title"> <i class="fa fa-download orange-font" aria-hidden="true"></i>
                          تحميل الكورس بجودة عالية مجانا
                          </h2>
                          <div class="course-info main-border">

                             <a href="<?php echo e(url('')); ?>/youtube/course/<?php echo e($course->id); ?>/تحميل-<?php echo e($course->slug); ?>" style="font-size:25px;text-decoration:underline !important">
                                 لتحميل دروس
								  <?php echo e($course->title); ?>

								  مجانا بجودة عالية اضغط هنا
                            </a>

                          </div>
                      </div>
                      <div class="course-details">
                        <h2 class="course-info-title"> <i class="fa fa-th-list orange-font" aria-hidden="true"></i>
                          ماذا سوف تتعلم داخل الكورس ؟
                          </h2>
                          <div class="course-info main-border">

                              <div class="row">

                                <div class="col-lg-12">

                                <ul style="margin-bottom: 15px;">
                                <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <li>
                                  <?php echo e($lesson->title); ?>

                                 </li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                </div>
                                  <div class="col-lg-12 text-center">

                                 <a href="<?php echo e(url('/')); ?>/course/<?php echo e($course->id); ?>/<?php echo e($course->slug); ?>" class="main-btn-orange">شاهد الكورس و ابدء التعلم مجانا</a>
                                  </div>

                              </div>

                          </div>
                      </div>
                      <div class="course-details">
                        <h2 class="course-info-title"> <i class="fa fa-th-list orange-font" aria-hidden="true"></i>
                        مميزات الكورس
                          </h2>
                          <div class="course-info main-border">

                              <div class="row">

                                <div class="col-lg-12">

                                    <ul>
                                       <li>التسجيل فى الكورس مجانا</li>
                                       <li>لن تحتاج الى اعطاء بيانات دخولك لكى تشاهد الكورس</li>
                                       <li>يمكنك الحصول على شهادة معتمده بعد التواصل معنا</li>
                                       <li>تحميل دروس الكورس بالكامل مجانا بجودة عالية</li>
                                    </ul>
                                </div>
                                  <div class="col-lg-12 text-center">

                                    <a href="<?php echo e(url('/')); ?>/course/<?php echo e($course->id); ?>/<?php echo e($course->slug); ?>" class="main-btn-orange">شاهد الكورس و ابدء التعلم مجانا</a>
                                  </div>

                              </div>

                          </div>
                      </div>
                   <div class="row">

                       <div class="col-lg-12 ">
                        <a href="<?php echo e(url('/courses/cat')); ?>" class="main-btn-blue no-margin"> للذهاب مباشرة الى قسم الكورسات  اضغط هنا <i class="fa   fa-rocket"></i></a>
                       </div>
                   </div>
			    </div>
   </div>


<div class="space"></div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>