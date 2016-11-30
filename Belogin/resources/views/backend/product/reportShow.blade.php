@extends('layouts.backentMaster')
@section('content')
    @if(Auth::check())
        @if(Auth::user()->user==1 || Auth::user()->user==2)

            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Show Product Table.
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div class="adv-table">
                                <form  class="form-horizontal" role="form" action="{{ url('productReport') }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <div class="col-md-2 col-xs-2">
                                            <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                                <input type="text" readonly="" size="16" name="startDate" class="form-control" placeholder="select start date ">
                                                <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                              </span><span>Start Date</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2" style="margin-left:20%">
                                            <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                                <input type="text" readonly="" size="16" name="endDate" class="form-control" placeholder="select end date ">
                                                <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                              </span><span>End Date</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-2" style="margin-left:5%">
                                            <button type="submit" name="reprot" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                                <table  class="table table-striped table-hover table-bordered" id="editable-sample">
                                    <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Product Code</th>
                                        <th>Date</th>
                                        <th>Profit</th>
                                        <th>BNB Comission</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(Auth::user()->user==2)
                                        @foreach($reportQuery as $value)
                                            <tr>
                                                <td>{{ $value->product_name }}</td>
                                                <td>{{ $value->product_code_no }}</td>
                                                <td>{{ $value->date }}</td>
                                                <td>

                                                    @if($marchentProfit=App\Model\ProductAddModel::where('product_id','=',$value->product_code_no)->first())
                                                        @if($marchentProfit->buying_price!=null)
                                                            {{$productBuyingPrice = $value->price -(($value->quentity*$marchentProfit->buying_price)+(($marchentProfit->commission*$value->price)/100))}}
                                                        @else
                                                            Not Found
                                                        @endif
                                                    @endif

                                                </td>
                                                <td>
                                                    @if($sellingPrice=App\Model\ProductAddModel::where('product_id','=',$value->product_code_no)->first())
                                                        {{$productBuyingPrice = ($sellingPrice->commission*$value->price)/100}}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        @foreach($bnbreportQuery as $value)
                                            <tr>
                                                <td>{{ $value->product_name }}</td>
                                                <td>{{ $value->product_code_no }}</td>
                                                <td>{{ $value->date }}</td>
                                                <td>

                                                    @if($marchentProfit=App\Model\ProductAddModel::where('product_id','=',$value->product_code_no)->first())
                                                        @if($marchentProfit->buying_price!=null)
                                                            {{$productBuyingPrice = $value->price -(($value->quentity*$marchentProfit->buying_price)+(($marchentProfit->commission*$value->price)/100))}}
                                                        @else
                                                            Not Found
                                                        @endif
                                                    @endif

                                                </td>
                                                <td>
                                                    @if($sellingPrice=App\Model\ProductAddModel::where('product_id','=',$value->product_code_no)->first())
                                                        {{$productBuyingPrice = ($sellingPrice->commission*$value->price)/100}}
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