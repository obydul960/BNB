<?php $__env->startSection('content'); ?>

    <!--dynamic table-->
    <link href="<?php echo e(URL::to('/')); ?>/assets/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />

    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->user==1): ?>
            <div class="row" id="sliderAddShow">
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
                            <button name="btn_add" class="btn btn-success pull-left" id="SliderAdd"><a href="<?php echo e(url::to('sliderAdd')); ?>"> Add New slider</a></button>
                            <div class="adv-table">
                                <table  class="table table-striped table-hover table-bordered" id="editable-sample">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>company Name</th>
                                        <th>Image</th>
                                        <th>Indexing</th>
                                        <th>Approval</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($sliderShow as $value): ?>
                                        <tr>
                                            <td><?php echo e($value->image_title); ?></td>
                                            <td><?php echo e($value->company_name); ?></td>
                                            <td><img style="width: 100px;height:100px;" src="Belogin/public/sliderImages/<?php echo e($value->image_name); ?>"></td>
                                            <td>
                                                <?php echo Form::open(['url'=>['sliderIndexing',$value->id],'class'=>'form-horizontal']); ?>

                                                <select name="sliderIndexing" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                    <option value="0" selected><?php echo e($value->image_indexing); ?></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                                <?php echo Form::close(); ?>

                                            </td>
                                            <td>
                                                <?php echo Form::open(['url'=>['SliderStatus',$value->id],'class'=>'form-horizontal']); ?>

                                                <select name="sliderStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                    <option selected>
                                                        <?php if($value->status == 0): ?>
                                                            No
                                                    <option value="1">Yes</option>
                                                    <?php endif; ?>
                                                    <?php if($value->status == 1): ?>
                                                        Yes
                                                        <option value="0">No</option>
                                                        <?php endif; ?>
                                                        </option>
                                                </select>
                                                <?php echo Form::close(); ?>

                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo e($value->id); ?>">Details</button>
                                                <a class="btn btn-success" href="<?php echo e(url('sliderEdit')); ?>/<?php echo e($value->id); ?>">Edit</a>
                                                <button  class="main_category_delete btn btn-danger" data-item-id="<?php echo e($value->id); ?>">Delete</button>
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

            <!-- Show slider details madal -->
            <?php foreach($sliderShow as $value): ?>
                <div class="container">
                    <!-- Modal -->
                    <div class="modal fade" id="myModal<?php echo e($value->id); ?>" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Slider Image Details Show</h4>
                                </div>
                                <div class="modal-body">
                                    <?php echo $value->slider_details; ?>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
            <!-- Show slider details end modal-->

            <!--- Swite message show  delete form product by coustomJavascript date:20-10-16 -->
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
                            url: "<?php echo e(URL::to('/')); ?>/sliderDelete/" + itemId,
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