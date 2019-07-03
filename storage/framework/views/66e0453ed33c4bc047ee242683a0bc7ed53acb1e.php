<?php
    $title = __('User') . ': ' . $user->name;
?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($title); ?></h1>

    
    
    <?php if(Auth::check() && !Auth::user()->isAdmin($user->id)): ?>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $user)): ?>
    <div>
        <a href="<?php echo e(url('users/'.$user->id.'/edit')); ?>" class="btn btn-primary">
            <?php echo e(__('Edit')); ?>

        </a>
        <?php $__env->startComponent('components.btn-del'); ?>
            <?php $__env->slot('controller', 'users'); ?>
            <?php $__env->slot('id', $user->id); ?>
            <?php $__env->slot('name', $user->title); ?>
         <?php echo $__env->renderComponent(); ?>
    </div>
    <?php endif; ?>
    <?php endif; ?>

    
    <dl class="row">
        <dt class="col-md-2"><?php echo e(__('ID')); ?></dt>
        <dd class="col-md-10"><?php echo e($user->id); ?></dd>
        <dt class="col-md-2"><?php echo e(__('Name')); ?></dt>
        <dd class="col-md-10"><?php echo e($user->name); ?></dd>
        <dt class="col-md-2"><?php echo e(__('E-Mail Address')); ?></dt>
        <dd class="col-md-10"><?php echo e($user->email); ?></dd>
    </dl>
    
    <h2><?php echo e(__('Posts')); ?></h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><?php echo e(__('Title')); ?></th>
                    <th><?php echo e(__('Body')); ?></th>
                    <th><?php echo e(__('Created')); ?></th>
                    <th><?php echo e(__('Updated')); ?></th>

                    
                    <?php if(auth()->guard()->check()): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $user)): ?>
                            <th></th>
                        <?php endif; ?>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <a href="<?php echo e(url('posts/' . $post->id)); ?>">
                                <?php echo e($post->title); ?>

                            </a>
                        </td>
                        <td><?php echo e($post->body); ?></td>
                        <td><?php echo e($post->created_at); ?></td>
                        <td><?php echo e($post->updated_at); ?></td>
                       
                        <?php if(auth()->guard()->check()): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $user)): ?>
                        <td nowrap>
                            <a href="<?php echo e(url('posts/' . $post->id . '/edit')); ?>" class="btn btn-primary">
                                <?php echo e(__('Edit')); ?>

                            </a>
                            <?php $__env->startComponent('components.btn-del'); ?>
                                <?php $__env->slot('controller', 'posts'); ?>
                                <?php $__env->slot('id', $post->id); ?>
                                <?php $__env->slot('name', $post->title); ?>
                            <?php echo $__env->renderComponent(); ?>
                        </td>
                        <?php endif; ?>
                        <?php endif; ?>
                     </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php echo e($user->posts->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.my', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\firstlaravel\resources\views/users/show.blade.php ENDPATH**/ ?>