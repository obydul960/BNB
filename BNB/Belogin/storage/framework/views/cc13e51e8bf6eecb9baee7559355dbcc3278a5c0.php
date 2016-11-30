<?php $__env->startSection('content'); ?>

    <!--dynamic table-->
    <link href="<?php echo e(URL::to('/')); ?>/assets/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->user==6): ?>
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Manage Product Serch Table.
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
                                            <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                                <input type="text" readonly="" size="16" name="date" class="form-control" selected value="">
                                                <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-2" style="margin-left: 20px">
                                            <?php /*  <input type="text" name="marchent" class="form-control" id="" placeholder="Marchent">*/ ?>
                                            <select name="marchent" class="form-control">
                                                <option selected value="">Marchent</option>
                                                <?php foreach($marchentList as $marchent): ?>
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
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($serechManageProduct as $value): ?>
                                        <tr>
                                            <td><?php echo e($value->product_name); ?></td>
                                            <td><?php echo e($value->code_no); ?></td>
                                            <td><?php echo e($value->selling_price); ?></td>
                                            <td><?php echo e($value->quantity); ?></td>
                                            <td>
                                                <?php echo Form::open(['url'=>['BnbManageProductApproval',$value->id],'class'=>'form-horizontal']); ?>

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
                                                <a class="btn btn-success" href="<?php echo e(url('BnbManageEdit')); ?>/<?php echo e($value->id); ?>">Edit</a>
                                                <button  class="mnageProductDelete btn btn-danger" data-item-id="<?php echo e($value->id); ?>">Delete</button>
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
            <!--dynamic table initialization -->
            <script src="<?php echo e(URL::to('/')); ?>/assets/js/dynamic_table_init.js"></script>
            <!-- Date pickure -->
            <script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
            <script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
            <script src="<?php echo e(URL::to('/')); ?>/assets/js/select2/select2.js"></script>

            <!--- Swite message show  delete form product by obydul date:20-10-16 -->
            <script>
                $('button.mnageProductDelete').click(function() {
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