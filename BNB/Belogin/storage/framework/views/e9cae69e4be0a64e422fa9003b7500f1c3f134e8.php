<?php $__env->startSection('content'); ?>
    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->user==6): ?>

            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Hotel Approve Table.
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div class="adv-table">
                                <table  class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Logo</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($hotelMarchent as $value): ?>
                                        <tr>
                                            <td><?php echo e($value->company_name); ?></td>
                                            <td><?php echo e($value->phone); ?></td>
                                            <td><?php echo $value->address; ?> </td>
                                            <td><?php echo e($value->city); ?></td>
                                            <td style="width: 20%"><img style="width:90%;margin: 5px auto" src="product_image/logo/<?php echo e($value->company_logo); ?>"></td>
                                            <td>
                                                <?php echo Form::open(['url'=>['hotelMarchentStatus',$value->user_id],'class'=>'form-horizontal']); ?>

                                                <select name="hotelMarchentSataus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                    <option selected>
                                                        <?php if($value->hotel_marchent_status == 1): ?>
                                                            View
                                                        <?php elseif($value->hotel_marchent_status == 2): ?>
                                                            Approve
                                                        <?php elseif($value->hotel_marchent_status == 0): ?>
                                                            Pending
                                                        <?php endif; ?>
                                                    </option>

                                                    <option value="0">Pending</option>
                                                    <option value="1">View</option>
                                                    <option value="2">Approve</option>
                                                </select>
                                                <?php echo Form::close(); ?>

                                            </td>
                                            <td><button  class="hotelMarchentDelete btn btn-danger" data-item-id="<?php echo e($value->id); ?>">Delete</button></td>
                                        </tr>
                                    <?php endforeach; ?>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <!--- Swite message show  delete form Hotel marchent by obydul date:20-10-16 -->
            <script>
                $('button.hotelMarchentDelete').click(function() {
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
                            url: "<?php echo e(URL::to('/')); ?>/hotelMarchentDelete/" + itemId,
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