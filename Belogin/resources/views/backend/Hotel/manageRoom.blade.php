@extends('layouts.backentMaster')
@section('content')

    @if(Auth::check())
        @if(Auth::user()->user==1 || Auth::user()->user==3)

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
                            @if(Auth::user()->user==1)
                                <button id="btn_add" name="btn_add" class="btn btn-success pull-left "><a href="{{ url('addRome')}}"><i class="fa fa-plus-circle"></i> Add New Room</a></button>
                            @else
                                <button id="btn_add" name="btn_add" class="btn btn-success pull-left "><a href="{{ url('marchentRoomAdd')}}"><i class="fa fa-plus-circle"></i>  Add New Room</a></button>
                            @endif
                            <div class="adv-table">
                                @if(Auth::user()->user==1)
                                    <form  class="form-horizontal" role="form" action="{{ url('manageRoomSearch') }}" method="post">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <div class="col-lg-2" style="margin-left: 20px">
                                                <select name="area" class="form-control">
                                                    <option>Area</option>
                                                    @foreach($bnbmanageRoom as $area)
                                                        <option value="{{ $area->area }}">{{ $area->area }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="col-lg-2" style="margin-left: 20px">
                                                <select name="location" class="form-control">
                                                    <option selected value="">Location</option>
                                                    @foreach($bnbmanageRoom as $location)
                                                        <option value="{{ $location->location }}"> {{ $location->location }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-2">
                                                <select name="hotelName" class="form-control" id="selectCategory">
                                                    <option selected value="">Hotel Name</option>
                                                    @foreach($bnbmanageRoom as $hotel)
                                                        <option value="{{$hotel->hotel_name}}">{{$hotel->hotel_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="submit" name="dataSeacrhFrom" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                @else
                                    <form  class="form-horizontal" role="form" action="{{ url('manageRoomSearch') }}" method="post">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <div class="col-lg-2" style="margin-left: 20px">
                                                <select name="area" class="form-control">
                                                    <option selected value="">Area</option>
                                                    @foreach($manageRoom as $area)
                                                        <option value="{{ $area->area }}">{{ $area->area }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="col-lg-2" style="margin-left: 20px">
                                                <select name="location" class="form-control">
                                                    <option selected value="">Location</option>
                                                    @foreach($manageRoom as $location)
                                                        <option value="{{ $location->location }}"> {{ $location->location }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-2">
                                                <select name="hotelName" class="form-control" id="selectCategory">
                                                    <option selected value="">Hotel Name</option>
                                                    @foreach($manageRoom as $hotel)
                                                        <option value="{{$hotel->hotel_name}}">{{$hotel->hotel_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="submit" name="dataSeacrhFrom" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                @endif
                                <table  class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Availability</th>
                                        <th>Book</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(Auth::user()->user==3)
                                        <!-- Only show hotel merchant wish-->
                                        @foreach($manageRoom as $value)
                                            <tr>
                                                <td>{{ $value->hotel_name }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>
                                                    @if(Auth::user()->user==1 )
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
                                                    @endif
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
                                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal{{$value->room_id}}">Manage Image </button>
                                                    @if(Auth::user()->user==1)
                                                        <a class="btn btn-success" href="{{ url('manageRoomEdit')}}/{{$value->id}}">Edit</a>
                                                    @else
                                                        <a class="btn btn-success" href="{{ url('merchantManageRoomEdit')}}/{{$value->id}}">Edit</a>
                                                    @endif

                                                    @if(Auth::user()->user==1 )
                                                        <button  class="manageRoomDelete btn btn-danger" data-item-id="{{$value->id}}">Delete</button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <!-- All data show supper admin-->
                                        @foreach($bnbmanageRoom as $value)
                                            <tr>
                                                <td>{{ $value->hotel_name }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>
                                                    @if(Auth::user()->user==1 )
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
                                                    @endif
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
                                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal{{$value->room_id}}">Manage Image </button>
                                                    <a class="btn btn-success" href="{{ url('manageRoomEdit')}}/{{$value->id}}">Edit</a>
                                                    @if(Auth::user()->user==1 )
                                                        <button  class="manageRoomDelete btn btn-danger" data-item-id="{{$value->id}}">Delete</button>
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



<!-- Hotel room image upload  using modal-->
            @if(Auth::user()->user==1)
                @foreach($bnbmanageRoom as $value)
                    <div class="container">
                        <!-- Modal -->
                        <div class="modal fade" id="myModal{{$value->room_id}}" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body col-md-12">
                                        <div class="form col-md-10">
                                            {!! Form::open(['url'=>'addRomeImageStore','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}


                                            <input type="hidden" name="roomId" value="{{$value->room_id}}">
                                            <div class="form-group">
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload One(required)</span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            @foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow)
                                                                @if($packageImageShow->image_one!=null)
                                                                    <img src="Belogin/public/hotelImage/category/{{$packageImageShow->image_one}}" alt=""  style="width: 150px; height: 150px;"/>
                                                                @else
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width: 150px; height: 150px;" />
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageOne" name="imageOne" />
                                                   </span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload Two (required)</span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            @foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow)
                                                                @if($packageImageShow->image_two!=null)
                                                                    <img src="Belogin/public/hotelImage/details/{{$packageImageShow->image_two}}" alt="" style="width: 150px; height: 150px;"/>
                                                                @else
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""  style="width: 150px; height: 150px;"/>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageTwo" name="imageTwo" />
                                                   </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload Three</span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            @foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow)
                                                                @if($packageImageShow->imge_three!=null)
                                                                    <img src="Belogin/public/hotelImage/details/{{$packageImageShow->imge_three}}" alt="" style="width: 150px; height: 150px;" />
                                                                @else
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width: 150px; height: 150px;" />
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageThree" name="imageThree" />
                                                   </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload Foure</span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            @foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow)
                                                                @if($packageImageShow->image_four!=null)
                                                                    <img src="Belogin/public/hotelImage/details/{{$packageImageShow->image_four}}" alt=""  style="width: 150px; height: 150px;" />
                                                                @else
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width: 150px; height: 150px;"/>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageFour" name="imageFour" />
                                                   </span>
                                                        </div>
                                                    </div>
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
                                        <div class="col-md-2">
                                            @foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow)
                                                {!! Form::open([ 'url' =>['addRomeImageDelete',$packageImageShow->id], 'files' => true, 'enctype' => 'multipart/form-data','id' => 'image-upload' ]) !!}
                                                <div class="col-lg-2" style="margin-top: 40px">
                                                    <h6>Image One</h6>
                                                    <button name="ImageOne" value="{{$packageImageShow->image_one}}"  class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                <div class="col-lg-2">
                                                    <h6>Image Two</h6>
                                                    <button name="imageTwo" value="{{$packageImageShow->image_two}}" class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                <div class="col-lg-2">
                                                    <h6>Image Three</h6>
                                                    <button name="imageThree" value="{{$packageImageShow->imge_three}}" class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                <div class="col-lg-2">
                                                   <h6>Image Four</h6> <button name="imageFour" value="{{$packageImageShow->image_four}}" class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                {!! Form::close() !!}
                                            @endforeach
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                @endforeach
            @else
                @foreach($manageRoom as $value)
                    <div class="container">
                        <!-- Modal -->
                        <div class="modal fade" id="myModal{{$value->room_id}}" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body col-md-12">
                                        <div class="form col-md-10">
                                            {!! Form::open(['url'=>'addRomeImageStore','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}


                                            <input type="hidden" name="roomId" value="{{$value->room_id}}">
                                            <div class="form-group">
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload One</span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            @foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow)
                                                                @if($packageImageShow->image_one!=null)
                                                                    <img src="Belogin/public/hotelImage/category/{{$packageImageShow->image_one}}" alt=""  style="width: 150px; height: 150px;"/>
                                                                @else
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width: 150px; height: 150px;" />
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageOne" name="imageOne" />
                                                   </span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload Two</span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            @foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow)
                                                                @if($packageImageShow->image_two!=null)
                                                                    <img src="Belogin/public/hotelImage/details/{{$packageImageShow->image_two}}" alt="" style="width: 150px; height: 150px;"/>
                                                                @else
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""  style="width: 150px; height: 150px;"/>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageTwo" name="imageTwo" />
                                                   </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload Three</span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            @foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow)
                                                                @if($packageImageShow->imge_three!=null)
                                                                    <img src="Belogin/public/hotelImage/details/{{$packageImageShow->imge_three}}" alt="" style="width: 150px; height: 150px;" />
                                                                @else
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width: 150px; height: 150px;" />
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageThree" name="imageThree" />
                                                   </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload Foure</span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            @foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow)
                                                                @if($packageImageShow->image_four!=null)
                                                                    <img src="Belogin/public/hotelImage/details/{{$packageImageShow->image_four}}" alt=""  style="width: 150px; height: 150px;" />
                                                                @else
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width: 150px; height: 150px;"/>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageFour" name="imageFour" />
                                                   </span>
                                                        </div>
                                                    </div>
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
                                        {{--<div class="col-md-2">
                                            @foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow)
                                                {!! Form::open([ 'url' =>['addRomeImageDelete',$packageImageShow->id], 'files' => true, 'enctype' => 'multipart/form-data','id' => 'image-upload' ]) !!}
                                                <div class="col-lg-2" style="margin-top: 40px">
                                                    <button name="ImageOne" value="{{$packageImageShow->image_one}}"  class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                <div class="col-lg-2">
                                                    <button name="imageTwo" value="{{$packageImageShow->image_two}}" class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                <div class="col-lg-2">
                                                    <button name="imageThree" value="{{$packageImageShow->imge_three}}" class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                <div class="col-lg-2">
                                                    <button name="imageFour" value="{{$packageImageShow->image_four}}" class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                {!! Form::close() !!}
                                            @endforeach
                                        </div>--}}


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                @endforeach
            @endif


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