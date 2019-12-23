<?php $__env->startSection('content'); ?>
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Bold title</h1>
        <p class="lead my-3">Long text!!!</p>
        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>