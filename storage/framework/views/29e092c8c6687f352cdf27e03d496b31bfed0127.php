<?php echo $__env->make('branches.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Page Content -->
<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('branches.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
