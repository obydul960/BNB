<?php $__env->startSection('content'); ?>
    <!--dynamic table-->
 <link href="<?php echo e(URL::to('/')); ?>/assets/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />

        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Dynamic Table
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Code No</th>
                        <th class="text-center">Quentity</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $item): ?>
                    <tr class="item<?php echo e($item->id); ?>">
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->product_name); ?></td>
                        <td><?php echo e($item->code_no); ?></td>
                        <td><?php echo e($item->quantity); ?></td>
                        <td><button class="edit-modal btn btn-info" data-id="<?php echo e($item->id); ?>"
                                data-product_name="<?php echo e($item->product_name); ?>" data-code="<?php echo e($item->code_no); ?>" data-quantity="<?php echo e($item->quantity); ?>" data-buyingPrice="<?php echo e($item->quantity); ?>">
                                <span class="glyphicon glyphicon-edit" data-buyingPrice="<?php echo e($item->code_no); ?>"></span> Edit
                            </button>
                            <button class="delete-modal btn btn-danger"
                                data-id="<?php echo e($item->id); ?>" data-name="<?php echo e($item->name); ?>">
                                <span class="glyphicon glyphicon-trash"></span> Delete
                            </button></td>
                    </tr>
                    <?php endforeach; ?>
                    </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>
         <?php echo csrf_field(); ?>

<!-- show Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
           <form action="" enctype="multipart/form-data"  class="cmxform form-horizontal" data-toggle="validator"  method="post">
                   <?php echo csrf_field(); ?>



                        <div class="form-group ">
                            <label for="mainCategory" class="control-label col-lg-3">Main Category</label>
                            <div class="col-lg-6">
                            <select name="main_category" class="form-control" id="mainCat">
                            <option>Main category select</option>

                            </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="subCategory" class="control-label col-lg-3">Sub Category </label>
                            <div class="col-lg-6">
                                <select name="sub_category" class="form-control" id="subCat">
                                   
                                </select>
                            </div>
                        </div>                                  
                        <div class="form-group ">
                            <label for="username" class="control-label col-lg-3" for="product_name"> product Name </label>
                            <div class="col-lg-6">
                                <input class="form-control " id="productName" name="product_name" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="code" class="control-label col-lg-3">Code</label>
                            <div class="col-lg-6">
                              <input type="number" class="form-control" id="productCode" name="code_no"/>
                            </div>
                        </div>                                             
                        <div class="form-group ">
                            <label for="quantity" class="control-label col-lg-3">Quantity</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="pQuantity" name="quantity" type="number" />
                            </div>
                        </div>
                        

                        <div class="form-group ">
                            <label for="buyingPrice" class="control-label col-lg-3">Buying price</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="byprice" name="buyingPrice" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="sPrice" class="control-label col-lg-3">Selling Price</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="sellingPrice" name="selling_price" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="agree" class="control-label col-lg-3 col-sm-3">Commission</label>
                            <div class="col-lg-6 col-sm-9">
                                <input class="form-control " id="commission" name="commission" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-3 col-sm-3">Discount</label>
                            <div class="col-lg-6 col-sm-9">
                                <input class="form-control " id="discount" name="discount" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="username" class="control-label col-lg-3"> Supplier Name </label>
                            <div class="col-lg-6">
                                <input class="form-control " id="supplierName" name="supplier_name" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3 col-sm-3">Details</label>
                            <div class="col-lg-8 col-sm-9">
                                <textarea class="form-control ckeditor" id="product_details" name="product_details" rows="6"></textarea>
                            </div>
                        </div>                                 
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button type="submit" class="btn crud-submit btn-success" id="add">Submit</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                   </form>

                    <div class="deleteContent">
                        Are you Sure you want to delete <p style="color:red"> ID No :- <span class="dname"></span>   ? </p> 
                            <span class="hidden did"></span>
                    </div>
                </div>
            </div>
        </div>
<!-- end modal -->        
        <!-- page end-->
        <script>
    $(document).on('click', '.edit-modal', function() {
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#productName').val($(this).data('product_name'));
        $('#productCode').val($(this).data('code'));
        $('#pQuantity').val($(this).data('quantity'));
        $('#byprice').val($(this).data('buyingPrice'));

        $('#myModal').modal('show');
    });
    $(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Delete');
        $('.did').text($(this).data('id'));
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        $('.dname').html($(this).data('id'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.edit', function() {

        $.ajax({
            type: 'post',
            url: '/editItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'product_name': $('#n').val()
            },
            success: function(data) {
                $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
            }
        });
    });
    /*$("#add").click(function() {

        $.ajax({
            type: 'post',
            url: '/addItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'name': $('input[name=name]').val()
            },
            success: function(data) {
                if ((data.errors)){
                    $('.error').removeClass('hidden');
                    $('.error').text(data.errors.name);
                }
                else {
                    $('.error').addClass('hidden');
                    $('#table').append("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
                }
            },

        });
        $('#name').val('');
    });*/

    $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/deleteItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text()
            },
            success: function(data) {
                $('.item' + $('.did').text()).remove();
            }
        });
    });
</script>
<!--dynamic table initialization -->
<script src="<?php echo e(URL::to('/')); ?>/assets/js/dynamic_table_init.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backentMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>