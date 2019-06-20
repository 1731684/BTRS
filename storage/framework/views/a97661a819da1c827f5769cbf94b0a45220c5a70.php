<?php $__env->startSection('title', 'Booking'); ?>
<?php $__env->startSection('activeBooking', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <script>
        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 2000);
    </script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                What we offer Dashboard
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="breadcrumb-item active">What we offer</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-12 col-lg-12">
                    <div class="box">
                        <div class="box-header">
                            <h4><b>Why Choose Us</b>&nbsp;&nbsp;&nbsp;<a href="<?php echo e(route('createWhatweoffer')); ?>" class="btn btn-default">+ Add New</a></h4>


                        </div>

                        <div class="box-body">
                            <div class="panel panel-default">
                                
                                
                                
                                <div class="panel-body">
                                    <?php if(session()->has('success')): ?>
                                        <div class="alert alert-success" role="alert" align="center">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong><?php echo e(session()->get('success')); ?></strong>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(session()->has('error')): ?>
                                        <div class="alert alert-danger" role="alert" align="center">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong><?php echo e(session()->get('error')); ?></strong>
                                        </div>
                                    <?php endif; ?>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($count+1); ?></td>
                                                <td><?php echo e($key->title); ?></td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <th>
                                                                <form action="<?php echo e(route('showWhatweoffer')."/".$key->Whatweoffer_id); ?>" method="get">
                                                                    <button type="submit" class="btn btn-info btn-xs">
                                                                        <i class="fa fa-eye"></i>
                                                                    </button>
                                                                </form>
                                                            </th>
                                                            <th>&nbsp;</th>
                                                            <th>
                                                                <form action="<?php echo e(route('editWhatweoffer')."/".$key->Whatweoffer_id); ?>" method="get">
                                                                    <button type="submit" class="btn btn-success btn-xs">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </button>
                                                                </form>
                                                            </th>
                                                            <th>&nbsp;</th>
                                                            <th>
                                                                <form action="<?php echo e(route('destroyWhatweoffer')); ?>" method="post" onsubmit=" return ConfirmDelete()">
                                                                    <?php echo e(csrf_field()); ?>

                                                                    <input type="hidden" name="id" value="<?php echo e($key->Whatweoffer_id); ?>">
                                                                    <button type="submit" class="btn btn-danger btn-xs">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </button>
                                                                </form>
                                                            </th>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12" align="center"><?php echo e($items->links()); ?></div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>