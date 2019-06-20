<?php $__env->startSection('title', 'Edit Routes'); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Route
      </h1>
    </section>
    <!-- Main content -->
<section class="content">
    <div class="row">    
        <div class="col-12 col-lg-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Edit <strong style="color: #5fa7da">Route</strong>&nbsp &nbsp</h3>
                </div>

                <div class="box-body">
                <form action="<?php echo e(route('updateRoute')); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo e($route->routes_id); ?>">

                    <?php echo e(csrf_field()); ?>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><strong>Title : *</strong></div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="routes_title" value="<?php echo e($route->routes_title); ?>" placeholder="Title" >
                                <small class="text text-danger"><?php echo e($errors->first('routes_title')); ?></small>
                            </div>
                        </div>
                    </div>

                    <?php $__currentLoopData = $destination; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3"><strong>Location<?php echo ++$key; ?> : *</strong></div>
                                <div class="col-md-9">
                                    <select class="form-control" id="educationDate" name="destination[]">
                                        <option value="">Select City</option>
                                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($data->cities_title); ?>" <?php if($data->cities_title==$value): ?> selected <?php endif; ?>><?php echo e($data->cities_title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                        

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div align="center">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;
                                        Save Changes
                                    </button>&nbsp;&nbsp;
                                    <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;&nbsp;
                                        Cancel&nbsp;&nbsp;
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>