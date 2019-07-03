<?php
    $title = __('Posts');
?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($title); ?></h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><?php echo e(__('Author')); ?></th>
                    <th><?php echo e(__('Title')); ?></th>
                    <th><?php echo e(__('Body')); ?></th>
                    <th><?php echo e(__('Created')); ?></th>
                    <th><?php echo e(__('Updated')); ?></th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td>
                        <a href="<?php echo e(url('users/' . $post->user->id)); ?>">
                            <?php echo e($post->user->name); ?>

                        </a>
                    </td>
                    <td>
                        <a href="<?php echo e(url('posts/'.$post->id)); ?>"><?php echo e($post->title); ?></a>
                    </td>
                    <td><?php echo e($post->body); ?></td>
                    <td><?php echo e($post->created_at); ?></td>
                    <td><?php echo e($post->updated_at); ?></td>
                 </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php echo e($posts->links()); ?>

</div>
@endsectio
<?php echo $__env->make('layouts.my', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\firstlaravel\resources\views/posts/index.blade.php ENDPATH**/ ?>