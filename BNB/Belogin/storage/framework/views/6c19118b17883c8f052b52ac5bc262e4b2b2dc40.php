<?php $__env->startSection('content'); ?>

    <!--dynamic table-->
    <link href="<?php echo e(URL::to('/')); ?>/assets/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
<!-- multiplse image upload -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>




<!-- Data Table Data show -->
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
            <button id="btn_add" name="btn_add" class="btn btn-default pull-left">Add New Product</button>
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
				<th>ID</th>
				<th>Name</th>
				<th>Code</th>
				<th>Price</th>
				<th>Quentity</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody id="products-list" name="products-list">
		<?php foreach($products as $product): ?>
			<tr id="product<?php echo e($product->id); ?>">
			    <td><?php echo e($product->id); ?></td>
			    <td><?php echo e($product->product_name); ?></td>
			    <td><?php echo e($product->code_no); ?></td>
			    <td><?php echo e($product->buying_price); ?></td>
			    <td><?php echo e($product->quantity); ?></td>
			    <td>
			       <button type="button" name="multipleImage" class="btn btn-info btn-lg" data-toggle="modal" data-target="#multiple-image" value="<?php echo e($product->id); ?>">Open Modal</button>
			       <button class="btn btn-warning btn-detail open_modal" value="<?php echo e($product->id); ?>">Edit</button>
			       <button class="btn btn-danger btn-delete delete-product" value="<?php echo e($product->id); ?>">Delete</button>
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
<!-- Data Table Data show End-->

<!-- Data Add Modual box -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Product</h4>
            </div>
            <div class="modal-body">
           <form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">
                        <div class="form-group ">
                            <label for="mainCategory" class="control-label col-lg-3">Main Category</label>
                            <div class="col-lg-6">
                            <select name="main_category" class="form-control" id="main_category">
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
                                <select name="sub_category" class="form-control" id="sub_category">
                                   
                                </select>
                            </div>
                        </div>  
                                 
                        <div class="form-group ">
                            <label for="productName" class="control-label col-lg-3">Name</label>
                            <div class="col-lg-6">
                            <input class=" form-control" id="product_name" name="product_name" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="code" class="control-label col-lg-3">Code</label>
                            <div class="col-lg-6">
                        <input type="number" class="form-control" id="code_no" name="code_no"/>
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
                                <input class="form-control " id="buying_price" name="buying_price" type="number" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="email" class="control-label col-lg-3">Selling Price</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="selling_price" name="selling_price" type="number" />
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
                                <input class="form-control " id="supplier_name" name="supplier_name" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3 col-sm-3">Details</label>
                            <div class="col-lg-8 col-sm-9">
                                <textarea class="form-control ckeditor" id="product_details" name="product_details" rows="6"></textarea>
                            </div>
                        </div>                                 
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
            <input type="hidden" id="product_id" name="product_id" value="0">
            </div>
        </div>
      </div>
  </div>
  <meta name="_token" content="<?php echo csrf_token(); ?>" />
<!-- Data  Add Modual box End-->

<!-- Multiple Image Uploaded -->
        <div class="modal fade" id="multiple-image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Multiple Image</h4>
              </div>
              <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Upload Multiple Images</h1>
                        <?php echo Form::open([ 'url' =>'multipleImageStore', 'files' => true, 'enctype' => 'multipart/form-data', 'class' => 'dropzone', 'id' => 'image-upload' ]); ?>

                        <div>
                            <h3>Upload Multiple Image By Click On Box</h3>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>

        <script type="text/javascript">
                Dropzone.options.imageUpload = {
                    maxFilesize         :       1,
                    acceptedFiles: ".jpeg,.jpg,.png,.gif"
                };
        </script>
                    

              </div>
            </div>
          </div>
        </div>

<!-- Multiple Image Uploaded  End -->










<script src="<?php echo e(URL::to('/')); ?>/assets/coustomJavascript/productAjax.js"></script>
<!--dynamic table initialization -->
<script src="<?php echo e(URL::to('/')); ?>/assets/js/dynamic_table_init.js"></script>
<!-- Date pickure -->
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#main_category').on("change",function () {
            var categoryId = $(this).find('option:selected').val();
            //alert(categoryId);
            $.ajax({
                url: "<?php echo e(URL::to('/')); ?>/subCategory/",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                data: "categoryId="+categoryId,
                success: function (response) {
                    console.log(response);
                    $("#sub_category").html(response);             
                },
            });
        }); 

    });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backentMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>