@extends('layouts.backentMaster')
@section('content')

    @if(Auth::check())
        @if(Auth::user()->user==1)

            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            View Product Table.
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div class="adv-table">
                                <form  class="form-horizontal" role="form" action="{{ url('viewManageProductStatus') }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <div class="col-md-2 col-xs-2">
                                            <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                                <input type="text" readonly="" size="16" name="date" class="form-control" selected value="" placeholder="Date selected">
                                                <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-2" style="margin-left: 20px">
                                            {{--  <input type="text" name="marchent" class="form-control" id="" placeholder="Marchent">--}}
                                            <select name="marchent" class="form-control">
                                                <option selected value="">Marchent</option>
                                                @foreach($marchentList as $marchent)
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
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productList as $value)
                                        <tr>
                                            <td>{{ $value->product_name }}</td>
                                            <td>{{ $value->product_code_no }}</td>
                                            <td>{{ $value->price }}</td>
                                            <td>{{ $value->quentity }}</td>
                                            <td>
                                                @if($value->status == 1)
                                                    Delivered
                                                @endif
                                                @if($value->status == 2)
                                                    Done
                                                @endif
                                                @if($value->status == 3)
                                                    Recived
                                                @endif
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