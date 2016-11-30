<?php $__env->startSection('content'); ?>
 <div class="row">
    <div class="col-sm-6">
    <section class="panel">
    <header class="panel-heading">
        Main Category
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
    </header>
    <div class="panel-body">
            <div class=" form">


                <?php echo Form::open(['url' => 'category_add','class'=>'form-horizontal' ]); ?>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">Main Category</label>
                        <div class="col-lg-5">
                            <input class=" form-control" id="mainCategory" name="mainCategory"  type="text"  />
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
 
    <div class="col-sm-6">
    <section class="panel">
    <div class="row">
    <div class="col-sm-12">
    <section class="panel">
    <header class="panel-heading">
        Main Category Table
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
    </header>
    <div class="panel-body">
    <div class="adv-table editable-table ">
    <div class="clearfix">
        <div class="btn-group pull-right">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right">
                <li><a href="#">Print</a></li>
                <li><a href="#">Save as PDF</a></li>
                <li><a href="#">Export to Excel</a></li>
            </ul>
        </div>
    </div>
    <div class="space15"></div>
    <table class="table table-striped table-hover table-bordered" id="editable-sample">
    <thead>
    <tr>
        <th>Name</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($mainCategoryShow as $value): ?>
    <tr class="">
        <?php echo Form::open(['url'=>['category_update',$value->id],'class'=>'form-horizontal']); ?>

        <td class="center"><input type="text" class=" form-control" id="mainCategory" name="mainCategory" value="<?php echo e($value->category_name); ?>"></td>
        <td><input type="submit" value="Update" class="btn btn-success" style="margin-top: 5px"></td>
        <?php echo Form::close(); ?>

        <td> <button  class="main_category_delete btn btn-danger" data-item-id="<?php echo e($value->id); ?>">Delete</button></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    </div>
    </div>
    </section>
    </div>
    </div>
    </div>


    <hr>

    <div class="col-sm-6">
        <section class="panel">
            <header class="panel-heading">
                Sub Category
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
            </header>
            <div class="panel-body">
                <div class=" form">
                    <?php echo Form::open(['url' => 'subCategoryAdd','class'=>'form-horizontal' ]); ?>

                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Main Category</label>
                            <div class="col-lg-6">
                                <select name="mainCategoryId" class="form-control input-sm m-bot15">
                                    <option value="0">Some Select</option>
                                    <?php foreach($mainCategoryShow as $value): ?>
                                    <option value="<?php echo e($value->id); ?>"><?php echo e($value->category_name); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="lastname" class="control-label col-lg-3">Sub Category</label>
                            <div class="col-lg-6">
                                <input type="text" name="SubCategory"  class=" form-control" id="lastname"/>
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

 
    <div class="col-sm-6">
        <section class="panel">
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sub Category Table
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div class="adv-table editable-table ">
                                <div class="clearfix">
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Save as PDF</a></li>
                                            <li><a href="#">Export to Excel</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="space15"></div>
                                <table class="table table-striped table-hover table-bordered" id="editable-sample2">
                                    <thead>
                                    <tr>
                                        <th>Main category</th>
                                        <th>Sub category</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($subCategoryShow as $value): ?>
                                    <tr class="">
                                        <?php echo Form::open(['url'=>['subCategoryUpdate',$value->id],'class'=>'form-horizontal']); ?>

                                        <td class="center">
                                            <select name="mainCategoryId" class="form-control input-sm m-bot15">
                                                <option selected value="<?php echo e($value->id); ?>"><?php echo e($value->category_name); ?></option>
                                                <?php foreach($mainCategoryShow as $value2): ?>
                                                <option value="<?php echo e($value2->id); ?>"><?php echo e($value2->category_name); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <td><input type="text" name="SubCategory" class=" form-control"   value="<?php echo e($value->sub_category_name); ?>"></td>
                                        <td><input type="submit" value="Update" class="btn btn-success" style="margin-top: 5px"></td>
                                        <?php echo Form::close(); ?>

                                        <td><button  class="sub_category_delete btn btn-danger" data-item-id="<?php echo e($value->id); ?>">Delete</button></td>
                                    </tr>
                                    <?php endforeach; ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
    </div>
</div>
<!--- Swite message show  delete form main category by obydul date:28-7-16-->
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
                url: "<?php echo e(URL::to('/')); ?>/category_delete/" + itemId,
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

<!--- Swite message show  delete form sub category by obydul date:28-7-16-->
<script>
    $('button.sub_category_delete').click(function() {
        var itemId = $(this).attr("data-item-id");
        subCategoryDelete(itemId);
    });
    function subCategoryDelete(itemId) {
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
                url: "<?php echo e(URL::to('/')); ?>/subCategoryDelete/" + itemId,
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



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backentMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>