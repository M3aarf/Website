<?php if($paginator->hasPages()): ?>
    <ul class="pagination pagination">
        
        <?php if($paginator->onFirstPage()): ?>
            <li class="disabled main-box"><span>الصفحة السابقة</span></li>
        <?php else: ?>
            <li class="main-box" ><a style="color:#d5460a;" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev">الصفحة السابقة</a></li>
        <?php endif; ?>
	
        
		
        <?php if($paginator->hasMorePages()): ?>
            <li class="main-box" ><a href="<?php echo e($paginator->nextPageUrl()); ?>" style="color:#d5460a;" rel="next">الصفحة القادمة</a></li>
        <?php else: ?>
            <li class="disabled main-box"><span>الصفحة القادمة</span></li>
        <?php endif; ?>
    </ul>
<?php endif; ?>