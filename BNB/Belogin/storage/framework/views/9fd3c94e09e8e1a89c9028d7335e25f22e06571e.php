<?php $__env->startSection('content'); ?>


    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->user==6): ?>


            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            product Order Manage Table.
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div class="adv-table">
                                <form  class="form-horizontal" role="form" action="<?php echo e(url('productSerch')); ?>" method="post">
                                    <?php /*<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">*/ ?>
                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-group">
                                        <div class="col-md-2 col-xs-2">
                                            <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                                <input type="text" readonly="" size="16" name="submitDate" class="form-control">
                                                <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-2" style="margin-left: 20px">
                                            <input type="text" name="area" class="typeahead form-control" id="" placeholder="Area">

                                        </div>
                                        <div class="col-lg-2">
                                            <input type="text" name="price"  class="form-control" id="" placeholder="Price">
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
                                        <th>Code</th>
                                        <th>Date</th>
                                        <th>Area</th>
                                        <th>Phone</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($orderListShow as $value): ?>
                                        <tr>
                                            <td><?php echo e($value->product_name); ?></td>
                                            <td><?php echo e($value->product_code_no); ?></td>
                                            <td><?php echo e($value->date); ?></td>
                                            <td><?php echo e($value->area); ?></td>
                                            <td><?php echo e($value->phone); ?></td>
                                            <td><?php echo e($value->price); ?></td>
                                            <td>
                                                <?php echo Form::open(['url'=>['productStatus',$value->id],'class'=>'form-horizontal']); ?>

                                                <select name="productSataus" id="selectText" class="form-control" onchange='this.form.submit()' >
                                                    <option selected>
                                                        <?php if($value->status == 0): ?>
                                                            Pending
                                                        <?php elseif($value->status == 1): ?>
                                                            Deliver
                                                        <?php elseif($value->status == 2): ?>
                                                            Done
                                                        <?php endif; ?>
                                                    </option>
                                                    <option value="0">Pending</option>
                                                    <option value="1">Deliver</option>
                                                    <option value="2">Done</option>
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
            // auto comple sugestion data search
            <script type="text/javascript">
                var path = "<?php echo e(route('areaSearchAutocomplete')); ?>";
                $('input.typeahead').typeahead({
                    source:  function (query, process) {
                        return $.get(path, { query: query }, function (data) {
                            return process(data);
                        });
                    }
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