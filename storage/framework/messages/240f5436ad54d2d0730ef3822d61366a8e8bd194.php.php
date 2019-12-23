<?php $__env->startSection('content'); ?>
<h1 class="h2">Dashboard</h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>