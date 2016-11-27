@extends('layouts.backentMaster')
@section('content')

    @if(Auth::check())
        @if(Auth::user()->user==1)

            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            product Order Manage Table.
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
                                        <th>Product Name</th>
                                        <th>Product Number</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productList as $value)
                                        <tr>
                                            <td>{{ $value->product_name }}</td>
                                            <td>{{ $value->product_code_no }}</td>
                                            <td>{{ $value->quentity }}</td>
                                            <td>{{ $value->price }}</td>
                                            <td>{{ $value->phone }}</td>
                                            <td>{{ $value->address }}</td>
                                            <td>{{ $value->date }}</td>
                                            <td>
                                                {!!Form::open(['url'=>['BnbProductOrder',$value->id],'class'=>'form-horizontal'])!!}
                                                <select name="bnbProductOrderStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                    <option selected>
                                                        @if($value->order_status == 1)
                                                           <option value="1" selected>Forward</option>
                                                           <option value="0">Keep</option>
                                                           <option value="2">Disconnect</option>
                                                        @elseif($value->order_status == 2)
                                                           <option value="2" selected>Disconnect</option>
                                                           <option value="0">Keep</option>
                                                           <option value="1">Forward</option>
                                                        @elseif($value->order_status == 0)
                                                           <option value="0" selected>Keep</option>
                                                           <option value="1">Forward</option>
                                                           <option value="2">Disconnect</option>
                                                        @endif
                                                    </option>


                                                </select>
                                                {!!Form::close()!!}
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