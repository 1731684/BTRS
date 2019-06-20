<?php $__env->startSection('title', 'Create Schedule'); ?>

<?php $__env->startSection('content'); ?>
    <style></style>
    <link href="<?php echo e(url('public/frontend/css/bootstrap-datepicker.css')); ?>" rel="stylesheet">
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
                <div class="col-12 col-lg-8">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Create <strong style="color: #5fa7da">Schedule</strong>&nbsp &nbsp
                            </h3>
                        </div>

                        <div class="box-body">

                            <form action="<?php echo e(route('storeSchedule')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Bus : *</strong></div>
                                        <div class="col-md-9">
                                            <select name="buses_id" id="" class="form-control">
                                                <?php $__currentLoopData = $buses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($key->buses_id); ?>"><?php echo e($key->buses_title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
<div class="row">&ensp;</div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Route : *</strong></div>
                                        <div class="col-md-9">
                                            <select name="routes_id" id="routesValue" class="form-control">
                                                <?php $__currentLoopData = $routes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($key->routes_id); ?>"><?php echo e($key->routes_title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <small class="text text-danger"><?php echo e($errors->first('routes_id')); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">&ensp;</div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Departure Date: *</strong></div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="date" class="form-control datepicker"
                                                           name="departure_date"
                                                           placeholder=" Departure Date (dd-mm-yy) " required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" id="date"
                                                           autocomplete="off"
                                                           required>
                                                    <small class="text text-danger"><?php echo e($errors->first('departure_date')); ?></small>
                                                    <script type="text/javascript">
                                                        $('input[type="date"]').change(function(){
   alert(this.value.split("-").reverse().join("-")); 
});
                                                    </script>
                                                </div>

                                                <div class="col-md-6">
                                                    <input type="time" class="form-control" name="departure_time"
                                                           placeholder="00:00 am" autocomplete="off" required>
                                                    <small class="text text-danger"><?php echo e($errors->first('departure_time')); ?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">&ensp;</div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Arrival Date : *</strong></div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="date" name="arrival_date" class="form-control"
                                                           placeholder="Arrival Date (dd-mm-yy)" id="date"
                                                           autocomplete="off" required>
                                                    <small class="text text-danger"><?php echo e($errors->first('arrival_date')); ?></small>

                                                </div>
                                                <div class="col-md-6">
                                                    <input type="time" name="arrival_time" class="form-control"
                                                           placeholder="00:00 am" autocomplete="off" required>
                                                    <small class="text text-danger"><?php echo e($errors->first('arrival_time')); ?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">&ensp;</div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Shift : *</strong></div>
                                        <div class="col-md-9">
                                            <select name="shift" id="shift" class="form-control">
                                                <option value="day" class="form-control">Day</option>
                                                <option value="night" class="form-control">Night</option>
                                                <option value="none" class="form-control" selected>None</option>
                                            </select>
                                            <small class="text text-danger"><?php echo e($errors->first('shift')); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">&ensp;</div>

                                <!-- start of boarding point -->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Boarding Point : *</strong></div>
                                        <div class="col-md-9" id="boarding_points">

                                            <a href="#" id="showbutton"> <i class="fa fa-check"></i>&nbsp
                                                Select
                                                Here</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">&ensp;</div>

                                <!-- start of dropping point -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Dropping Point : *</strong></div>
                                        <div class="col-md-9" id="dropping_points">
                                            <a href="#" id="showdroppingbutton"><i class="fa fa-check"></i>&nbsp Select
                                                Here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of dropping point -->
                                <div class="row">&ensp;</div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div align="center">
                                                <button type="submit" class="btn btn-success"><i
                                                            class="fa fa-check"></i>&nbsp;&nbsp;
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

    <script>

        $(document).ready(function () {
            var value = $('#routesValue').val();
            $('#showbutton').click(function () {
                $.ajax({
                    type: "POST",
                    data: {"id": value},
                    url: "ajax/fetch",
                    beforeSend: function () {
                        $('#showbutton').html('loading please wait...');
                        $('#showdroppingbutton').html('loading please wait...');
                    },
                    success: function (response) {
                        var string = '';
                        var dropping='';
                        var r = jQuery.parseJSON(response);
                        var i;
                        for (i = 0; i < r.length; ++i) {
                            string += ' <input type="checkbox" name="boarding_points[]" id = "' + r[i] + '"  value="' + r[i] + '"><label for="' + r[i] + '">' + r[i] + '</label>&ensp;';
                            // console.log(string);
                        }
                        for (i = 0; i < r.length; ++i) {
                            dropping += ' <input type="checkbox" name="dropping_points[]" id = "' + r[i] +1+ '"  value="' + r[i] + '"><label for="' + r[i] +1+ '">' + r[i] + '</label>&ensp;';
                            // console.log(string);
                        }
                        $('#boarding_points').prepend(string);
                        $('#dropping_points').prepend(string);
                        $('#showbutton').html('');
                        $('#showdroppingbutton').html('');

                    }
                });

            });
        });


    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>