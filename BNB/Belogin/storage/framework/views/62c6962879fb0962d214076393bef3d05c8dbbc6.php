<?php $__env->startSection('content'); ?>

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <p>Product Entry Form</p>
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                     <?php echo Form::open(['url'=>'productStoreFrom','class'=>'cmxform form-horizontal','enctype'=>'multipart/form-data','data-toggle'=>'validator','id'=>'signupForm','method'=>'post']); ?>

                    <!-- <form action="<?php echo e(URL::to('/')); ?>/productStoreFrom" enctype="multipart/form-data"  class="cmxform form-horizontal" data-toggle="validator" id="signupForm"  method="POST"> -->
                   <?php echo csrf_field(); ?>



                        <div class="form-group ">
                            <label for="mainCategory" class="control-label col-lg-3">Main Category</label>
                            <div class="col-lg-6">
                            <select name="main_category" class="form-control" id="mainCat">
                            <option>Main category select</option>
                            <?php foreach($mainCategoryShow as $mainCategory): ?>
                            <option value="<?php echo e($mainCategory->id); ?>"><?php echo e($mainCategory->category_name); ?></option>
                            <?php endforeach; ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="subCategory" class="control-label col-lg-3">Sub Category </label>
                            <div class="col-lg-6">
                                <select name="sub_category" class="form-control" id="subCat">
                                   
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
                    <?php echo e(Form::close()); ?>

                    
                    </div>
                    </div>
                </section>
            </div>
        </div>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#mainCat').on("change",function () {
            var categoryId = $(this).find('option:selected').val();
            //alert(categoryId);
            $.ajax({
                url: "<?php echo e(URL::to('/')); ?>/subCategory/",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                data: "categoryId="+categoryId,
                success: function (response) {
                    console.log(response);
                    $("#subCat").html(response);             
                },
            });
        }); 

    });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backentMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>