<?php $__env->startSection('title', 'Edit Bookings'); ?>

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
                            <h3 class="box-title">Edit <strong style="color: #5fa7da">Booking</strong>&nbsp &nbsp</h3>
                        </div>

                        <div class="box-body">
                            <form action="<?php echo e(route('bookings')); ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo e($booking->bookings_id); ?>">
                                <?php echo e(csrf_field()); ?>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Booker : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" value="<?php echo e($booking->users->email); ?>" class="form-control"
                                                   disabled>
                                            <small class="text text-danger"><?php echo e($errors->first('users_id')); ?></small>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Bus : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"
                                                   value="<?php echo e($booking->buses->buses_title); ?>" disabled>
                                            <small class="text text-danger"><?php echo e($errors->first('buses_id')); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Route : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" disabled
                                                   value="<?php echo e($booking->routes->routes_title); ?>">
                                            <small class="text text-danger"><?php echo e($errors->first('routes_id')); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Departure Date : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" disabled
                                                   value="<?php echo e($booking->schedules->departure_date); ?>">
                                            <small class="text text-danger"><?php echo e($errors->first('routes_id')); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Bus Number : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?php echo e($booking->buses->vehicle_no); ?>"
                                                   disabled>
                                            <small class="text text-danger"><?php echo e($errors->first('buses_id')); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row ">
                                        <div class="col-md-3"><strong>Seat : *</strong></div>
                                        <div class="col-md-9">

                                            <input type="text" value="<?php echo e($booking->seat); ?>" class="form-control" disabled>

                                            <small class="text text-danger"><?php echo e($errors->first('seat')); ?></small>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row ">
                                        <div class="col-md-3"><strong>Price : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="price"
                                                   value="<?php echo e($booking->price); ?>" disabled>
                                            <small class="text text-danger"><?php echo e($errors->first('price')); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row ">
                                        <div class="col-md-3"><strong>Status : *</strong></div>
                                        <div class="col-md-9">
                                            <select name="profile" id="select_profile" class="form-control" disabled>
                                                <option value="confirmed"
                                                        <?php if($booking->profile=="confirmed"): ?> selected <?php endif; ?>>
                                                    confirmed
                                                </option>
                                                <option value="cancelled"
                                                        <?php if($booking->profile=="cancelled"): ?> selected <?php endif; ?>>
                                                    cancelled
                                                </option>
                                                <option value="pending"
                                                        <?php if($booking->profile=="pending"): ?> selected <?php endif; ?>>pending
                                                </option>
                                            </select>
                                            <small class="text text-danger"><?php echo e($errors->first('profile')); ?></small>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div align="center">
                                                <button type="submit" class="btn btn-success"><i
                                                            class="fa fa-check"></i>&nbsp;&nbsp;
                                                    Save Changes
                                                </button>
                                                <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;&nbsp;
                                                    Cancel
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