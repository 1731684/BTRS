<?php $__env->startSection('title', 'View Bookings'); ?>
<?php $__env->startSection('content'); ?>



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Schedule
            </h1>

        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Show <strong style="color: #5fa7da">Schedule</strong>&nbsp &nbsp</h3>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Booker</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo e($booking->users->email); ?>" class="form-control"
                                               disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Bus Name : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo e($booking->buses->buses_title); ?>"
                                               disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Route</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo e($booking->routes->routes_title); ?>"
                                               class="form-control"
                                               disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Schedule</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo e($booking->schedules->departure_date); ?>"
                                               class="form-control"
                                               disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Departure Time</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo e($booking->schedules->departure_time); ?>"
                                               class="form-control"
                                               disabled>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Seat : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" name="seat" class="form-control" value="<?php echo e($booking->seat); ?> "
                                               disabled>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Bus Number : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo e($booking->buses->vehicle_no); ?>"
                                               disabled>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Price : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="price" value="<?php echo e($booking->price); ?>"
                                               disabled>

                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Profile : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo e($booking->profile); ?>" disabled>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div align="center">
                                            <a href="<?php echo e(route('bookings')); ?>" class="btn btn-success"><i
                                                        class="fa fa-check"></i>&nbsp;&nbsp;
                                                Go Back
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