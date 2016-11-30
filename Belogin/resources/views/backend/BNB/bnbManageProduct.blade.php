@extends('layouts.backentMaster')
@section('content')

@if(Auth::check())
    @if(Auth::user()->user==1)
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Manage Product Table.
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <form  class="form-horizontal" role="form" action="{{ url('BnbManageProductSearch') }}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <div class="col-md-2 col-xs-2">
                                        <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date=""  class="input-append date dpYears">
                                            <input type="text" readonly="" size="16" name="date" class="form-control" placeholder="Date selected">
                                            <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2" style="margin-left: 20px">
                                        {{--  <input type="text" name="marchent" class="form-control" id="" placeholder="Marchent">--}}
                                        <select name="marchent" class="form-control">
                                            <option selected value="">Marchent</option>
                                            @foreach($merchantList as $marchent)
                                                <option value="{{ $marchent->user_id }}">{{ $marchent->company_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <select name="categoryName" class="form-control" id="mainCat">
                                            <option selected value="">Category</option>
                                            @foreach($categoryList as $k=>$v)
                                                <option value="{{$k}}">{{$v}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <select name="subCategoryName" class="form-control" id="subcat">
                                            <option value="">Sub Category</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="submit" name="dataSeacrhFrom" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>

                            <table  class="table table-striped table-hover table-bordered" id="editable-sample">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Number</th>
                                    <th>Price</th>
                                    <th>Quentity</th>
                                    <th>Approval</th>
                                    <th>Home View</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($manageProductList as $value)
                                    <tr>
                                        <td>{{ $value->product_name }}</td>
                                        <td>{{ $value->code_no }}</td>
                                        <td>{{ $value->selling_price }}</td>
                                        <td>{{ $value->quantity }}</td>
                                        <td>
                                            {!!Form::open(['url'=>['BnbManageProductAcceptStatus',$value->product_id],'class'=>'form-horizontal'])!!}
                                            <select name="acceptStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                <option selected>
                                                    @if($value->accept_status == 1)
                                                    <option value="1" selected>Approved</option>
                                                    <option value="0">Not Approved</option>
                                                    @elseif($value->accept_status == 0)
                                                    <option value="0" selected>Not Approved</option>
                                                    <option value="1">Approved</option>
                                                    @endif
                                                </option>

                                            </select>
                                            {!!Form::close()!!}
                                        </td>
                                        <td>
                                            {!!Form::open(['url'=>['BnbManageProductViewStatus',$value->product_id],'class'=>'form-horizontal'])!!}
                                            <select name="viewStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                <option selected>
                                                    @if($value->view_status == 1)
                                                        <option value="1" selected>Yes</option>
                                                        <option value="0">No </option>
                                                    @elseif($value->view_status == 0)
                                                        <option value="0" selected>No </option>
                                                        <option value="1">Yes</option>
                                                    @endif
                                                </option>

                                            </select>
                                            {!!Form::close()!!}
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal{{$value->product_id}}">Image</button>
                                            <a class="btn btn-success" href="{{ url('BnbManageEdit')}}/{{$value->product_id}}">Edit</a>
                                            <button  class="main_category_delete btn btn-danger" data-item-id="{{$value->product_id}}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        @foreach($manageProductList as $value)
            <div class="container">
                <!-- Modal -->
                <div class="modal fade" id="myModal{{$value->product_id}}" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Product Image Show</h4>
                            </div>
                            <div class="modal-body">
                                @foreach($productImage=App\Model\ProductImage::where('product_id','=',$value->product_id)->get() as $productImageShow)
                                    @if($productImageShow->home_Cat_image!=null)
                                        <img style="width: 200px;height:200px;margin: 5px;" src="Belogin/public/product_image/category_image/{{$productImageShow->home_Cat_image}}">
                                    @else
                                        <img src="Belogin/public/commonImage/common.png" alt="" style="width: 200px;height:200px;margin: 5px;" />
                                    @endif
                                    @if($productImageShow->details_image_one!=null)
                                        <img style="width: 200px;height:200px;margin: 5px;" src="Belogin/public/product_image/details_image/{{$productImageShow->details_image_one}}">
                                    @else
                                        <img src="Belogin/public/commonImage/common.png" alt="" style="width: 200px;height:200px;margin: 5px;" />
                                    @endif
                                    @if($productImageShow->details_image_two!=null)
                                        <img style="width: 200px;height:200px;margin: 5px;" src="Belogin/public/product_image/details_image/{{$productImageShow->details_image_two}}">
                                    @else
                                        <img src="Belogin/public/commonImage/common.png" alt="" style="width: 200px;height:200px;margin: 5px;" />
                                    @endif
                                    @if($productImageShow->details_image_three!=null)
                                        <img style="width: 200px;height:200px;margin: 5px;" src="Belogin/public/product_image/details_image/{{$productImageShow->details_image_three}}">
                                    @else
                                        <img src="Belogin/public/commonImage/common.png" alt="" style="width: 200px;height:200px;margin: 5px;" />
                                    @endif

                                @endforeach
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        @endforeach


        <!--- Swite message show  delete form product by obydul date:20-10-16 -->
        <script>
            $('button.main_category_delete').click(function() {
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
                        url: "{{URL::to('/')}}/BnbManageProductDelete/" + itemId,
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

        <!--sub category add -->
        <script>
            jQuery(document).ready(function($){
                n=1;
                $('#mainCat').change(function(){

                    $.get("{{ url('api/dropdown/subcategory')}}",

                            { option: $(this).val() },
                            function(data) {
                                var model = $('#subcat');
                                model.empty();
                                model.append("<option value=''>" + 'Select Subcategory' + "</option>");
                                $.each(data, function(index,element) {
                                    model.append("<option value='"+ element +"'>" + element + "</option>");
                                });
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