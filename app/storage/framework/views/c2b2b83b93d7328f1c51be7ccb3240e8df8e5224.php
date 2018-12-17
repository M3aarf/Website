<?php $__env->startSection('sidebar'); ?>	
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
		
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo e(isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email); ?></div>

			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li class="active"><a href="<?php echo e(url('/dashboard')); ?>"><em class="fa fa-dashboard">&nbsp;</em> لوحة التحكم</a></li>
			<li><a href="<?php echo e(url('/admin/articles')); ?>"><em class="fa fa-pencil">&nbsp;</em> المقالات</a></li>
			<li><a href="<?php echo e(url('/admin/courses')); ?>"><em class="fa fa-play">&nbsp;</em> الكورسات</a></li>
			<li><a href="<?php echo e(url('/admin/tracks')); ?>"><em class="fa fa-clone">&nbsp;</em> المسارات</a></li>
			<li><a href="<?php echo e(url('/admin/compaigns')); ?>"><em class="fa fa-bullhorn">&nbsp;</em> حملات التسويق</a></li>
			<li><a href="<?php echo e(url('/admin/downloads')); ?>"><em class="fa fa-download">&nbsp;</em> التحميلات</a></li>
	</div><!--/.sidebar-->
<?php $__env->stopSection(); ?>