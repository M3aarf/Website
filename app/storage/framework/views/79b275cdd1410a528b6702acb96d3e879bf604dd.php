

<?php

$c_title = 'تحميل '.$course->title;
$c_id = $course->id;
$c_desc = 'تحميل  تنزيل '.$course->desc;
$c_img = $course->image; 

?>
<?php $__env->startSection('pageTitle',  $c_title); ?>
<?php $__env->startSection('pageDesc',   $c_desc); ?>
<?php $__env->startSection('image',  $c_img); ?>


<?php $__env->startSection('content'); ?>

<div class="col-lg-9">

<h1 class="post_title"><?php echo e($c_title); ?></h1>
<a href="<?php echo e(url('/course')); ?>/<?php echo e($c_id); ?>/<?php echo e($course->title); ?>"><h4>لمشاهدة الكورس مباشر بدون تحميل اضغط هنا <h4></a>
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
<ul>

<?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<li>
<div class="row main-box">

	<div class="col-sm-8">
	<h3 class="lesson-download-title">
	<?php echo e($lesson->title); ?>

	</h3>
	</div>
	<div class="col-sm-4 text-center">
	
	<a class="main-btn-blue no-margin" target="_blank" href="<?php echo e(url('/')); ?>/youtube/<?php echo e($c_id); ?>/lesson/<?php echo e($lesson->link); ?>">تحميل الدرس</a>

	</div>
</div>
</li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>