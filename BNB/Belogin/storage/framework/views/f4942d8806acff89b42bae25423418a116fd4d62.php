<html>
<head>
    <title>Laravel CRUD Application using Ajax without Reloading Page</title>
    <link href="<?php echo e(URL::to('/')); ?>/assets/bs3/css/bootstrap.min.css" rel="stylesheet">
   <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">Laravel CRUD Application using Ajax without Reloading Page
            <button id="btn_add" name="btn_add" class="btn btn-default pull-right">Add New Product</button>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="products-list" name="products-list">
                <?php foreach($products as $product): ?>
                <tr id="product<?php echo e($product->id); ?>">
                    <td><?php echo e($product->id); ?></td>
                    <td><?php echo e($product->category_name); ?></td>
                    <td><?php echo e($product->category_name); ?></td>
                    <td>
                        <button class="btn btn-warning btn-detail open_modal" value="<?php echo e($product->id); ?>">Edit</button>
                        <button class="btn btn-danger btn-delete delete-product" value="<?php echo e($product->id); ?>">Delete</button>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Product</h4>
                </div>
                <div class="modal-body">
                    <form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">
                        <div class="form-group error">
                            <label for="inputName" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control has-error" id="name" name="name" placeholder="Product Name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDetail" class="col-sm-3 control-label">Details</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="details" name="details" placeholder="details" value="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-save" value="add">Save </button>
                    <input type="hidden" id="product_id" name="product_id" value="0">
                </div>
            </div>
        </div>
    </div>
</div>
<meta name="_token" content="<?php echo csrf_token(); ?>" />
<script src="<?php echo e(URL::to('/')); ?>/assets/js/jquery.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/bs3/js/bootstrap.min.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/ajaxscript.js"></script>

<!--<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>-->
<!--<script src="<?php echo e(asset('js/ajaxscript.js')); ?>"></script>-->
</body>
</html>



