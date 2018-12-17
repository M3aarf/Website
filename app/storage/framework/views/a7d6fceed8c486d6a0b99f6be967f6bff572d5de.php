
<?php if(count($errors) > 0): ?>

    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
        <div class="alert alert-danger text-center" dir="rtl">

            <?php echo e($error); ?>

                 
        </div>  

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
<?php endif; ?>
<?php if(session('error')): ?>
     <div class="alert alert-danger text-center" dir="rtl">
           <?php echo e(session('error')); ?>

     </div>
<?php endif; ?>
<?php if(session('success')): ?>
     <div class="alert alert-success text-center" dir="rtl" >
           <span class="direction:rtl"><?php echo e(session('success')); ?></span>
     </div>
<?php endif; ?>
