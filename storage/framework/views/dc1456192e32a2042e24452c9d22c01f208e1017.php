
<?php $__env->startSection('NoiDung'); ?>
<h2>PHP</h2>
<div style="color: red">
<?php $khoahoc1= array('PHP','IOS','ASP','Android');?>
<?php $__empty_1 = true; $__currentLoopData = $khoahoc1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<?php echo e($value); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<?php echo e("Mang rong"); ?>

<?php endif; ?>
</div>

<!-- <?php if($khoahoc !=""): ?>
<?php echo $khoahoc; ?>

<?php else: ?>
<?php echo e("Khong co khoa hoc"); ?>

<?php endif; ?> -->
<br>
<!-- <?php for($i=1;$i<=10;$i++): ?>
	<?php echo e($i." "); ?>

<?php endfor; ?> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MyPC\Desktop\Training-10-2020\Laravel-test\blog\resources\views/pages/php.blade.php ENDPATH**/ ?>