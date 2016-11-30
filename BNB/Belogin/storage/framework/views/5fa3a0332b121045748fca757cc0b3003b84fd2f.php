<?php $__env->startSection('content'); ?>

    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->user==6): ?>
            <!-- Data Table Data show -->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">Manage Product
                            <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
                        </header>
                        <div class="panel-body">
                            <button id="btn_add" name="btn_add" class="btn btn-success pull-left">Add New Product</button>
                            <div class="adv-table">
                                <table  class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Price</th>
                                        <th>Quentity</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody id="products-list" name="products-list">
                                    <?php foreach($products as $product): ?>
                                        <tr id="product<?php echo e($product->id); ?>">
                                            <td><?php echo e($product->id); ?></td>
                                            <td><?php echo e($product->product_name); ?></td>
                                            <td><?php echo e($product->code_no); ?></td>
                                            <td><?php echo e($product->buying_price); ?></td>
                                            <td><?php echo e($product->quantity); ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#multiple-image<?php echo e($product->id); ?>" value="<?php echo e($product->id); ?>"><input type="hidden" name="multipaleImage">Upload Image</button>
                                                <button class="btn btn-warning btn-detail open_modal" value="<?php echo e($product->id); ?>">Edit</button>
                                                <button  class="productDelete btn btn-danger" data-item-id="<?php echo e($product->id); ?>">Delete</button>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- Data Table Data show End-->

            <!-- Multiple Image Uploaded -->
            <?php foreach($products as $product): ?>
                <div class="modal fade" id="multiple-image<?php echo e($product->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title" id="myModalLabel"> Umage upload</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <?php echo Form::open([ 'url' =>'multipleImageStore', 'files' => true, 'enctype' => 'multipart/form-data','id' => 'image-upload' ]); ?>

                                            <div>
                                                <input type="hidden" name="productIdImage" value="<?php echo e($product->product_id); ?>">
                                                <div class="form-group ">
                                                    <label for="productName" class="control-label col-lg-4">Category Image</label>
                                                    <div class="col-lg-4">
                                                        <input type="file" name="homeImage" class="form-control" id="product_name"/>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <?php foreach($productImage=App\Model\ProductImage::where('product_id','=',$product->product_id)->get() as $productImageShow): ?>
                                                            <?php if($productImageShow->home_Cat_image!=null): ?>
                                                                <img src="public/product_image/category_image/<?php echo e($productImageShow->home_Cat_image); ?>" alt="" style="width: 60px;height: 50px" />
                                                            <?php else: ?>
                                                                <img src="public/commonImage/common.png" alt="" style="width: 60px;height: 50px" />
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </div><br/>
                                                </div><br/>
                                                <div class="form-group ">
                                                    <label for="productName" class="control-label col-lg-4">Details Image 1</label>
                                                    <div class="col-lg-4">
                                                        <input type="file" name="detailsOne" class="form-control" id="product_name"/>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <?php foreach($productImage=App\Model\ProductImage::where('product_id','=',$product->product_id)->get() as $productImageShow): ?>
                                                            <?php if($productImageShow->details_image_one!=null): ?>
                                                                <img src="public/product_image/details_image/<?php echo e($productImageShow->details_image_one); ?>" alt="" style="width: 60px;height: 50px" />
                                                            <?php else: ?>
                                                                <img src="public/commonImage/common.png" alt="" style="width: 60px;height: 50px" />
                                                            <?php endif; ?>

                                                        <?php endforeach; ?>
                                                    </div><br/>
                                                </div><br/>
                                                <div class="form-group ">
                                                    <label for="productName" class="control-label col-lg-4">Details Image 2</label>
                                                    <div class="col-lg-4">
                                                        <input type="file" name="detailsTwo" class="form-control" id="product_name"/>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <?php foreach($productImage=App\Model\ProductImage::where('product_id','=',$product->product_id)->get() as $productImageShow): ?>
                                                            <?php if($productImageShow->details_image_two!=null): ?>
                                                                <img src="public/product_image/details_image/<?php echo e($productImageShow->details_image_two); ?>" alt="" style="width: 60px;height: 50px" />
                                                            <?php else: ?>
                                                                <img src="public/commonImage/common.png" alt="" style="width: 60px;height: 50px" />
                                                            <?php endif; ?>

                                                        <?php endforeach; ?>
                                                    </div><br/>
                                                </div><br/>
                                                <div class="form-group ">
                                                    <label for="productName" class="control-label col-lg-4">Details Image 3</label>
                                                    <div class="col-lg-4">
                                                        <input type="file" name="detailsThree" class="form-control" id="product_name"/>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <?php foreach($productImage=App\Model\ProductImage::where('product_id','=',$product->product_id)->get() as $productImageShow): ?>
                                                            <?php if($productImageShow->details_image_three!=null): ?>
                                                                <img src="public/product_image/details_image/<?php echo e($productImageShow->details_image_three); ?>" alt="" style="width: 60px;height: 50px" />
                                                            <?php else: ?>
                                                                <img src="public/commonImage/common.png" alt="" style="width: 60px;height: 50px" />
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </div><br/>
                                                </div><br/>


                                                <div class="form-group">
                                                    <label for="productName" class="control-label col-lg-6">.</label>
                                                    <div class="col-lg-6">
                                                        <button class="btn btn-primary" type="submit">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php echo Form::close(); ?>

                                        </div>



                                        <div class="col-md-2">
                                            <?php foreach($productImage=App\Model\ProductImage::where('product_id','=',$product->product_id)->get() as $productImageShow): ?>
                                                <?php echo Form::open([ 'url' =>['imageDelect',$productImageShow->id], 'files' => true, 'enctype' => 'multipart/form-data','id' => 'image-upload' ]); ?>

                                                <div class="col-lg-2">
                                                    <button name="ImageOne" value="<?php echo e($productImageShow->home_Cat_image); ?>"  class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/>
                                                <div class="col-lg-2">
                                                    <button name="imageTwo" value="<?php echo e($productImageShow->details_image_one); ?>" class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/>
                                                <div class="col-lg-2">
                                                    <button name="imageThree" value="<?php echo e($productImageShow->details_image_two); ?>" class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/>
                                                <div class="col-lg-2">
                                                    <button name="imageFour" value="<?php echo e($productImageShow->details_image_three); ?>" class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/>
                                                <?php echo Form::close(); ?>

                                            <?php endforeach; ?>
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
            <?php endforeach; ?>
            <!-- Multiple Image Uploaded  End -->

            <!-- Data Add Modual box -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Product</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">
                                <div class="form-group ">
                                    <label for="mainCategory" class="control-label col-lg-3">Main Category</label>
                                    <div class="col-lg-6">
                                        <select name="main_category" class="form-control" id="main_category">
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
                                        <select name="sub_category" class="form-control" id="sub_category">

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="productName" class="control-label col-lg-3">Name</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="product_name" name="product_name" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="code" class="control-label col-lg-3">Code</label>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control" id="code_no" name="code_no"/>
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
                                        <input class="form-control " id="buying_price" name="buying_price" type="number" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="email" class="control-label col-lg-3">Selling Price</label>
                                    <div class="col-lg-6">
                                        <input class="form-control " id="selling_price" name="selling_price" type="number" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="agree" class="control-label col-lg-3 col-sm-3">Commission</label>
                                    <div class="col-lg-6 col-sm-9">
                                        <!--  <input class="form-control " id="commission" name="commission" type="number" /> -->
                                        <select class="form-control m-bot15" id="commission" name="commission">
                                            <option value="0">Select</option>
                                            <option value="5">5 %</option>
                                            <option value="10">10 %</option>
                                            <option value="15">15 %</option>
                                        </select>
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
                                        <input class="form-control " id="supplier_name" name="supplier_name" type="text" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3 col-sm-3">Details</label>
                                    <div class="col-lg-8 col-sm-9">
                                        <textarea class="form-control ckeditor" id="product_details" name="product_details" rows="6"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                            <input type="hidden" id="product_id" name="product_id" value="0">
                        </div>
                    </div>
                </div>
            </div>
            <meta name="_token" content="<?php echo csrf_token(); ?>" />
            <!-- Data  Add Modual box End-->

            <script src="<?php echo e(URL::to('/')); ?>/assets/coustomJavascript/productAjax.js"></script>


            <script type="text/javascript">
                $(document).ready(function(){
                    $('#main_category').on("change",function () {
                        var categoryId = $(this).find('option:selected').val();
                        //alert(categoryId);
                        $.ajax({
                            url: "<?php echo e(URL::to('/')); ?>/subCategory/",
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            type: "POST",
                            data: "categoryId="+categoryId,
                            success: function (response) {
                                console.log(response);
                                $("#sub_category").html(response);
                            },
                        });
                    });

                });
            </script>
            <!--- Swite message show  delete form product by obydul date:25-10-16-->
            <script>
                $('button.productDelete').click(function() {
                    alert("12");
                    var itemId = $(this).attr("data-item-id");
                    mainCategoryDelete(itemId);
                });
                function mainCategoryDelete(itemId) {
                    swal({
                        title: "Are you sure?",
                        text: "Are you sure that you want to delete this Item ?",
                        type: "warning",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        confirmButtonText: "Yes, delete it!",
                        confirmButtonColor: "#ec6c62"
                    }, function() {
                        $.ajax({
                            method: "GET",
                            url: "<?php echo e(URL::to('/')); ?>/productDelete/" + itemId,
                            type: "DELETE"
                        })
                                .done(function(data) {
                                    swal("Deleted!", "Your item was successfully deleted!", "success");

                                })
                                .error(function(data) {
                                    swal("Oops", "We couldn't connect to the server!", "error");

                                });
                    });
                }
            </script>
            <!--- Swite message show  delete form seperate image by obydul date:25-10-16-->
            <script>
                $('button.imageDelete').click(function() {
                    //alert("120");
                    var itemId = $(this).attr("data-item-id");
                    imageDelete(itemId);
                });
                function imageDelete(itemId) {
                    swal({
                        title: "Are you sure?",
                        text: "Are you sure that you want to delete this Item ?",
                        type: "warning",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        confirmButtonText: "Yes, delete it!",
                        confirmButtonColor: "#ec6c62"
                    }, function() {
                        $.ajax({
                            method: "GET",
                            url: "<?php echo e(URL::to('/')); ?>/imageDelect/" + itemId,
                            type: "DELETE"
                        })
                                .done(function(data) {
                                    swal("Deleted!", "Your item was successfully deleted!", "success");

                                })
                                .error(function(data) {
                                    swal("Oops", "We couldn't connect to the server!", "error");

                                });
                    });
                }
            </script>
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