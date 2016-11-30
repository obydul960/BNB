<?php $__env->startSection('content'); ?>


    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->user==1 ): ?>

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
                                <table  class="table table-striped table-hover table-bordered" id="editable-sample">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Discription</th>
                                        <th>Code</th>
                                        <th>Price</th>
                                        <th>Size</th>
                                        <th>Stock</th>
                                        <th>Status</th>
                                        <th>Storage Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(Auth::user()->user==2): ?>
                                        <?php foreach($products as $product): ?>
                                            <tr>
                                                <td><?php echo e($product->product_name); ?></td>
                                                <td><?php echo $product->product_details; ?></td>
                                                <td><?php echo e($product->code_no); ?></td>
                                                <td><?php echo e($product->selling_price); ?></td>
                                                <td><?php echo e($product->discount); ?></td>
                                                <td><?php echo e($product->discount); ?></td>
                                                <td>
                                                    <?php echo Form::open(['url'=>['productStatus',$product->product_id],'class'=>'form-horizontal']); ?>

                                                    <select name="productStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        <?php if($product->product_status == 1): ?>
                                                            <option value="1" selected>published</option>
                                                            <option value="0">unpublished</option>
                                                        <?php elseif($product->product_status == 0): ?>
                                                            <option value="0" selected>unpublished</option>
                                                            <option value="1">published</option>
                                                            <?php else: ?>
                                                            <?php endif; ?>
                                                            </option>
                                                    </select>
                                                    <?php echo Form::close(); ?>

                                                </td>
                                                <td>
                                                    <?php echo Form::open(['url'=>['storageStatus',$product->product_id],'class'=>'form-horizontal']); ?>

                                                    <select name="storageStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()'>
                                                        <option selected>
                                                        <?php if($product->storage_status == 1): ?>
                                                            <option value="1" selected>Available</option>
                                                            <option value="0">Unavailable</option>
                                                        <?php elseif($product->storage_status == 0): ?>
                                                            <option value="0" selected>Unavailable</option>
                                                            <option value="1">Available</option>
                                                            <?php endif; ?>
                                                            </option>

                                                    </select>
                                                    <?php echo Form::close(); ?>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <?php foreach($bnbproducts as $product): ?>
                                            <tr>
                                                <td><?php echo e($product->product_name); ?></td>
                                                <td><?php echo $product->product_details; ?></td>
                                                <td><?php echo e($product->code_no); ?></td>
                                                <td><?php echo e($product->selling_price); ?></td>
                                                <td><?php echo e($product->discount); ?></td>
                                                <td><?php echo e($product->discount); ?></td>
                                                <td>
                                                    <?php echo Form::open(['url'=>['productStatus',$product->product_id],'class'=>'form-horizontal']); ?>

                                                    <select name="productStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        <?php if($product->product_status == 1): ?>
                                                            <option value="1" selected>published</option>
                                                            <option value="0">unpublished</option>
                                                        <?php elseif($product->product_status == 0): ?>
                                                            <option value="0" selected>unpublished</option>
                                                            <option value="1">published</option>
                                                            <?php else: ?>
                                                            <?php endif; ?>
                                                            </option>
                                                    </select>
                                                    <?php echo Form::close(); ?>

                                                </td>
                                                <td>
                                                    <?php echo Form::open(['url'=>['storageStatus',$product->product_id],'class'=>'form-horizontal']); ?>

                                                    <select name="storageStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()'>
                                                        <option selected>
                                                        <?php if($product->storage_status == 1): ?>
                                                            <option value="1" selected>Available</option>
                                                            <option value="0">Unavailable</option>
                                                        <?php elseif($product->storage_status == 0): ?>
                                                            <option value="0" selected>Unavailable</option>
                                                            <option value="1">Available</option>
                                                            <?php endif; ?>
                                                            </option>

                                                    </select>
                                                    <?php echo Form::close(); ?>

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