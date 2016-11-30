<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Merchant registation
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
            </header>
            <div class="panel-body">
                <div class="form">
                 <?php echo Form::open(['url'=>'marchentRegistration','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype' => 'multipart/form-data','files'=>true]); ?>

                    
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Company Name</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="CompanyName" name="CompanyName" type="text" />
                            </div>
                        </div>
                    <div class="form-group ">
                        <label for="firstname" class="control-label col-lg-3">User Type</label>
                        <div class="col-lg-6">
                            <select name="userType" class="form-control m-bot15">
                                <option>Select user </option>
                                <option value="2">Fusion</option>
                                <option value="3">Hotel</option>
                                <option value="4">Tourism</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Logo upload</label>
                            <div class="col-md-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="bigImage" name="companyLogo" />
                                                   </span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Shopping mohol </label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="shoppingMohol" name="shoppingMohol" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Phone Number</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="phoneNumber" name="phoneNumber" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Contact Person number</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="contactPersonNumber" name="contactPersonNumber" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Email</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="email" name="email" type="email" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Password</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="password" name="password" type="password" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Confirm Password</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="confirm_password" name="confirm_password" type="password" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">City Name</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="cityName" name="cityName" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Gods pick up address</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="pickUpAddress" name="pickUpAddress" type="text" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-3 col-sm-3">Address</label>
                            <div class="col-lg-8 col-sm-9">
                                <textarea class="form-control ckeditor" id="productDetails" name="address" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                   <?php echo Form::close(); ?>

                </div>
            </div>
        </section>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backentMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>