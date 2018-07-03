<?php $__env->startSection('content'); ?>
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_center">
            <center><h3 style="margin-top: 300px">
            	Selamat Datang DI WEB KRS <?php echo e(Auth::user()->name); ?>

            </h3></center>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>