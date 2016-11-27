@extends('layouts.backentMaster')
@section('content')

    @if(Auth::check())
        @if(Auth::user()->user==1)

            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Manage Room List Table.
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <button id="btn_add" name="btn_add" class="btn btn-success pull-left "><a href="{{ url('manageRoom')}}"><i class="fa fa-chevron-circle-left"></i> Back</a></button>
                            <div class="adv-table">
                                <form  class="form-horizontal" role="form" action="{{ url('manageRoomSearch') }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <div class="col-lg-2" style="margin-left: 20px">
                                            <select name="area" class="form-control">
                                                <option selected value="">Area</option>
                                                @foreach($areaLocationHotelList as $area)
                                                    <option value="{{ $area->area }}">{{ $area->area }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="col-lg-2" style="margin-left: 20px">
                                            <select name="location" class="form-control">
                                                <option selected value="">Location</option>
                                                @foreach($areaLocationHotelList as $location)
                                                    <option value="{{ $location->location }}"> {{ $location->location }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-2">
                                            <select name="hotelName" class="form-control" id="selectCategory">
                                                <option selected value="">Hotel Name</option>
                                                @foreach($areaLocationHotelList as $hotel)
                                                    <option value="{{$hotel->hotel_name}}">{{$hotel->hotel_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" name="dataSeacrhFrom" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                                <table  class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Title</th>
                                        <th>Publish</th>
                                        <th>Availability</th>
                                        <th>Book</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(Auth::user()->user==3)
                                        @foreach($manageRoomSearch as $value)
                                            <tr class="gradeX">
                                                <td>{{ $value->hotel_name }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>
                                                    {!!Form::open(['url'=>['manageRoomStatus',$value->id],'class'=>'form-horizontal'])!!}
                                                    <select name="mangeRoomPublish" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        @if($value->manage_room_status == 0)
                                                            <option value="0" selected>No</option>
                                                            <option value="1">Yes</option>
                                                        @elseif($value->manage_room_status == 1)
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                            @endif
                                                            </option>
                                                    </select>
                                                    {!!Form::close()!!}
                                                </td>
                                                <td>
                                                    {!!Form::open(['url'=>['manageRoomAvailability',$value->id],'class'=>'form-horizontal'])!!}
                                                    <select name="manageRoomAvailability" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        @if($value->availability == 0)
                                                            <option value="0" selected>No</option>
                                                            <option value="1">Yes</option>
                                                        @elseif($value->availability == 1)
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                            @endif
                                                            </option>
                                                    </select>
                                                    {!!Form::close()!!}
                                                </td>
                                                <td>
                                                    @if($value->availability == 1)
                                                        <button type="button" class="btn btn-success">Book</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="{{ url('manageRoomEdit')}}/{{$value->id}}">Edit</a>
                                                    <button  class="manageRoomDelete btn btn-danger" data-item-id="{{$value->id}}">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        @foreach($bnbmanageRoomSearch as $value)
                                            <tr class="gradeX">
                                                <td>{{ $value->hotel_name }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>
                                                    {!!Form::open(['url'=>['manageRoomStatus',$value->id],'class'=>'form-horizontal'])!!}
                                                    <select name="mangeRoomPublish" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        @if($value->manage_room_status == 0)
                                                            <option value="0" selected>No</option>
                                                            <option value="1">Yes</option>
                                                        @elseif($value->manage_room_status == 1)
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                            @endif
                                                            </option>
                                                    </select>
                                                    {!!Form::close()!!}
                                                </td>
                                                <td>
                                                    {!!Form::open(['url'=>['manageRoomAvailability',$value->id],'class'=>'form-horizontal'])!!}
                                                    <select name="manageRoomAvailability" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        @if($value->availability == 0)
                                                            <option value="0" selected>No</option>
                                                            <option value="1">Yes</option>
                                                        @elseif($value->availability == 1)
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                            @endif
                                                            </option>
                                                    </select>
                                                    {!!Form::close()!!}
                                                </td>
                                                <td>
                                                    @if($value->availability == 1)
                                                        <button type="button" class="btn btn-success">Book</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="{{ url('manageRoomEdit')}}/{{$value->id}}">Edit</a>
                                                    <button  class="manageRoomDelete btn btn-danger" data-item-id="{{$value->id}}">Delete</button>
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
            <!--- Swite message show  delete form product by obydul date:20-10-16 -->
            <script>
                $('button.manageRoomDelete').click(function() {
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
                            url: "{{URL::to('/')}}/manageRoomDelete/" + itemId,
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