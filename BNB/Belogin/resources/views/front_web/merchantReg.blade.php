@extends('layouts.webmasterlayout')
@section('content')
        <section class="clearfix m-top cart-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 z-in-mobile">
                        <div class="user_signup_section user_login_section z-depth-1">
                            <div class="user_signup_top ">
                                <h3><i class="fa fa-user" aria-hidden="true"></i> Merchant</h3>
                            </div>
                            <div class="user_signup_body text-center">
                               <!--  <form class="form-signin" role="form" method="POST" action="{{ url('/merchantReg') }}" > -->
                                {!! Form::open(['url'=>'merchantReg','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}
                    {{ csrf_field() }}
                                    <div class="input-field col s12">
                                        <input  type="text" id="last_name" name="companyName">
                                        <label  class=""  for="last_name">Company Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <select name="district">
                                            <option value="0" disabled selected>Choose your City</option>
                                            @foreach($district as $value)
                                            <option value="1">{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                        <!--<label></label>-->
                                    </div>
                                    <div class="input-field col s12">
                                        <input  type="text" name="address" id="address">
                                        <label  class="" for="address">Company Address</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <select multiple name="categoryName">
                                            <option value="" >Choose your Category</option>
                                            <option value="2">Fashion</option>
                                            <option value="3">Hotel</option>
                                            <option value="4">Tourism</option>
                                            <option value="5">Decorator</option>
                                            <option value="6">HouseHold</option>
                                        </select>
                                        <!--<label>Multiple Select</label>-->
                                    </div>
                                    <div class="input-field col s12">
                                        <input  type="text" id="com-contact" name="compContactNo">
                                        <label  class="" for="com-contact">Company Contact No.</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input  type="email" name="companyEmail" id="com-email" compEmail>
                                        <label  class="" for="com-email">Company Email ID</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input  type="password" id="com-contact" name="password">
                                        <label  class="" for="com-contact">Password.</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input  type="password" id="com-contact" name="confirmPassword">
                                        <label  class="" for="com-contact">confirm password.</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input  type="text" id="com-website" name="compWebsite">
                                        <label  class="" for="com-website">Company Website (Optional)</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input  type="text" id="com-mobile" name="mobileNo">
                                        <label  class="" for="com-mobile">Mobile</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <div class="file-field input-field">
                                            <div class="btn yellow-co">
                                                <span class="" style="text-transform:capitalize;"> Profile Photo</span>
                                                <input type="file" name="profilePhoto" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <div class="file-field input-field">
                                            <div class="btn yellow-co">
                                                <span class="" style="text-transform:capitalize;"> Hotel Photo</span>
                                                <input type="file" name="hotelPhoto" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user_signup_bottom text-center" >
                                        <button class="btn waves-effect waves-light yellow-co" type="submit" name="action" style="margin-bottom: 15px;">Sign Up</button>
                                    </div>
                                    {!! Form::close()!!}
                              <!--   </form> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection