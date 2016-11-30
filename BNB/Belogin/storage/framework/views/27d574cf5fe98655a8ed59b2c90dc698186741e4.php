<?php $__env->startSection('content'); ?>

    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->user==1): ?>

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
                            <button id="btn_add" name="btn_add" class="btn btn-success pull-left "><a href="<?php echo e(url('manageRoom')); ?>"><i class="fa fa-chevron-circle-left"></i> Back</a></button>
                            <div class="adv-table">
                                <form  class="form-horizontal" role="form" action="<?php echo e(url('manageRoomSearch')); ?>" method="post">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <div class="form-group">
                                        <div class="col-lg-2" style="margin-left: 20px">
                                            <select name="area" class="form-control">
                                                <option selected value="">Area</option>
                                                <?php foreach($areaLocationHotelList as $area): ?>
                                                    <option value="<?php echo e($area->area); ?>"><?php echo e($area->area); ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                        <div class="col-lg-2" style="margin-left: 20px">
                                            <select name="location" class="form-control">
                                                <option selected value="">Location</option>
                                                <?php foreach($areaLocationHotelList as $location): ?>
                                                    <option value="<?php echo e($location->location); ?>"> <?php echo e($location->location); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-2">
                                            <select name="hotelName" class="form-control" id="selectCategory">
                                                <option selected value="">Hotel Name</option>
                                                <?php foreach($areaLocationHotelList as $hotel): ?>
                                                    <option value="<?php echo e($hotel->hotel_name); ?>"><?php echo e($hotel->hotel_name); ?></option>
                                                <?php endforeach; ?>
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
                                        <th>Hotel Name</th>
                                        <th>Title</th>
                                        <th>Publish</th>
                                        <th>Availability</th>
                                        <th>Book</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(Auth::user()->user==3): ?>
                                        <?php foreach($manageRoomSearch as $value): ?>
                                            <tr class="gradeX">
                                                <td><?php echo e($value->hotel_name); ?></td>
                                                <td><?php echo e($value->title); ?></td>
                                                <td>
                                                    <?php echo Form::open(['url'=>['manageRoomStatus',$value->id],'class'=>'form-horizontal']); ?>

                                                    <select name="mangeRoomPublish" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        <?php if($value->manage_room_status == 0): ?>
                                                            <option value="0" selected>No</option>
                                                            <option value="1">Yes</option>
                                                        <?php elseif($value->manage_room_status == 1): ?>
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                            <?php endif; ?>
                                                            </option>
                                                    </select>
                                                    <?php echo Form::close(); ?>

                                                </td>
                                                <td>
                                                    <?php echo Form::open(['url'=>['manageRoomAvailability',$value->id],'class'=>'form-horizontal']); ?>

                                                    <select name="manageRoomAvailability" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        <?php if($value->availability == 0): ?>
                                                            <option value="0" selected>No</option>
                                                            <option value="1">Yes</option>
                                                        <?php elseif($value->availability == 1): ?>
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                            <?php endif; ?>
                                                            </option>
                                                    </select>
                                                    <?php echo Form::close(); ?>

                                                </td>
                                                <td>
                                                    <?php if($value->availability == 1): ?>
                                                        <button type="button" class="btn btn-success">Book</button>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="<?php echo e(url('manageRoomEdit')); ?>/<?php echo e($value->id); ?>">Edit</a>
                                                    <button  class="manageRoomDelete btn btn-danger" data-item-id="<?php echo e($value->id); ?>">Delete</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <?php foreach($bnbmanageRoomSearch as $value): ?>
                                            <tr class="gradeX">
                                                <td><?php echo e($value->hotel_name); ?></td>
                                                <td><?php echo e($value->title); ?></td>
                                                <td>
                                                    <?php echo Form::open(['url'=>['manageRoomStatus',$value->id],'class'=>'form-horizontal']); ?>

                                                    <select name="mangeRoomPublish" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        <?php if($value->manage_room_status == 0): ?>
                                                            <option value="0" selected>No</option>
                                                            <option value="1">Yes</option>
                                                        <?php elseif($value->manage_room_status == 1): ?>
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                            <?php endif; ?>
                                                            </option>
                                                    </select>
                                                    <?php echo Form::close(); ?>

                                                </td>
                                                <td>
                                                    <?php echo Form::open(['url'=>['manageRoomAvailability',$value->id],'class'=>'form-horizontal']); ?>

                                                    <select name="manageRoomAvailability" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        <?php if($value->availability == 0): ?>
                                                            <option value="0" selected>No</option>
                                                            <option value="1">Yes</option>
                                                        <?php elseif($value->availability == 1): ?>
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                            <?php endif; ?>
                                                            </option>
                                                    </select>
                                                    <?php echo Form::close(); ?>

                                                </td>
                                                <td>
                                                    <?php if($value->availability == 1): ?>
                                                        <button type="button" class="btn btn-success">Book</button>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="<?php echo e(url('manageRoomEdit')); ?>/<?php echo e($value->id); ?>">Edit</a>
                                                    <button  class="manageRoomDelete btn btn-danger" data-item-id="<?php echo e($value->id); ?>">Delete</button>
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
                $('button.manageRoomDelete').click(function() {
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
                            url: "<?php echo e(URL::to('/')); ?>/manageRoomDelete/" + itemId,
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