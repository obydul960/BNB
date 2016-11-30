<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-fileupload/bootstrap-fileupload.css" />

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Product add
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
            </header>
            <div class="panel-body">
                <div class="form">
                    <form class="cmxform form-horizontal " id="signupForm" method="get" action="">
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Main Category Name</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="mainCategoryName" name="mainCategoryName" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Sub Category Name</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="firstname" name="firstname" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Product Name</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="productName" name="productName" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Big Image Upload</label>
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
                                                   <input type="file" class="default" id="bigImage" name="bigImage" />
                                                   </span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Small Image Upload</label>
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
                                                   <input type="file" class="default" id="smallImage" name="smallImage"/>
                                                   </span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="lastname" class="control-label col-lg-3">Product Code</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="productId" name="productId" type="number"  />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="password" class="control-label col-lg-3">Quantity</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="quantity" name="quantity" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="confirm_password" class="control-label col-lg-3">Buying price</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="buyingPrice" name="buyingPrice" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="email" class="control-label col-lg-3">Selling price</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="sellingPrice" name="sellingPrice" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="agree" class="control-label col-lg-3 col-sm-3">Commission</label>
                            <div class="col-lg-6 col-sm-9">
                                <input class="form-control " id="commission" name="commission" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-3 col-sm-3">Discount</label>
                            <div class="col-lg-6 col-sm-9">
                                <input class="form-control " id="discount" name="discount" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="username" class="control-label col-lg-3"> supplier Name </label>
                            <div class="col-lg-6">
                                <input class="form-control " id="supplierName" name="supplierName" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3 col-sm-3">Product Details</label>
                            <div class="col-lg-8 col-sm-9">
                                <textarea class="form-control ckeditor" id="productDetails" name="productDetails" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<!--Core js-->
<script src="<?php echo e(URL::to('/')); ?>/assets/js/jquery.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/bs3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backentMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>