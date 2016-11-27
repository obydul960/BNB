@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
        @if(Auth::check())
            @if(Auth::user()->user==1 || Auth::user()->user==2)
                <!--fashion and  related statistics start-->
                    <h4>Fashion merchant</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                        @if(Auth::user()->user==1)
                                            {{ $bnbTodayOrder }}
                                        @else
                                            {{$todayOrder}}
                                        @endif
                                    </span>
                                    Today Order Received
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                        @if(Auth::user()->user==1)
                                            {{$bnbTotalProduct}}
                                        @else
                                            {{$totalProduct}}
                                        @endif
                                    </span>
                                    Total number of products
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                        @if(Auth::user()->user==1)
                                            {{$bnbTotalFashionProfit}}৳
                                        @else
                                            {{$totalFashionProfit}}৳
                                        @endif
                                    </span>
                                    Profit
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                         @if(Auth::user()->user==1)
                                             {{$bnbTotalFashionCommission}}৳
                                         @else
                                            {{$totalFashionCommission}}৳
                                         @endif
                                    </span>
                                    Commission
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--mini statistics end-->
            @endif
            @if(Auth::user()->user==1 || Auth::user()->user==3)
                <!--Hotel Merchant statistics start-->
                    <h4>Hotel merchant</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                         @if(Auth::user()->user==1)
                                            {{$bnbTotalHotelRoom}}
                                         @else
                                            {{$totalHotelRoom}}
                                         @endif
                                    </span>
                                    Total Number of rooms
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                        @if(Auth::user()->user==1)
                                            {{$bnbTotalHotelProfit}}৳
                                        @else
                                            {{$totalHotelProfit}}৳
                                        @endif
                                    </span>
                                    Total profit
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                        @if(Auth::user()->user==1)
                                            {{$bnbTotalHotelCommission}}৳
                                        @else
                                            {{$totalHotelCommission}}৳
                                        @endif
                                    </span>
                                    Total Commission
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
                                <div class="mini-stat-info">
                                    <span>pending</span>
                                    Commission2
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--mini statistics end-->
            @endif
            @if(Auth::user()->user==1 || Auth::user()->user==4)
                <!--Turist Mearchant statistics start-->
                    <h4>Turist merchant</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                        @if(Auth::user()->user==1)
                                            {{$bnbTotalpackageNumber}}
                                        @else
                                            {{$totalpackageNumber}}
                                        @endif
                                    </span>
                                    Total number of package
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                        @if(Auth::user()->user==1)
                                            {{$bnbTotalTourProfit}}৳
                                        @else
                                            {{$totalTourProfit}}৳
                                        @endif
                                    </span>
                                    Total profit
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                        @if(Auth::user()->user==1)
                                            {{$bnbTotalTourCommission}}৳
                                        @else
                                            {{$totalTourCommission}}৳
                                        @endif
                                    </span>
                                    Commission
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
                                <div class="mini-stat-info">
                                    <span>pending</span>
                                    Commission22
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--mini statistics end-->
                @endif
                @if(Auth::user()->user==1)
                    <h4>BNB</h4>
                    <!--BNB statistics start-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
                                <div class="mini-stat-info">
                                    <span>{{$totalMerchantFashion}}</span>
                                    Total number of merchant fashion
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
                                <div class="mini-stat-info">
                                    <span>{{$totalMerchantHotel}}</span>
                                    Total number of merchant hotel
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
                                <div class="mini-stat-info">
                                    <span>{{$totalMerchantTour}}</span>
                                    Total number of merchant tour
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                        @if(Auth::user()->user==1)
                                            {{$bnbTotalProduct}}
                                        @else
                                            {{$totalProduct}}
                                        @endif
                                    </span>
                                    Total number of Product
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                         @if(Auth::user()->user==1)
                                            {{ $bnbTodayOrder }}
                                        @else
                                            {{$todayOrder}}
                                        @endif
                                    </span>
                                    Total number of service uploaded
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
                                <div class="mini-stat-info">
                                    <span>{{$totalOrder}}</span>
                                    Total order
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
                                <div class="mini-stat-info">
                                    <span>{{$totalDelivered}}</span>
                                    Total delivered
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
                                <div class="mini-stat-info">
                                    <span>{{$totalPending}}</span>
                                    Total pending
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
                                <div class="mini-stat-info">
                                    <span>{{$totalConfirmed}}</span>
                                    Total confirmed
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
                                <div class="mini-stat-info">
                                    <span>{{$totalCancelled}}</span>
                                    Total cancelled
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
                                <div class="mini-stat-info">
                                    <span>{{$totalRefund}}</span>
                                    Total refund
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                         @if(Auth::user()->user==1)
                                            {{$bnbTotalFashionCommission}}৳
                                        @else
                                            {{$totalFashionCommission}}৳
                                        @endif
                                    </span>
                                    Total profit fashion
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                         @if(Auth::user()->user==1)
                                            {{$bnbTotalHotelCommission}}৳
                                        @else
                                            {{$totalHotelCommission}}৳
                                        @endif
                                    </span>
                                    Total profit hotel
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                           @if(Auth::user()->user==1)
                                            {{$bnbTotalTourCommission}}৳
                                        @else
                                            {{$totalTourCommission}}৳
                                        @endif
                                    </span>
                                    Total profit tour
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
                                <div class="mini-stat-info">
                                    <span>pending</span>
                                    Total
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
                                <div class="mini-stat-info">
                                    <span>{{$totalCommission}}৳</span>
                                    Total
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--mini statistics end-->

            @endif


            @if(Auth::user()->user==1 || Auth::user()->user==2)
                <!-- List table -->
                    <div class="row">
                        <div class="col-md-12">
                            <!--earning graph start-->
                            <section class="panel">
                                <header class="panel-heading">
                                    Product Order List. <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-cog"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                    </span>
                                </header>
                                <div class="panel-body">
                                    <!-- product order list -->
                                    <div class="adv-table">


                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Product Code</th>
                                                <th>Phone</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(Auth::user()->user==1)
                                                @foreach($bnbproductOrderList as $bnbproductList)
                                                    <tr>
                                                        <td>{{ $bnbproductList->product_name }}</td>
                                                        <td>{{ $bnbproductList->product_code_no }}</td>
                                                        <td>{{ $bnbproductList->phone }}</td>
                                                        <td>{{ $bnbproductList->quentity }}</td>
                                                        <td>{{ $bnbproductList->price }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                @foreach($productOrderList as $productList)
                                                    <tr>
                                                        <td>{{ $productList->product_name }}</td>
                                                        <td>{{ $productList->product_code_no }}</td>
                                                        <td>{{ $productList->phone }}</td>
                                                        <td>{{ $productList->quentity }}</td>
                                                        <td>{{ $productList->price }}</td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>

                                        </table>
                                    </div>
                                    <!-- product order list end -->
                                </div>
                            </section>
                            <!--earning graph end-->
                        </div>
                    </div>
                    <!--mini statistics end-->
            @endif
            @if(Auth::user()->user==1 || Auth::user()->user==3)
                <!-- List table -->
                    <div class="row">
                        <div class="col-md-12">
                            <!--earning graph start-->
                            <section class="panel">
                                <header class="panel-heading">
                                    Room booking order. <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-cog"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                    </span>
                                </header>
                                <div class="panel-body">
                                    <!-- product order list -->
                                    <div class="adv-table">


                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Client Name</th>
                                                <th>Hotel Name</th>
                                                <th>Phone</th>
                                                <th>Famillay Member</th>
                                                <th>Adderss</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(Auth::user()->user==1)
                                                @foreach($bnbRoomOrderList as $bnbRoomList)
                                                    <tr>
                                                        <td>{{ $bnbRoomList->client_name }}</td>
                                                        <td>{{ $bnbRoomList->hotel_name }}</td>
                                                        <td>{{ $bnbRoomList->phone }}</td>
                                                        <td>{{ $bnbRoomList->family_member }}</td>
                                                        <td>{{ $bnbRoomList->address }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                @foreach($roomOrderList as $roomList)
                                                    <tr>
                                                        <td>{{ $roomList->client_name }}</td>
                                                        <td>{{ $roomList->hotel_name }}</td>
                                                        <td>{{ $roomList->phone }}</td>
                                                        <td>{{ $roomList->family_member }}</td>
                                                        <td>{{ $roomList->address }}</td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>

                                        </table>
                                    </div>
                                    <!-- product order list end -->
                                </div>
                            </section>
                            <!--earning graph end-->
                        </div>
                    </div>
                    <!--mini statistics end-->
            @endif
            @if(Auth::user()->user==1 || Auth::user()->user==4)
                <!-- List table -->
                    <div class="row">
                        <div class="col-md-12">
                            <!--earning graph start-->
                            <section class="panel">
                                <header class="panel-heading">
                                    Ture booking order list. <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-cog"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                    </span>
                                </header>
                                <div class="panel-body">
                                    <!-- product order list -->
                                    <div class="adv-table">


                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Package Name</th>
                                                <th>Hotel Name</th>
                                                <th>Famillay Memer</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(Auth::user()->user==1)
                                                @foreach($bnbTouristOderList as $bnbTuriestList)
                                                    <tr>
                                                        <td>{{ $bnbTuriestList->package_name }}</td>
                                                        <td>{{ $bnbTuriestList->hotel_name }}</td>
                                                        <td>{{ $bnbTuriestList->familly_member }}</td>
                                                        <td>{{ $bnbTuriestList->phone }}</td>
                                                        <td>{{ $bnbTuriestList->address }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                @foreach($touristOderList as $turiestList)
                                                    <tr>
                                                        <td>{{ $turiestList->package_name }}</td>
                                                        <td>{{ $turiestList->hotel_name }}</td>
                                                        <td>{{ $turiestList->familly_member }}</td>
                                                        <td>{{ $turiestList->phone }}</td>
                                                        <td>{{ $turiestList->address }}</td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>

                                        </table>
                                    </div>
                                    <!-- product order list end -->
                                </div>
                            </section>
                            <!--earning graph end-->
                        </div>
                    </div>
        </div>
    </div>
    <!--mini statistics end-->
    @endif
    @endif
@endsection
