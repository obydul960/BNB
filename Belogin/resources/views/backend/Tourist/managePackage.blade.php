@extends('layouts.backentMaster')
@section('content')


    @if(Auth::check())
        @if(Auth::user()->user==1 || Auth::user()->user==4)

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
                            <button id="btn_add" name="btn_add" class="btn btn-success pull-left "><a href="{{ url('addPackage')}}"><i class="fa fa-plus-circle"></i>  New Package</a></button>
                            <div class="adv-table">
                                <form  class="form-horizontal" role="form" action="{{ url('packageSearch') }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <div class="col-lg-2" style="margin-left: 20px">
                                            <select name="location" class="form-control">
                                                <option selected value="">Location</option>
                                                @if(Auth::user()->user==1)
                                                    @foreach($bnbpackageList as $location)
                                                        <option value="{{ $location->location }}">{{ $location->location }}</option>
                                                    @endforeach
                                                @else
                                                    @foreach($packageList as $location)
                                                        <option value="{{ $location->location }}">{{ $location->location }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-lg-2" style="margin-left: 20px">
                                            <select name="tourist" class="form-control">
                                                <option selected value="">Tourist</option>
                                                @if(Auth::user()->user==1)
                                                    @foreach($bnbpackageList as $tourist)
                                                        <option value="{{ $tourist->turist_name }}">{{ $tourist->turist_name }}</option>
                                                    @endforeach
                                                @else
                                                    @foreach($packageList as $tourist)
                                                        <option value="{{ $tourist->turist_name }}">{{ $tourist->turist_name }}</option>
                                                    @endforeach
                                                @endif
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
                        
<th>Title</th>
<td>Date</td>
<th>Status</th>
<th>Availability</th>
<th>Book</th>
<th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(Auth::user()->user==4)
                                        <!-- Only show data tour merchant wish-->
                                        @foreach($packageList as $value)
                                            <tr class="gradeX">
                                                <td>{{ $value->title }}</td>
                                                <td>Data</td>
                                                <td>
                                                    @if(Auth::user()->user==1)
                                                        {!!Form::open(['url'=>['packageStatus',$value->id],'class'=>'form-horizontal'])!!}
                                                        <select name="managePackageStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                            <option selected>
                                                            @if($value->package_status == 0)
                                                                <option value="0" selected>unpublish</option>
                                                                <option value="1">Publish</option>
                                                            @elseif($value->package_status == 1)
                                                                <option value="1" selected>Publish</option>
                                                                <option value="0">unpublish</option>
                                                                @endif
                                                                </option>
                                                        </select>
                                                        {!!Form::close()!!}
                                                    @endif
                                                </td>
                                                <td>
                                                    {!!Form::open(['url'=>['packageStorageStatus',$value->id],'class'=>'form-horizontal'])!!}
                                                    <select name="packageStorageStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        @if($value->storage_status == 0)
                                                            <option value="0" selected>No</option>
                                                            <option value="1">Yes</option>
                                                        @elseif($value->storage_status == 1)
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                            @endif
                                                            </option>


                                                    </select>
                                                    {!!Form::close()!!}
                                                </td>
                                                <td>
                                                    @if($value->available == 1)
                                                        <button type="button" class="btn btn-success">Book</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal{{$value->package_id}}">Image Manage</button>
                                                    <a class="btn btn-success" href="{{ url('packageEdit')}}/{{$value->id}}">Edit</a>
                                                    @if(Auth::user()->user==1)
                                                        <button  class="packageDelete btn btn-danger" data-item-id="{{$value->id}}">Delete</button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        @foreach($bnbpackageList as $value)
                                            <!-- Show all data supper admin login-->
                                            <tr class="gradeX">
                                                <td>{{ $value->title }}</td>
                                                <td>Date</td>
                                                <td>
                                                    @if(Auth::user()->user==1)
                                                        {!!Form::open(['url'=>['packageStatus',$value->id],'class'=>'form-horizontal'])!!}
                                                        <select name="managePackageStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                            <option selected>
                                                            @if($value->package_status == 0)
                                                                <option value="0" selected>unpublish</option>
                                                                <option value="1">Publish</option>
                                                            @elseif($value->package_status == 1)
                                                                <option value="1" selected>Publish</option>
                                                                <option value="0">unpublish</option>
                                                                @endif
                                                                </option>
                                                        </select>
                                                        {!!Form::close()!!}
                                                    @endif
                                                </td>
                                                <td>
                                                    {!!Form::open(['url'=>['packageStorageStatus',$value->id],'class'=>'form-horizontal'])!!}
                                                    <select name="packageStorageStatus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        @if($value->storage_status == 0)
                                                            <option value="0" selected>No</option>
                                                            <option value="1">Yes</option>
                                                        @elseif($value->storage_status == 1)
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                            @endif
                                                            </option>


                                                    </select>
                                                    {!!Form::close()!!}
                                                </td>
                                                <td>
                                                    @if($value->available == 1)
                                                        <button type="button" class="btn btn-success">Book</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal{{$value->package_id}}">Image Manage</button>
                                                    <a class="btn btn-success" href="{{ url('packageEdit')}}/{{$value->id}}">Edit</a>
                                                    @if(Auth::user()->user==1)
                                                        <button  class="packageDelete btn btn-danger" data-item-id="{{$value->id}}">Delete</button>
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

<!-- package image show  delete and update using modal -->
            @if(Auth::user()->user==1)
            @foreach($bnbpackageList as $value)
                <div class="container">
                    <!-- Modal -->
                    <div class="modal fade" id="myModal{{$value->package_id}}" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Show image</h4>
                                </div>
                                <div class="modal-body col-md-12">
                                    <div class="form col-md-10" >
                                        {!! Form::open(['url'=>'addPackageImageStore','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}

                                        <input type="hidden" name="packageID" value="{{$value->package_id}}">
                                        <div class="form-group">
                                            <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                <span>Image Upload One<span style="color:red">(*)</span></span>
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                        @foreach($productImage=App\Model\Tourist\PackageImageModel::where('package_id','=',$value->package_id)->get() as $packageImageShow)
                                                            @if($packageImageShow->category_image!=null)
                                                                <img src="Belogin/public/touristImage/category/{{$packageImageShow->category_image}}"  style="width: 150px; height: 150px;" />
                                                            @else
                                                                <img src="Belogin/public/commonImage/common.png"  style="width: 150px; height: 150px;" />
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
                                            <div class="col-md-4">
                                                <span>Image Upload Two<span style="color:red">(*)</span></span>
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                        @foreach($productImage=App\Model\Tourist\PackageImageModel::where('package_id','=',$value->package_id)->get() as $packageImageShow)
                                                            @if($packageImageShow->details_image!=null)
                                                                <img src="Belogin/public/touristImage/details/{{$packageImageShow->details_image}}"   style="width: 150px; height: 150px;" />
                                                            @else
                                                                <img src="Belogin/public/commonImage/common.png"  style="width: 150px; height: 150px;" />
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
                                                        @foreach($productImage=App\Model\Tourist\PackageImageModel::where('package_id','=',$value->package_id)->get() as $packageImageShow)
                                                            @if($packageImageShow->home_image_one!=null)
                                                                <img src="Belogin/public/touristImage/details/{{$packageImageShow->home_image_one}}" alt=""  style="width: 150px; height: 150px;" />
                                                            @else
                                                                <img src="Belogin/public/commonImage/common.png"  style="width: 150px; height: 150px;" />
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
                                            <div class="col-md-4">
                                                <span>Image Upload Foure</span>
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                        @foreach($productImage=App\Model\Tourist\PackageImageModel::where('package_id','=',$value->package_id)->get() as $packageImageShow)
                                                            @if($packageImageShow->home_image_two!=null)
                                                                <img src="Belogin/public/touristImage/details/{{$packageImageShow->home_image_two}}" alt="" style="width: 150px; height: 150px;"  />
                                                            @else
                                                                <img src="Belogin/public/commonImage/common.png"  style="width: 150px; height: 150px;" />
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
                                        @foreach($productImage=App\Model\Tourist\PackageImageModel::where('package_id','=',$value->package_id)->get() as $packageImageShow)
                                            {!! Form::open([ 'url' =>['packageImageDelete',$packageImageShow->id], 'files' => true, 'enctype' => 'multipart/form-data','id' => 'image-upload' ]) !!}
                                            <div class="col-lg-2" style="margin-top: 40px">
                                                <button name="ImageOne" value="{{$packageImageShow->category_image}}"  class="btn btn-danger" type="submit">Delete</button>
                                            </div><br/><br/><br/><br/><br/><br/><br/>
                                            <div class="col-lg-2">
                                                <button name="imageTwo" value="{{$packageImageShow->details_image}}" class="btn btn-danger" type="submit">Delete</button>
                                            </div><br/><br/><br/><br/><br/><br/><br/>
                                            <div class="col-lg-2">
                                                <button name="imageThree" value="{{$packageImageShow->home_image_one}}" class="btn btn-danger" type="submit">Delete</button>
                                            </div><br/><br/><br/><br/><br/><br/><br/>
                                            <div class="col-lg-2">
                                                <button name="imageFour" value="{{$packageImageShow->home_image_two}}" class="btn btn-danger" type="submit">Delete</button>
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
                @else{
            @foreach($packageList as $value)
                <div class="container">
                    <!-- Modal -->
                    <div class="modal fade" id="myModal{{$value->package_id}}" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Show image</h4>
                                </div>
                                <div class="modal-body col-md-12">
                                    <div class="form col-md-10" >
                                        {!! Form::open(['url'=>'addPackageImageStore','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}

                                        <input type="hidden" name="packageID" value="{{$value->package_id}}">
                                        <div class="form-group">
                                            <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                <span>Image Upload One</span>
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                        @foreach($productImage=App\Model\Tourist\PackageImageModel::where('package_id','=',$value->package_id)->get() as $packageImageShow)
                                                            @if($packageImageShow->category_image!=null)
                                                                <img src="Belogin/public/touristImage/category/{{$packageImageShow->category_image}}"  style="width: 150px; height: 150px;" />
                                                            @else
                                                                <img src="Belogin/public/commonImage/common.png"  style="width: 150px; height: 150px;" />
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
                                            <div class="col-md-4">
                                                <span>Image Upload Two</span>
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                        @foreach($productImage=App\Model\Tourist\PackageImageModel::where('package_id','=',$value->package_id)->get() as $packageImageShow)
                                                            @if($packageImageShow->details_image!=null)
                                                                <img src="Belogin/public/touristImage/details/{{$packageImageShow->details_image}}"   style="width: 150px; height: 150px;" />
                                                            @else
                                                                <img src="Belogin/public/commonImage/common.png"  style="width: 150px; height: 150px;" />
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
                                                        @foreach($productImage=App\Model\Tourist\PackageImageModel::where('package_id','=',$value->package_id)->get() as $packageImageShow)
                                                            @if($packageImageShow->home_image_one!=null)
                                                                <img src="Belogin/public/touristImage/details/{{$packageImageShow->home_image_one}}" alt=""  style="width: 150px; height: 150px;" />
                                                            @else
                                                                <img src="Belogin/public/commonImage/common.png"  style="width: 150px; height: 150px;" />
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
                                            <div class="col-md-4">
                                                <span>Image Upload Foure</span>
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                        @foreach($productImage=App\Model\Tourist\PackageImageModel::where('package_id','=',$value->package_id)->get() as $packageImageShow)
                                                            @if($packageImageShow->home_image_two!=null)
                                                                <img src="Belogin/public/touristImage/details/{{$packageImageShow->home_image_two}}" alt="" style="width: 150px; height: 150px;"  />
                                                            @else
                                                                <img src="Belogin/public/commonImage/common.png"  style="width: 150px; height: 150px;" />
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
                                        @foreach($productImage=App\Model\Tourist\PackageImageModel::where('package_id','=',$value->package_id)->get() as $packageImageShow)
                                            {!! Form::open([ 'url' =>['packageImageDelete',$packageImageShow->id], 'files' => true, 'enctype' => 'multipart/form-data','id' => 'image-upload' ]) !!}
                                            <div class="col-lg-2" style="margin-top: 40px">
                                                <button name="ImageOne" value="{{$packageImageShow->category_image}}"  class="btn btn-danger" type="submit">Delete</button>
                                            </div><br/><br/><br/><br/><br/><br/><br/>
                                            <div class="col-lg-2">
                                                <button name="imageTwo" value="{{$packageImageShow->details_image}}" class="btn btn-danger" type="submit">Delete</button>
                                            </div><br/><br/><br/><br/><br/><br/><br/>
                                            <div class="col-lg-2">
                                                <button name="imageThree" value="{{$packageImageShow->home_image_one}}" class="btn btn-danger" type="submit">Delete</button>
                                            </div><br/><br/><br/><br/><br/><br/><br/>
                                            <div class="col-lg-2">
                                                <button name="imageFour" value="{{$packageImageShow->home_image_two}}" class="btn btn-danger" type="submit">Delete</button>
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
            }
            @endif

            <!--- Swite message show  delete form product by obydul date:20-10-16 -->
            <script>
                $('button.packageDelete').click(function() {
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
                            url: "{{URL::to('/')}}/packageDelete/" + itemId,
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