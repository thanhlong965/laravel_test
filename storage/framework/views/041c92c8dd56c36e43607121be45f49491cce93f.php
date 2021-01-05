<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Long</title>
	<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
	<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="content">
	<h1>Long</h1>
	<?php echo $__env->yieldContent('NoiDung'); ?>
</div>
	<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
</body>
</html><?php /**PATH C:\Users\MyPC\Desktop\Training-10-2020\Laravel-test\blog\resources\views/layout/master.blade.php ENDPATH**/ ?>