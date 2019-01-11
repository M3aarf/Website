<?php
use   Illuminate\Http\Request;
use   inoledge\course;
use   Illuminate\Support\Facades\Storage;
$courses = course::all()->take(37);
?>

<?php $__env->startSection('suggest'); ?>

              <div class="col-lg-3 order-lg-1 order-md-1 order-sm-3  order-xs-3  ">
                <div>
                  <div class="panel stickyy">

                     <div class="panel-header">
                         <h2>ابدء اتعلم الآن</h2>
                     </div>
                     <div class="panel-content">
                         <?php $__currentLoopData = course::latest('created_at')->get()->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <div class="sug">

                             <a href="<?php echo e(url('/course/')); ?>/<?php echo e($course->id); ?>/<?php echo e($course->slug); ?>">

                             <img src="/storage/images/<?php echo e($course->image1); ?>" alt="<?php echo e($course->title); ?>">
                             <h6><?php echo e($course->title); ?></h6></a>
                         </div>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>

                  </div>

              </div>
			  <div class="ads-container">
          <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="item ">
                 <a href="<?php echo e(url('/')); ?>/<?php echo e($c->slug); ?>">
                <div class="tab-content">
                  <h3>
                      <?php echo e($c->title); ?>


                    </h3>
                </div> </a>
            </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
				</div>
<?php $__env->stopSection(); ?>
