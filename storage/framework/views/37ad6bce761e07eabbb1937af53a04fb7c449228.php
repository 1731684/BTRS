<?php $__env->startSection('title', 'Create Booking'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Booking
      </h1>
      
    </section>

    <!-- Main content -->
<section class="content">
    <div class="row">    
        <div class="col-12 col-lg-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Create <strong style="color: #5fa7da">Booking</strong>&nbsp &nbsp</h3>
                </div>
               
                <div class="box-body">   
                    
                    <form action="<?php echo e(route('storeBooking')); ?>" method="post"  enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Traveller Name: *</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                    <select name="travellers_id" id="" class="form-control">
                                        <?php $__currentLoopData = $travellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key->travellers_id); ?>"><?php echo e($key->email); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <small class="text text-danger"><?php echo e($errors->first('travellers_id')); ?></small>
                                </div>
                          </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3"><label>Guest: *</label></div>
                                <div class="col-md-9">
                                    <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                     </div>
                                                </div>
                                    <select name="guests_id" id="" class="form-control">
                                        <?php $__currentLoopData = $guests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key->guests_id); ?>"><?php echo e($key->contact); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <small class="text text-danger"><?php echo e($errors->first('guests_id')); ?></small>
                                </div>
                            </div>
                            </div>
                        </div>

                    
                        <div class="form-group"> 
                            <div class="row">
                                    <div class="col-md-3"><label>Bus: *</label></div>
                                <div class="col-md-9">
                                    <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-bus"></i>
                                                     </div>
                                                </div>
                                    <select name="buses_id" id="" class="form-control">
                                        <?php $__currentLoopData = $buses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key->buses_id); ?>"><?php echo e($key->buses_title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <small class="text text-danger"><?php echo e($errors->first('buses_id')); ?></small>
                                </div>
                            </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row " >
                                <div class="col-md-3"><label>Seat: *</label></div>
                                <div class="col-md-9">
                                   <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-support"></i>
                                                     </div>
                                                </div>
                                        <input type="text" name="seat" class="form-control" placeholder="Select Your Seat" required >

                                    <small class="text text-danger"><?php echo e($errors->first('seat')); ?></small>
                                </div>
                            </div>
                        </div>
                        </div>
                   
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3"><label>Price: *</label></div>
                                <div class="col-md-9">
                                    <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-dollar"></i>
                                                     </div>
                                                </div>
                                    <input type="text" class="form-control" name="price" placeholder="Total Price " required>
                                    <small class="text text-danger"><?php echo e($errors->first('price')); ?></small>
                                </div>
                            </div>
                        </div>
                        </div>
                  

                        <div class="form-group">
                            <div class="row" >
                                <div class="col-md-3"><label>Profile: *</label></div>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-check"></i>
                                                     </div>
                                                </div>
                                        <select name="profile" id="profile" class="form-control">
                                            <option value="confirmed">confirmed  </option>
                                            <option value="cancelled">cancelled </option>
                                            <option value="pending">pending </option>
                                        </select>
                                        <small class="text text-danger"><?php echo e($errors->first('profile')); ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                      

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div align="center">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;
                                            Save Changes
                                        </button>
                                        &nbsp &nbsp
                                        <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;&nbsp;
                                            Cancel &nbsp &nbsp
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