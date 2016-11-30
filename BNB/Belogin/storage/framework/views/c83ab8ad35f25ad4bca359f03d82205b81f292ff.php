<?php $__env->startSection('content'); ?>


    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->user==6): ?>

            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Manage Package Profit Reprot.
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div class="adv-table">
                                <form  class="form-horizontal" role="form" action="<?php echo e(url('packageProfitReport')); ?>" method="post">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <div class="form-group">
                                        <div class="col-md-2 col-xs-2">
                                            <span>Start Date</span>
                                            <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                                <input type="text" readonly="" size="16" name="startDate" class="form-control" placeholder="Select Start Date">
                                                <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2" style="margin-left:20%">
                                            <span>End Date</span>
                                            <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                                <input type="text" readonly="" size="16" name="endDate" class="form-control" placeholder="Select End Date">
                                                <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-2" style="margin-left:5%;margin-top: 2%">
                                            <button type="submit" name="reprot" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                                <table  class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                    <tr>
                                        <th>Tourist Name</th>
                                        <th>Package Name</th>
                                        <th>Date</th>
                                        <th>Profit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($profitList as $value): ?>
                                        <tr>
                                            <td><?php echo e($value->turist_name); ?></td>
                                            <td><?php echo e($value->title); ?></td>
                                            <td><?php echo e($value->date); ?></td>
                                            <td><?php echo e($value->commission); ?></td>
                                        </tr>
                                    <?php endforeach; ?>

                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </section>
                </div>
            </div>

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