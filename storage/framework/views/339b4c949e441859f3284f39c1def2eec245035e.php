<form action="<?php echo e(route('postform')); ?>" method="post" >
<!-- <?php echo e(csrf_field()); ?> -->
<?php echo csrf_field(); ?>
<input type="text" name="hoten">
<input type="submit">
</form><?php /**PATH C:\Users\MyPC\Desktop\Training-10-2020\Laravel-test\blog\resources\views/post.blade.php ENDPATH**/ ?>