   


<?php $__env->startSection('content'); ?>




<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
   <div class="col-lg-12">
   <div class="panel panel-default articles" style="padding:25px;">
					  <table id="camp" class="table table-hover table-condensed" style="width:100%">
                                <thead>
                                    <tr style="text-align:right;">
                                        <th width="5%" align="right" style="text-align:right;padding-right:25px;" >رقم</th>
                                        <th width="30%" align="right" style="text-align:right;padding-right:25px;">الاي بي</th>
                                        <th width="20%" align="right" style="text-align:right;padding-right:25px;">الدولة</th>
                                        <th width="10%" align="right" style="text-align:right;padding-right:25px;">البلد</th>
                                        <th width="10%" align="right" style="text-align:right;padding-right:25px;">توقيت دخوله</th>
                                    </tr>
                                </thead>
                              </table>
				
				</div>
				</div>
				
				
</div>	

<?php $__env->stopSection(); ?>			
<?php echo $__env->make('admin.layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>