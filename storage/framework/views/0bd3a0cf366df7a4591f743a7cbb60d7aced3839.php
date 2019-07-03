<?php
    $title = __('Edit') . ': ' . $post->title;
?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($title); ?></h1>
    <form action="<?php echo e(url('posts/'.$post->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
             <label for="title"><?php echo e(__('Title')); ?></label>
    <input id="title" type="text" class="form-control <?php if($errors->has('title')): ?> is-invalid <?php endif; ?>" name="title" value="<?php echo e(old('title', $post->title)); ?>" required autofocus>
            <?php if($errors->has('title')): ?>
                <span class="invalid-feedback" role="alert">
                    <?php echo e($errors->first('title')); ?>

                </span>
            <?php endif; ?>
        </div>        
        <div class="form-group">
            <label for="body"><?php echo e(__('Body')); ?></label>
            <textarea id="body" class="form-control <?php if($errors->has('body')): ?> is-invalid <?php endif; ?>" name="body" rows="8" required><?php echo e(old('body' , $post->body)); ?></textarea>
            <?php if($errors->has('body')): ?>
                <span class="invalid-feedback" role="alert">
                    <?php echo e($errors->first('body')); ?>

                </span>
            <?php endif; ?>        
        </div>
        <button type="submit" name="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.my', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\firstlaravel\resources\views/posts/edit.blade.php ENDPATH**/ ?>