<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    
    <h2><?php echo e($title); ?></h2>
    <p><?php echo e($body); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/my', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\firstlaravel\resources\views/foo/foo4.blade.php ENDPATH**/ ?>