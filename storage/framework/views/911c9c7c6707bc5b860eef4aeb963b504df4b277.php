<?php
    $title = __('Users');
?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($title); ?></h1>

    <?php if(Auth::check() && Auth::user()->isAdmin()): ?>
        
        <div class="mb-2">
            <a href="<?php echo e(url('users/create')); ?>" class="btn btn-primary">
                <?php echo e(__('Create')); ?>

            </a>
        </div>
    <?php endif; ?>
    
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><?php echo e(__('ID')); ?></th>
                    <th><?php echo e(__('Name')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->id); ?></td>
                        <td><a href="<?php echo e(url('users/'.$user->id)); ?>"><?php echo e($user->name); ?></a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php echo e($users->links()); ?> 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.my', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\firstlaravel\resources\views/users/index.blade.php ENDPATH**/ ?>