<?php $__env->startSection('title', 'Bustype'); ?>
<?php $__env->startSection('activeBustype', 'active'); ?>
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
                Vehicle Dashboard
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="breadcrumb-item active">Vehicle Types</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-12 col-lg-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Vehicles <strong></strong>&nbsp &nbsp </h3>

                            <a href="<?php echo e(route('createBustype')); ?>" class="btn btn-default label-success">+ Add New</a>


                            <a href="<?php echo e(route('viewBustype')); ?>" class="btn btn-info label-success pull-right"> <i
                                        class="glyphicon glyphicon-eye-open"></i> views all</a>
                        </div>

                        <div class="box-body">
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
                                <table id="example1"
                                       class="table table-responsive editable_table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $bustypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$count); ?></td>
                                            <td><?php echo e($key->bustypes_title); ?></td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <th>
                                                            <form action="<?php echo e(route('showBustype')."/".$key->bustypes_id); ?>"
                                                                  method="get">
                                                                <button type="submit" class="btn btn-info btn-xs">
                                                                    <i class="fa fa-eye"></i>
                                                                </button>
                                                            </form>
                                                        </th>
                                                        <th>
                                                            <form action="<?php echo e(route('editBustype')."/".$key->bustypes_id); ?>"
                                                                  method="get">
                                                                <button type="submit" class="btn btn-success btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </button>
                                                            </form>
                                                        </th>
                                                        <th>
                                                            <form class="client" action="<?php echo e(route('destroyBustype')); ?>"
                                                                  method="post" onsubmit=" return ConfirmDelete()">
                                                                <?php echo e(csrf_field()); ?>

                                                                <input type="hidden" name="id"
                                                                       value="<?php echo e($key->bustypes_id); ?>">
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
                        <div class="col-md-12" align="center"><?php echo e($bustypes->links()); ?></div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script>
        function ConfirmDelete() {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>