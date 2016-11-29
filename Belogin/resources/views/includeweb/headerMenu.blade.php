
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
                <a href="{{URL::to('/')}}" ><img src="{{URL::to('/')}}/webassets/image/logo-n.png" class="img-responsive"></a>
            </div>
            <div class="col-md-7 col-sm-9">
            <ul class=" ajaxLoadUrl tabs secondary-menu hidden-xs" id="menu-list5">
    <li class="tab col s2 menu-name1"><a  href="javascript:ajaxLoad('{{url('/')}}')" id="addNewInvoiceBtn">Home</a></li>
                 @if($m2=App\Model\MainManuModel::where('status',1)->where('manu_indexing',2)->first())
                 <li class="tab col s2 menu-name1">
                <a   href="javascript:ajaxLoad('{{url('details/categorydetails')}}')" target="_Self">{{$m2->manu_name}}</a>
                </li>
                 @endif
                 @if($m3=App\Model\MainManuModel::where('status',1)->where('manu_indexing',3)->first())
           <!--      <li class="tab col s2 menu-name1"><a href="{{URL::to('/')}}/categorydetails/{{$m3->id}}/{{$m3->manu_name}}" target="_Self">{{$m3->manu_name}}</a></li>  -->
                <li class="tab col s2 menu-name1"><a href="{{URL::to('/')}}/hotel" target="_Self">{{$m3->manu_name}}</a></li>
                @endif
                @if($m4=App\Model\MainManuModel::where('status',1)->where('manu_indexing',4)->first())
                <!-- <li class="tab col s2 menu-name2"><a href="{{URL::to('/')}}/categorydetails/{{$m4->id}}/{{$m4->manu_name}}" target="_Self">{{$m4->manu_name}}</a></li> -->
                <li class="tab col s2 menu-name2"><a href="{{URL::to('/')}}/hotel2" target="_Self">{{$m4->manu_name}}</a></li>
                @endif
                @if($m5=App\Model\MainManuModel::where('status',1)->where('manu_indexing',5)->first())
                 <li class="tab col s2 menu-name3"><a href="{{URL::to('/')}}/categorydetails/{{$m4->id}}/{{$m4->manu_name}}" target="_Self">{{$m5->manu_name}}</a></li>
                 @endif
                 @if($m6=App\Model\MainManuModel::where('status',1)->where('manu_indexing',6)->first())
                 <li class="tab col s2"><a href="{{URL::to('/')}}/categorydetails/{{$m6->id}}/{{$m6->manu_name}}" target="_Self">{{$m6->manu_name}}</a></li>
                 @endif
            </ul>


            </div>
            <div class="col-md-1 col-sm-1 col-md-offest-1 mobile-header-cart">
                <div class="h-cart-section " id="cart">
                    <a href="#" class="  gray h-cart-icon">
                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                    </a>
                    <span class="badge h-cart-badge">{{\Gloudemans\Shoppingcart\Facades\Cart::count(false)}}</span>
                </div>
            </div>
              @if(\Gloudemans\Shoppingcart\Facades\Cart::count(false) !=0)
            <div class="shopping-cart1 z-depth-1" id="cart-header" >

                <ul class=" clearfix" id="shopping-cart-items">



         @foreach($data=Cart::content() as $d)
                    <li class="clearfix de">
                        <div class="cart-h-image ">
                          @if($pimg=App\Model\ProductImage::where('product_id','=',$d->id)->first())
                              <img src="{{URL::to('/')}}/Belogin/public/product_image/category_image/{{$pimg->home_Cat_image}}" class="img-responsive">
                             @else
                               <img  src="{{URL::to('/')}}/webassets/image/details/cart-imge(70x70).jpg" alt="item1" class="img-responsive lazy-image"/>
                           @endif

                        </div>
                        <div class="cart-h-text">
                            <span class="item-name"> {{$d->name}}</span>
                            <span class="item-name-amount">{{$d->price}}</span>
                        </div>
                        <div class=" pull-right " ><a href="{{URL::to('cart/remove/'.$d->rowid)}}"> <i class="fa fa-times removeItemheader" style="cursor: pointer;" aria-hidden="true"></i></a></div>
                    </li>
             @endforeach

                </ul>
                <div class="total-amount-h clearfix">
                    <h6>Tota:<span>{{\Gloudemans\Shoppingcart\Facades\Cart::total()}} ৳</span></h6>
                </div>
                <div class="cart-check-btn-h clearfix">
                  @if(\Gloudemans\Shoppingcart\Facades\Cart::total() >0)
        @if(\Illuminate\Support\Facades\Auth::check())
                {!! Form::open(['id'=>'myform']) !!}
                {!! Form::submit('Checkout Normally',['name'=>'normal','class'=>'btn btn-success']) !!}

                <br> <br>
                <span>OR, Have Coupon Code?</span>
                <br><br>
            <div class="row">
                <div class="col-md-3"></div>

                <div class="col-md-3">
                    <input type="text" class="form-control" value="" name="ccode" placeholder="Enter Coupon Code">
                </div>
                <div class="col-md-3">
                    {!! Form::submit('Apply Code & Checkout',['name'=>'coupon','class'=>'btn btn-success']) !!}
                </div>
                <div class="col-md-3"></div>

            </div>

       {!! Form::close() !!}
        @else
 <a class="waves-effect waves-light btn view-cart-btn-h yellow-co" href="{{URL::to('my/shopping/cart')}}">View Cart</a>

            <a class="waves-effect waves-light btn view-check-btn-h yellow-co" href="checkout.html">Checkout</a>
        @endif
    @endif


                </div>
            </div> <!--end shopping-cart -->
            @else
            <div class="shopping-cart1 z-depth-1" id="cart-header" >

                <ul class=" clearfix" id="shopping-cart-items">




                    <li class="clearfix de">
                        <div class="cart-h-image ">


                        </div>
                        <div class="cart-h-text">
                          <h3>Your Cart is Empty.</h3>
                           </div>
                   <div class=" pull-right " > </div>
                    </li>


                </ul>
                <div class="total-amount-h clearfix">

                </div>
                <div class="cart-check-btn-h clearfix">
                         </div>
            </div>
            @endif
        </div>
    </div>

</section>
