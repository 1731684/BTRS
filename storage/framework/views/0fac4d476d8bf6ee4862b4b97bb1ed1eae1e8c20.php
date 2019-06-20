<?php $__env->startSection('title', 'Edit Bus'); ?>

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(url('/jasny/jasny-bootstrap.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(url('/jasny/jasny-bootstrap-responsive.min.css')); ?>"/>
    <!-- himg CSS -->
    <link rel="stylesheet" href="<?php echo e(url('/css/animation.css')); ?>"/>


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Bus
            </h1>

        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Edit <strong style="color: #5fa7da">Bus</strong>&nbsp &nbsp</h3>
                        </div>

                        <div class="box-body">
                            <form action="<?php echo e(route('updateBus')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="id" value="<?php echo e($bus->buses_id); ?>">

                                
                                    
                                        
                                            
                                                
                                                    
                                                        
                                                             
                                                            
                                                        
                                                        
                                                             
                                                        
                                                            

                                                            
    												
    												
                                                        
                                                    
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                    
                                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Profile</strong></div>
                                        <div class="col-md-9">
                                            <select name="profile" id="" class="form-control">
                                                    <option value="active"
                                                            <?php if($bus->profile=='active'): ?> selected <?php endif; ?>>Active</option>
                                                <option value="hold"
                                                            <?php if($bus->profile=='hold'): ?> selected <?php endif; ?>>Hold</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Name : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="buses_title"
                                                   placeholder="Name" value="<?php echo e($bus->buses_title); ?>" required>
                                            <small class="text text-danger"><?php echo e($errors->first('buses_title')); ?></small>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Bus Number : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="vehicle_no"
                                                   placeholder="Bus No" value="<?php echo e($bus->vehicle_no); ?>" required>
                                            <small class="text text-danger"><?php echo e($errors->first('vehicle_no')); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Bill Book No : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="billbook_no"
                                                   value="<?php echo e($bus->billbook_no); ?>" placeholder="Bill Book No">
                                            <small class="text text-danger"><?php echo e($errors->first('billbook_no')); ?></small>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Bus Type</strong></div>
                                        <div class="col-md-9">
                                            <select name="bustypes_id" id="" class="form-control">
                                                <?php $__currentLoopData = $bustypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($key->bustypes_id); ?>"
                                                            <?php if($key->bustypes_id==$bus->bustypes_id): ?> selected <?php endif; ?>><?php echo e($key->bustypes_title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Vendor</strong></div>
                                        <div class="col-md-9">
                                            <select name="vendors_id" id="" class="form-control">
                                                <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($key->vendors_id); ?>"
                                                            <?php if($key->vendors_id==$bus->vendors_id): ?> selected <?php endif; ?>><?php echo e($key->email); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Amenities : *</strong></div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="amenity" id="" cols="70" rows="4" style="resize: none;"><?php echo e($bus->amenity); ?></textarea>
                                            <small class="text text-danger"><?php echo e($errors->first('amenity')); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Short Intro : *</strong></div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="description" id="" cols="60" rows="4" style="resize: none"><?php echo e($bus->description); ?></textarea>
                                            <small class="text text-danger"><?php echo e($errors->first('description')); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Driver1 : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="driver1" placeholder="Driver1"
                                                   value="<?php echo e($bus->driver1); ?>">
                                            <small class="text text-danger"><?php echo e($errors->first('driver1')); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Contact No : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="contact1"
                                                   placeholder="Driver1 Contact" value="<?php echo e($bus->contact1); ?>">
                                            <small class="text text-danger"><?php echo e($errors->first('contact1')); ?></small>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Driver2 : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="driver2" placeholder="Driver2"
                                                   value="<?php echo e($bus->driver2); ?>">
                                            <small class="text text-danger"><?php echo e($errors->first('driver2')); ?></small>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Contact No : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="contact2"
                                                   placeholder="Driver2 Contact" value="<?php echo e($bus->contact2); ?>">
                                            <small class="text text-danger"><?php echo e($errors->first('contact2')); ?></small>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Staff1 : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="staff1" placeholder="Staff1"
                                                   value="<?php echo e($bus->staff1); ?>">
                                            <small class="text text-danger"><?php echo e($errors->first('staff1')); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Contact No : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="contact3"
                                                   placeholder="Staff1 Contact" value="<?php echo e($bus->contact3); ?>">
                                            <small class="text text-danger"><?php echo e($errors->first('contact3')); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Staff2 : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="staff2" placeholder="Staff2">
                                            <small class="text text-danger"><?php echo e($errors->first('staff2')); ?></small>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Contact No : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="contact4"
                                                   placeholder="Staff2 Contact" value="<?php echo e($bus->contact4); ?>">
                                            <small class="text text-danger"><?php echo e($errors->first('contact4')); ?></small>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div align="center">
                                                <button type="submit" class="btn btn-success"><i
                                                            class="fa fa-check"></i>&nbsp;&nbsp;
                                                    Save Changes&nbsp;&nbsp;
                                                </button>
                                                &nbsp&nbsp
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