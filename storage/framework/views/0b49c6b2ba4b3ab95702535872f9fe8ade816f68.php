<?php $__env->startSection('title', 'Create Vendor'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Vendor
      </h1>
      
    </section>
    <!-- Main content -->
<section class="content">
    <div class="row">    
        <div class="col-12 col-lg-10">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Create <strong style="color: #5fa7da">Vendor</strong>&nbsp &nbsp</h3>
                </div>
               
                <div class="box-body">
                <form action="<?php echo e(route('storeVendor')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>


                    <div class="row">

                        <div class="col-md-4">
                            <div class="control-group">
                                <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 150px; height:100px;">
                                            <img src="<?php echo e(url('public/backend/images/avatar2.png')); ?>"/>
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail"
                                             style="width: 150px; height:100px;"></div>
                                        <div>
												<span class="btn btn-file">
												<span class="fileupload-new btn btn-primary">Select image</span>
												<span class="fileupload-exists btn btn-info">Change</span>
                                                    <input type="file" name="image" required/>
                                                </span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4"><strong>Name : *</strong></div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                                        <small class="text text-danger"><?php echo e($errors->first('name')); ?></small>

                                    </div>
                                </div>
                             </div>   
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4"><strong>Email : *</strong></div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                                        <small class="text text-danger"><?php echo e($errors->first('email')); ?></small>

                                    </div>
                                </div>
                            </div> 


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4"><strong>Address : *</strong></div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="address" placeholder="Address">
                                        <small class="text text-danger"><?php echo e($errors->first('address')); ?></small>

                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4"><strong>Contact</strong></div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="contact" placeholder="Moblie">
                                        <small class="text text-danger"><?php echo e($errors->first('address')); ?></small>

                                    </div>
                                </div>
                            </div>    



                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4"><strong>Password</strong></div>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                        <small class="text text-danger"><?php echo e($errors->first('password')); ?></small>

                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4"><strong>Confirm Password</strong></div>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" name="password_confirmation"
                                               placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>    
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        <div align="center">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;
                                                Save Changes 
                                            </button>&nbsp;
                                            <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;&nbsp;
                                                Cancel &nbsp;&nbsp;
                                            </button>
                                        </div>
                                    </div>
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