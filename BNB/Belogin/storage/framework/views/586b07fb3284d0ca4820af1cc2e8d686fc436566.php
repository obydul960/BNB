<?php $__env->startSection('content'); ?>


    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->user==6): ?>

            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Product Manage Table
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
                                        <th>Title</th>
                                        <th>Discription</th>
                                        <th>Code</th>
                                        <th>Price</th>
                                        <th>Size</th>
                                        <th>Stock</th>
                                        <th>Publish</th>
                                        <th>Available</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($products as $product): ?>
                                        <tr>
                                            <td><?php echo e($product->product_name); ?></td>
                                            <td><?php echo $product->product_details; ?></td>
                                            <td><?php echo e($product->code_no); ?></td>
                                            <td><?php echo e($product->selling_price); ?></td>
                                            <td><?php echo e($product->discount); ?></td>
                                            <td><?php echo e($product->discount); ?></td>
                                            <td>
                                                <?php echo Form::open(['url'=>['productPublish',$product->product_id],'class'=>'form-horizontal']); ?>

                                                <select name="productPublish" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                    <option selected>
                                                        <?php if($product->publish == 1): ?>
                                                            Yes
                                                        <?php elseif($product->publish == 0): ?>
                                                            No
                                                        <?php endif; ?>
                                                    </option>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                                <?php echo Form::close(); ?>

                                            </td>
                                            <td>
                                                <?php echo Form::open(['url'=>['productAvailable',$product->product_id],'class'=>'form-horizontal']); ?>

                                                <select name="productAvailable" id="selectText" class="form-control m-bot15" onchange='this.form.submit()'>
                                                    <option selected>
                                                        <?php if($product->available == 1): ?>
                                                            Yes
                                                        <?php elseif($product->available == 0): ?>
                                                            No
                                                        <?php endif; ?>
                                                    </option>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
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