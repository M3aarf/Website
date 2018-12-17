<?php
 use Illuminate\Http\Request;
use  inoledge\article;
use  inoledge\course;
use  inoledge\tracks;
use  inoledge\courses;
use  inoledge\articlesCat;
use Illuminate\Support\Facades\Storage;

?>

<?php $__env->startSection('sidebar'); ?>
<div class="col-lg-3 order-lg-3 order-md-3 order-sm-2  order-xs-2    ">
    <div class="">
<div class="">
             <div class="panel-header">
                         <h2>المقالات  <i class="fa fa-angle-down"></i> </h2>
                </div>
            <div class="tab-content">
            <div id="home" class="  ">
                    <?php $articles =article::latest('created_at')->get()->take(5);?>
              <?php if(count($articles) > 0 ): ?>
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="/articles/<?php echo e($article->id); ?>/<?php echo e($article->slug); ?>"> <h3><?php echo e($article->title); ?></h3></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>    
               </div>
            </div>    
			<?php echo file_get_contents('js/sidebar_ads.js') ?>
			<div style="padding:4px;"></div>
               <div class="panel-header">
                         <h2> السفر <i class="fa fa-angle-down"></i> </h2>
                </div>
                <div class="tab-content">
               <div id="menu1" class="  ">
                       <?php $articles =article::where('catID',38)->orWhere('catID',37)->orWhere('catID',36)->get()->take(5) ?>
              <?php if(count($articles) > 0 ): ?>
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="/articles/<?php echo e($article->id); ?>/<?php echo e($article->slug); ?>"> <h3><?php echo e($article->title); ?></h3></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?> 
                </div>
                </div>
                <?php echo file_get_contents('js/sidebar_ads.js') ?>
				<div style="padding:4px;"></div>
                 <div class="panel-header">
                         <h2> الحياة العملية <i class="fa fa-angle-down"></i> </h2>
                </div>
                 <div class="tab-content">
                 	   <div id="menu3" class="  ">    
                    <?php $articles =article::where('catID',34)->orWhere('catID',35)->get()->take(5) ?>
              <?php if(count($articles) > 0 ): ?>
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="/articles/<?php echo e($article->id); ?>/<?php echo e($article->slug); ?>"> <h3><?php echo e($article->title); ?></h3></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?> 
                </div>
                 </div>
                <?php echo file_get_contents('js/sidebar_ads.js') ?>
				<div style="padding:4px;"></div>
                    <div class="panel-header">
                         <h2> المسارات التعليمية <i class="fa fa-angle-down"></i> </h2>
                </div>
                 <div class="tab-content">
                 	   <div id="menu3" class="">    
                    <?php $articles =tracks::all()->take(5); ?>
              <?php if(count($articles) > 0 ): ?>
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="/tracks/<?php echo e($article->id); ?>/<?php echo e($article->slug); ?>"> <h3><?php echo e($article->title); ?></h3></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?> 
                </div>
                 </div>
      
        <div class="panel">
		
                <div class="panel-header">
                         <h2>دورات تدريبية مجاناً</h2>
                </div>
          
                <div class="panel-content">
                    <?php $__currentLoopData = courses::all()->take(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                    <a  data-placement="top" title="<?php echo e($cat->title); ?>" data-toggle="popover" data-trigger="hover" data-content="<?php echo e(count(course::where('cat_id',$cat->id)->get())); ?>"  href="<?php echo e(url('courses/cat/')); ?>/<?php echo e($cat->id); ?>/<?php echo e($cat->slug); ?>"><span class="tag"><?php echo e($cat->title); ?></span></a>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
        </div>
</div>
</div>
    </div>
<?php $__env->stopSection(); ?>