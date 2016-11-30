<?php $__env->startSection('content'); ?>
<section class="clearfix m-top cart-mobile">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 z-in-mobile">
                <div class="user_signup_section user_login_section z-depth-1">
                    <div class="user_signup_top ">
                        <h3><i class="fa fa-user" aria-hidden="true"></i> Login</h3>
                    </div>
                    <div class="user_signup_body text-center">
                    <form class="form-signin" role="form" method="POST" action="<?php echo e(url('/userLogin')); ?>">
                    <?php echo e(csrf_field()); ?>

                            <div class="input-field col s12">
                                <input  type="email" name="email" id="email">
                                <label  class="" for="email">Email</label>
                            </div>
                            <div class="input-field col s12">
                                <input  type="password" name="password" id="password">
                                <label for="password" >Password</label>
                            </div>
                            <div class="user_signup_bottom text-center" >

                                <button class="btn waves-effect waves-light yellow-co" type="submit" style="margin-bottom: 15px;">Login</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
 </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webmasterlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>