<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Artip</title>                
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="<?php echo e(asset('css/common.css')); ?>" rel="stylesheet" />
    </head>
    <body>
        <div class="container">
            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between">
                    <a class="p-2 text-muted" href="#">World</a>
                    <a class="p-2 text-muted" href="#">U.S.</a>
                    <a class="p-2 text-muted" href="#">Technology</a>
                    <a class="p-2 text-muted" href="#">Design</a>
                    <a class="p-2 text-muted" href="#">Culture</a>
                    <a class="p-2 text-muted" href="#">Business</a>
                    <a class="p-2 text-muted" href="#">Politics</a>
                    <a class="p-2 text-muted" href="#">Opinion</a>
                    <a class="p-2 text-muted" href="#">Science</a>
                    <a class="p-2 text-muted" href="#">Health</a>
                    <a class="p-2 text-muted" href="#">Style</a>
                    <a class="p-2 text-muted" href="#">Travel</a>
                </nav>
            </div>            
            <?php if($__env->yieldContent('content')): ?>
            <?php echo $__env->yieldContent('content'); ?>                    
            <?php endif; ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
