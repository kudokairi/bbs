<h3>
    <a href="<?php echo e(config('app.url')); ?>"><?php echo e(config('app.name')); ?></a>
</h3>
<p>
    <?php echo e(__('Click link below and reset password.')); ?><br>
    <?php echo e(__('If you did not request a password reset, no further action is required.')); ?>

</p>
<p>
    <?php echo e($actionText); ?>: <a href="<?php echo e($actionUrl); ?>"><?php echo e($actionUrl); ?></a>
</p><?php /**PATH C:\xampp\firstlaravel\resources\views/emails/reset.blade.php ENDPATH**/ ?>