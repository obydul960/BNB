@extends('layouts.backentMaster')
@section('content')
    @if(Auth::check())
        @if(Auth::user()->user==1)

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            add Rome
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                {!! Form::open(['url'=>['manageRoomUpdate',$manageRoomEdit->id],'class'=>' form-horizontal','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}

                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Area Select</label>
                                    <div class="col-lg-6">
                                        <select name="araName" class=" form-control">
                                            <option value="{{ $manageRoomEdit->area }}" selected>{{ $manageRoomEdit->area }}</option>
                                            @foreach($hotelListShow as $hotelList)
                                                <option value="{{ $hotelList->area }}">{{ $hotelList->area }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Location Select</label>
                                    <div class="col-lg-6">
                                        <select name="locationName" class=" form-control">
                                            <option value="{{ $manageRoomEdit->location }}" selected>{{ $manageRoomEdit->location }}</option>
                                            @foreach($hotelListShow as $hotelList)
                                                <option value="{{ $hotelList->location }}">{{ $hotelList->location }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Hotel Select</label>
                                    <div class="col-lg-6">
                                        <select name="hotelName" class=" form-control">
                                            <option value="{{ $manageRoomEdit->hotel_name }}" selected>{{ $manageRoomEdit->hotel_name }}</option>
                                            @foreach($hotelListShow as $hotelList)
                                                <option value="{{ $hotelList->company_name }}">{{ $hotelList->company_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Title</label>
                                    <div class="col-lg-6">
                                        <input class="form-control" id="title" name="title" type="text" value="{{ $manageRoomEdit->title }}" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Room Number</label>
                                    <div class="col-lg-6">
                                        <input class="form-control" id="title" name="roomNumber" type="text" value="{{ $manageRoomEdit->room_number }}" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Price </label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="price" name="price" type="number" value="{{ $manageRoomEdit->price }}" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Commission</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="commission" name="commission" type="number" value="{{ $manageRoomEdit->commission }}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3 col-sm-3">Discription</label>
                                    <div class="col-lg-8 col-sm-9">
                                        <textarea class="form-control ckeditor" id="discrioption" name="discrioption" rows="6">{!! $manageRoomEdit->discription !!}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <button class="btn btn-default" type="reset">Cancel</button>
                                    </div>
                                </div>
                                {!! Form::close() !!}
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