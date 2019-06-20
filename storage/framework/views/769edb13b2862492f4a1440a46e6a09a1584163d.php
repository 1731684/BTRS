<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="thush">
    <meta name="keyword" content="">
    <title>BTRS- <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo e(URL::to('/frontend/assets/images/favicon.ico')); ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Amaranth:400,700|Poppins:300,400,600,700" rel="stylesheet">

    <link href="<?php echo e(url('/frontend/css/plugins.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('/frontend/css/font-awesome.min.css')); ?>" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href=" <?php echo e(url('/frontend/css/jquery-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/frontend/css/icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/frontend/css/')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/frontend/css/style.css')); ?>">
    <link href="<?php echo e(url('/frontend/css/responsive.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('/frontend/css/color-1.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('/frontend/css/bootstrap-datepicker.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(url('/frontend/css/overrides.css')); ?>">


  

    <!-- slider -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->

    <script src="<?php echo e(url('/frontend/js/jquery.min.js')); ?>"></script>

    <script>
        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 2000);
    </script>

</head>
<body>
<div id="page">

    <!-- Page Loader -->
    <div id="pageloader">
        <div class="loader-item fa fa-spin text-color"></div>
    </div>


    <!-- Top Bar -->
    <div id="top-bar" class="top-bar-section top-bar-bg-color" style="display: none">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Top Contact -->
                    <div class="top-contact link-hover-black">
                    <a href="#">
                    <i class="fa fa-phone"></i>
                    Moblie number
                    </a>
                    <a href="#">
                    <i class="fa fa-envelope"></i>
                    Website
                    </a>
                    </div>
                    <!-- Top Social Icon -->
                    <div class="top-social-icon icons-hover-black">
                    <a href="#">
                    <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#">
                    <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                    <i class="fa fa-youtube"></i>
                    </a>
                    <a href="#">
                    <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="#">
                    <i class="fa fa-github"></i>
                    </a>
                    <a href="#">
                    <i class="fa fa-google-plus"></i>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar -->

    <!-- Sticky Navbar -->
    <header id="sticker" class="sticky-navigation" style="border-top: 5px solid rgb(93, 166, 218);
    box-shadow: rgb(153, 153, 153) 3px 1px 5px 1px;">
        <!-- Sticky Menu -->
        <div class="sticky-menu relative">
            <!-- navbar -->
            <div class="navbar navbar-default navbar-bg-light" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navbar-header">
                                <!-- Button For Responsive toggle -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span style="color:#40d4e4" class="fa fa-user"
                                          id="navCollapse">Login/Register</span></button>


                                <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                                    <img class="site_logo" alt="Site Logo" width="190" height="86"
                                         src="<?php echo e(url('/frontend/assets/images/tb-logo.png')); ?>" width="125px"/>
                                </a>
                            </div>
                            <!-- Navbar Collapse -->
                            <div class="navbar-collapse collapse toLogin">
                                <!-- nav -->
                                <ul class="nav navbar-nav" style="margin-top:15px">
                                    <?php if(Auth::user()&& Auth::user()->user_type=='traveller'): ?>
                                        <a class="btn btn-deault"
                                           href="<?php echo e(route('profile')); ?>" style="background: #40d4e4;">
                                            My Account
                                        </a>&nbsp;<a class="btn btn-deault"
                                                     href="<?php echo e(route('userLogout')); ?>" style="background: #40d4e4;">
                                            Logout
                                        </a>
                                    <?php elseif(Auth::user()&& Auth::user()->user_type=='vendor'): ?>
                                        <a class="btn btn-deault"
                                           href="<?php echo e(route('profileVendor')); ?>" style="background: #40d4e4;">
                                            My Account
                                        </a>&nbsp;<a class="btn btn-deault"
                                                     href="<?php echo e(route('userLogout')); ?>" style="background: #40d4e4;">
                                            Logout
                                        </a>
                                    <?php else: ?>

                                        <div class="row">
                                            <div class="col-md-7">
                                                <form action="<?php echo e(route('loginUser')); ?>" id="loginUser"
                                                      class="contact-form " method="post">
                                                    <?php echo e(@csrf_field()); ?>

                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <input class="form-control" type="text" name="email"
                                                                   id="userLoginEmail" placeholder="Email *"/>
                                                        </div>

                                                        <div class="col-md-5">
                                                            <input class="form-control" type="password" name="password"
                                                                   placeholder="Password *"/>
                                                            <p>
                                                                <a href="#" class="text-success forget">Forgot
                                                                    Password?</a>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-2 col-sm-6">
                                                            <div class="clearfix">
                                                                <button id="submit" class="btn btn-default"
                                                                        style="color: white">Login
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>


                                            <div class="col-md-5">
                                                <!-- <a href="#">Don't you have an account?</a>&emsp; -->
                                                &nbsp&nbsp<strong> Or Click Here To: </strong>&nbsp
                                                <button class="btn btn-deault " data-toggle="collapse" data-target=""
                                                        id="register" style="background-color: #800000cf;color: white;">
                                                    Register
                                                </button>
                                                <!--  <button class="btn btn-deault " data-toggle="collapse" data-target="" id="login">
                                                     Login
                                                 </button> -->
                                            </div>
                                        </div>

                                <?php endif; ?>

                                <!-- Shortcode Menu Ends -->
                                    <!-- Header Search -->

                                </ul>
                                <!-- Right nav -->
                                <!-- Header Contact Content -->
                                <div class="bg-white hide-show-content no-display header-contact-content">
                                    <p class="vertically-absolute-middle">Call Us <strong>+9477-8135468</strong>
                                    </p>
                                    <button class="close">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>

                                <!-- Header Search Content -->
                                <div class="bg-white hide-show-content no-display header-search-content">
                                    <form role="search" class="navbar-form vertically-absolute-middle">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter your text &amp; Search Here"
                                                   class="form-control" id="s" name="s" value=""/>
                                        </div>
                                    </form>

                                </div>
                                <!-- Header Search Content -->

                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- navbar -->
        </div>
        <!-- Sticky Menu -->
    </header>
    <!-- Sticky Navbar -->

    <!--    login and register form-->
    <div class="container row collapse loginx">
        <span id="close"><i class="fa fa-times pull-right"></i></span>
        <div class="content col-sm-12 col-md-6 col-md-offset-1">
            <div class="section-title" data-animation="fadeInUp">

                <!--  Social Media Sign Up  -->
                <h1 class="title" style="font-size: 24px;color: #5da6da;text-transform: capitalize;">Don't Have an
                    account? Register Here</h1>
            </div>

            <!-- Manual Registration -->

            <form action="<?php echo e(route('registerUser')); ?>" class="contact-form" method="post">
                <?php echo e(@csrf_field()); ?>

                <div id="success"></div>
                <center>
                    <div class="row" role="form">
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <div class="col-md-8 col-md-offset-2" id="registerUser">

                                <?php if(!empty($email)): ?>

                                    <input id="email" type="email" class="form-control" name="email"
                                           id="userRegisterEmail" value="<?php echo e($email); ?>" required placeholder="Email*">

                                <?php else: ?>

                                    <input id="email" type="email" class="form-control" name="email"
                                           value="<?php echo e(old('email')); ?>" required placeholder="Email *">

                                <?php endif; ?>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                                   <strong><?php echo e($errors->first('email')); ?></strong>
                                               </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>


                    <div class="row" role="form">
                        <div class="col-md-8 col-md-offset-2" style="padding-top: 20px">
                            <small class="text text-danger"><?php echo e($errors->first('password')); ?></small>
                            <input type="password" class="form-control" name="password" id="exampleInputEmail2"
                                   placeholder="Password *"/>
                        </div>
                    </div>


                    <div class="row" role="form">
                        <div class="col-md-8 col-md-offset-2" style="padding-top: 20px">
                            <input type="password" class="form-control" name="password_confirmation"
                                   placeholder="Confirm Password *"/>
                        </div>
                    </div>


                </center>
                <div class="clearfix"></div>
                <div style="padding-top: 30px">
                    <button id="submit" class="btn btn-primary col-md-offset-4"
                            style="background-color: #800000cf;color: white;">Register Now
                    </button>

                </div>

            </form>
            <br>
            
            
            
            
            
            
            
            
            
            
            
        </div>

        <!-- End of Registration -->


        <!-- .content -->
        <div class="col-sm-12 col-md-4" >
            <div class="section-title" data-animation="fadeInUp">
                <h1 class="title" style="font-size: 24px;color: #5da6da;text-transform: capitalize;">Sign Up With Social Media</h1>
                <p>Make Your Login or Registration Even More Faster</p>
                
            </div>


            <div id="success"></div>
            
            
            
            
            
            
            
            
            
            
            

            
            
            <div class="orSignUp">
                <div class="row">
                    
                        <div class="col-md-6 col-sm-6">
                            <a href="<?php echo e(url('login/facebook')); ?>" class="btn btn-md "
                               style="color:#fff ;background: #3b5999;">
                                Sign Up with &nbsp <i class="fa fa-facebook "></i>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <a href="<?php echo e(url('login/google')); ?>" class="btn btn-md "
                               style="color:#fff ;background: #dd4b39;">
                                Sign Up with &nbsp <i class="fa fa-google"></i>
                            </a>
                        </div>
                </div>
            </div>

        </div>

        <div class="col-sm-12 col-md-4" >
            <div class="section-title" data-animation="fadeInUp">
                <h1 class="title" style="font-size: 24px;color: #5da6da;text-transform: capitalize;">Are You a Vendor?</h1>
            </div>
            <center>
                <a href="#" class="btn btn-md " style="color:#fff ;background: #5da6da;">
                Click Me To Register
            </a>
            </center>
             
        </div>

    <!-- <div class="col-sm-12 col-md-4" style="margin-top: -17px;">
            <div class = "section-title" data-animation = "fadeInUp">
                    <h1 class = "title" style="font-size: 22px;color: #5da6da;text-transform: capitalize;">Or Sign Up Using Social Media</h1>
                </div>

            <div id="success">  </div>
            <div class="orSignUp">
                    <a href="<?php echo e(url('login/facebook')); ?>" class="btn btn-md " style="color:#fff ;background: #3b5999;">
                                        Sign Up with &nbsp <i class="fa fa-facebook "></i>
                    </a> &nbsp &nbsp
                    <a href="<?php echo e(url('login/google')); ?>" class="btn btn-md " style="color:#fff ;background: #dd4b39;">
                                        Sign Up with &nbsp <i class="fa fa-google"></i>
                    </a>
                </div>
            </div>
        </div> -->
    </div>


    <!--    login and register form-->
</div>

