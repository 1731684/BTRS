<?php $__env->startSection('title', 'Edit Guest'); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Guest
      </h1>
      
    </section>
    <!-- Main content -->
<section class="content">
    <div class="row">    
        <div class="col-12 col-lg-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Edit <strong style="color: #5fa7da">Guest</strong>&nbsp &nbsp</h3>
                </div>

                <div class="box-body">
                <form action="<?php echo e(route('updateGuest')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    

                    <div class="form-group">
                        <div class="row">
                            <input type="hidden" name="id" value="<?php echo e($guest->guests_id); ?>">
                            <div class="col-md-3"><strong>Name : *</strong></div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo e($guest->name); ?>" required>
                                <small class="text text-danger"><?php echo e($errors->first('name')); ?></small>
                            </div>
                        </div>
                    </div>

                            
                            
                            
                                
                                
                            


                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><strong>Contact</strong></div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="contact" value="<?php echo e($guest->contact); ?>" required>
                                <small class="text text-danger"><?php echo e($errors->first('contact')); ?></small>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div align="center">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;
                                        Save Changes
                                    </button>&nbsp;&nbsp;
                                    <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;&nbsp;
                                        Cancel &nbsp;&nbsp;
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