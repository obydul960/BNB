@extends('layouts.backentMaster')
@section('content')

    @if(Auth::check())
        @if(Auth::user()->user==1 || Auth::user()->user==2)


            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Serch product item.
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div class="adv-table">
                                <form  class="form-horizontal" role="form" action="{{ url('productSerch') }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <div class="col-md-2 col-xs-2">
                                            <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                                <input type="text" readonly="" size="16" name="submitDate" class="form-control" placeholder="Date selected">
                                                <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-2" style="margin-left: 20px">
                                            <input type="text" name="area" class="typeahead form-control" id="" placeholder="Area">

                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" name="price" class="form-control" id="" placeholder="Price">
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
                                        <th>Code</th>
                                        <th>Date</th>
                                        <th>Area</th>
                                        <th>Phone</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(Auth::user()->user==4)
                                        @foreach($serchData as $value)
                                            <tr>
                                                <td>{{ $value->product_name }}</td>
                                                <td>{{ $value->product_code_no }}</td>
                                                <td>{{ $value->date }}</td>
                                                <td>{{ $value->address }}</td>
                                                <td>{{ $value->phone }}</td>
                                                <td>{{ $value->price }}</td>
                                                <td>
                                                    {!!Form::open(['url'=>['productOrderStatus',$value->id],'class'=>'form-horizontal'])!!}
                                                    <select name="productOrderStatus" id="selectText" class="form-control" onchange='this.form.submit()' >
                                                        <option selected>
                                                        @if($value->status == 0)
                                                            <option value="0" selected>Pending</option>
                                                            <option value="1">Deliver</option>
                                                            <option value="2">Cancelled</option>
                                                            <option value="3">Confirm</option>
                                                            <option value="4">Refund</option>
                                                        @elseif($value->status == 1)
                                                            <option value="1" selected>Deliver</option>
                                                            <option value="0">Pending</option>
                                                            <option value="2">Cancelled</option>
                                                            <option value="3">Confirm</option>
                                                            <option value="4">Refund</option>

                                                        @elseif($value->status == 2)
                                                            <option value="2" selected>Cancelled</option>
                                                            <option value="0">Pending</option>
                                                            <option value="1">Deliver</option>
                                                            <option value="3">Confirm</option>
                                                            <option value="4">Refund</option>
                                                        @elseif($value->status == 3)
                                                            <option value="3" selected>Confirm</option>
                                                            <option value="0">Pending</option>
                                                            <option value="1">Deliver</option>
                                                            <option value="2">Cancelled</option>
                                                            <option value="4">Refund</option>
                                                        @elseif($value->status == 4)
                                                            <option value="4" selected>Refund</option>
                                                            <option value="0">Pending</option>
                                                            <option value="1">Deliver</option>
                                                            <option value="2">Cancelled</option>
                                                            <option value="3">Confirm</option>
                                                        @else
                                                        @endif

                                                    </select>
                                                    {!!Form::close()!!}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        @foreach($bnbserchData as $value)
                                            <tr>
                                                <td>{{ $value->product_name }}</td>
                                                <td>{{ $value->product_code_no }}</td>
                                                <td>{{ $value->date }}</td>
                                                <td>{{ $value->address }}</td>
                                                <td>{{ $value->phone }}</td>
                                                <td>{{ $value->price }}</td>
                                                <td>
                                                    {!!Form::open(['url'=>['productOrderStatus',$value->id],'class'=>'form-horizontal'])!!}
                                                    <select name="productOrderStatus" id="selectText" class="form-control" onchange='this.form.submit()' >
                                                        <option selected>
                                                        @if($value->status == 0)
                                                            <option value="0" selected>Pending</option>
                                                            <option value="1">Deliver</option>
                                                            <option value="2">Cancelled</option>
                                                            <option value="3">Confirm</option>
                                                            <option value="4">Refund</option>
                                                        @elseif($value->status == 1)
                                                            <option value="1" selected>Deliver</option>
                                                            <option value="0">Pending</option>
                                                            <option value="2">Cancelled</option>
                                                            <option value="3">Confirm</option>
                                                            <option value="4">Refund</option>

                                                        @elseif($value->status == 2)
                                                            <option value="2" selected>Cancelled</option>
                                                            <option value="0">Pending</option>
                                                            <option value="1">Deliver</option>
                                                            <option value="3">Confirm</option>
                                                            <option value="4">Refund</option>
                                                        @elseif($value->status == 3)
                                                            <option value="3" selected>Confirm</option>
                                                            <option value="0">Pending</option>
                                                            <option value="1">Deliver</option>
                                                            <option value="2">Cancelled</option>
                                                            <option value="4">Refund</option>
                                                        @elseif($value->status == 4)
                                                            <option value="4" selected>Refund</option>
                                                            <option value="0">Pending</option>
                                                            <option value="1">Deliver</option>
                                                            <option value="2">Cancelled</option>
                                                            <option value="3">Confirm</option>
                                                        @else
                                                        @endif

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

            <!-- auto complete search sugation -->
            <script type="text/javascript">
                var path = "{{ route('areaSearchAutocomplete') }}";
                $('input.typeahead').typeahead({
                    source:  function (query, process) {
                        return $.get(path, { query: query }, function (data) {
                            return process(data);
                        });
                    }
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