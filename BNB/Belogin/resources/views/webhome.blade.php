@extends('layouts.webmasterlayout')
@section('content')
@include('includeweb.sidebar')
<section>
           <div class="container">
               <div class="row">
                   <div class="clearfix clear-display">
                       <div class="col-md-9 col-sm-7 col-xs-12 gird-right">
                           <div class="h-populer-band ">
                               <div class="h-po-band-tittle" style="border-bottom: 1px solid #ddd">
                                   <h3>Popular Brands
                                       <a href="store.html"><span class="">View More</span></a>
                                   </h3>
                               </div>
                               <ul class="h-populer-band-list ">
                                   <li  class="demo-card-wide ">
                                       <a href="{{URL::to('/')}}/companyProfile/{{$popularBrandsOne->id}}"  id="bigimage"><img src="{{URL::to('/')}}/Belogin/public/product_image/logo/{{$popularBrandsOne->company_logo}}" class="img-responsive lazy-image"></a>

                                   </li>
                             
                                   <li  class="demo-card-wide ">
                                       <a href="{{URL::to('/')}}/companyProfile/{{$popularBrandsTwo->id}}" id="bigimage"><img src="{{URL::to('/')}}/Belogin/public/product_image/logo/{{$popularBrandsTwo->company_logo}}" class="img-responsive lazy-image"></a>
                                   </li>
                                                                 
                                   <li  class="demo-card-wide ">
                                       <a href="{{URL::to('/')}}/companyProfile/{{$popularBrandsThree->id}}" id="bigimage"><img src="{{URL::to('/')}}/Belogin/public/product_image/logo/{{$popularBrandsThree->company_logo}}" class="img-responsive lazy-image"></a>
                                   </li>
                                                              
                                   <li  class="demo-card-wide " >
                                       <a href="{{URL::to('/')}}/companyProfile/{{$popularBrandsFour->id}}" id="bigimage"><img src="{{URL::to('/')}}/Belogin/public/product_image/logo/{{$popularBrandsFour->company_logo}}" class="img-responsive lazy-image"> </a>
                                   </li>
                                                               
                                   <li  class="demo-card-wide  " >
                                       <a href="{{URL::to('/')}}/companyProfile/{{$popularBrandsFive->id}}" id="bigimage"><img src="{{URL::to('/')}}/Belogin/public/product_image/logo/{{$popularBrandsFive->company_logo}}" class="img-responsive lazy-image"></a>
                                   </li>
                                                               
                                   <li  class="demo-card-wide store-pop-right">
                                       <a href="{{URL::to('/')}}/companyProfile/{{$popularBrandsSix->id}}" id="bigimage"><img src="{{URL::to('/')}}/Belogin/public/product_image/logo/{{$popularBrandsSix->company_logo}}" class="img-responsive lazy-image"></a>
                                   </li>
                                                                 
                                   <li  class="demo-card-wide ">
                                       <a href="{{URL::to('/')}}/companyProfile/{{$popularBrandsSeven->id}}" id="bigimage"><img src="{{URL::to('/')}}/Belogin/public/product_image/logo/{{$popularBrandsSeven->company_logo}}"></a>
                                   </li>
                                                                
                                   <li  class="demo-card-wide " >
                                       <a href="{{URL::to('/')}}/companyProfile/{{$popularBrandsEight->id}}" id="bigimage"><img src="{{URL::to('/')}}/Belogin/public/product_image/logo/{{$popularBrandsEight->company_logo}}" class="img-responsive lazy-image"></a>
                                   </li>
                                                                
                                   <li  class="demo-card-wide " >
                                       <a href="{{URL::to('/')}}/companyProfile/{{$popularBrandsNine->id}}" id="bigimage"><img src="{{URL::to('/')}}/Belogin/public/product_image/logo/{{$popularBrandsNine->company_logo}}" class="img-responsive lazy-image"></a>
                                   </li>
                                                                
                                   <li  class="demo-card-wide  h-po-band-logo">
                                       <a href="{{URL::to('/')}}/companyProfile/{{$popularBrandsTen->id}}" id="bigimage"><img src="{{URL::to('/')}}/Belogin/public/product_image/logo/{{$popularBrandsTen->company_logo}}" class="img-responsive lazy-image"></a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                       <div class="col-md-3 col-sm-4 col-xs-12 gird-right">
                           <div class="h-add">
                               <a href="{{URL::to('/')}}/companyProfile/{{$popularBrandsTwo->id}}"><img src="{{URL::to('/')}}/Belogin/public/product_image/logo/{{$popularBrandsOne->company_logo}}" class="img-responsive lazy-image"></a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>

       <section class=" clearfix" style=" margin-top: 15px;">
           <div class="container">
               <div class="row">
                   <ul class="cata-banner-ho">
                       <li class="banner-cata-sm">
                           <div class="populer-cata-section">
                               <div class="populer-cata">
                                   <a href="catagory_fashoion.html"><img src="{{URL::to('/')}}/webassets/image/banner/fashion.jpg" alt="banner"  class="img-responsive"></a>
                               </div>
                           </div>
                       </li>
                       <li class="banner-cata-big ">
                           <div class="populer-cata-section">
                               <div class="populer-cata">
                                   <a href="catagory_fashoion.html"><img src="{{URL::to('/')}}/webassets/image/banner/fashion2.jpg" alt="banner"  class="img-responsive"></a>
                               </div>
                           </div>
                       </li>
                       <li class="banner-cata-sm">
                           <div class="populer-cata-section">
                               <div class="populer-cata">
                                   <a href="catagory_fashoion.html"><img src="{{URL::to('/')}}/webassets/image/banner/HOTEL.jpg" alt="banner"  class="img-responsive"></a>
                               </div>
                           </div>
                       </li>
                       <li class=" banner-cata-big ">
                           <div class="populer-cata-section">
                               <div class="populer-cata">
                                   <a href="catagory_fashoion.html"><img src="{{URL::to('/')}}/webassets/image/banner/fashion2.jpg" alt="banner"  class="img-responsive"></a>
                               </div>
                           </div>
                       </li>
                       <li class="banner-cata-sm">
                           <div class="populer-cata-section">
                               <div class="populer-cata">
                                   <a href="catagory_fashoion.html"><img src="{{URL::to('/')}}/webassets/image/banner/HOTEL.jpg" alt="banner"  class="img-responsive"></a>
                               </div>
                           </div>
                       </li>
                       <li class="banner-cata-sm">
                           <div class="populer-cata-section">
                               <div class="populer-cata">
                                   <a href="catagory_fashoion.html"><img src="{{URL::to('/')}}/webassets/image/banner/fashion.jpg" alt="banner"  class="img-responsive"></a>
                               </div>
                           </div>
                       </li>
                   </ul>
               </div>
           </div>
       </section>

       <!--start fashion-->
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
                           <h3>Fashion</h3>
                       </div>
                       <div class="cata-fashion-h ">
                           <div class="">
                               <ul class="owl-fashion">
                                   <li class="" style="">
                                       <div class="content-box single-product ">
                                           <div class="h-ca-fa-body  fashion-Tourism-home">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/product-3-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="{{URL::to('/')}}/webassets/image/populer_Bands/Bata.png" class="img-responsive">
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
                                           <div class=" h-ca-fa-body fashion-Tourism-home">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/product-5-b-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="{{URL::to('/')}}/webassets/image/populer_Bands/flipkart-offer.png" class="img-responsive">
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
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/product-19-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="{{URL::to('/')}}/webassets/image/populer_Bands/foodpanda-offer.png" class="img-responsive">
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
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/product-10-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="{{URL::to('/')}}/webassets/image/populer_Bands/amazon-offer.png" class="img-responsive">
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
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/product-3-a-medium-notinclude.jpg" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="{{URL::to('/')}}/webassets/image/populer_Bands/Bata.png" class="img-responsive">
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
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!--end fashion-->

       <!--start hotel-->
       <section class=" m15 clearfix">
           <div class="container">
               <div class="row">
                   <div class="h-de-fa-related-product">
                       <div class="">
                           <div class="title-section">
                               <ul class="pull-right related-navigation" >
                                   <li><a href="#" class="nav-prev-hotel"><i class="fa fa-chevron-left"></i></a></li>
                                   <li><a href="#" class="nav-next-hotel"><i class="fa fa-chevron-right"></i></a></li>
                               </ul>
                           </div>
                           <div class="h-cata-show-fashion">
                               <h3>Hotel</h3>
                           </div>
                           <div class="">
                               <ul class="owl-hotel">
                                   <li class="h-ca-hotel-section">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body-hotel ">
                                               <div class="col-md-5 gird-2 h-ca-product-image">
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/room-penthouse-380.jpg" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="col-md-7 gird-right">
                                                   <div class="tittle-description-ca-h">
                                                       <a href="catagory_fashoion-details.html"><h3 class="product-name">New EID collection !!!</h3></a>
                                                       <p class="product-details">Available in 3 different colors- lemon green, light blue & beige.</p>
                                                   </div>
                                                   <div class="pri-description-ca-h mobile-pri-description-ca-h">
                                                       <h4 class="price-catagory">200 BDT</h4>
                                                       <a class=" " href="catagory_company_hotel_profile_details.html"><button type="submit" class="btn btn-default hotel-rel-cata-h-btn add-to-card">Booking</button></a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </li>
                                   <!--product-1-->
                                   <li class="h-ca-hotel-section">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body-hotel ">
                                               <div class="col-md-5 gird-2 h-ca-product-image">
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/room-penthouse-380.jpg" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="col-md-7 gird-right">
                                                   <div class="tittle-description-ca-h">
                                                       <a href="catagory_fashoion-details.html"><h3 class="product-name">New EID collection !!!</h3></a>
                                                       <p class="product-details">Available in 3 different colors- lemon green, light blue & beige.</p>
                                                   </div>
                                                   <div class="pri-description-ca-h mobile-pri-description-ca-h">
                                                       <h4 class="price-catagory">200 BDT</h4>
                                                       <a class=" " href="catagory_company_hotel_profile_details.html"><button type="submit" class="btn btn-default hotel-rel-cata-h-btn add-to-card">Booking</button></a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </li>
                                   <!--product-1-->
                                   <li class="h-ca-hotel-section">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body-hotel ">
                                               <div class="col-md-5 gird-2 h-ca-product-image">
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/room-penthouse-380.jpg" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="col-md-7 gird-right">
                                                   <div class="tittle-description-ca-h">
                                                       <a href="catagory_fashoion-details.html"><h3 class="product-name">New EID collection !!!</h3></a>
                                                       <p class="product-details">Available in 3 different colors- lemon green, light blue & beige.</p>
                                                   </div>
                                                   <div class="pri-description-ca-h mobile-pri-description-ca-h">
                                                       <h4 class="price-catagory">200 BDT</h4>
                                                       <a class=" " href="catagory_company_hotel_profile_details.html"><button type="submit" class="btn btn-default hotel-rel-cata-h-btn add-to-card">Booking</button></a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </li>
                               </ul>
                               <!--product-1-->
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!--end hotel-->

       <!--start offer add-->
       <section class="m-top clearfix">
           <div class="container" style="">
               <div class="row">
                   <div class="col-md-12 col-sm-12 gird-right">
                       <div class="discount-section" style="overflow: hidden;">
                           <a href="catagory_fashoion.html"><img src="{{URL::to('/')}}/webassets/image/banner/gg.png" class="img-responsive"></a>
                       </div>
                   </div>

               </div>
           </div>
       </section>
       <!--end offer add-->

       <!--start decorator-->
       <section class="m15">
           <div class="container">
               <div class="row">
                   <div class="h-de-fa-related-product">
                       <div class="title-section">
                           <ul class="pull-right related-navigation">
                               <li><a href="#" class="nav-prev-decorator"><i class="fa fa-chevron-left"></i></a></li>
                               <li><a href="#" class="nav-next-decorator"><i class="fa fa-chevron-right"></i></a></li>
                           </ul>
                       </div>
                       <div class="h-cata-show-fashion">
                           <h3>Decorator</h3>
                       </div>
                       <div class="cata-fashion-h ">
                           <div class="">
                               <ul class="owl-decorator">
                                   <li class="" style="">
                                       <div class="content-box single-product ">
                                           <div class="h-ca-fa-body  fashion-Tourism-home">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/product-3-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="{{URL::to('/')}}/webassets/image/populer_Bands/Bata.png" class="img-responsive">
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
                                           <div class=" h-ca-fa-body fashion-Tourism-home">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/product-5-b-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="{{URL::to('/')}}/webassets/image/populer_Bands/flipkart-offer.png" class="img-responsive">
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
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/product-19-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="{{URL::to('/')}}/webassets/image/populer_Bands/foodpanda-offer.png" class="img-responsive">
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
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/product-10-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="{{URL::to('/')}}/webassets/image/populer_Bands/amazon-offer.png" class="img-responsive">
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
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/product-3-a-medium-notinclude.jpg" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="{{URL::to('/')}}/webassets/image/populer_Bands/Bata.png" class="img-responsive">
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
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!--end decorator-->

       <!--start household-->
       <section class="m15">
           <div class="container">
               <div class="row">
                   <div class="h-de-fa-related-product">
                       <div class="title-section">
                           <ul class="pull-right related-navigation">
                               <li><a href="#" class="nav-prev-household"><i class="fa fa-chevron-left"></i></a></li>
                               <li><a href="#" class="nav-next-household"><i class="fa fa-chevron-right"></i></a></li>
                           </ul>
                       </div>
                       <div class="h-cata-show-fashion">
                           <h3>Household</h3>
                       </div>
                       <div class="cata-fashion-h ">
                           <div class="">
                               <ul class="owl-household">
                                   <li class="" style="">
                                       <div class="content-box single-product ">
                                           <div class="h-ca-fa-body  fashion-Tourism-home">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/product-3-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="{{URL::to('/')}}/webassets/image/populer_Bands/Bata.png" class="img-responsive">
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
                                           <div class=" h-ca-fa-body fashion-Tourism-home">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/product-5-b-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="{{URL::to('/')}}/webassets/image/populer_Bands/flipkart-offer.png" class="img-responsive">
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
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/product-19-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="{{URL::to('/')}}/webassets/image/populer_Bands/foodpanda-offer.png" class="img-responsive">
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
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/product-10-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="{{URL::to('/')}}/webassets/image/populer_Bands/amazon-offer.png" class="img-responsive">
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
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/product-3-a-medium-notinclude.jpg" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="{{URL::to('/')}}/webassets/image/populer_Bands/Bata.png" class="img-responsive">
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
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!--end household-->

       <!--start Tourism-->
       <section class=" m15 clearfix">
           <div class="container">
               <div class="row">
                   <div class="h-de-fa-related-product">
                       <div class="">
                           <div class="title-section">
                               <ul class="pull-right related-navigation" >
                                   <li><a href="#" class="nav-prev-tourism"><i class="fa fa-chevron-left"></i></a></li>
                                   <li><a href="#" class="nav-next-tourism"><i class="fa fa-chevron-right"></i></a></li>
                               </ul>
                           </div>
                           <div class="h-cata-show-fashion">
                               <h3>Tourism</h3>
                           </div>
                           <div class="">
                               <ul class="owl-tourism">
                                   <li class="h-ca-hotel-section">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body-hotel ">
                                               <div class="col-md-5 gird-2 h-ca-product-image">
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/room-penthouse-380.jpg" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="col-md-7 gird-right">
                                                   <div class="tittle-description-ca-h">
                                                       <a href="catagory_fashoion-details.html"><h3 class="product-name">New EID collection !!!</h3></a>
                                                       <p class="product-details">Available in 3 different colors- lemon green, light blue & beige.</p>
                                                   </div>
                                                   <div class="pri-description-ca-h mobile-pri-description-ca-h">
                                                       <h4 class="price-catagory">200 BDT</h4>
                                                       <a class=" " href="catagory_company_hotel_profile_details.html"><button type="submit" class="btn btn-default hotel-rel-cata-h-btn add-to-card">Booking</button></a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </li>
                                   <!--product-1-->
                                   <li class="h-ca-hotel-section">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body-hotel ">
                                               <div class="col-md-5 gird-2 h-ca-product-image">
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/room-penthouse-380.jpg" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="col-md-7 gird-right">
                                                   <div class="tittle-description-ca-h">
                                                       <a href="catagory_fashoion-details.html"><h3 class="product-name">New EID collection !!!</h3></a>
                                                       <p class="product-details">Available in 3 different colors- lemon green, light blue & beige.</p>
                                                   </div>
                                                   <div class="pri-description-ca-h mobile-pri-description-ca-h">
                                                       <h4 class="price-catagory">200 BDT</h4>
                                                       <a class=" " href="catagory_company_hotel_profile_details.html"><button type="submit" class="btn btn-default hotel-rel-cata-h-btn add-to-card">Booking</button></a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </li>
                                   <!--product-1-->
                                   <li class="h-ca-hotel-section">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body-hotel ">
                                               <div class="col-md-5 gird-2 h-ca-product-image">
                                                   <a href="catagory_fashoion-details.html"><img src="{{URL::to('/')}}/webassets/image/details/room-penthouse-380.jpg" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="col-md-7 gird-right">
                                                   <div class="tittle-description-ca-h">
                                                       <a href="catagory_fashoion-details.html"><h3 class="product-name">New EID collection !!!</h3></a>
                                                       <p class="product-details">Available in 3 different colors- lemon green, light blue & beige.</p>
                                                   </div>
                                                   <div class="pri-description-ca-h mobile-pri-description-ca-h">
                                                       <h4 class="price-catagory">200 BDT</h4>
                                                       <a class=" " href="catagory_company_hotel_profile_details.html"><button type="submit" class="btn btn-default hotel-rel-cata-h-btn add-to-card">Booking</button></a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </li>
                               </ul>
                               <!--product-1-->
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
@endsection
