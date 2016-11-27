@extends('layouts.webmasterlayout')
@section('content')
        <section class="clearfix m-top cart-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 z-in-mobile">
                        <div class="user-menu-section z-depth-1">
                            <div class="user-profile">
                                <div class="user-image ">
                                    <img src="Assets/image/user/sayeed.jpg" class="img-responsive circle" alt="use">
                                </div>
                                <div class="user-name text-center">
                                    <h3>{{$urserInfo->name}}</h3>
                                </div>
                            </div>
                            <ul>
                                <li  class="waves-effect"><a  href="user-profile-index.html">Home</a></li>
                                <li  class="waves-effect"><a href="user-profile.html">Profile</a></li>
                                <li  class=" waves-effect "><a href="user-change-password.html">Change Password</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 gird-2">
                        <div class="user-content-section clearfix ">
                            <div class="user-totel-buy-section">
                                <div class="col-md-4 col-sm-4">
                                    <div class="user-buy-rating-1 z-depth-1">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <h5 class="pull-right">55<span>Total Buy</span></h5>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="user-buy-rating-2 z-depth-1">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <h5 class="pull-right">55<span>Total Month Buy</span></h5>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="user-buy-rating-3 z-depth-1">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <h5 class="pull-right">55<span>Total Point</span></h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 m-top">
                        <div class="user-form-section clearfix z-depth-1">
                            <div class="col-md-11">
                            {!!Form::open(['url'=>['userprofileUpdate',$urserInfo->user_id],'class'=>'form-horizontal'])!!}
                                <!-- <form action="#"> -->
                                    <div class="input-field col s12">
                                        <input placeholder="User Name" type="text" name="fullName" value="{{$urserInfo->name}}">
                                        <label for="first_name" class="active">First Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input placeholder="Email"  type="email" name="email" value="{{$urserInfo->email}}">
                                        <label for="first_name" class="active">Your Email</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input placeholder="+880" type="text" name="mobile" value="{{$urserInfo->phone}}">
                                        <label for="first_name" class="active">Mobile Number</label>
                                    </div>
                                    <div class="input-field col s12">
                                    <label for="first_name" class="active">Gender</label>
                                        <select class="select" name="gender">
                                            <option value="0"  selected>{{$urserInfo->gender}}</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12">
                                    <label for="first_name" class="active">City</label>
                                        <select class="select"  name="city">
                                            <option value="0" selected>{{$urserInfo->city}}</option>
                                            <option value="1">Dhaka</option>
                                            <option value="2">Feni</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12">
                                    <label for="first_name" class="active">District</label>
                                        <select class="select"  name="district">
                                            <option value="0"  selected>{{$urserInfo->district}}</option>
                                            <option value="1">Dhaka</option>
                                            <option value="2">Feni</option>
                                        </select>
                                    </div>
                                      <div class="input-field col s12">
                                    <label for="first_name" class="active">Thana</label>
                                        <select class="select"  name="thana">
                                            <option value="0"  selected>{{$urserInfo->district}}</option>
                                            <option value="1">Dhaka</option>
                                            <option value="2">Feni</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12">
                                        <div class="file-field input-field">
                                            <div class="btn yellow-co">
                                                <span class="" style="text-transform:capitalize;"> Profile Photo</span>
                                                <input type="file">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user_signup_bottom text-center" >
                                        <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-bottom: 15px;">Save</button>
                                    </div>
                               <!--  </form> -->
                               {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection