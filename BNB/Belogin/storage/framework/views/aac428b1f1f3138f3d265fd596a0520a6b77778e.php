<?php $__env->startSection('content'); ?>

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <p>Product Entry Form</p>
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
    <!-- Create form  start-->
        <div class="form-group row add">
           <form action="" enctype="multipart/form-data"  class="cmxform form-horizontal" data-toggle="validator"  method="post">
                   <?php echo csrf_field(); ?>



                        <div class="form-group ">
                            <label for="mainCategory" class="control-label col-lg-3">Main Category</label>
                            <div class="col-lg-6">
                            <select name="main_category" class="form-control" id="mainCat">
                            <option>Main category select</option>
                            <?php foreach($mainCategoryShow as $mainCategory): ?>
                            <option value="<?php echo e($mainCategory->id); ?>"><?php echo e($mainCategory->category_name); ?></option>
                            <?php endforeach; ?>
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
                            <label for="username" class="control-label col-lg-3"> product Name </label>
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
                                <input class="form-control " id="quantity" name="quantity" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="confirm_password" class="control-label col-lg-3">Buying price</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="buyingPrice" name="buying_price" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="email" class="control-label col-lg-3">Selling Price</label>
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
                   </div>
                    
                    </div>
                    </div>
                </section>
            </div>
        </div>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#mainCat').on("change",function () {
            var categoryId = $(this).find('option:selected').val();
            //alert(categoryId);
            $.ajax({
                url: "<?php echo e(URL::to('/')); ?>/subCategory/",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                data: "categoryId="+categoryId,
                success: function (response) {
                    console.log(response);
                    $("#subCat").html(response);             
                },
            });
        }); 

    });
    </script>
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
        $('#n').val($(this).data('name'));
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
        $('.dname').html($(this).data('name'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.edit', function() {

        $.ajax({
            type: 'post',
            url: '/editItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'name': $('#n').val()
            },
            success: function(data) {
                $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
            }
        });
    });
    $("#add").click(function() {
        $.ajax({
            type: 'post',
            url: "<?php echo e(URL::to('/')); ?>/createProduct/",
            data: {
                '_token': $('input[name=_token]').val(),
                'main_category': $('input[name=main_category]').val(),
                'sub_category': $('input[name=sub_category]').val(),
                'product_name': $('input[name=product_name]').val(),
                'code_no': $('input[name=code_no]').val(),
                'quantity': $('input[name=quantity]').val(),
                'buying_price': $('input[name=buying_price]').val(),
                'selling_price': $('input[name=selling_price]').val(),
                'commission': $('input[name=commission]').val(),
                'discount': $('input[name=discount]').val(),
                'supplier_name': $('input[name=supplier_name]').val(),
                'product_details': $('input[name=product_details]').val()
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
    });
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backentMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>