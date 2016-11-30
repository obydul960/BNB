<?php $__env->startSection('content'); ?>


    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->user==6): ?>
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Marchent List.
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
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($merchantList as $value): ?>
                                        <tr class="gradeX">
                                            <td><?php echo e($value->company_name); ?></td>
                                            <td><?php echo e($value->phone); ?></td>
                                            <td><?php echo e($value->email); ?></td>
                                            <td> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo e($value->user_id); ?>">View</button></td>
                                            <td>
                                                <?php echo Form::open(['url'=>['marchentStatusManage',$value->user_id],'class'=>'form-horizontal']); ?>

                                                <select name="marchentStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                    <option selected>
                                                        <?php if($value->status == 1): ?>
                                                            Approve
                                                        <?php elseif($value->status == 0): ?>
                                                            Not Approve
                                                        <?php elseif($value->status == 2): ?>
                                                            Veryfied
                                                        <?php endif; ?>
                                                    </option>
                                                    <option value="1">Approve</option>
                                                    <option value="0">Not Approve</option>
                                                    <option value="2">Veryfied</option>
                                                </select>
                                                <?php echo Form::close(); ?>

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

            <?php foreach($merchantList as $value): ?>
                <!-- Modal start -->
                <div class="container">
                    <div class="modal fade" id="myModal<?php echo e($value->user_id); ?>" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                </div>
                                <div class="modal-body">
                                    <!-- Responsive Table Start -->
                                    <div class="table-responsive">
                                        <table class="table" border="1">
                                            <tbody>
                                            <tr>
                                                <td>Company Name</td>
                                                <td><?php echo e($value->company_name); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Company Logo</td>
                                                <td>
                                                    <img style="width: 50px;;height: 50px;" src="public/product_image/<?php echo e($value->company_logo); ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Shopping Mall</td>
                                                <td><?php echo e($value->shopping_mohol); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Phone</td>
                                                <td><?php echo e($value->phone); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Contact Person Phone</td>
                                                <td><?php echo e($value->contact_person_phone); ?></td>
                                            </tr>
                                            <tr>
                                                <td>E-mail</td>
                                                <td><?php echo e($value->email); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td><?php echo $value->address; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Good Pick Up Address</td>
                                                <td><?php echo e($value->good_pick_up_address); ?></td>
                                            </tr>
                                            <tr>
                                                <td>City</td>
                                                <td><?php echo e($value->city); ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Responsive Table End -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- Modal end -->
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