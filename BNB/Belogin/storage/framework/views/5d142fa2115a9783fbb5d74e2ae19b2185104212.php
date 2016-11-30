<?php $__env->startSection('content'); ?>
        <section class="clearfix m-top cart-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 z-in-mobile">
                        <div class="user_signup_section user_login_section z-depth-1">
                            <div class="user_signup_top ">
                                <h3><i class="fa fa-user" aria-hidden="true"></i> Merchant</h3>
                            </div>
                            <div class="user_signup_body text-center">
                               <!--  <form class="form-signin" role="form" method="POST" action="<?php echo e(url('/merchantReg')); ?>" > -->
                                <?php echo Form::open(['url'=>'merchantReg','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype' => 'multipart/form-data','files'=>true]); ?>

                    <?php echo e(csrf_field()); ?>

                                    <div class="input-field col s12">
                                        <input  type="text" id="last_name" name="companyName">
                                        <label  class=""  for="last_name">Company Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <select name="cityName">
                                            <option value="" disabled selected>Choose your City</option>
                                            <option value="1">Dhaka</option>
                                            <option value="2">Gazipur</option>
                                            <option value="3">Feni</option>
                                            <option value="4">Brishal</option>
                                            <option value="4">khula</option>
                                        </select>
                                        <!--<label></label>-->
                                    </div>
                                    <div class="input-field col s12">
                                        <input  type="text" name="address" id="address">
                                        <label  class="" for="address">Company Address</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <select multiple name="categoryName">
                                            <option value="" disabled selected>Choose your Category</option>
                                            <option value="2">Fashion</option>
                                            <option value="3">Hotel</option>
                                            <option value="4">Tourism</option>
                                            <option value="5">Decorator</option>
                                            <option value="6">HouseHold</option>
                                        </select>
                                        <!--<label>Multiple Select</label>-->
                                    </div>
                                    <div class="input-field col s12">
                                        <input  type="text" id="com-contact" name="compContactNo">
                                        <label  class="" for="com-contact">Company Contact No.</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input  type="email" name="companyEmail" id="com-email" compEmail>
                                        <label  class="" for="com-email">Company Email ID</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input  type="password" id="com-contact" name="password">
                                        <label  class="" for="com-contact">Password.</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input  type="password" id="com-contact" name="confirmPassword">
                                        <label  class="" for="com-contact">confirm password.</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input  type="text" id="com-website" name="compWebsite">
                                        <label  class="" for="com-website">Company Website (Optional)</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input  type="text" id="com-mobile" name="mobileNo">
                                        <label  class="" for="com-mobile">Mobile</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <div class="file-field input-field">
                                            <div class="btn yellow-co">
                                                <span class="" style="text-transform:capitalize;"> Profile Photo</span>
                                                <input type="file" name="profilePhoto" >
                                            </div>
                                           <!--  <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="user_signup_bottom text-center" >
                                        <button class="btn waves-effect waves-light yellow-co" type="submit" name="action" style="margin-bottom: 15px;">Sign Up</button>
                                    </div>
                                    <?php echo Form::close(); ?>

                              <!--   </form> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webmasterlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>