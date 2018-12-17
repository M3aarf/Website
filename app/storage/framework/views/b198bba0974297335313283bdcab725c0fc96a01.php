<?php

use inoledge\course;
$courses_titles = course::select('slug','title')->orderByRaw("RAND()")->take(18)->get();
?>
	<div class="courses-submenu">
						<div class="container">
							<ul >
							<?php $__currentLoopData = $courses_titles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							  <li>
								<a href="<?php echo e(url('/')); ?>/<?php echo e($c->slug); ?>"><?php echo e($c->title); ?></a>
							  </li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                              <li style="background-color:#194a69"> <a href="<?php echo e(url('/تعليم-مجانا')); ?>"> للمزيد من الكورسات اضغط هنا </a> </li>							
							</ul>
						</div>
	</div>
