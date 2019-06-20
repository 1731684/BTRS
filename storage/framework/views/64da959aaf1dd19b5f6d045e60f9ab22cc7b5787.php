<?php $__env->startSection('title', 'Welcome to Ecosanjal'); ?>
<?php $__env->startSection('content'); ?>
    <section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 work-section " style="text-align: justify; margin:0px 100px">
                <h3  style="color:#40d4e4;">EcoSanjal - Terms and Conditions</h3>

                <?php $__currentLoopData = $tnc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($t->description); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


             </div>
        </div>
    </div>    
</section>
<!-- page-section -->

<div id = "get-quote" class = "bg-color get-a-quote black text-center">
    <div class = "container" data-animation = "pulse">
        <div class = "row">
            <div class = "col-md-12">Do you need Help ?
                <a class = "black" href = "contact">Contact Us</a>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>