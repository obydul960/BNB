@extends('layouts.backentMaster')
@section('content')

    @if(Auth::check())
        @if(Auth::user()->user==1)
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            product add Manage Table.
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            {!! Form::open(['url'=>['BnbManageProductUpdate',$manageProductList->id],'id'=>'register-form','class'=>'form-horizontal','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}
                            <div class="form-group ">
                                <label for="mainCategory" class="control-label col-lg-3">Main Category</label>
                                <div class="col-lg-6">
                                    <select name="main_category" class="form-control" id="main_category">
                                        <option>Main category select</option>
                                        @foreach($mainCategory as $mainCategory)
                                            <option value="{{ $mainCategory->id }}">{{ $mainCategory->category_name}}</option>
                                        @endforeach
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
                                    <input class=" form-control" id="product_name" name="product_name" type="text" value="{{ $manageProductList->product_name }}" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="code" class="control-label col-lg-3">Code</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" id="code_no" name="code_no" value="{{ $manageProductList->code_no }}"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="quantity" class="control-label col-lg-3">Quantity</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="quantity" name="quantity" type="number" value="{{ $manageProductList->quantity }}" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="confirm_password" class="control-label col-lg-3">Buying price</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="buying_price" name="buying_price" type="number" value="{{ $manageProductList->buying_price }}" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="email" class="control-label col-lg-3">Selling Price</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="selling_price" name="selling_price" type="number" value="{{ $manageProductList->selling_price }}" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="agree" class="control-label col-lg-3 col-sm-3">Commission</label>
                                <div class="col-lg-6 col-sm-9">
                                    <!--  <input class="form-control " id="commission" name="commission" type="number" /> -->
                                    <select class="form-control m-bot15" id="commission" name="commission">
                                        <option value="0">{{ $manageProductList->commission }}</option>
                                        <option value="5">5 %</option>
                                        <option value="10">10 %</option>
                                        <option value="15">15 %</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="newsletter" class="control-label col-lg-3 col-sm-3">Discount</label>
                                <div class="col-lg-6 col-sm-9">
                                    <input class="form-control " id="discount" name="discount" type="number"  value="{{ $manageProductList->discount }}"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="username" class="control-label col-lg-3"> Supplier Name </label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="supplier_name" name="supplier_name" type="text" value="{{ $manageProductList->supplier_name }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3 col-sm-3">Details</label>
                                <div class="col-lg-8 col-sm-9">
                                    <textarea class="form-control ckeditor" id="product_details" name="product_details" rows="6">{{ $manageProductList->product_details }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3 col-sm-3"></label>
                                <div class="col-lg-8 col-sm-9">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    <button type="reset" class="btn">Cancel</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </section>
                </div>
            </div>

            <script type="text/javascript">
                $(document).ready(function(){
                    $('#main_category').on("change",function () {
                        var categoryId = $(this).find('option:selected').val();
                        //alert(categoryId);
                        $.ajax({
                            url: "{{URL::to('/')}}/BnbManageProductSubCategory/",
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