<?php $__env->startSection('content'); ?>
<?php echo $__env->make('branches.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container-fluid">
        <div class="row search_body">
            <div class="col-md-12">
                <div class="col-md-3" style="position: static" align="pull-left">
                    <span style="position:absolute; bottom:-30px;left: 55px; font-size: 20px; color: #5da6da" class="pull-left">Filter your Search </span>
                </div>
                <div class="col-md-9">
                    <center>
                    <span class="h3" style="color:#5fa7da;"><?php echo e(ucfirst($from).' to '.ucfirst($to)); ?></span>
                    <p>There are <?php echo e($count); ?> buses for this route at the moment </p>
                </center>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid searchh ">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <form action="<?php echo e(route('searchFilter')); ?>" method="post">
                    <?php echo e(@csrf_field()); ?>

                    <input type="hidden" name="to" value="<?php echo e($to); ?>">
                    <input type="hidden" name="from" value="<?php echo e($from); ?>">
                    <input type="hidden" name="departure_date" value="<?php echo e($departure_date); ?>">
                    <input type="hidden" name="arrival_date" value="<?php echo e($arrival_date); ?>">
                    <input type="hidden" name="seat" value="<?php echo e($seat); ?>">
                    <div class="container">
                        <div class=" search_text">

                            <div class="row">
                                <div class="col-md-12 filter1">
                                    <li>Bus Type</li>
                                    <hr>
                                    <?php $__currentLoopData = $bustypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <input type="checkbox" name="bustype" value="<?php echo e($bus->bustypes_id); ?>"
                                               size="small" class="bhh" <?php if($bustype==$bus->bustypes_id): ?> checked <?php endif; ?>><?php echo e($bus->bustypes_title); ?><br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <div class=" search_text">
                            <div class="row">
                                <div class="col-md-12  filter1">
                                    <li>Choose shift</li>
                                    <hr>
                                    <input type="checkbox" name="shift" value="day" class="chh" <?php if($shift=='day'): ?> checked <?php endif; ?>> Day<br>
                                    <input type="checkbox" name="shift" value="night" class="chh"  <?php if($shift=='night'): ?> checked <?php endif; ?>> Night<br>
                                </div>
                            </div>
                        </div>
                        <div class=" search_text">
                            <div class="row">
                                <div class="col-md-12  filter1">
                                    <li>Sort by price</li>
                                    <hr>
                                    <input type="checkbox" name="price" value="ASC" class="dhh"  <?php if($price=='ASC'): ?> checked <?php endif; ?>>Cheap<br>
                                    <input type="checkbox" name="price" value="DESC" class="dhh" <?php if($price=='DESC'): ?> checked <?php endif; ?>>Expensive<br>
                                </div>
                            </div>
                        </div>
                        <div class=" search_text">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <button class="btn btn-default color" type="submit">Apply filter</button> &nbsp; &nbsp;
                                    <button class="btn btn-danger"><a href="<?php echo e(route('home')); ?>">Reset All</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-9 col-sm-12 col-xs-12 ">
                <div class="container">
                    <div class="" style="background: #5da6dad4; color: white; font-weight: 500e">
                        <div class="  row">
                            <div class=" col-md-12 col-sm-12 col-xs-12 search_text">
                                <div class="col-md-4">
                                    <div class="-title">
                                        Buses
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="-title">
                                        Departure
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="-title">
                                        Arrival
                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <div class="-title">
                                        Price
                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <div class="-title">
                                        &nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 search_text">
                                    <div class="col-md-4 col-xs-4">
                                        <div class="-title">
                                            <?php echo e($result->buses_title); ?>

                                        </div>
                                        <p><span class="text-danger"><?php echo e($result->bustypes_title); ?></span></p>
                                        <p><span class="text-primary"><?php echo e(ucfirst($result->shift)); ?> </span></p>
                                    </div>
                                    <div class="col-md-2 col-xs-2">
                                        <div class="-title">
                                            <?php echo e($result->departure_date); ?>

                                            <br>
                                            <?php echo e($result->departure_time); ?>

                                        </div>
                                        
                                    </div>
                                    <div class="col-md-2 col-xs-2">
                                        <div class="-title">
                                            <?php echo e($result->arrival_date); ?>

                                            <br>
                                            <?php echo e($result->arrival_time); ?>

                                        </div>
                                        
                                    </div>
                                    <div class="col-md-2 col-xs-2">
                                        <div class="-title">
                                        </div>
                                        <p>Price : <?php echo e($result->ticket_price); ?></p>
                                        <p>48 seat(s)</p>
                                    </div>
                                    <div class="col-md-2 col-xs-2 ">
                                        <form action="<?php echo e(route('booking')); ?>" method="post">
                                            <?php echo e(@csrf_field()); ?>

                                            <input type="hidden" name="buses_id" value="<?php echo e($result->buses_id); ?>">
                                            <input type="hidden" name="schedules_id" value="<?php echo e($result->schedules_id); ?>">
                                            <button class="btn btn-default">Book</button>
                                        </form>
                                        <br>
                                        <br>
                                        <p>Bus details</p>
                                    </div>

                                </div>
                            </div>
                            <div class="hr2"></div>
                        </div>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</div>
</div>
</div>


    <script>
        $(".chh").change(function() {
            var checked = $(this).is(':checked');
            $(".chh").prop('checked',false);
            if(checked) {
                $(this).prop('checked',true);
            }
        }); $(".dhh").change(function() {
            var checked = $(this).is(':checked');
            $(".dhh").prop('checked',false);
            if(checked) {
                $(this).prop('checked',true);
            }
        }); $(".bhh").change(function() {
            var checked = $(this).is(':checked');
            $(".bhh").prop('checked',false);
            if(checked) {
                $(this).prop('checked',true);
            }
        });
    </script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>