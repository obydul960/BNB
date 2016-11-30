<?php $__env->startSection('content'); ?>

    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->user==1 || Auth::user()->user==4): ?>
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Manage Room List Table.
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <button id="btn_add" name="btn_add" class="btn btn-success pull-left "><a href="<?php echo e(url('managePackage')); ?>"><i class="fa fa-chevron-circle-left"></i> Back</a></button>
                            <div class="adv-table">
                                <form  class="form-horizontal" role="form" action="<?php echo e(url('packageSearch')); ?>" method="post">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <div class="form-group">
                                        <div class="col-lg-2" style="margin-left: 20px">
                                            <select name="location" class="form-control">
                                                <option selected value="">Location</option>
                                                  <?php if(Auth::user()->user==4): ?>
                                                    <?php foreach($packageSearch as $location): ?>
                                                        <option value="<?php echo e($location->location); ?>"><?php echo e($location->location); ?></option>
                                                    <?php endforeach; ?>
                                                  <?php else: ?>
                                                    <?php foreach($bnbpackageSearch as $location): ?>
                                                        <option value="<?php echo e($location->location); ?>"><?php echo e($location->location); ?></option>
                                                    <?php endforeach; ?>
                                                  <?php endif; ?>

                                            </select>
                                        </div>
                                        <div class="col-lg-2" style="margin-left: 20px">
                                            <select name="tourist" class="form-control">
                                                <option selected value="">Tourist</option>
                                                <?php if(Auth::user()->user==4): ?>
                                                    <?php foreach($packageSearch as $tourist): ?>
                                                        <option value="<?php echo e($tourist->turist_name); ?>"><?php echo e($tourist->turist_name); ?></option>
                                                    <?php endforeach; ?>
                                                <?php else: ?>
                                                    <?php foreach($bnbpackageSearch as $tourist): ?>
                                                        <option value="<?php echo e($tourist->turist_name); ?>"><?php echo e($tourist->turist_name); ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" name="dataSeacrhFrom" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                    <tr>
                                        <th>Touriest Name</th>
                                        <th>Title</th>
                                        <th>Publish</th>
                                        <th>Availability</th>
                                        <th>Book</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(Auth::user()->user==4): ?>
                                        <?php foreach($packageSearch as $value): ?>
                                            <tr class="gradeX">
                                                <td><?php echo e($value->turist_name); ?></td>
                                                <td><?php echo e($value->title); ?></td>
                                                <td>
                                                    <?php if(Auth::user()->user==1): ?>
                                                        <?php echo Form::open(['url'=>['packageStatus',$value->id],'class'=>'form-horizontal']); ?>

                                                        <select name="managePackageStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                            <option selected>
                                                            <?php if($value->package_status == 0): ?>
                                                                <option value="0" selected>unpublished</option>
                                                                <option value="1">Published</option>
                                                            <?php elseif($value->package_status == 1): ?>
                                                                <option value="1" selected>Published</option>
                                                                <option value="0">unpublished</option>
                                                                <?php endif; ?>
                                                                </option>
                                                        </select>
                                                        <?php echo Form::close(); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php echo Form::open(['url'=>['packageStorageStatus',$value->id],'class'=>'form-horizontal']); ?>

                                                    <select name="packageStorageStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        <?php if($value->storage_status == 0): ?>
                                                            <option value="0" selected>No</option>
                                                            <option value="1">Yes</option>
                                                        <?php elseif($value->storage_status == 1): ?>
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                            <?php endif; ?>
                                                            </option>
                                                    </select>
                                                    <?php echo Form::close(); ?>

                                                </td>
                                                <td>
                                                    <?php if($value->available == 1): ?>
                                                        <button type="button" class="btn btn-success">Book</button>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="<?php echo e(url('packageEdit')); ?>/<?php echo e($value->id); ?>">Edit</a>
                                                    <?php if(Auth::user()->user==1): ?>
                                                        <button  class="packageDelete btn btn-danger" data-item-id="<?php echo e($value->id); ?>">Delete</button>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <?php foreach($bnbpackageSearch as $value): ?>
                                            <tr class="gradeX">
                                                <td><?php echo e($value->turist_name); ?></td>
                                                <td><?php echo e($value->title); ?></td>
                                                <td>
                                                    <?php if(Auth::user()->user==1): ?>
                                                        <?php echo Form::open(['url'=>['packageStatus',$value->id],'class'=>'form-horizontal']); ?>

                                                        <select name="managePackageStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                            <option selected>
                                                            <?php if($value->package_status == 0): ?>
                                                                <option value="0" selected>unpublished</option>
                                                                <option value="1">Published</option>
                                                            <?php elseif($value->package_status == 1): ?>
                                                                <option value="1" selected>Published</option>
                                                                <option value="0">unpublished</option>
                                                                <?php endif; ?>
                                                                </option>
                                                        </select>
                                                        <?php echo Form::close(); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php echo Form::open(['url'=>['packageStorageStatus',$value->id],'class'=>'form-horizontal']); ?>

                                                    <select name="packageStorageStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        <?php if($value->storage_status == 0): ?>
                                                            <option value="0" selected>No</option>
                                                            <option value="1">Yes</option>
                                                        <?php elseif($value->storage_status == 1): ?>
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                            <?php endif; ?>
                                                            </option>
                                                    </select>
                                                    <?php echo Form::close(); ?>

                                                </td>
                                                <td>
                                                    <?php if($value->available == 1): ?>
                                                        <button type="button" class="btn btn-success">Book</button>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="<?php echo e(url('packageEdit')); ?>/<?php echo e($value->id); ?>">Edit</a>
                                                    <?php if(Auth::user()->user==1): ?>
                                                        <button  class="packageDelete btn btn-danger" data-item-id="<?php echo e($value->id); ?>">Delete</button>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <!--- Swite message show  delete form product by obydul date:20-10-16 -->
            <script>
                $('button.packageDelete').click(function() {
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
                            url: "<?php echo e(URL::to('/')); ?>/packageDelete/" + itemId,
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