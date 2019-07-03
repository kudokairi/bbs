<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php if(! Request::is('/')): ?><?php echo e($title); ?> | <?php endif; ?><?php echo e(env('APP_NAME')); ?></title>

    
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav mr-auto">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('posts')); ?>"><?php echo e(__('Posts')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('users')); ?>"><?php echo e(__('Users')); ?></a>
                        </li>
                    </ul>

                    
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item">
                            <a href="<?php echo e(url('posts/create')); ?>" id="new-post" class="btn btn-success">
                                <?php echo e(__('New Post')); ?>

                            </a>
                        </li>

                        
                        <?php if(auth()->guard()->guest()): ?>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php else: ?>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                                    <a class="dropdown-item" href="<?php echo e(url('users/'.auth()->user()->id)); ?>">
                                        <?php echo e(__('Profile')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\firstlaravel\resources\views////layouts/my.blade.php ENDPATH**/ ?>