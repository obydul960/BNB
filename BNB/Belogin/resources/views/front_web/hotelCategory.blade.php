@extends('layouts.webmasterlayout')
@section('content')
<section class=" clearfix cart-mobile">    
            <div class="container search-bg">
                <div class="row">
                    <form  method="POST" action="" class="" id="customer-form">
                        <div class="input-field col-md-3">
                            <select class="select">
                                <option value="0" disabled selected>Division</option>
                                <option value="1">Dhaka</option>
                                <option value="2">Feni</option>
                                <option value="3">Cox's Bazar</option>
                                <option value="4">Brishal</option>
                            </select>
                        </div>
                        <div class="input-field col-md-3">
                            <select class="select">
                                <option value="0" disabled selected>Area</option>
                                <option value="1">Mirpur</option>
                                <option value="2">Shantinagor</option>
                                <option value="3">Danmonddi</option>
                            </select>
                        </div>
                        <div class="input-field col-md-3">
                            <select class="select">
                                <option value="0" disabled selected>Price</option>
                                <option value="1">5000</option>
                                <option value="2">8000</option>
                                <option value="3">10000</option>
                                <option value="3">15000</option>
                                <option value="3">20000</option>
                            </select>
                        </div>
                        <div class="ca-fa-btn mb col-md-3">
                            <a class="waves-effect waves-light btn yellow-co">Find</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="clearfix m-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 h-ca-fa-section">
                    @foreach($hotelCategory as $hotel)
                        <div class=" catagroy-hotel-section ">
                            <div class="col-md-4 col-sm-3 gird-2 h-ca-product-image">
                                <a href="{{ URL::to('/')}}/hotelProfile/{{ $hotel->room_id }}"> <img src="{{URL::to('/')}}/Belogin/public/hotelImage/category/{{$hotel->image_one}}" class="img-responsive lazy-image" alt=""></a>
                            </div> 
                            <div class="col-md-5 col-sm-6">
                                <div class="h-ca-fa-description">
                                    <a href="{{ URL::to('/')}}/hotelProfile/{{ $hotel->room_id }}"><h3 class="product-name">{{$hotel->title}}</h3></a>
                                    <p class="product-details">{{$hotel->state_address}}</p>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-3 ss">
                                <div class="h-ca-fa-right-des text-center">
                                     @if($logo=App\Model\MarchentRegModel::where('user_id','=',$hotel->marchent_id)->first())
                                               @if($logo->company_logo!=null)
                                              
                                      <img src="{{URL::to('/')}}/Belogin/public/product_image/logo/{{$logo->company_logo}}" class="img-responsive" alt="{{$logo->company_name}}">
                                               @else
                                               <img src="{{URL::to('/')}}/Belogin/public/product_image/logo/asfalt-light.png" class="img-responsive" alt="{{$logo->company_name}}">
                                       <span style="margin-left: -100px; font-style: initial;font-color:black;font-weight: bold;">{{$logo->company_name}}</span>
                                               @endif
                                               @endif 
                                    <a href="{{ URL::to('/')}}/hotelProfile/{{ $hotel->room_id }}"><button type="submit" class="btn btn-default yellow-co" >View Rooms</button></a>
                                </div>
                            </div> 
                        </div>

                    @endforeach


                       <!--  <div class=" catagroy-hotel-section ">
                            <div class="col-md-4 col-sm-3 gird-2 h-ca-product-image">
                                <a href="catagory_fashoion-details.html"> <img src="Assets/image/details/room-deluxe-380.jpg" class="img-responsive lazy-image" alt=""></a>
                            </div> 
                            <div class="col-md-5 col-sm-6">
                                <div class="h-ca-fa-description">
                                    <a href="catagory_company_hotel profile.html"><h3 class="product-name">Mohammadi Garden (Tour.com.bd Resort -2)</h3></a>
                                    <p class="product-details">Available in 3 different colors- lemon green, light blue & beige.</p>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-3 ss">
                                <div class="h-ca-fa-right-des text-center">
                                    <img src="Assets/image/populer_Bands/Bata.png" class="img-responsive" alt="">
                                    <a href="catagory_company_hotel profile.html"><button type="submit" class="btn btn-default yellow-co" >View Rooms</button></a>
                                </div>
                            </div> 
                        </div> -->
                       <!--  <div class=" catagroy-hotel-section ">
                            <div class="col-md-4 col-sm-3 gird-2 h-ca-product-image">
                                <a href="catagory_fashoion-details.html"> <img src="Assets/image/details/room-deluxe-380.jpg" class="img-responsive lazy-image" alt=""></a>
                            </div> 
                            <div class="col-md-5 col-sm-6">
                                <div class="h-ca-fa-description">
                                    <a href="catagory_company_hotel profile.html"><h3 class="product-name">Mohammadi Garden (Tour.com.bd Resort -2)</h3></a>
                                    <p class="product-details">Available in 3 different colors- lemon green, light blue & beige.</p>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-3 ss">
                                <div class="h-ca-fa-right-des text-center">
                                    <img src="Assets/image/populer_Bands/Bata.png" class="img-responsive" alt="">
                                    <a href="catagory_company_hotel profile.html"><button type="submit" class="btn btn-default yellow-co" >View Rooms</button></a>
                                </div>
                            </div> 
                        </div> -->
                       <!--  <div class=" catagroy-hotel-section ">
                            <div class="col-md-4 col-sm-3 gird-2 h-ca-product-image">
                                <a href="catagory_fashoion-details.html"> <img src="Assets/image/details/room-deluxe-380.jpg" class="img-responsive lazy-image" alt=""></a>
                            </div> 
                            <div class="col-md-5 col-sm-6">
                                <div class="h-ca-fa-description">
                                    <a href="catagory_company_hotel profile.html"><h3 class="product-name">Mohammadi Garden (Tour.com.bd Resort -2)</h3></a>
                                    <p class="product-details">Available in 3 different colors- lemon green, light blue & beige.Available in 3 different colors- lemon green, light blue & beige.Available in 3 different colors- lemon green, light blue & beige.Available in 3 different colors- lemon green, light blue & beige.</p>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-3 ss">
                                <div class="h-ca-fa-right-des text-center">
                                    <img src="Assets/image/populer_Bands/Bata.png" class="img-responsive" alt="">
                                    <a href="catagory_company_hotel profile.html"><button type="submit" class="btn btn-default yellow-co" >View Rooms</button></a>
                                </div>
                            </div> 
                        </div> -->
                        <!-- <div class=" catagroy-hotel-section ">
                            <div class="col-md-4 col-sm-3 gird-2 h-ca-product-image">
                                <a href="catagory_fashoion-details.html"> <img src="Assets/image/details/room-deluxe-380.jpg" class="img-responsive lazy-image" alt=""></a>
                            </div> 
                            <div class="col-md-5 col-sm-6">
                                <div class="h-ca-fa-description">
                                    <a href="catagory_company_hotel profile.html"><h3 class="product-name">Mohammadi Garden (Tour.com.bd Resort -2)</h3></a>
                                    <p class="product-details">Available in 3 different colors- lemon green, light blue & beige.</p>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-3 ss">
                                <div class="h-ca-fa-right-des text-center">
                                    <img src="Assets/image/populer_Bands/Bata.png" class="img-responsive" alt="">
                                    <a href="catagory_company_hotel profile.html"><button type="submit" class="btn btn-default yellow-co" >View Rooms</button></a>
                                </div>
                            </div> 
                        </div> -->


                        <div class="pagination1">
                            <ul class="pagination ">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
@endsection