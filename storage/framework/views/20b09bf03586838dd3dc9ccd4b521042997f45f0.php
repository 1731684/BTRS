<?php $__env->startSection('title', 'Show Bus'); ?>

<?php $__env->startSection('content'); ?>
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
                            <h3 class="box-title">Show <strong style="color: #5fa7da">Bus</strong>&nbsp; &nbsp;</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12" align="center">
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail"
                                                         style="width: 195px; height:100px;">
                                                        <img src="<?php echo e(url('/img/bus/'.$bus->image)); ?>"/>
                                                    </div>
                                                    <div class="fileupload-preview fileupload-exists thumbnail"
                                                         style="width:195px; height:100px;"></div>
                                                    <div>
                                                        <small class="text text-danger"><?php echo e($errors->first('image')); ?></small>

                                                        <span class="btn btn-file">
    												<span class=" btn btn-primary">Image</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Name : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="buses_title" placeholder="Name"
                                               value="<?php echo e($bus->buses_title); ?>" disabled>
                                        <small class="text text-danger"><?php echo e($errors->first('buses_title')); ?></small>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Bus Number : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="vehicle_no"
                                               placeholder="Bus No" value="<?php echo e($bus->vehicle_no); ?>" disabled>
                                        <small class="text text-danger"><?php echo e($errors->first('vehicle_no')); ?></small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Bill Book No : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="billbook_no"
                                               value="<?php echo e($bus->billbook_no); ?>" placeholder="Bill Book No" disabled>
                                        <small class="text text-danger"><?php echo e($errors->first('billbook_no')); ?></small>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Bus Type</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo e($bus->bustypes->bustypes_title); ?>"
                                               class="form-control"
                                               disabled>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Vendor</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo e($bus->vendors->email); ?>" class="form-control"
                                               disabled>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Amenities : *</strong></div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="amenity" id="" cols="70" rows="4" style="resize: none;" disabled><?php echo e($bus->amenity); ?></textarea>
                                        <small class="text text-danger"><?php echo e($errors->first('amenity')); ?></small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Short Intro : *</strong></div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description" id="" cols="60" rows="4" style="resize: none" disabled><?php echo e($bus->description); ?></textarea>
                                        <small class="text text-danger"><?php echo e($errors->first('description')); ?></small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Driver1 : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="driver1" placeholder="Driver1"
                                               value="<?php echo e($bus->driver1); ?>" disabled>
                                        <small class="text text-danger"><?php echo e($errors->first('driver1')); ?></small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Contact No : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="contact1"
                                               placeholder="Driver1 Contact" value="<?php echo e($bus->contact1); ?>" disabled>
                                        <small class="text text-danger"><?php echo e($errors->first('contact1')); ?></small>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Driver2 : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="driver2" placeholder="Driver2"
                                               value="<?php echo e($bus->driver2); ?>" disabled>
                                        <small class="text text-danger"><?php echo e($errors->first('driver2')); ?></small>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Contact No : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="contact2"
                                               placeholder="Driver2 Contact" value="<?php echo e($bus->contact2); ?>" disabled>
                                        <small class="text text-danger"><?php echo e($errors->first('contact2')); ?></small>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Staff1 : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="staff1" placeholder="Staff1"
                                               value="<?php echo e($bus->staff1); ?>" disabled>
                                        <small class="text text-danger"><?php echo e($errors->first('staff1')); ?></small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Contact No : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="contact3"
                                               placeholder="Staff1 Contact" value="<?php echo e($bus->contact3); ?>" disabled>
                                        <small class="text text-danger"><?php echo e($errors->first('contact3')); ?></small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Staff2 : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="staff2" placeholder="Staff2"
                                               disabled>
                                        <small class="text text-danger"><?php echo e($errors->first('staff2')); ?></small>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Contact No : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="contact4"
                                               placeholder="Staff2 Contact" value="<?php echo e($bus->contact4); ?>" disabled>
                                        <small class="text text-danger"><?php echo e($errors->first('contact4')); ?></small>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div align="center">
                                            <a href="<?php echo e(route('buses')); ?>" class="btn btn-success">
                                                <i class="fa fa-check"></i>&nbsp;&nbsp;Procced
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>