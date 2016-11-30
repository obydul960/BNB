<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-fileupload/bootstrap-fileupload.css" />
    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->user==6): ?>

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Merchant add Rome
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <?php echo Form::open(['url'=>'marchentRoomStore','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype' => 'multipart/form-data','files'=>true]); ?>

                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Title</label>
                                    <div class="col-lg-6">
                                        <input class="form-control" id="title" name="title" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Room Number </label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="roomNumber" name="roomNumber" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Price </label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="price" name="price" type="number" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Commission</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="commission" name="commission" type="number" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3 col-sm-3">Discription</label>
                                    <div class="col-lg-8 col-sm-9">
                                        <textarea class="form-control ckeditor" id="discrioption" name="discrioption" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <button class="btn btn-default" type="reset">Cancel</button>
                                    </div>
                                </div>
                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!--Core js-->
            <script src="<?php echo e(URL::to('/')); ?>/assets/js/jquery.js"></script>
            <script src="<?php echo e(URL::to('/')); ?>/assets/bs3/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-fileupload/bootstrap-fileupload.js"></script>
        <?php else: ?>
            <?php
            Session::flash('error', 'please your not permitted...');
            ?>
        <?php endif; ?>
    <?php else: ?>
        <?php
        Session::flash('error', 'please try to login again...');
        ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backentMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>