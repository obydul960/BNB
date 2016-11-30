@extends('layouts.backentMaster')
@section('content')


    @if(Auth::check())
        @if(Auth::user()->user==1 || Auth::user()->user==4)

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


                                <form  class="form-horizontal" role="form" action="{{ url('packageProfitReport') }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <div class="col-md-2 col-xs-2">
                                            <span>Start Date</span>
                                            <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                                <input type="text" readonly="" size="16" name="startDate" class="form-control" placeholder="Select Start Date">
                                                <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2" style="margin-left:20%">
                                            <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                                <input type="text" readonly="" size="16" name="endDate" class="form-control" placeholder="Select End Date">
                                                <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                              </span><span>End Date</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-2" style="margin-left:5%;margin-top: 2%">
                                            <button type="submit" name="reprot" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                                <table  class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                    <tr>
                                        <th>Tourist Name</th>
                                        <th>Package Name</th>
                                        <th>Date</th>
                                        <th>Profit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(Auth::user()->user==4)
                                        <!-- only tour merchant data show -->
                                        @foreach($reportQuery as $value)
                                            <tr>
                                                <td>{{ $value->turist_name }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->date }}</td>
                                                <td>{{ $value->commission }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <!-- All data show supper admin-->
                                        @foreach($bnbreportQuery as $value)
                                            <tr>
                                                <td>{{ $value->turist_name }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->date }}</td>
                                                <td>{{ $value->commission }}</td>
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