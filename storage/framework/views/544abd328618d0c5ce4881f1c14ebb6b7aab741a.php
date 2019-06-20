<?php $__env->startSection('title', 'Create Team'); ?>

<?php $__env->startSection('content'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Team
      </h1>
      
    </section>
    <!-- Main content -->
<section class="content">
    <div class="row">    
        <div class="col-12 col-lg-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Create <strong style="color: #5fa7da">Team</strong>&nbsp &nbsp</h3>
                </div>
               
                <div class="box-body">
                <form action="<?php echo e(route('storeTeam')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="control-group">
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 150px; height:100px;">
                                                <img src="<?php echo e(url('/backend/images/avatar2.png')); ?>"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail"
                                                 style="width: 150px; height:100px;"></div>
                                            <div>
    												<span class="btn btn-file">
    												<span class="fileupload-new btn btn-primary">Select image</span>
    												<span class="fileupload-exists btn btn-info">Change</span>
                                                        <input type="file" name="image" required/>
                                                    </span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>     

                            <div class="col-md-8">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Title :</strong>
                                        </div>

                                        <div class="col-md-9">
                                            <select class="form-control" name="title">
                                                
                                                <option value="Mr." selected>Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="Er.">Er.</option>
                                            </select>
                                        </div>
                                    </div>  
                                </div>  

                                <div class="form-group">
                                    <div class="row">
                                            <div class="col-md-3">
                                                <strong>Name:*</strong>
                                            </div>

                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="name" placeholder="your name" required>
                                            </div>
                                    </div>
                                </div>


                                <div class="form-group">        
                                    <div class="row">

                                        <div class="col-md-3">
                                            <strong>Post:*</strong>
                                        </div>

                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="post" placeholder="your post" required>
                                        </div>
                                    </div> 
                                </div>    


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Facebook Link:*</strong>
                                        </div>

                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="facebook" placeholder="facebook link">
                                        </div>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Twitter Link:*</strong>
                                        </div>

                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="twitter" placeholder="twitter link">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">    
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div align="center">
                                                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;
                                                    Save Changes
                                                </button>&nbsp;
                                                <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;&nbsp;
                                                    Cancel &nbsp;&nbsp;
                                                </button>
                                            </div>
                                        </div>    
                                    </div>
                                </div>    
                            </div>
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