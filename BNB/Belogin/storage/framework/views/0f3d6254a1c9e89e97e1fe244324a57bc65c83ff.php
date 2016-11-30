<?php $__env->startSection('content'); ?>

<?php if(Auth::check()): ?>
    <?php if(Auth::user()->user==6): ?>
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Manage Product Table.
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <form  class="form-horizontal" role="form" action="<?php echo e(url('BnbManageProductSearch')); ?>" method="post">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <div class="form-group">
                                    <div class="col-md-2 col-xs-2">
                                        <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date=""  class="input-append date dpYears">
                                            <input type="text" readonly="" size="16" name="date" class="form-control">
                                            <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2" style="margin-left: 20px">
                                        <?php /*  <input type="text" name="marchent" class="form-control" id="" placeholder="Marchent">*/ ?>
                                        <select name="marchent" class="form-control">
                                            <option selected value="">Marchent</option>
                                            <?php foreach($merchantList as $marchent): ?>
                                                <option value="<?php echo e($marchent->user_id); ?>"><?php echo e($marchent->company_name); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <select name="categoryName" class="form-control" id="selectCategory">
                                            <option selected value="">Category</option>
                                            <?php foreach($categoryList as $categoryName): ?>
                                                <option value="<?php echo e($categoryName->id); ?>"><?php echo e($categoryName->category_name); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <select name="subCategoryName" class="form-control" id="sub_category">
                                            <option>Sub Category</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="submit" name="dataSeacrhFrom" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>

                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Number</th>
                                    <th>Price</th>
                                    <th>Quentity</th>
                                    <th>Approval</th>
                                    <th>Home View</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($manageProductList as $value): ?>
                                    <tr>
                                        <td><?php echo e($value->product_name); ?></td>
                                        <td><?php echo e($value->code_no); ?></td>
                                        <td><?php echo e($value->selling_price); ?></td>
                                        <td><?php echo e($value->quantity); ?></td>
                                        <td>
                                            <?php echo Form::open(['url'=>['BnbManageProductApproval',$value->product_id],'class'=>'form-horizontal']); ?>

                                            <select name="productApproval" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                <option selected>
                                                    <?php if($value->approval == 1): ?>
                                                        Approve
                                                    <?php elseif($value->approval == 0): ?>
                                                        Not Approve
                                                    <?php endif; ?>
                                                </option>
                                                <option value="1">Approve</option>
                                                <option value="0">Not Approve</option>
                                            </select>
                                            <?php echo Form::close(); ?>

                                        </td>
                                        <td>
                                            <?php echo Form::open(['url'=>['BnbManageProductHomeView',$value->product_id],'class'=>'form-horizontal']); ?>

                                            <select name="homeView" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                <option selected>
                                                    <?php if($value->home_view == 1): ?>
                                                        Yes
                                                    <?php elseif($value->home_view == 0): ?>
                                                        No
                                                    <?php endif; ?>
                                                </option>
                                                <option value="1">Yes</option>
                                                <option value="0">No </option>
                                            </select>
                                            <?php echo Form::close(); ?>

                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo e($value->product_id); ?>">Image</button>
                                            <a class="btn btn-success" href="<?php echo e(url('BnbManageEdit')); ?>/<?php echo e($value->product_id); ?>">Edit</a>
                                            <button  class="main_category_delete btn btn-danger" data-item-id="<?php echo e($value->product_id); ?>">Delete</button>
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


        <?php foreach($manageProductList as $value): ?>
            <div class="container">
                <!-- Modal -->
                <div class="modal fade" id="myModal<?php echo e($value->product_id); ?>" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Product Image Show</h4>
                            </div>
                            <div class="modal-body">
                                <?php foreach($productImage=App\Model\ProductImage::where('product_id','=',$value->product_id)->get() as $productImageShow): ?>
                                    <?php if($productImageShow->home_Cat_image!=null): ?>
                                        <img style="width: 200px;height:200px;margin: 5px;" src="public/product_image/category_image/<?php echo e($productImageShow->home_Cat_image); ?>">
                                    <?php else: ?>
                                        <img src="public/commonImage/common.png" alt="" style="width: 200px;height:200px;margin: 5px;" />
                                    <?php endif; ?>
                                    <?php if($productImageShow->details_image_one!=null): ?>
                                        <img style="width: 200px;height:200px;margin: 5px;" src="public/product_image/details_image/<?php echo e($productImageShow->details_image_one); ?>">
                                    <?php else: ?>
                                        <img src="public/commonImage/common.png" alt="" style="width: 200px;height:200px;margin: 5px;" />
                                    <?php endif; ?>
                                    <?php if($productImageShow->details_image_two!=null): ?>
                                        <img style="width: 200px;height:200px;margin: 5px;" src="public/product_image/details_image/<?php echo e($productImageShow->details_image_two); ?>">
                                    <?php else: ?>
                                        <img src="public/commonImage/common.png" alt="" style="width: 200px;height:200px;margin: 5px;" />
                                    <?php endif; ?>
                                    <?php if($productImageShow->details_image_three!=null): ?>
                                        <img style="width: 200px;height:200px;margin: 5px;" src="public/product_image/details_image/<?php echo e($productImageShow->details_image_three); ?>">
                                    <?php else: ?>
                                        <img src="public/commonImage/common.png" alt="" style="width: 200px;height:200px;margin: 5px;" />
                                    <?php endif; ?>

                                <?php endforeach; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        <?php endforeach; ?>


        <!--- Swite message show  delete form product by obydul date:20-10-16 -->
        <script>
            $('button.main_category_delete').click(function() {
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
                        url: "<?php echo e(URL::to('/')); ?>/BnbManageProductDelete/" + itemId,
                        type: "DELETE"
                    })
                            .done(function(data) {
                                swal("Deleted!", "Your item was successfully deleted!", "success");
                                location.reload();
                            })
                            .error(function(data) {
                                swal("Oops", "We couldn't connect to the server!", "error");
                                location.reload();
                            });
                });
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#selectCategory').on("change",function () {
                    var categoryId = $(this).find('option:selected').val();
                    //alert(categoryId);
                    $.ajax({
                        url: "<?php echo e(URL::to('/')); ?>/BnbSubCategory/",
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