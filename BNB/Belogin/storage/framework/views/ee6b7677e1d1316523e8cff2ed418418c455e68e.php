<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Change Password in now
                    <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                </header>
                <div class="panel-body">
                    <div class="form">


    <form class="cmxform form-horizontal" role="form" method="POST" action="<?php echo e(URL::to('/')); ?>/passwordChange">
        <?php echo e(csrf_field()); ?>

        <div class="form-group ">
            <label for="cname" class="control-label col-lg-4">New Password</label>
            <div class="col-lg-5">
                <input id="newPassword" type="password" class="form-control" name="newPassword"  placeholder=" New password">
            </div>
        </div>
        <div class="form-group ">
            <label for="cname" class="control-label col-lg-4">Confirm Password</label>
            <div class="col-lg-5">
                <input id="confirmPassword" type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
            </div>
        </div>
        <div class="form-group ">
            <label for="cname" class="control-label col-lg-4"></label>
            <div class="col-lg-5">
                <button class="btn btn-success" type="submit"> Change Password </button>
            </div>
        </div>

         </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backentMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>