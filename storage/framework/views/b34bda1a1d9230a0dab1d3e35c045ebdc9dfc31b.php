<?php $__env->startSection('content'); ?>

    <!-- Added inline css on gender's radio button, agree conditions and submit button. Horizontal row added. Hide/show function added-->
    <div class="container">
        <div class="section-title" data-animation="fadeInUp">
            <h2 class="title"> Booking Deatails</h2>
        </div>
        <div class="row text-center">
            <div class="panel-body">
                <form action="<?php echo e(route('passengerAdd')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="rows">
                        <div class="col-md-3"><strong> Name : *</strong></div>
                        <div class="col-md-9">
                            <input type="text" name="booker_name" class="form-control" placeholder="Traveller Name">
                            <small class="text text-danger"><?php echo e($errors->first('name')); ?></small>
                        </div>
                    </div>
                    <div class="col-md-12">&nbsp;</div>
                    <div class="rows">
                        <div class="col-md-3"><strong>Contact : *</strong></div>
                        <div class="col-md-9">
                            <input type="text" name="booker_contact" class="form-control" placeholder="Contact No:">
                            <small class="text text-danger"><?php echo e($errors->first('contact')); ?></small>
                        </div>
                    </div>
                    <div class="col-md-12">&nbsp;</div>
                    <div class="rows">
                        <div class="col-md-3"><strong>Address : *</strong>
                        </div>
                        
                         
                        <div class="col-md-9
                         ">
                            <!--<input type="text" name="booker_address" value="" class="form-control" placeholder="address">-->
                            <select name="destination" class="form-control" id="destination" >
                            <option value="">Select destination place</option>
                            </select>
                            <small class="text text-danger"><?php echo e($errors->first('address')); ?></small>
                        </div>
                       
                    </div>            
                    <div class="col-md-12">&nbsp;</div>
                    <div class="rows ">
                        <div class="col-md-3"><strong>Gender : *</strong></div>
                        <div class="col-md-9" style="text-align: left; padding-left: 30px">
                            <div class="row">
                                <label for="male">
                                    <input type="radio" name="booker_gender" value="male"> Male &nbsp;&nbsp;
                                </label>
                                <label for="female">
                                    <input type="radio" name="booker_gender" value="female"> Female &nbsp;&nbsp;
                                </label>
                                <label for="other">
                                    <input type="radio" name="booker_gender" value="other"> Other &nbsp;&nbsp;
                                </label>
                                <small class="text text-danger"><?php echo e($errors->first('profile')); ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        &nbsp;
                        <div class="row">
                            <div class="col-md-12" style="padding-left: 100px">
                                <hr style="border: solid 0.5px">

                                <div class="row" style="text-align: left; padding-left: 20px">

                                    <strong>Passenger's Information &nbsp; : &nbsp;&nbsp;</strong>
                                    <!-- checkbox for show/hide function of the passengersInfo div-->
                                    <input type="checkbox" name="passengersInfo"
                                           onchange="showhide(document.getElementById('passengersInfo'))"> Hide

                                </div>

                                <hr style="border: solid 0.5px">

                            </div>

                        </div>
                    </div>
                    <!-- passengersInfo with hide/show option, script given at the bottom with showhide(which) function-->
                    <div id="passengersInfo">
                        <input type="hidden" name="buses_id" value="<?php echo e($buses_id); ?>">
                        <input type="hidden" name="schedules_id" value="<?php echo e($schedules_id); ?>">
                        <div class="row " id="info_passenger">
                            <?php $__currentLoopData = $seat_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $no): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-12">&nbsp;</div>
                                <div class="rows">
                                    <div class="col-md-3"><strong>Seat No :<?php echo e($no['name']); ?> </strong></div>
                                    <input type="hidden" name="seat[<?php echo e($key); ?>]" class="form-control"
                                           id="validationDefault02"
                                           placeholder="Seat No" value="<?php echo e($no['name']); ?>">

                                    <div class="col-md-3 mb-3">
                                        
                                        <input type="text" name="name[<?php echo e($key); ?>]" class="form-control"
                                               id="validationDefault01" placeholder="First name">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        
                                        <select name="gender[<?php echo e($key); ?>]" id="" class="form-control">
                                            <option value="" selected>Gender</option>
                                            <option type="text" value="male" id="validationDefault02">Male</option>
                                            <option type="text" value="female" id="validationDefault02">Female</option>
                                            <option type="text" value="other" id="validationDefault02">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        
                                        <input type="text" name="age[<?php echo e($key); ?>]" class="form-control"
                                               id="validationDefault02" placeholder="Age">
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                    </div>
                    &nbsp; &nbsp;

                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6" style="text-align: left">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                           required>
                                    <label class="form-check-label" for="invalidCheck2">
                                        Agree to terms and conditions
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <div class="col-md-12"></div>
                    <div class="row">
                        <div class="col-md-12" style="text-align: left">
                            <div class="col-md-3">
                            </div>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;
                                submit
                            </button>
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>
<style type="text/css">
    
    

</style>

    <script>
       /* function activeDiv(which) {
        #sel1.hide

        }*/
        function activeDiv(which) {
        if ($routetitle=='Colombo - Jaffna') {
            activeDiv.hide
        }

        }

        function showhide(which) {
            if (!document.getElementById)
                return;
            if (which.style.display == "none")
                which.style.display = "block";
            else {
                which.style.display = "none";
            }
        }

    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>