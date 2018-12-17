
<?php

//include(app_path().'/classes/YoutubeDownloader.php');

use inoledge\classes\YoutubeDownloader;

$isRequest = false;
$isError = false;
$url = null;
$errorText = null;
$info = array();
$downloadInfo = array();
if (isset($id) && $id) {
	
    $isRequest = true;
    $id_ = $id;
	$url  ="https://www.youtube.com/watch?v=".$id_;
    try {
        $yd = new YoutubeDownloader($url);
        $info = $yd->getVideoInfo();
        $downloadInfo = $yd->getDownloadsInfo();
    } catch (Exception $e) {
        $isError = true;
        $errorText = $e->getMessage();
	    return  $errorText;
    }
}
?>


<!-- Meta Tags !-->
<?php $__env->startSection('pageTitle', 'تحميل '.$info['baseInfo']['name']); ?>
<?php $__env->startSection('pageDesc',  $info['baseInfo']['name']); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-9">
 <div class="panel-header">
    <h2>مركز تحميل الكورسات داخل منصة معارف التعليمية</h2>
	</div>
	<br>
	<?php if (isset($id) && $id) { ?>
    <div style="display:  <?= $isError ? 'block' : 'none' ?>">
        <div class="alert alert-danger" role="alert" id="error-block">
            <?= $errorText ?>
        </div>
    </div>

    <div style="display: <?= (!$isError && $isRequest) ? 'block' : 'none' ?>">
	<h4 class="text-secondary video-name"><?php echo e($course->title); ?> </h4>
        <h3 id="video-name"><?= $info['baseInfo']['name'] ?></h3 <br><br>
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
		<div class="sm-space"></div>
        <div class="row">
            
            <div class="col-md-12">
			<div class="main-box no-margin">
                <table id="download-list" class="table">
                    <thead>
                    <tr>
                        <th>صيغه الفيديو</th>
                        <th>حجم الدرس</th>
                        <th>لينكات التحميل</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($downloadInfo AS $dinfo): ?>
                        <?php
                        $isWithoutVideo = $dinfo['itagInfo']['withVideo'] === false;
                        $isWithoutAudio = $dinfo['itagInfo']['withAudio'] === false;
                        $isUnknownItag = is_null($dinfo['itagInfo']['withVideo']);
                        $itag = (int)$dinfo['youtubeItag'];
                        $a = 1;
                        ?>
                        <tr>
						<?php if( (strcmp('video/mp4',$dinfo['fileType']) == 0 ) && (!$isWithoutAudio) ) {?>
                            <td>    
                                <?= $dinfo['fileType'] ?>
                                <?php if ($isWithoutVideo): ?>
                                    <span class="label label-warning">No video</span>
                                <?php endif; ?>
                                <?php if ($isWithoutAudio): ?>
                                    <span class="label label-warning">No audio</span>
                                <?php endif; ?>
                                <?php if ($isUnknownItag): ?>
                                    <span class="label label-warning">Unknown itag <?= $dinfo['youtubeItag'] ?></span>
                                <?php endif; ?>
<!--                                <span class="label label-warning">Unknown itag --><?//= $dinfo['youtubeItag'] ?><!--</span>-->

                            </td>
                            <td><?= $dinfo['fileSizeHuman'] ?></td>
                            <td>
                                <a href="<?= $dinfo['url'] ?>" target="_blank" class="btn btn-success btn-sm" onclick="c_down(<?php echo e($course_id); ?>)">
                                    <span class="glyphicon glyphicon-circle-arrow-down"></span>
                                    تحميل الفيديو بشكل مباشر
                                </a>
                                <br>
                             
                            </td>
						<?php } ?>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
				</div>
				<a href="https://facebook.com/m3aarfcom" class="main-btn-blue" target="_blank"> إذا كان لديك اى مشكلة فى التحميل برجاء إرساله رساله لصفحتنا على الفيس بوك من هنا </a>
				<div class="sm-space"></div>
				<div class="main-box no-margin" style="border-right:3px solid #46a6e2;"> <a href="<?php echo e(url('/youtube/course/')); ?>/<?php echo e($course->id); ?>/<?php echo e($course->slug); ?>">
				<h5>
				لتحميل باقى الدروس اضغط هنا
				</h5>
				
				</a>
				<a href="<?php echo e(url('/course/')); ?>/<?php echo e($course->id); ?>/<?php echo e($course->slug); ?>">
				<h5 class="text-success">
				  لمشاهدة الكورس مباشرة بدون تحميل اضغط هنا
				</h5>
				</a>
				</div>
				
				<div class="alert alert-warning">
				<h4>فى حالة التحميل الغير مباشر وظهور الدرس فى شكل فيديو اتبع الخطوات الاتية </h4>
				<ul>
				  <li>سيظهر لك الدرس فى شكل فيديو اضغط على 3 نقط راسية فى اسفل اليمين </li>
				  <li>سيظهر لك كلمة Download اضغط عليها ليبدء التحميل بشكل مباشر</li>
				</ul>
				</div>
				<img style="max-width:100%;margin-top:20px;"src="<?php echo e(asset('/landingImages')); ?>/downloadinfo.png">
				<div class="sm-space"></div>
				<div class="main-box no-margin main-border">
				<b>اسم الدورة التدريبية: </b> <?php echo e($course->title); ?>  <br>  <b>اسم الدرس المراد تحميله: </b> <?php echo e($info['baseInfo']['name']); ?> <br> <b>وصف الكورس: </b><?php echo e($course->desc); ?>

				</div>
            </div>
        </div>
    </div>
	<?php }; ?>

	
	
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>