<?php $__env->startSection('content'); ?>

    <!--dynamic table-->
    <link href="<?php echo e(URL::to('/')); ?>/assets/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    View Product Table.
                    <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table">
                        <form  class="form-horizontal" role="form" action="<?php echo e(url('viewProductStatus')); ?>" method="post">
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
                                    <select name="categoryName" class="form-control" id="viewMinCategory">
                                        <option selected value="">Category</option>
                                        <?php foreach($categoryList as $categoryName): ?>
                                            <option value="<?php echo e($categoryName->id); ?>"><?php echo e($categoryName->category_name); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <select name="subCategoryName" class="form-control" id="subCaegoryId">
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
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($viewProductStatus as $value): ?>
                                <tr>
                                    <td><?php echo e($value->product_name); ?></td>
                                    <td><?php echo e($value->product_code_no); ?></td>
                                    <td><?php echo e($value->price); ?></td>
                                    <td><?php echo e($value->quentity); ?></td>
                                    <td>
                                        <?php if($value->status == 0): ?>
                                            Pending
                                        <?php endif; ?>
                                        <?php if($value->status == 1): ?>
                                            Delivered
                                        <?php endif; ?>
                                        <?php if($value->status == 2): ?>
                                            Done
                                        <?php endif; ?>
                                        <?php if($value->status == 3): ?>
                                            Recived
                                        <?php endif; ?>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#viewMinCategory').on("change",function () {
                var categoryId = $(this).find('option:selected').val();
                //alert(categoryId);
                $.ajax({
                    url: "<?php echo e(URL::to('/')); ?>/viewProductSubCategory/",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: "POST",
                    data: "categoryId="+categoryId,
                    success: function (response) {
                        console.log(response);
                        $("#subCaegoryId").html(response);
                    },
                });
            });

        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backentMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>