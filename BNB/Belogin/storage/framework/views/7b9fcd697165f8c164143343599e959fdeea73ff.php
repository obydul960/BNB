<?php $__env->startSection('content'); ?>
<!-- <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-fileupload/bootstrap-fileupload.css" /> -->

<!-- multiplse image upload -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>

<div class="container col-lg-12">
    <div class="row">
        <div class="col-lg-12 margin-tb">                   
            <div class="pull-left">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
            Create product
            </button> 
            </div>
            <div class="pull-right">
                <h2>Add Product</h2> 
            </div>
        </div>
    </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                <th>User ID</th>
                <th>Main Category</th>
                <th>Sub Category</th>
                <th>product_name</th>
                <th>code_no</th>  
                <th>quantity</th>
                <th>buying_price</th>
                <th>selling_price</th>
                <th>commission</th>
                <th>discount</th>
                <th>supplier_name</th>
                <th>product_details</th>             
                <th>Viewer</th>
                <th width="200px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>


        <ul id="pagination" class="pagination-sm"></ul>

        <!-- Create Item Modal -->
        <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Create Product</h4>
              </div>
              <div class="modal-body">
                    <form action="<?php echo e(URL::to('/')); ?>/productAdd" enctype="multipart/form-data"  class="cmxform form-horizontal" data-toggle="validator" id="signupForm"  method="POST">

                        <div class="form-group ">
                            <label for="mainCategory" class="control-label col-lg-3">Main Category</label>
                            <div class="col-lg-6">
                            <select name="main_category" class="form-control" id="mainCategory">
                            <option>Main category select</option>
                                    <?php foreach($mainCategory as $k=>$v): ?>
                                    <option value="<?php echo e($k); ?>"><?php echo e($v); ?></option>
                                    <?php endforeach; ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="subCategory" class="control-label col-lg-3">Sub Category </label>
                            <div class="col-lg-6">
                                <select name="sub_category" class="form-control" id="subCategory">
                                   
                                </select>
                            </div>
                        </div>                                  
                        <div class="form-group ">
                            <label for="productName" class="control-label col-lg-3">Name</label>
                            <div class="col-lg-6">
                            <input class=" form-control" id="name" name="product_name" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="code" class="control-label col-lg-3">Code</label>
                            <div class="col-lg-6">
                        <input type="number" class="form-control" id="productCode" name="code_no"/>
                            </div>
                        </div>                                             
                        <div class="form-group ">
                            <label for="quantity" class="control-label col-lg-3">Quantity</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="quantity" name="quantity" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="confirm_password" class="control-label col-lg-3">Buying price</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="buyingPrice" name="buying_price" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="email" class="control-label col-lg-3">Selling Price</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="sellingPrice" name="selling_price" type="number" />
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
                            <label for="username" class="control-label col-lg-3"> Supplier Name </label>
                            <div class="col-lg-6">
                                <input class="form-control " id="supplierName" name="supplier_name" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3 col-sm-3">Details</label>
                            <div class="col-lg-8 col-sm-9">
                                <textarea class="form-control ckeditor" id="product_details" name="product_details" rows="6"></textarea>
                            </div>
                        </div>                                 
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button type="submit" class="btn crud-submit btn-success">Submit</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                    </form> 


              </div>
            </div>
          </div>
        </div>
        <!-- Multiple Image Uploaded -->
        <div class="modal fade" id="multiple-image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Multiple Image</h4>
              </div>
              <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Upload Multiple Images</h1>
                        <?php echo Form::open([ 'route' => [ 'dropzone' ], 'files' => true, 'enctype' => 'multipart/form-data', 'class' => 'dropzone', 'id' => 'image-upload' ]); ?>

                        <div>
                            <h3>Upload Multiple Image By Click On Box</h3>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>

        <script type="text/javascript">
                Dropzone.options.imageUpload = {
                    maxFilesize         :       1,
                    acceptedFiles: ".jpeg,.jpg,.png,.gif"
                };
        </script>
                    

              </div>
            </div>
          </div>
        </div>

        <!-- Product View more -->
        <div class="modal fade" id="view-more" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Show item</h4>
              </div>
              <div class="modal-body">

            <h1>Helllo world</h1>

              </div>
            </div>
          </div>
        </div>        

        <!-- Edit Item Modal -->
        <div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
              </div>
              <div class="modal-body"> 

                   <!--  <form data-toggle="validator" action="/indexPragnation/14" method="patch" class="form-horizontal">  -->
                     <?php echo Form::open(['url'=>['indexPragnation'],'id'=>'register-form2','class'=>'form-horizontal','method'=>'patch','enctype' => 'multipart/form-data','files'=>true]); ?>

                        <div class="form-group ">
                            <label for="mainCategory" class="control-label col-lg-3">Main Category111</label>
                            <div class="col-lg-6">
                            <select name="main_category" class="form-control" id="editMainCategory">
                            <option>Main category select</option>
                                    <?php foreach($editMainCategory as $value): ?>
                                    <option value="<?php echo e($value->id); ?>"><?php echo e($value->category_name); ?></option>
                                    <?php endforeach; ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="subCategory" class="control-label col-lg-3">Sub Category </label>
                            <div class="col-lg-6">
                                <select name="sub_category" class="form-control" id="editSubCategory">
                                   
                                </select>
                            </div>
                        </div> 
                        <div class="form-group ">
                            <label for="productName" class="control-label col-lg-3">Name</label>
                            <div class="col-lg-6">
                            <input class=" form-control" id="name" name="product_name" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="lastname" class="control-label col-lg-3">Code</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="productCode" name="code_no" type="number" />
                            </div>
                        </div>                                                                    
                        <div class="form-group ">
                            <label for="quantity" class="control-label col-lg-3">Quantity</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="quantity" name="quantity" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="confirm_password" class="control-label col-lg-3">Buying price</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="buyingPrice" name="buying_price" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="email" class="control-label col-lg-3">Selling Price</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="sellingPrice" name="selling_price" type="number" />
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
                            <label for="username" class="control-label col-lg-3"> Supplier Name </label>
                            <div class="col-lg-6">
                                <input class="form-control " id="supplierName" name="supplier_name" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3 col-sm-3">Details</label>
                            <div class="col-lg-8 col-sm-9">
 <textarea class="form-control ckeditor" id="productDetails" name="product_details" rows="6"></textarea>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                       <!--  {!! Form::close()!! -->
                    </form> 

              </div>
            </div>
          </div>
        </div>

    </div>
<script type="text/javascript">
$(document).ready(function(){
    $('#mainCategory').on("change",function () {
        var categoryId = $(this).find('option:selected').val();
       // alert(categoryId);
        $.ajax({
            url: "<?php echo e(URL::to('/')); ?>/subCategory/",
            type: "POST",
            data: "categoryId="+categoryId,
            success: function (response) {
                console.log(response);
                $("#subCategory").html(response);             
            },
        });
    }); 

});

</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#editMainCategory').on("change",function () {
        var mainCategory = $(this).find('option:selected').val();
        //alert(mainCategory);
        $.ajax({
            url: "<?php echo e(URL::to('/')); ?>/editSubCategory/",
            type: "POST",
            data: "mainCategory="+mainCategory,
            success: function (response) {
                console.log(response);
                $("#editSubCategory").html(response);             
            },
        });
    }); 

});

</script>
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backentMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>