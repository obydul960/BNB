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
                                <option value="0" disabled selected>Price Range</option>
                                <option value="1">499-999</option>
                                <option value="2">1000-1999</option>
                                <option value="3">2000-2999</option>
                                <option value="3">3000-3999</option>
                                <option value="3">4000-4999</option>
                                <option value="3">5000+</option>
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
                        <div class=" catagroy-hotel-section">
                            <div class="col-md-4 col-sm-3 col-xs-12 gird-2 h-ca-product-image">
                                <a href="catagory_fashoion-details.html"><img class="lazy-image" src="Assets/image/catagory/1466667898.jpg" class="img-responsive lazy-image" alt=""></a>
                            </div> 
                            <div class="col-md-5 col-sm-6">
                                <div class="h-ca-fa-description mobile-hotel">
                                    <a href="catagory_company_hotel_profile_details.html"><h3 class="product-name">Sonargaon Royal Resort</h3></a>
                                    <p class="product-details">Tepantor Princes Hotel and Resort is a luxarious Hotel in Mymenshingh.
                                        The hotel offers 40 well decorated international
                                        standard rooms with all the modern facilities. 
                                        Each room has air-conditioning, room hitter, and…</p>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-3 ss">
                                <div class="h-ca-fa-right-des text-center">
                                    <h4 class="price-hotel">4000 <span>৳</span></h4>
                                    <a href="catagory_company_hotel profile.html"><button type="submit" class="btn btn-default yellow-co" >Details</button></a>
                                </div>                            
                            </div>
                        </div>
                        <div class=" catagroy-hotel-section">
                            <div class="col-md-4 col-sm-3 col-xs-12 gird-2 h-ca-product-image">
                                <a href="catagory_fashoion-details.html"><img class="lazy-image" src="Assets/image/catagory/1466667898.jpg" class="img-responsive lazy-image" alt=""></a>
                            </div> 
                            <div class="col-md-5 col-sm-6">
                                <div class="h-ca-fa-description mobile-hotel">
                                    <a href="catagory_company_hotel_profile_details.html"><h3 class="product-name">Sonargaon Royal Resort</h3></a>
                                    <p class="product-details">Tepantor Princes Hotel and Resort is a luxarious Hotel in Mymenshingh.
                                        The hotel offers 40 well decorated international
                                        standard rooms with all the modern facilities. 
                                        Each room has air-conditioning, room hitter, and…</p>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-3 ss">
                                <div class="h-ca-fa-right-des text-center">
                                    <h4 class="price-hotel">4000 <span>৳</span></h4>
                                    <a href="catagory_company_hotel profile.html"><button type="submit" class="btn btn-default yellow-co" >Details</button></a>
                                </div>                            
                            </div>
                        </div>
                        

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
