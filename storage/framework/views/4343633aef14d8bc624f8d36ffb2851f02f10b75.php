<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>App Name - <?php echo $__env->yieldContent('title'); ?></title>
    </head>

    <body>
        <?php $__env->startSection('sidebar'); ?>
            This is the master sidebar.
            <ul class="nav nav-pills pull-right">
                <li class="<?php echo e(Request::is('/') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                <li class="<?php echo e(Request::is('about') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('about')); ?>">About Us</a>
                </li>
                <li class="<?php echo e(Request::is('auth/login') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('auth/login')); ?>">Login</a>
                </li>
                <li class="<?php echo e(Request::is('foo') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('foo')); ?>">Foo</a>
                </li>
            </ul>

        <?php echo $__env->yieldSection(); ?>

        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>