<form action="<?php echo e(route('postFile')); ?>" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
	<input type="file" name="myFile">
	<input type="submit">
</form><?php /**PATH C:\Users\MyPC\Desktop\Training-10-2020\Laravel-test\blog\resources\views/postFile.blade.php ENDPATH**/ ?>