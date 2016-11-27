@extends('layouts.backentMaster')
@section('content')

@if(Auth::check())
@if(Auth::user()->user==1 || Auth::user()->user==2)
<!-- multiplse image upload -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>


<!-- Data Table Data show -->
<div class="row">
<div class="col-sm-12">
<section class="panel">
<header class="panel-heading">Manage Product
<span class="tools pull-right">
<a href="javascript:;" class="fa fa-chevron-down"></a>
<a href="javascript:;" class="fa fa-times"></a>
</span>
</header>
<div class="panel-body">
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalNorm">
Add New Product
</button>
<div class="adv-table">
<table  class="table table-striped table-hover table-bordered" id="editable-sample">
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
@if(Auth::user()->user==2)
@foreach ($products as $product)
<tr id="product{{$product->id}}">
<td>{{$product->id}}</td>
<td>{{$product->product_name}}</td>
<td>{{$product->code_no}}</td>
<td>{{$product->buying_price}}</td>
<td>{{$product->quantity}}</td>
<td>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#multiple-image{{$product->id}}" value="{{$product->id}}"><input type="hidden" name="multipaleImage">Upload Image</button>
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalNormEdit{{$product->id}}">Edit</button>
@if(Auth::user()->user==1)
<button  class="productDelete btn btn-danger" data-item-id="{{$product->id}}">Delete</button>
@endif
</td>
</tr>
@endforeach
@else
@foreach ($bnbproducts as $product)
<tr id="product{{$product->id}}">
<td>{{$product->id}}</td>
<td>{{$product->product_name}}</td>
<td>{{$product->code_no}}</td>
<td>{{$product->buying_price}}</td>
<td>{{$product->quantity}}</td>
<td>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#multiple-image{{$product->id}}" value="{{$product->id}}"><input type="hidden" name="multipaleImage">Upload Image</button>
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalNormEdit{{$product->id}}">Edit</button>
@if(Auth::user()->user==1)
<button  class="productDelete btn btn-danger" data-item-id="{{$product->id}}">Delete</button>
@endif
</td>
</tr>
@endforeach
@endif

</tbody>

</table>
</div>
</div>
</section>
</div>
</div>
<!-- Data Table Data show End-->


<!-- Multiple Image Uploaded -->
@foreach ($products as $product)
<div class="modal fade" id="multiple-image{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<h4 class="modal-title" id="myModalLabel"> Umage upload</h4>
</div>
<div class="modal-body">
<div class="container">
<div class="row">
<div class="col-md-4">
{!! Form::open([ 'url' =>'multipleImageStore', 'files' => true, 'enctype' => 'multipart/form-data','id' => 'image-upload' ]) !!}
<div>
<input type="hidden" name="productIdImage" value="{{$product->product_id}}">
<div class="form-group ">
<label for="productName" class="control-label col-lg-4">Category Image</label>
<div class="col-lg-4">
<input type="file" name="homeImage" class="form-control" id="product_name"/>
</div>
<div class="col-lg-4">
@foreach($productImage=App\Model\ProductImage::where('product_id','=',$product->product_id)->get() as $productImageShow)
@if($productImageShow->home_Cat_image!=null)
<img src="Belogin/public/product_image/category_image/{{$productImageShow->home_Cat_image}}" alt="" style="width: 60px;height: 50px" />
@else
<img src="Belogin/public/commonImage/common.png" alt="" style="width: 60px;height: 50px" />
@endif
@endforeach
</div><br/>
</div><br/>
<div class="form-group ">
<label for="productName" class="control-label col-lg-4">Details Image 1</label>
<div class="col-lg-4">
<input type="file" name="detailsOne" class="form-control" id="product_name"/>
</div>
<div class="col-lg-4">
@foreach($productImage=App\Model\ProductImage::where('product_id','=',$product->product_id)->get() as $productImageShow)
@if($productImageShow->details_image_one!=null)
<img src="Belogin/public/product_image/details_image/{{$productImageShow->details_image_one}}" alt="" style="width: 60px;height: 50px" />
@else
<img src="Belogin/public/commonImage/common.png" alt="" style="width: 60px;height: 50px" />
@endif

@endforeach
</div><br/>
</div><br/>
<div class="form-group ">
<label for="productName" class="control-label col-lg-4">Details Image 2</label>
<div class="col-lg-4">
<input type="file" name="detailsTwo" class="form-control" id="product_name"/>
</div>
<div class="col-lg-4">
@foreach($productImage=App\Model\ProductImage::where('product_id','=',$product->product_id)->get() as $productImageShow)
@if($productImageShow->details_image_two!=null)
<img src="Belogin/public/product_image/details_image/{{$productImageShow->details_image_two}}" alt="" style="width: 60px;height: 50px" />
@else
<img src="Belogin/public/commonImage/common.png" alt="" style="width: 60px;height: 50px" />
@endif

@endforeach
</div><br/>
</div><br/>
<div class="form-group ">
<label for="productName" class="control-label col-lg-4">Details Image 3</label>
<div class="col-lg-4">
<input type="file" name="detailsThree" class="form-control" id="product_name"/>
</div>
<div class="col-lg-4">
@foreach($productImage=App\Model\ProductImage::where('product_id','=',$product->product_id)->get() as $productImageShow)
@if($productImageShow->details_image_three!=null)
<img src="Belogin/public/product_image/details_image/{{$productImageShow->details_image_three}}" alt="" style="width: 60px;height: 50px" />
@else
<img src="Belogin/public/commonImage/common.png" alt="" style="width: 60px;height: 50px" />
@endif
@endforeach
</div><br/>
</div><br/>


<div class="form-group">
<label for="productName" class="control-label col-lg-6">.</label>
<div class="col-lg-6">
<button class="btn btn-primary" type="submit">Save</button>
</div>
</div>
</div>
{!! Form::close() !!}
</div>



<div class="col-md-2">
@foreach($productImage=App\Model\ProductImage::where('product_id','=',$product->product_id)->get() as $productImageShow)
{!! Form::open([ 'url' =>['imageDelect',$productImageShow->id], 'files' => true, 'enctype' => 'multipart/form-data','id' => 'image-upload' ]) !!}
<div class="col-lg-2">
<button name="ImageOne" value="{{$productImageShow->home_Cat_image}}"  class="btn btn-danger" type="submit">Delete</button>
</div><br/><br/><br/>
<div class="col-lg-2">
<button name="imageTwo" value="{{$productImageShow->details_image_one}}" class="btn btn-danger" type="submit">Delete</button>
</div><br/><br/><br/>
<div class="col-lg-2">
<button name="imageThree" value="{{$productImageShow->details_image_two}}" class="btn btn-danger" type="submit">Delete</button>
</div><br/><br/><br/>
<div class="col-lg-2">
<button name="imageFour" value="{{$productImageShow->details_image_three}}" class="btn btn-danger" type="submit">Delete</button>
</div><br/><br/><br/>
{!! Form::close() !!}
@endforeach
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
@endforeach
<!-- Multiple Image Uploaded  End -->








<!-- new Product add-->
<!-- Modal -->
<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<!-- Modal Header -->
<div class="modal-header">
<button type="button" class="close"
data-dismiss="modal">
<span aria-hidden="true">&times;</span>
<span class="sr-only">Close</span>
</button>
<h4 class="modal-title" id="myModalLabel">
Modal title
</h4>
</div>

<!-- Modal Body -->
<div class="modal-body">
{!! Form::open(['url'=>'productAdd','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Main manu </label>
<div class="col-lg-6">
<select name="mainManu" class="form-control" id="mainManu">
<option>--Select main manu--</option>
@foreach($mainManu as $k=>$v)
<option value="{{$k}}">{{$v}}</option>
@endforeach
</select>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Main Category </label>
<div class="col-lg-6">
<select name="main_category" class="form-control" id="mainCat">
<option>--Select main category--</option>
</select>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Sub Category </label>
<div class="col-lg-6">
<select name="sub_category" class="form-control" id="subcat">
<option value="">--Select sub category--</option>
</select>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Product </label>
<div class="col-lg-6">
<input type="text" name="productName" class="form-control"
id="productName" placeholder="product name"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Code Number</label>
<div class="col-lg-6">
<input type="text" name="codeNumber" class="form-control"
id="codeNumber" placeholder="product code number"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Quantity</label>
<div class="col-lg-6">
<input type="text" name="productQuentity" class="form-control"
id="productQuentity" placeholder="product Quantity"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">buying price </label>
<div class="col-lg-6">
<input type="text" name="buying_price" class="form-control buying_price"
id="buying_price" placeholder="buying price" onblur="buyingPrice(this);" onkeyup="sellingPrice();"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Discount </label>
<div class="col-lg-6">
<input type="text" name="discount" class="form-control discount"
id="discount" placeholder="Discount" onblur="productDissount(this);" onkeyup="sellingPrice();"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Selling Price </label>
<div class="col-lg-6">
<input type="text" readonly name="selling_price" class="form-control totalSellingPrice"
placeholder="Selling price" onkeyup="totalSellingPrice();"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Commission </label>
<div class="col-lg-6">
<input type="text" name="commission" class="form-control commission"
id="commission" placeholder="Commission" onblur="commission(this);" onkeyup="bnbGiveCommission();"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">BNB Commission </label>
<div class="col-lg-6">
<input type="text" readonly name="bnbCommission" class="form-control totalCommission"
placeholder="BNB commission" onkeyup="totalCommission();"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Supplier Name </label>
<div class="col-lg-6">
<input type="text" name="supplier_name" class="form-control"
id="supplier_name" placeholder="supplier name"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Details </label>
<div class="col-lg-6">
<textarea class="form-control ckeditor" id="product_details" name="product_details" rows="6"></textarea>
</div>
</div>
<button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}


</div>

<!-- Modal Footer -->
<div class="modal-footer">
<button type="button" class="btn btn-default"
data-dismiss="modal">
Close
</button>
</div>
</div>
</div>
</div>
<!-- new product add end -->



<!-- product updated modal -->
@if(Auth::user()->user==1)
<!-- Modal -->
@foreach ($bnbproducts as $product)
<div class="modal fade" id="myModalNormEdit{{$product->id}}" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<!-- Modal Header -->
<div class="modal-header">
<button type="button" class="close"
data-dismiss="modal">
<span aria-hidden="true">&times;</span>
<span class="sr-only">Close</span>
</button>
<h4 class="modal-title" id="myModalLabel">
Modal title
</h4>
</div>

<!-- Modal Body -->
<div class="modal-body">
{!! Form::open(['url'=>['productUpdate',$product->id],'class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}


<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Main manu </label>
<div class="col-lg-6">
<select name="mainManu" class="form-control" id="mainManu">
<option value="" selected>{{$product->manu_name}}</option>
@foreach($mainManu as $k=>$v)
<option value="{{$k}}">{{$v}}</option>
@endforeach
</select>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Main Category </label>
<div class="col-lg-6">
<select name="main_category" class="form-control" id="mainCat">
<option value="" selected>{{$product->category_name}}</option>
</select>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Sub Category </label>
<div class="col-lg-6">
<select name="sub_category" class="form-control" id="subcat">
<option value="" selected>{{$product->sub_category_name}}</option>
</select>
</div>
</div>




<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Product </label>
<div class="col-lg-6">
<input type="text" name="productName" class="form-control"
id="productName" placeholder="product name" value="{{$product->product_name}}"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Code Number</label>
<div class="col-lg-6">
<input type="text" name="codeNumber" class="form-control"
id="codeNumber" placeholder="product code number" value="{{$product->code_no}}"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Quantity</label>
<div class="col-lg-6">
<input type="text" name="productQuentity" class="form-control"
id="productQuentity" placeholder="product Quantity" value="{{$product->quantity}}"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">buying price </label>
<div class="col-lg-6">
<input type="text" name="buying_price" class="form-control buying_price"
id="buying_price" value="{{$product->bnb_commission}}" placeholder="buying price" onblur="buyingPrice(this);" onkeyup="sellingPrice();"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Discount </label>
<div class="col-lg-6">
<input type="text" name="discount" class="form-control discount"
id="discount" value="{{$product->discount}}" placeholder="Discount" onblur="productDissount(this);" onkeyup="sellingPrice();"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Selling Price </label>
<div class="col-lg-6">
<input type="text" readonly name="selling_price" value="{{$product->selling_price}}" class="form-control totalSellingPrice"
placeholder="Selling price" onkeyup="totalSellingPrice();"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Commission </label>
<div class="col-lg-6">
<input type="text" name="commission" class="form-control commission"
id="commission" value="{{$product->commission}}" placeholder="Commission" onblur="commission(this);" onkeyup="bnbGiveCommission();"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">BNB Commission </label>
<div class="col-lg-6">
<input type="text" readonly name="bnbCommission" value="{{$product->bnb_commission}}" class="form-control totalCommission"
placeholder="BNB commission" onkeyup="totalCommission();"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Supplier Name </label>
<div class="col-lg-6">
<input type="text" name="supplier_name" value="{{$product->supplier_name}}" class="form-control"
id="supplier_name" placeholder="supplier name"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Details </label>
<div class="col-lg-6">
<textarea class="form-control ckeditor" id="product_details" name="product_details" rows="6">{!! $product->product_details !!}</textarea>
</div>
</div>
<button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}


</div>

<!-- Modal Footer -->
<div class="modal-footer">
<button type="button" class="btn btn-default"
data-dismiss="modal">
Close
</button>
</div>
</div>
</div>
</div>
@endforeach
<!-- product updated end -->
@else

<!-- product updated modal -->

<!-- Modal -->
@foreach ($products as $product)
<div class="modal fade" id="myModalNormEdit{{$product->id}}" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<!-- Modal Header -->
<div class="modal-header">
<button type="button" class="close"
data-dismiss="modal">
<span aria-hidden="true">&times;</span>
<span class="sr-only">Close</span>
</button>
<h4 class="modal-title" id="myModalLabel">
Modal title
</h4>
</div>

<!-- Modal Body -->
<div class="modal-body">
{!! Form::open(['url'=>['productUpdate',$product->id],'class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}

<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Main manu </label>
<div class="col-lg-6">
<select name="mainManu" class="form-control" id="mainManu">
<option>--Select main manu--</option>
@foreach($mainManu as $k=>$v)
<option value="{{$k}}">{{$v}}</option>
@endforeach
</select>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Main Category </label>
<div class="col-lg-6">
<select name="main_category" class="form-control" id="mainCat">
<option>--Select main category--</option>
</select>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Sub Category </label>
<div class="col-lg-6">
<select name="sub_category" class="form-control" id="subcat">
<option value="">--Select sub category--</option>
</select>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Product </label>
<div class="col-lg-6">
<input type="text" name="productName" class="form-control"
id="productName" placeholder="product name" value="{{$product->product_name}}"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Code Number</label>
<div class="col-lg-6">
<input type="text" name="codeNumber" class="form-control"
id="codeNumber" placeholder="product code number" value="{{$product->code_no}}"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Quantity</label>
<div class="col-lg-6">
<input type="text" name="productQuentity" class="form-control"
id="productQuentity" placeholder="product Quantity" value="{{$product->quantity}}"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">buying price </label>
<div class="col-lg-6">
<input type="text" name="buying_price" class="form-control buying_price"
id="buying_price" value="{{$product->bnb_commission}}" placeholder="buying price" onblur="buyingPrice(this);" onkeyup="sellingPrice();"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Discount </label>
<div class="col-lg-6">
<input type="text" name="discount" class="form-control discount"
id="discount" value="{{$product->discount}}" placeholder="Discount" onblur="productDissount(this);" onkeyup="sellingPrice();"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Selling Price </label>
<div class="col-lg-6">
<input type="text" readonly name="selling_price" value="{{$product->selling_price}}" class="form-control totalSellingPrice"
placeholder="Selling price" onkeyup="totalSellingPrice();"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Commission </label>
<div class="col-lg-6">
<input type="text" name="commission" class="form-control commission"
id="commission" value="{{$product->commission}}" placeholder="Commission" onblur="commission(this);" onkeyup="bnbGiveCommission();"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">BNB Commission </label>
<div class="col-lg-6">
<input type="text" readonly name="bnbCommission" value="{{$product->bnb_commission}}" class="form-control totalCommission"
placeholder="BNB commission" onkeyup="totalCommission();"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Supplier Name </label>
<div class="col-lg-6">
<input type="text" name="supplier_name" value="{{$product->supplier_name}}" class="form-control"
id="supplier_name" placeholder="supplier name"/>
</div>
</div>
<div class="form-group ">
<label for="firstname" class="control-label col-lg-3">Details </label>
<div class="col-lg-6">
<textarea class="form-control ckeditor" id="product_details" name="product_details" rows="6">{!! $product->product_details !!}</textarea>
</div>
</div>
<button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}


</div>

<!-- Modal Footer -->
<div class="modal-footer">
<button type="button" class="btn btn-default"
data-dismiss="modal">
Close
</button>
</div>
</div>
</div>
</div>
@endforeach
<!-- product updated end -->
@endif

<!--commission calculate -->
<script type="text/javascript">
document.getElementById("bnbCommission").disabled = true;
document.getElementById("selling_price").disabled = true;
function sellingPrice() {
var buyingPrice = $(".buying_price").val();
var productDiscount = $(".discount").val();
marchebtTotalSellingPrice = buyingPrice - productDiscount;
$(".totalSellingPrice").val(marchebtTotalSellingPrice);
}

function bnbGiveCommission() {
var totalPrice = $(".totalSellingPrice").val();
var bnbCommission = $(".commission").val();
commission = totalPrice*bnbCommission/100;
bnbTotalCommission =Math.round(commission);
$(".totalCommission").val(bnbTotalCommission);
}
</script>

<!-- manu and category and subcategory show -->
<script type="text/javascript">
$('#mainManu').on('change',function(e){       //state change
        console.log(e);
         var cat_id = e.target.value;

        $.get('mainCategory?cat_id=' + cat_id, function(data){

              $('#mainCat').empty();

            $.each(data, function(edit, subcatObj){
                  
                  $('#mainCat').append('<option value="'+subcatObj.id+'">'+subcatObj.category_name+'</option>');

            });
        });

    });
  $('#mainCat').on('change',function(e){         //distric change
        console.log(e);
         var cat_id = e.target.value;

        $.get('subcatergory?cat_id=' + cat_id, function(data){

              $('#subcat').empty();

            $.each(data, function(edit, subcatObj){

                  $('#subcat').append('<option value="'+subcatObj.id+'">'+subcatObj.sub_category_name+'</option>');

            });
        });

    });

</script>


<!--- Swite message show  delete form product by coustomJavascript date:25-10-16-->
<script>
$('button.productDelete').click(function() {
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
url: "{{URL::to('/')}}/productDelete/" + itemId,
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

@else
<?php
Session::flash('error', 'please your not permitted...');
?>
@endif
@else
<?php
Session::flash('error', 'please try to login again...');
?>
@endif


@endsection