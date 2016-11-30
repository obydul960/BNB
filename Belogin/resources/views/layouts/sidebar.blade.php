<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->            <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                @if(Auth::check())
                    <li>
                        <a href="{{URL::to('/')}}/home">
                            <i class="fa fa-dashboard"></i>
                            <span>Dash bord</span>
                        </a>
                    </li>
                    @if(Auth::user()->user==2)
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-laptop"></i>
                                <span>Fashion </span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/')}}/productAdd">Add Product</a></li>
                                <li><a href="{{URL::to('/')}}/productOrderManage">Manage Order</a></li>
                                <li><a href="{{URL::to('/')}}/productReport">Report</a></li>
                            </ul>
                        </li>
                    @elseif(Auth::user()->user==3)
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Hotel </span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/')}}/marchentRoomAdd">Add Room</a></li>
                                <li><a href="{{URL::to('/')}}/manageRoom">Manage Room</a></li>
                                <li><a href="{{URL::to('/')}}/manageRoomProfit">Manage Profit</a></li>
                            </ul>
                        </li>
                    @elseif(Auth::user()->user==4)
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-male"></i>
                                <span>Tourism</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/')}}/managePackage">Manage Package</a></li>
                                <li><a href="{{URL::to('/')}}/touristManage">Tourist Approve</a></li>
                                <li><a href="{{URL::to('/')}}/packageProfitFrom">Report</a></li>
                            </ul>
                        </li>
                    @elseif(Auth::user()->user==5)
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-laptop"></i>
                                <span>BNB </span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/')}}/BnbManageProduct">Manage Product</a></li>
                                <li><a href="{{URL::to('/')}}/BnbProductOrder">product Order</a></li>
                                <li><a href="{{URL::to('/')}}/viewProductStatus">View Status</a></li>
                                <li><a href="{{URL::to('/')}}/BnbManageProfit"> Profite</a></li>
                                <li><a href="{{URL::to('/')}}/marchentManage">Manage Merchant</a></li>
                                <li><a href="{{URL::to('/')}}/SliderContrll">Slider</a></li>
                            </ul>
                        </li>
                    @elseif(Auth::user()->user==1)

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-laptop"></i>
                                <span>Fashion </span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/')}}/maninManu">Main Manu</a></li>
                                <li><a href="{{URL::to('/')}}/categoryManage">Category</a></li>
                                <li><a href="{{URL::to('/')}}/subCategoryManage">Subcategory</a></li>
                                <li><a href="{{URL::to('/')}}/productAdd">Add Product</a></li>
                                <li><a href="{{URL::to('/')}}/productManage">Product Manage</a></li>
                                <li><a href="{{URL::to('/')}}/productOrderManage">Order Manage</a></li>
                                <li><a href="{{URL::to('/')}}/productReport">Report</a></li>
                            </ul>
                        </li>


                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-laptop"></i>
                                <span>BNB </span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/')}}/BnbManageProduct">Manage Product</a></li>
                                <li><a href="{{URL::to('/')}}/BnbProductOrder">product Order</a></li>
                                <li><a href="{{URL::to('/')}}/viewProductStatus">View Status</a></li>
                                <li><a href="{{URL::to('/')}}/BnbManageProfit"> Profite</a></li>
                                <li><a href="{{URL::to('/')}}/marchentManage">Manage Merchant</a></li>
                                <li><a href="{{URL::to('/')}}/SliderContrll">Slider</a></li>
                            </ul>
                        </li>


                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Hotel </span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/')}}/hotelManage">Hotel Approve </a></li>
                                <li><a href="{{URL::to('/')}}/bookingOrderManage">Booking Order </a></li>
                                <li><a href="{{URL::to('/')}}/manageRoom">Manage Room</a></li>
                                <li><a href="{{URL::to('/')}}/addRome">Add Room</a></li>
                                <li><a href="{{URL::to('/')}}/manageRoomProfit">Manage Profit</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-male"></i>
                                <span>Tourism</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/')}}/managePackage">Manage Package</a></li>
                                <li><a href="{{URL::to('/')}}/touristManage">Tourist Approve</a></li>
                                <li><a href="{{URL::to('/')}}/touristBooking">Tourist Booking</a></li>
                                <li><a href="{{URL::to('/')}}/packageProfitFrom">Report</a></li>
                            </ul>
                        </li>
                    @endif

                @else
                    <li><a href="{{URL::to('/')}}/login">Login</a></li>
                @endif

        </ul></div>        
<!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->