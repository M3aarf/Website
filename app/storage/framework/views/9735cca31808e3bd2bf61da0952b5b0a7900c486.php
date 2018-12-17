<?php $__env->startSection('content'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
            <div class="col-lg-offset-2 col-lg-8">
    <?php echo Form::open(['action' => ['articles@update',$post->id],'method'=>'POST','class'=>'width','enctype'=>'multipart/form-data']); ?>

       <div class="form-group">

           <img src="/storage/images/<?php echo e($post->image); ?>" width="100">
        </div>
        <div class="form-group">

            <?php echo e(Form::label('title','Title')); ?>

            <?php echo e(Form::text('title',$post->title,['class'=>'form-control height','Placeholder'=>'Title'])); ?>


        </div>

        <div class="form-group">

            <?php echo e(Form::label('body','Body')); ?>

            <?php echo e(Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','Placeholder'=>'Title'])); ?>


        </div>
                
               <div class="form-group">
              <?php echo e(Form::file('image',['class'=>'form-control'])); ?>


          </div>
                 <div class="form-group">

              <?php echo e(Form::label('body','Body')); ?>

              <select class="form-control" name="cat_id">
                  <option value="<?php echo e($article_cat->id); ?>"><?php echo e($article_cat->title); ?></option>
                <?php $__currentLoopData = $cats_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
    </div>
     <?php echo e(Form::hidden('_method','PUT')); ?>

    <?php echo e(Form::submit('Submit',['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

    </div>
            </div>
</div>

<?php $__env->stopSection(); ?>	  
<?php echo $__env->make('admin.layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>