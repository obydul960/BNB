@extends('layouts.backentMaster')
@section('content')


    @if(Auth::check())
        @if(Auth::user()->user==1 )

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
                                    @if(Auth::user()->user==2)
                                        @foreach($products as $product)
                                            <tr>
                                                <td>{{ $product->product_name }}</td>
                                                <td>{!!$product->product_details!!}</td>
                                                <td>{{ $product->code_no }}</td>
                                                <td>{{ $product->selling_price }}</td>
                                                <td>{{ $product->discount }}</td>
                                                <td>{{ $product->discount }}</td>
                                                <td>
                                                    {!!Form::open(['url'=>['productStatus',$product->product_id],'class'=>'form-horizontal'])!!}
                                                    <select name="productStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        @if($product->product_status == 1)
                                                            <option value="1" selected>published</option>
                                                            <option value="0">unpublished</option>
                                                        @elseif($product->product_status == 0)
                                                            <option value="0" selected>unpublished</option>
                                                            <option value="1">published</option>
                                                            @else
                                                            @endif
                                                            </option>
                                                    </select>
                                                    {!!Form::close()!!}
                                                </td>
                                                <td>
                                                    {!!Form::open(['url'=>['storageStatus',$product->product_id],'class'=>'form-horizontal'])!!}
                                                    <select name="storageStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()'>
                                                        <option selected>
                                                        @if($product->storage_status == 1)
                                                            <option value="1" selected>Available</option>
                                                            <option value="0">Unavailable</option>
                                                        @elseif($product->storage_status == 0)
                                                            <option value="0" selected>Unavailable</option>
                                                            <option value="1">Available</option>
                                                            @endif
                                                            </option>

                                                    </select>
                                                    {!!Form::close()!!}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        @foreach($bnbproducts as $product)
                                            <tr>
                                                <td>{{ $product->product_name }}</td>
                                                <td>{!!$product->product_details!!}</td>
                                                <td>{{ $product->code_no }}</td>
                                                <td>{{ $product->selling_price }}</td>
                                                <td>{{ $product->discount }}</td>
                                                <td>{{ $product->discount }}</td>
                                                <td>
                                                    {!!Form::open(['url'=>['productStatus',$product->product_id],'class'=>'form-horizontal'])!!}
                                                    <select name="productStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        @if($product->product_status == 1)
                                                            <option value="1" selected>published</option>
                                                            <option value="0">unpublished</option>
                                                        @elseif($product->product_status == 0)
                                                            <option value="0" selected>unpublished</option>
                                                            <option value="1">published</option>
                                                            @else
                                                            @endif
                                                            </option>
                                                    </select>
                                                    {!!Form::close()!!}
                                                </td>
                                                <td>
                                                    {!!Form::open(['url'=>['storageStatus',$product->product_id],'class'=>'form-horizontal'])!!}
                                                    <select name="storageStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()'>
                                                        <option selected>
                                                        @if($product->storage_status == 1)
                                                            <option value="1" selected>Available</option>
                                                            <option value="0">Unavailable</option>
                                                        @elseif($product->storage_status == 0)
                                                            <option value="0" selected>Unavailable</option>
                                                            <option value="1">Available</option>
                                                            @endif
                                                            </option>

                                                    </select>
                                                    {!!Form::close()!!}
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