<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" type="text/css"
          href="<?php echo e(url('/backend/assets/vendor_components/font-awesome/css/font-awesome.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(url('/backend/assets/vendor_components/Ionicons/css/ionicons.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(url('/backend/assets/vendor_components/themify-icons/themify-icons.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(url('/backend/assets/vendor_components/linea-icons/linea.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(url('/backend/assets/vendor_components/glyphicons/glyphicon.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(url('/backend/assets/vendor_components/flag-icon/css/flag-icon.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(url('/backend/assets/vendor_components/material-design-iconic-font/css/materialdesignicons.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(url('/backend/assets/vendor_components/simple-line-icons-master/css/simple-line-icons.css')); ?>">

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="<?php echo e(url('/backend/assets/vendor_components/bootstrap/dist/css/bootstrap.css')); ?>">
    <link href="<?php echo e(url('/backends/css/login.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('/backends/css/style-responsive.css')); ?>" rel="stylesheet">

    
    
    <![endif]-->
</head>

<body>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->

<div id="login-page">
    <div class="container">
        <section class="logo">
            <div class="row" align="center">
                <div class="col-md-12">
                    <img class="login-logo" src="<?php echo e(url('/img/avatar.jpg')); ?>" height="60px">
                </div>
            </div>
        </section>

        <form action="<?php echo e(route('login')); ?>" class="form-login" method="POST">
            <?php echo e(csrf_field()); ?>

            <h2 class="form-login-heading">Login now</h2>
            <?php if(session()->has('error')): ?>
                <div class="alert alert-danger" role="alert" align="center">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong><?php echo e(session()->get('error')); ?></strong>
                </div>
            <?php endif; ?>

            <div class="login-wrap">
                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <input id="email" type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>"
                           placeholder="Email" required autofocus>
                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                    <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password"
                           required>
                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                    <?php endif; ?>
                </div>

                <label class="checkbox " style="margin-left:15px;">
                     <span class="pull-left">
		                      <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me

		                </span>
                    <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Your Password?</a>

		                </span>

                </label>
                <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> LOGIN</button>
            </div>
        </form>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal"
             class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off"
                               class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-danger" type="button">Cancel</button>
                        <button class="btn btn-success" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

    </div>
</div>

<!-- jQuery 3 -->
<script src="<?php echo e(url('/backend/assets/vendor_components/jquery/dist/jquery.js')); ?>"></script>

<!-- popper -->
<script src="<?php echo e(url('/backend/assets/vendor_components/popper/dist/popper.min.js')); ?>"></script>

<!-- Bootstrap 4.0-->
<script src="<?php echo e(url('/backend/assets/vendor_components/bootstrap/dist/js/bootstrap.js')); ?>"></script>


</body>
</html>








































































<script>
    window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 2000);
</script>