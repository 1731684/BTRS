<?php $__env->startSection('title', 'Welcome to Ecosanjal'); ?>
<?php $__env->startSection('content'); ?>
    <section class="page-section" style="margin: 0px 100px">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 work-section ">
                <h3  style="color:#40d4e4;">Frequently asked questions</h3>

                <div class="panel-group list-style" id="accordion">
                    <div id="mix-container" class="portfolio-grid">
                        <?php $k=0 ?>
                        <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $k++ ?>
                        <div class="panel panel-default mix panel-bg all">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <div class="number-circle"><?php echo e($k); ?></div>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo e($k); ?>"><?php echo e($f->question); ?></a>
                                </div>
                            </div>
                            <div id="collapse<?php echo e($k); ?>" class="panel-collapse collapse ">
                                <div class="panel-body">
                                    <?php echo $f->answer; ?>

                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                        
                    </div>
                </div>
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