@extends('layouts.webmasterlayout')
@section('content')
        <section class="clearfix m-top cart-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 clear-display gird-left">

                        <div class="col-md-4 col-sm-4 clearfix mobile-overflow mobile-ho-p ">
                            <div class=" h-de-fa-left ">
                                <div class="zoom-wrapper">
                                    <div class="zoom-left">
                                    <img style="border: 1px solid #e8e8e6;" id="zoom_09" src="{{URL::to('/')}}/Belogin/public/product_image/category_image/{{$fashionDeatils->home_Cat_image}}" 
                                                                data-zoom-image="{{URL::to('/')}}/Belogin/public/product_image/category_image/{{$fashionDeatils->home_Cat_image}}" width="350" />
                                        <div id="gallery_09">
                                            <a href="#" class="elevatezoom-gallery active" data-update="" 
                                               data-image="{{URL::to('/')}}/Belogin/public/product_image/details_image/{{$fashionDeatils->details_image_one}}" 
                                               data-zoom-image="{{URL::to('/')}}/Belogin/public/product_image/details_image/{{$fashionDeatils->details_image_one}}">
                                                <img src="{{URL::to('/')}}/Belogin/public/product_image/details_image/{{$fashionDeatils->details_image_one}}" width="100" /></a> 
                                            <a style="display: block;" href="#" class="elevatezoom-gallery" 
                                               data-image="{{URL::to('/')}}/Belogin/public/product_image/details_image/{{$fashionDeatils->details_image_two}}" 
                                               data-zoom-image="{{URL::to('/')}}/Belogin/public/product_image/details_image/{{$fashionDeatils->details_image_two}}">
                                                <img src="{{URL::to('/')}}/Belogin/public/product_image/details_image/{{$fashionDeatils->details_image_two}}" width="100" /></a> 
                                            <a href="tester" class="elevatezoom-gallery" data-image="{{URL::to('/')}}/Belogin/public/product_image/details_image/{{$fashionDeatils->details_image_three}}" 
                                               data-zoom-image="{{URL::to('/')}}/Belogin/public/product_image/details_image/{{$fashionDeatils->details_image_three}}"> 
                                                <img src="{{URL::to('/')}}/Belogin/public/product_image/details_image/{{$fashionDeatils->details_image_three}}" width="100" /></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-7 clearfix fashion-details-product-section bg-shadow" style="margin-bottom: 20px;">
                            <div class="">
                                <div class="h-de-fa-right">
                                    <h2 class="product-name">{{$fashionDeatils->product_name}}</h2>
                                    <h3 class="product-price">{{$fashionDeatils->selling_price}} <span>৳</span></h3>
                                </div>
                                <div class="fashion-product-code-section"> 
                                    <div class="product-code pull-left">
                                        <h4 class="product-price">Product Code: <span>{{$fashionDeatils->code_no}}</span></h4>
                                    </div>
                                    <!--                                    <div class="product-Availability pull-right">
                                                                            <h4 class="product-price">Availability: <span>In Stock 0</span></h4>
                                                                        </div>-->
                                </div>
                                <div class="size-droduct clearfix">
                                    <form>
                                        <div class="input-field col-md-6 gird-left fa-de-size">
                                            <select class="select ">
                                                <option value="0" disabled selected>Size</option>
                                                <option value="1">32</option>
                                                <option value="2">33</option>
                                                <option value="2">34</option>
                                                <option value="2">35</option>
                                                <option value="2">36</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="product-sction">
                                    <div class="clearfix">
                                        <div class="quantity z-depth-1">
                                            <button class="minus-btn"><i class="fa fa-minus"></i></button>
                                            <input value="1" type="text" style="border-bottom: none; ">
                                            <button class="plus-btn"><i class="fa fa-plus"></i></button>
                                        </div>
                                        <a class="waves-effect waves-light btn btn-large add-to-cart-btn yellow-co">Add to cart</a>
                                        <!--<a href="#"><button type="submit" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button></a>-->
                                        <div class="social-share" style="margin-top: 30px;">
                                            <div class="addthis_inline_share_toolbox"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--product descripion-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading product-details-text">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle"  data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-controls="#collapse2">
                                            View Description
                                        </a>
                                        <i class="fa fa-plus  collapse-btn" id="collapse-btn" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-controls="#collapse2" style="cursor: pointer;color:#E74C3C ;font-size: 16px;"></i>
                                    </h4>
                                </div>
                                <div style="height: auto;" id="collapse2" class="accordion-body panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                    <div class="col-md-7 col-xs-12">
                                        {!! $fashionDeatils->product_details !!}
                                    </div>
                                        <!-- <div class="col-md-7 col-xs-12">
                                            <ul class="h-de-fa-product-des">
                                                <li>Product name: Amen</li>
                                                <li> Shape: Round neck</li>
                                                <li>Unique designs</li>
                                                <li>Material: Cotton</li>
                                                <li>GSM: 160-170</li>
                                                <li>Wash: Normal wash at 300C</li>
                                                <li>For Men</li>
                                                <li>Quality checked and passed</li>
                                                <li> Made of quality material</li>
                                                <li> Wash using normal tap water</li>
                                                <li>Sizes available: Medium, large, XL &XXL</li>
                                            </ul>
                                        </div> -->
                                       <!--  <div class="col-md-5 col-xs-12">
                                            <ul class="h-de-fa-product-des">
                                                <li>Product name: Amen</li>
                                                <li> Shape: Round neck</li>
                                                <li>Unique designs</li>
                                                <li>Material: Cotton</li>
                                                <li>GSM: 160-170</li>
                                                <li>Wash: Normal wash at 300C</li>
                                                <li>For Men</li>
                                                <li>Quality checked and passed</li>
                                                <li> Made of quality material</li>
                                                <li> Wash using normal tap water</li>
                                                <li>Sizes available: Medium, large, XL &XXL</li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product details end -->

       <!--related product-->
        <!--start related fashion-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="h-de-fa-related-product">
                        <div class="title-section">
                            <ul class="pull-right related-navigation">
                                <li><a href="#" class="nav-prev-fashion"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#" class="nav-next-fashion"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="h-cata-show-fashion">
                            <h3>Related Product</h3>
                        </div>
                        <div class="cata-fashion-h ">
                            <div class="">
                                <ul class="ajaxLoadUrl owl-fashion">
                                @foreach($relatedProduct as $productName)
                                    <li class="" style="">
                                        <div class="content-box single-product ">
                                            <div class="h-ca-fa-body  fashion-Tourism-home">
                                                <div class=" h-ca-product-image text-center">
                                                    <a href="{{ URL::to('/')}}/details/{{ $productName->product_id }}"><img src="{{URL::to('/')}}/Belogin/public/product_image/category_image/{{$productName->home_Cat_image}}" class="img-responsive lazy-image" alt=""></a>
                                                </div>
                                                <div class="brand-logo-cata text-center">
                                                    @if($logo=App\Model\MarchentRegModel::where('user_id','=',$productName->marchent_id)->first())
                                               @if($logo->company_logo!=null)
                                              
                                      <img src="{{URL::to('/')}}/Belogin/public/product_image/logo/{{$logo->company_logo}}" class="img-responsive" alt="{{$logo->company_name}}">
                                               @else
                                               <img src="{{URL::to('/')}}/Belogin/public/product_image/logo/asfalt-light.png" class="img-responsive" alt="{{$logo->company_name}}">
                                       <span style="margin-left: -100px; font-style: initial;font-color:black;font-weight: bold;">{{$logo->company_name}}</span>
                                               @endif
                                               @endif 
                                                </div>
                                                <div class="tittle-description-ca-h text-center">
                                                    <a href="catagory_fashoion-details.html"><h3 class="product-name ">{{ $productName->product_name }} </h3></a>
                                                    <h4 class="price-catagory">{{ $productName->selling_price }} <span>৳</span></h4>
                                                </div>
                                                <div class="pri-description-ca-h">
                                                    <a class="btn-floating btn-large waves-effect waves-light cata-h-btn add-to-card yellow-co"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                                </div>
                                            </div> 
                                        </div>
                                    </li>
                                @endforeach    
                                    <!-- <li class="">
                                        <div class="content-box single-product ">
                                            <div class=" h-ca-fa-body fashion-Tourism-home">
                                                <div class=" h-ca-product-image text-center">
                                                    <a href="catagory_fashoion-details.html"><img src="Assets/image/details/product-5-b-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                                </div>
                                                <div class="brand-logo-cata text-center">
                                                    <img src="Assets/image/populer_Bands/flipkart-offer.png" class="img-responsive">
                                                </div>
                                                <div class="tittle-description-ca-h text-center">
                                                    <a href="catagory_fashoion-details.html"><h3 class="product-name ">Blue Flower Print Men's Shirt </h3></a>
                                                    <h4 class="price-catagory">200 <span>৳</span></h4>
                                                </div>
                                                <div class="pri-description-ca-h">
                                                    <a class="btn-floating btn-large waves-effect waves-light cata-h-btn add-to-card yellow-co"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                                </div>
                                            </div> 
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="content-box single-product ">
                                            <div class=" h-ca-fa-body fashion-Tourism-home ">
                                                <div class=" h-ca-product-image text-center">
                                                    <a href="catagory_fashoion-details.html"><img src="Assets/image/details/product-19-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                                </div>
                                                <div class="brand-logo-cata text-center">
                                                    <img src="Assets/image/populer_Bands/foodpanda-offer.png" class="img-responsive">
                                                </div>
                                                <div class="tittle-description-ca-h text-center">
                                                    <a href="catagory_fashoion-details.html"><h3 class="product-name ">Blue Flower Print Men's Shirt </h3></a>
                                                    <h4 class="price-catagory">200 <span>৳</span></h4>
                                                </div>
                                                <div class="pri-description-ca-h">
                                                    <a class="btn-floating btn-large waves-effect waves-light cata-h-btn add-to-card yellow-co"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                                </div>
                                            </div> 
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="content-box single-product ">
                                            <div class=" h-ca-fa-body fashion-Tourism-home ">
                                                <div class=" h-ca-product-image text-center">
                                                    <a href="catagory_fashoion-details.html"><img src="Assets/image/details/product-10-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                                </div>
                                                <div class="brand-logo-cata text-center">
                                                    <img src="Assets/image/populer_Bands/amazon-offer.png" class="img-responsive">
                                                </div>
                                                <div class="tittle-description-ca-h text-center">
                                                    <a href="catagory_fashoion-details.html"><h3 class="product-name ">Blue Flower Print Men's Shirt </h3></a>
                                                    <h4 class="price-catagory">200 <span>৳</span></h4>
                                                </div>
                                                <div class="pri-description-ca-h">
                                                    <a class="btn-floating btn-large waves-effect waves-light cata-h-btn add-to-card yellow-co"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                                </div>
                                            </div> 
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="content-box single-product ">
                                            <div class=" h-ca-fa-body  fashion-Tourism-home">
                                                <div class=" h-ca-product-image text-center">
                                                    <a href="catagory_fashoion-details.html"><img src="Assets/image/details/product-3-a-medium-notinclude.jpg" class="img-responsive lazy-image" alt=""></a>
                                                </div>
                                                <div class="brand-logo-cata text-center">
                                                    <img src="Assets/image/populer_Bands/Bata.png" class="img-responsive">
                                                </div>
                                                <div class="tittle-description-ca-h text-center">
                                                    <a href="catagory_fashoion-details.html"><h3 class="product-name ">Blue Flower Print Men's Shirt </h3></a>
                                                    <h4 class="price-catagory">200 <span>৳</span></h4>
                                                </div>
                                                <div class="pri-description-ca-h">
                                                    <a class="btn-floating btn-large waves-effect waves-light cata-h-btn add-to-card yellow-co"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                                </div>
                                            </div> 
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--related fashion-->
@endsection