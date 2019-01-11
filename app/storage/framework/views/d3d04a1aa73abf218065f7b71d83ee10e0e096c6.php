<?php

use Illuminate\Http\Request;
use  inoledge\article;
use  inoledge\articlesCat;
use Illuminate\Support\Facades\Storage;
?>


<!-- Meta Tags !-->
<?php if($status == '0'): ?>



<?php endif; ?>
 <?php if($status == '1'): ?>
<?php $__env->startSection('pageTitle',  $post->title); ?>
<?php $__env->startSection('pageDesc',   str_limit(str_replace("&nbsp;", ' ', strip_tags($post->body)), $limit =150, $end = '...')); ?>
<?php $__env->startSection('keywords',  $post->keywords); ?>
<?php $__env->startSection('image',  $post->image); ?>
<?php else: ?>
 <?php header('Location: https://www.m3aarf.com'); ?>
<?php endif; ?>
<?php
function insertAd($content, $ad, $pos = 0){
  // $pos = 0 means randomly position in the content
  $count = substr_count($content, "<p>");
  $pos = rand(0,$count-1);
  if($count == 0  or $count <= $pos){
	  return $content;

  }
  else{
    if($pos == 0){
      $pos = rand (1, $count - 1);
    }
    $content = preg_replace('/<p>/', '<hrd>', $content, $pos + 1);
    $content = preg_replace('/<hrd>/', '<p>', $content, $pos);
    $content = str_replace('<hrd>', $ad . "\n<p>", $content);
    return $content;
  }
}


 ?>
<?php $__env->startSection('content'); ?>


           <div class="col-lg-9  ">
                       <?php if($status == '1'): ?>
						                          <h1 class="post_title" title="<?php echo e($post->title); ?>">

                               <?php echo e($post->title); ?>



                     </h1>

				   <div class="section main-border pad-15">
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
                   <div >
                  <nav aria-label="breadcrumb ">
							<ol class="breadcrumb color  main-border">
							<li class="breadcrumb-item color"><a class="color" href="<?php echo e(url('')); ?>"><i style="color:#72b2e2;margin-left: 5px;" class="fa fa-home"></i>الرئيسة</a></li>
							<li class="breadcrumb-item color"><a class="color" href="<?php echo e(url('')); ?>/مقالات">الاقسام</a></li>
							<li class="breadcrumb-item color"><a class="color" href="<?php echo e(url('/articles/cat/'.$cat->id)); ?>/<?php echo e($cat->slug); ?>"><?php echo e($cat->title); ?></a></li>
							</ol>
							</nav>
                    </div>
               <div style="margin-top:10px;" >
                    <?php if(!Auth::guest()): ?>
                <a href="/admin/articles/edit/<?php echo e($post->id); ?>" class="main-btn-orange">Edit</a>
                <?php echo Form::open(['action' => ['articles@destroy',$post->id],'method' => 'POST' ]); ?>

                     <?php echo e(Form::hidden('_method','DELETE')); ?>

                     <?php echo e(Form::submit('Delete',['class'=>'btn btn-danger'])); ?>

                <?php echo Form::close(); ?>

                    <?php endif; ?>
                   </div>
                 <div class="post_container">



                       <img title="<?php echo e($post->title); ?>" class="post_main_image" src="/storage/images/<?php echo e($post->image); ?>">
                       <div class="post_content">
                           <div class="row">
                               <div class="col-lg-3 ">
                                   <div class="related_posts_side ">
                                       <span class="highlight">مواضيع ذات صلة</span>
                                       <ul>
                                           <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <a href="<?php echo e(url('/articles')); ?>/<?php echo e($art->id); ?>/<?php echo e($art->slug); ?>"><li><div class="text">
                                                <?php echo e($art->title); ?>

                                            </div>
                                         </li></a>

                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       </ul>
                                   </div>

                               </div>
                               <div class="col-lg-9 ">
                                   <div class="content">
                                   <?php echo insertAd($post->body,file_get_contents('js/ads_in_article.js'),0); ?>

                                   </div>
      <?php echo file_get_contents('js/ads_in_article.js') ?>

								   </div>
                           </div>
                           <br>
						   <a href="https://www.facebook.com/m3aarfcom" class="main-btn-blue"> <h5> ليصلك منشورتنا وكل جديد على الفيس بوك اضغط هنا </h5></a>
						   <br>
                 <ul  id="breadcrumb">
                  <li><a href="/"><span style="line-height:40px;" class="fa fa-home fa-2x"> </span></a></li>
                  <li><a href="/مقالات"><span class="title">المقالات</span> </a></li>
                  <li><a href="<?php echo e(url('/articles/cat/'.$cat->id)); ?>/<?php echo e($cat->slug); ?>"><span class="title"><?php echo e($cat->title); ?></span> </a></li>

                </ul>
                     </div>

                 </div>

                  <?php else: ?>


                 <?php endif; ?>
				 <related>
				 <h2 class="title-border">اقرأ ايضا</h2>
				    <div class="row">
                          <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
					 </related>

                                   <div class="subsc">

                        <?php echo $__env->make('inc/subsc', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    </div>

 <?php if($status == '1'): ?>
	 <?php $i = count($related); $r = rand(2,$i-1) ?>


	 <?php if($i > 2): ?>

   	    <a href="<?php echo e(url('/articles')); ?>/<?php echo e(($related[$r])->id); ?>/<?php echo e(($related[$r])->slug); ?>">

			<div class="suggest_article">


			 <?php echo e(($related[$r])->title); ?>


			  </div>
		  </a>
	<?php else: ?>
		 <a href="<?php echo e(url('/articles')); ?>/<?php echo e(($related[0])->id); ?>/<?php echo e(($related[0])->slug); ?>">

			<div class="suggest_article">

			 <?php echo e(($related[0])->title); ?>


			  </div>
		  </a>
    <?php endif; ?>

  <?php endif; ?>
           </div>







<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>