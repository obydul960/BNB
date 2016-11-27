<header>
    <div class="container-fluid" >
        <div class="row">
            <div class="col m12 ">
                <div class="col m4 ">
                    <div class="logo-white">
                        <!-- <a href="index.html" ><img src="{{URL::to('/')}}/webassets/image/logo-n.png" class="img-responsive"></a> -->
                    </div>
                </div>
                <div class="col m8 ">
                    <div class="nav-wrapper">
                        <ul id="nav-mobile" class="right header-top-menu">
                        @if(Auth::check())
                        <li class="waves-effect waves-light"><a href="#" class="">{{ Auth::user()->name }}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul>
                                            <li class="waves-light"> <a href="{{URL::to('/')}}/userprofile">My Profile</a></li>
                                            <li class="waves-light"><a href="{{URL::to('/')}}/logout">LOGOUT</a></li>
                                        </ul>
                                    </li>
                                    <li class="waves-effect waves-light"><a href="{{URL::to('/')}}/merchantReg">Merchant</a></li>
                        @else
                        <li class="waves-effect waves-light"><a href="{{ URL::to('/')}}/userLogin" class="">Login</a></li>
                            <li class="waves-effect waves-light"><a href="{{URL::to('/')}}/userReg">Register</a></li>
                            <li class="waves-effect waves-light"><a href="{{URL::to('/')}}/merchantReg">Merchant</a></li>
                        @endif
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class=" clearfix main-menu5 menu-main z-depth-1" id="header">
    <div class="container mobile-container ">
        <div class="row ">
            <div class="col-md-3 col-sm-2 hidden-xs  main-logo">
                <a href="index.html" ><img src="{{URL::to('/')}}/webassets/image/logo-n.png" class="img-responsive"></a>
            </div>
            <div class="col-md-7 col-sm-9">
            <ul class="tabs secondary-menu hidden-xs" id="menu-list5">
                <li class="tab col s2 menu-name1"><a  href="{{URL::to('/')}}" >Home</a></li>
                 @if($m1=App\Model\MainManuModel::where('status','=',1)->where('manu_indexing','=',1)->first())
                 <li class="tab col s2 menu-name1">
                <a  href="{{URL::to('/')}}/categorydetails/{{$m1->id}}/{{$m1->name}}" target="_Self">{{$m1->name}}</a>
                </li>
                 @endif
                 @if($m2=App\Model\MainManuModel::where('status',1)->where('manu_indexing',2)->first())
                <li class="tab col s2 menu-name1"><a href="catagory_hotel.html" target="_Self">Hotel</a></li>
                @endif
                @if($m1=App\Model\MainManuModel::where('status','=',1)->where('manu_indexing','=',1)->first())
                <li class="tab col s2 menu-name2"><a href="catagory_hotel.html" target="_Self">Tourism</a></li>
                @endif
                @if($m1=App\Model\MainManuModel::where('status','=',1)->where('manu_indexing','=',1)->first())
                 <li class="tab col s2 menu-name3"><a href="catagory_hotel.html" target="_Self">Decorator</a></li>
                 @endif
                 @if($m1=App\Model\MainManuModel::where('status','=',1)->where('manu_indexing','=',1)->first())
                 <li class="tab col s2"><a href="catagory_hotel.html" target="_Self">HouseHold</a></li>
                 @endif 
            </ul>
              
            
            </div>
            <div class="col-md-1 col-sm-1 col-md-offest-1 mobile-header-cart">
                <div class="h-cart-section " id="cart">
                    <a href="#" class="  gray h-cart-icon">
                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                    </a>
                    <span class="badge h-cart-badge">99</span>
                </div>
            </div>
            <div class="shopping-cart1 z-depth-1" id="cart-header" >
                <ul class=" clearfix" id="shopping-cart-items">
                    <li class="clearfix de">
                        <div class="cart-h-image ">
                            <img  src="{{URL::to('/')}}/webassets/image/details/cart-imge(70x70).jpg" alt="item1" class="img-responsive lazy-image"/>
                        </div>
                        <div class="cart-h-text">
                            <span class="item-name">Sony DSC-RX100M IIIfasdf</span>
                            <span class="item-name-amount">200</span>
                        </div>
                        <div class=" pull-right " > <i class="fa fa-times removeItemheader" style="cursor: pointer;" aria-hidden="true"></i></div>
                    </li>
                    <li class="clearfix de">
                        <div class="cart-h-image">
                            <img  src="{{URL::to('/')}}/webassets/image/details/cart-imge(70x70).jpg" alt="item1" class="img-responsive lazy-image"/>
                        </div>
                        <div class="cart-h-text">
                            <span class="item-name">Sony DSC-RX100M IIIfasdf</span>
                            <span class="item-name-amount">200</span>
                        </div>
                        <div class=" pull-right"> <i class="fa fa-times removeItemheader" style="cursor: pointer;" aria-hidden="true"></i></div>
                    </li>

                </ul>
                <div class="total-amount-h clearfix">
                    <h6>Tota:<span>100</span></h6>
                </div>
                <div class="cart-check-btn-h clearfix">
                    <a class="waves-effect waves-light btn view-cart-btn-h yellow-co" href="cart.html">View Cart</a>
                    <a class="waves-effect waves-light btn view-check-btn-h yellow-co" href="checkout.html">Checkout</a>
                </div>
            </div> <!--end shopping-cart -->
        </div>
    </div>
</section>
