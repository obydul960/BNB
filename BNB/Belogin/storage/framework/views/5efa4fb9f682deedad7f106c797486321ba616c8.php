<?php $__env->startSection('content'); ?>

<?php if(Auth::check()): ?>
    <?php if(Auth::user()->user==1): ?>
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
                                            <input type="text" readonly="" size="16" name="date" class="form-control" placeholder="Date selected">
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
                                        <select name="categoryName" class="form-control" id="mainCat">
                                            <option selected value="">Category</option>
                                            <?php foreach($categoryList as $k=>$v): ?>
                                                <option value="<?php echo e($k); ?>"><?php echo e($v); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <select name="subCategoryName" class="form-control" id="subcat">
                                            <option value="">Sub Category</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="submit" name="dataSeacrhFrom" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>

                            <table  class="table table-striped table-hover table-bordered" id="editable-sample">
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
                                            <?php echo Form::open(['url'=>['BnbManageProductAcceptStatus',$value->product_id],'class'=>'form-horizontal']); ?>

                                            <select name="acceptStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                <option selected>
                                                    <?php if($value->accept_status == 1): ?>
                                                    <option value="1" selected>Approved</option>
                                                    <option value="0">Not Approved</option>
                                                    <?php elseif($value->accept_status == 0): ?>
                                                    <option value="0" selected>Not Approved</option>
                                                    <option value="1">Approved</option>
                                                    <?php endif; ?>
                                                </option>

                                            </select>
                                            <?php echo Form::close(); ?>

                                        </td>
                                        <td>
                                            <?php echo Form::open(['url'=>['BnbManageProductViewStatus',$value->product_id],'class'=>'form-horizontal']); ?>

                                            <select name="viewStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                <option selected>
                                                    <?php if($value->view_status == 1): ?>
                                                        <option value="1" selected>Yes</option>
                                                        <option value="0">No </option>
                                                    <?php elseif($value->view_status == 0): ?>
                                                        <option value="0" selected>No </option>
                                                        <option value="1">Yes</option>
                                                    <?php endif; ?>
                                                </option>

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
                                        <img style="width: 200px;height:200px;margin: 5px;" src="Belogin/public/product_image/category_image/<?php echo e($productImageShow->home_Cat_image); ?>">
                                    <?php else: ?>
                                        <img src="Belogin/public/commonImage/common.png" alt="" style="width: 200px;height:200px;margin: 5px;" />
                                    <?php endif; ?>
                                    <?php if($productImageShow->details_image_one!=null): ?>
                                        <img style="width: 200px;height:200px;margin: 5px;" src="Belogin/public/product_image/details_image/<?php echo e($productImageShow->details_image_one); ?>">
                                    <?php else: ?>
                                        <img src="Belogin/public/commonImage/common.png" alt="" style="width: 200px;height:200px;margin: 5px;" />
                                    <?php endif; ?>
                                    <?php if($productImageShow->details_image_two!=null): ?>
                                        <img style="width: 200px;height:200px;margin: 5px;" src="Belogin/public/product_image/details_image/<?php echo e($productImageShow->details_image_two); ?>">
                                    <?php else: ?>
                                        <img src="Belogin/public/commonImage/common.png" alt="" style="width: 200px;height:200px;margin: 5px;" />
                                    <?php endif; ?>
                                    <?php if($productImageShow->details_image_three!=null): ?>
                                        <img style="width: 200px;height:200px;margin: 5px;" src="Belogin/public/product_image/details_image/<?php echo e($productImageShow->details_image_three); ?>">
                                    <?php else: ?>
                                        <img src="Belogin/public/commonImage/common.png" alt="" style="width: 200px;height:200px;margin: 5px;" />
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

        <!--sub category add -->
        <script>
            jQuery(document).ready(function($){
                n=1;
                $('#mainCat').change(function(){

                    $.get("<?php echo e(url('api/dropdown/subcategory')); ?>",

                            { option: $(this).val() },
                            function(data) {
                                var model = $('#subcat');
                                model.empty();
                                model.append("<option value=''>" + 'Select Subcategory' + "</option>");
                                $.each(data, function(index,element) {
                                    model.append("<option value='"+ element +"'>" + element + "</option>");
                                });
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