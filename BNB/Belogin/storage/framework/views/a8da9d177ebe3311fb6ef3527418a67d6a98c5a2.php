<?php $__env->startSection('content'); ?>

    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->user==1): ?>

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
                                <form  class="form-horizontal" role="form" action="<?php echo e(url('viewManageProductStatus')); ?>" method="post">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <div class="form-group">
                                        <div class="col-md-2 col-xs-2">
                                            <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                                <input type="text" readonly="" size="16" name="date" class="form-control" selected value="" placeholder="Date selected">
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
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($productList as $value): ?>
                                        <tr>
                                            <td><?php echo e($value->product_name); ?></td>
                                            <td><?php echo e($value->product_code_no); ?></td>
                                            <td><?php echo e($value->price); ?></td>
                                            <td><?php echo e($value->quentity); ?></td>
                                            <td>
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