<?php echo $__env->make('branches.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<style>
    .info2 {
        border: 2px dashed red;
    }
    .info {
        transform: translate(1050px, -280px);

    }

    .busSeat {

        margin-top: 58px;
        text-align: center;
        min-height: 294px;
        border: 2px dashed red;
        margin-top: 20px;
        border-radius: 21px;
        width: 638px;
    }

    .seats {
        width: 32px;
        border-radius: 7px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .seats {
        margin: 13px;
        height: 37px;
        background: #5fa7da;
        transition: box-shadow 0.3s ease-in-out;
    }

    .front .seats {
        background: salmon;
    }

    /* Hide the browser's default checkbox */
    .seats input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    .smhtn .btn {
        display: inline-flex;
    }
    .activeSeat{
        background: red;
        color: #fff;
        pointer-events: none;
        
    }

</style>

<section id="about-us" class=" page-section">

    <div class="container">
        <div class="row">
            <div class="col-md-4"><h1 class="h3 text-center text-danger">1.Select your route</h1>
            </div>
            <div class="col-md-4"><h1 class="h3 text-center text-primary">2.Select your Seat</h1>
            </div>
            <div class="col-md-4"><h1 class="h3 text-center text-danger">3.Book your ticket</h1>
            </div>
        </div>
        <form action="<?php echo e(route('passengerDetail')); ?>" method="post">
            <?php echo e(@csrf_field()); ?>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="busSeat">
                        <span style="color: red">Bus Seat Layout</span>
                        <div class="row">
                            <div class="col-md-11">
                             <div class="bus">
                                  <?php $__currentLoopData = $seat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div class="col-md-1">
                                  <div class="seats back seats  
                                  <?php echo e(!empty($bookingSeets[$item['name']])?'activeSeat':''); ?>"
                                     data-id="<?php echo e($key); ?>">
                                    <div class="special-attributes"></div>
                                   <?php if(isset($item['name'])): ?><?php echo e($item['name']); ?><?php else: ?> 11A <?php endif; ?>
                                    <input type="checkbox" name="seat_id[]" id="<?php echo e($key); ?>" value=" 
                                    <?php echo e($key); ?>">
                                   </div>
                                    </div>

                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </div>
                                <div class="front">
                                    <div class="col-md-1">
                                        <div class="seats" data-id="0" style="<?php echo e($front[0]['style']); ?>">
                                            <div class="special-attributes"></div>
                                            <?php if(isset($front[0]['name'])): ?><?php echo e($front[0]['name']); ?><?php else: ?> D <?php endif; ?>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="seats" data-id="1" style="<?php echo e($front[1]['style']); ?>">
                                            <div class="special-attributes"></div>
                                            <?php if(isset($front[1]['name'])): ?><?php echo e($front[1]['name']); ?><?php else: ?> E <?php endif; ?>

                                            
                                        </div>
                                        <div>                                                             
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <input type="hidden" name="buses_id" value="<?php echo e($buses_id); ?>">
                    <input type="hidden" name="schedules_id" value="<?php echo e($schedules_id); ?>">
                    <button class=" btn btn-sm pull-right btn-success" type="submit">Proceed <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
                <div>
                <div class="col-md-4 info">
                    <p>Available Seat : 
                    <div class="seats" data-id="0" style="<?php echo e($front[0]['style']); ?>">
                    </p>
                </div>
                <div>
                    <p>Booked seat : 
                    <div class="seats activeSeat" data-id="0" style="<?php echo e($front[0]['style']); ?>">
                    </p>
                </div>
                </div>
            </div>
        </form>
    </div>


</section>

<script>
    $(document).ready(function () {
        $('.bus').find('.back').click(function () {
            var checked = $(this).find(":input").is(':checked');
            if (!checked) {
                $(this).find(":input").attr('checked', true);
                $(this).find(':input').prop('checked', true);
                $(this).css({"background": "red"});
                
            } else {
                $(this).find(":input").attr('checked', false);
                $(this).find(':input').prop('checked', false);
                $(this).css({"background": "#5fa7da"});
            }

        });

    });
    
</script>
<script type="text/javascript">
$(document).ready(function() {        
    $(".book").click(function(event) {
        var total = 1200*$item;
        $(".book:checked").each(function() {
            total += parseInt($(this).val());
        });
        
        if (total == 0) {
            $('#amount').val('');
        } else {                
            $('#amount').val(total);
        }
    });
});    
</script>

<?php echo $__env->make('branches.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>





























































































































































































































