<?php $__env->startSection('title', 'Edit User'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
      </h1>
      
    </section>
    <!-- Main content -->
<section class="content">
    <div class="row">    
        <div class="col-12 col-lg-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Edit <strong style="color: #5fa7da">Admin</strong>&nbsp &nbsp</h3>
                </div>

                <div class="box-body">
                <form action="<?php echo e(route('updateUser')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12" align="center">
                                <div class="control-group">
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 150px; height:100px;">
                                                <img src="<?php echo e(url('/img/user/'.$user->image)); ?>"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail"
                                                 style="width: 150px; height:100px;"></div>
                                            <div>
                                                <small class="text text-danger"><?php echo e($errors->first('image')); ?></small>

                                                <span class="btn btn-file">
    												<span class="fileupload-new btn btn-primary">Select image</span>
    												<span class="fileupload-exists btn btn-info">Change</span>
                                                        <input type="file" name="image" />
                                                    </span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                            <input type="hidden" name="id" value="<?php echo e($user->users_id); ?>">

                            
                            
                                
                                
                            
                            


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Email : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" value="<?php echo e($user->email); ?>" placeholder="Email" required>
                                        <small class="text text-danger"><?php echo e($errors->first('password')); ?></small>
                                    </div>    
                                </div>
                            </div>



                            
                            
                                
                                
                            
                            


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>User Type:</strong></div>
                                    <div class="col-md-9 demo-radio-button">
                                        
                                        <input type="radio"  id="radio_1" class="with-gap" name="user_type" value="admin" <?php if($user->user_type=='admin') echo 'checked'; ?>>
                                        <label for="radio_1">Admin</label>


                                        <input type="radio"  id="radio_2" class="with-gap" name="user_type" value="user" <?php if($user->user_type=='traveller') echo 'checked'; ?>> <label for="radio_2">Traveller</label>

                                        <input type="radio" id="radio_3" class="with-gap" name="user_type" value="user" <?php if($user->user_type=='vendor') echo 'checked'; ?>> 
                                         <label for="radio_3">Vendor</label>
                                        <small class="text text-danger"><?php echo e($errors->first('user_type')); ?></small>
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
                                                Cancel&nbsp;&nbsp;
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

     <script src="<?php echo e(url('/backend/assets/vendor_plugins/iCheck/icheck.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>