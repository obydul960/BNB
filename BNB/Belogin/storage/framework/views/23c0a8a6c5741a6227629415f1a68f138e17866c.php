<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includeweb.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                                       <a href="<?php echo e(URL::to('/')); ?>/companyProfile/<?php echo e($popularBrandsOne->user_id); ?>"  id="bigimage"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/<?php echo e($popularBrandsOne->company_logo); ?>" class="img-responsive lazy-image"></a>

                                   </li>
                             
                                   <li  class="demo-card-wide ">
                                       <a href="<?php echo e(URL::to('/')); ?>/companyProfile/<?php echo e($popularBrandsTwo->user_id); ?>" id="bigimage"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/<?php echo e($popularBrandsTwo->company_logo); ?>" class="img-responsive lazy-image"></a>
                                   </li>
                                                                 
                                   <li  class="demo-card-wide ">
                                       <a href="<?php echo e(URL::to('/')); ?>/companyProfile/<?php echo e($popularBrandsThree->user_id); ?>" id="bigimage"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/<?php echo e($popularBrandsThree->company_logo); ?>" class="img-responsive lazy-image"></a>
                                   </li>
                                                              
                                   <li  class="demo-card-wide " >
                                       <a href="<?php echo e(URL::to('/')); ?>/companyProfile/<?php echo e($popularBrandsFour->user_id); ?>" id="bigimage"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/<?php echo e($popularBrandsFour->company_logo); ?>" class="img-responsive lazy-image"> </a>
                                   </li>
                                                               
                                   <li  class="demo-card-wide  " >
                                       <a href="<?php echo e(URL::to('/')); ?>/companyProfile/<?php echo e($popularBrandsFive->user_id); ?>" id="bigimage"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/<?php echo e($popularBrandsFive->company_logo); ?>" class="img-responsive lazy-image"></a>
                                   </li>
                                                               
                                   <li  class="demo-card-wide store-pop-right">
                                       <a href="<?php echo e(URL::to('/')); ?>/companyProfile/<?php echo e($popularBrandsSix->user_id); ?>" id="bigimage"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/<?php echo e($popularBrandsSix->company_logo); ?>" class="img-responsive lazy-image"></a>
                                   </li>
                                                                 
                                   <li  class="demo-card-wide ">
                                       <a href="<?php echo e(URL::to('/')); ?>/companyProfile/<?php echo e($popularBrandsSeven->user_id); ?>" id="bigimage"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/<?php echo e($popularBrandsSeven->company_logo); ?>"></a>
                                   </li>
                                                                
                                   <li  class="demo-card-wide " >
                                       <a href="<?php echo e(URL::to('/')); ?>/companyProfile/<?php echo e($popularBrandsEight->user_id); ?>" id="bigimage"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/<?php echo e($popularBrandsEight->company_logo); ?>" class="img-responsive lazy-image"></a>
                                   </li>
                                                                
                                   <li  class="demo-card-wide " >
                                       <a href="<?php echo e(URL::to('/')); ?>/companyProfile/<?php echo e($popularBrandsNine->user_id); ?>" id="bigimage"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/<?php echo e($popularBrandsNine->company_logo); ?>" class="img-responsive lazy-image"></a>
                                   </li>
                                                                
                                   <li  class="demo-card-wide  h-po-band-logo">
                                       <a href="<?php echo e(URL::to('/')); ?>/companyProfile/<?php echo e($popularBrandsTen->user_id); ?>" id="bigimage"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/<?php echo e($popularBrandsTen->company_logo); ?>" class="img-responsive lazy-image"></a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                       <div class="col-md-3 col-sm-4 col-xs-12 gird-right">
                           <div class="h-add">
                               <a href="<?php echo e(URL::to('/')); ?>/companyProfile/<?php echo e($popularBrandsTwo->user_id); ?>"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/<?php echo e($popularBrandsOne->company_logo); ?>" class="img-responsive lazy-image"></a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>

      <!--  <section class=" clearfix" style=" margin-top: 15px;">
           <div class="container">
               <div class="row">
                   <ul class="cata-banner-ho">
                       <li class="banner-cata-sm">
                           <div class="populer-cata-section">
                               <div class="populer-cata">
                                   <a href="catagory_fashoion.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/banner/fashion.jpg" alt="banner"  class="img-responsive"></a>
                               </div>
                           </div>
                       </li>
                       <li class="banner-cata-big ">
                           <div class="populer-cata-section">
                               <div class="populer-cata">
                                   <a href="catagory_fashoion.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/banner/fashion2.jpg" alt="banner"  class="img-responsive"></a>
                               </div>
                           </div>
                       </li>
                       <li class="banner-cata-sm">
                           <div class="populer-cata-section">
                               <div class="populer-cata">
                                   <a href="catagory_fashoion.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/banner/HOTEL.jpg" alt="banner"  class="img-responsive"></a>
                               </div>
                           </div>
                       </li>
                       <li class=" banner-cata-big ">
                           <div class="populer-cata-section">
                               <div class="populer-cata">
                                   <a href="catagory_fashoion.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/banner/fashion2.jpg" alt="banner"  class="img-responsive"></a>
                               </div>
                           </div>
                       </li>
                       <li class="banner-cata-sm">
                           <div class="populer-cata-section">
                               <div class="populer-cata">
                                   <a href="catagory_fashoion.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/banner/HOTEL.jpg" alt="banner"  class="img-responsive"></a>
                               </div>
                           </div>
                       </li>
                       <li class="banner-cata-sm">
                           <div class="populer-cata-section">
                               <div class="populer-cata">
                                   <a href="catagory_fashoion.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/banner/fashion.jpg" alt="banner"  class="img-responsive"></a>
                               </div>
                           </div>
                       </li>
                   </ul>
               </div>
           </div>
       </section> -->

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
                   <?php if($logo=App\Model\MainManuModel::where('status','=',1)->where('id',2)->first()): ?>
                      <h3><?php echo e($logo->manu_name); ?></h3>
                   <?php endif; ?>
                       </div>
                       <div class="cata-fashion-h ">
                           <div class="">
                               <ul class="ajaxLoadUrl owl-fashion">
                                <?php foreach($fashion as $product): ?> 
                                   <li class="" style="">
                                       <div class="content-box single-product ">
                                           <div class="h-ca-fa-body  fashion-Tourism-home">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="<?php echo e(URL::to('/')); ?>/details/<?php echo e($product->product_id); ?>"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/category_image/<?php echo e($product->home_Cat_image); ?>" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                               <?php if($logo=App\Model\MarchentRegModel::where('user_id','=',$product->marchent_id)->first()): ?>
                                               <?php if($logo->company_logo!=null): ?>
                                              
                                      <img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/<?php echo e($logo->company_logo); ?>" class="img-responsive" alt="<?php echo e($logo->company_name); ?>">
                                               <?php else: ?>
                                               <img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/asfalt-light.png" class="img-responsive" alt="<?php echo e($logo->company_name); ?>">
                                       <span style="margin-left: -100px; font-style: initial;font-color:black;font-weight: bold;"><?php echo e($logo->company_name); ?></span>
                                               <?php endif; ?>
                                               <?php endif; ?>    
                                               </div>
                                               <div class="tittle-description-ca-h text-center">
                                                   <a href="catagory_fashoion-details.html"><h3 class="product-name "><?php echo e($product->product_name); ?></h3></a>
                                                   <h4 class="price-catagory"><?php echo e($product->selling_price); ?> <span>৳</span></h4>
                                               </div>
                                               <div class="pri-description-ca-h">
                                                   <a class="btn-floating btn-large waves-effect waves-light cata-h-btn add-to-card yellow-co"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                               </div>
                                           </div>
                                       </div>
                                   </li>
                                <?php endforeach; ?>   
                                   <!-- <li class="">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body fashion-Tourism-home">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/product-5-b-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="<?php echo e(URL::to('/')); ?>/webassets/image/populer_Bands/flipkart-offer.png" class="img-responsive">
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
                                   <!-- <li class="">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body fashion-Tourism-home ">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/product-19-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="<?php echo e(URL::to('/')); ?>/webassets/image/populer_Bands/foodpanda-offer.png" class="img-responsive">
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
                                  <!--  <li class="">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body fashion-Tourism-home ">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/product-10-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="<?php echo e(URL::to('/')); ?>/webassets/image/populer_Bands/amazon-offer.png" class="img-responsive">
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
                                   <!-- <li class="">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body  fashion-Tourism-home">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/product-3-a-medium-notinclude.jpg" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="<?php echo e(URL::to('/')); ?>/webassets/image/populer_Bands/Bata.png" class="img-responsive">
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

       <!--end fashion-->

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
                        <?php if($logo=App\Model\MainManuModel::where('status','=',1)->where('id',6)->first()): ?>
                        <h3><?php echo e($logo->manu_name); ?></h3>
                        <?php endif; ?>
                       </div>
                       <div class="cata-fashion-h ">
                           <div class="">
                               <ul class="owl-household">
                               <?php foreach($household as $house): ?>
                                   <li class="" style="">
                                       <div class="content-box single-product ">
                                           <div class="h-ca-fa-body  fashion-Tourism-home">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="<?php echo e(URL::to('/')); ?>/details/<?php echo e($house->product_id); ?>"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/category_image/<?php echo e($house->home_Cat_image); ?>" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                               <?php if($logo=App\Model\MarchentRegModel::where('user_id','=',$product->marchent_id)->first()): ?>
                                                   <img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/<?php echo e($logo->company_logo); ?>" class="img-responsive">
                                                <?php endif; ?>

                                               </div>
                                               <div class="tittle-description-ca-h text-center">
                                                   <a href="catagory_fashoion-details.html"><h3 class="product-name "><?php echo e($house->product_name); ?></h3></a>
                                                   <h4 class="price-catagory"><?php echo e($house->selling_price); ?> <span>৳</span></h4>
                                               </div>
                                               <div class="pri-description-ca-h">
                                                   <a class="btn-floating btn-large waves-effect waves-light cata-h-btn add-to-card yellow-co"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                               </div>
                                           </div>
                                       </div>
                                   </li>
                              <?php endforeach; ?>     

                                   <!-- <li class="">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body fashion-Tourism-home">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/product-5-b-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="<?php echo e(URL::to('/')); ?>/webassets/image/populer_Bands/flipkart-offer.png" class="img-responsive">
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
                                   <!-- <li class="">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body fashion-Tourism-home ">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/product-19-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="<?php echo e(URL::to('/')); ?>/webassets/image/populer_Bands/foodpanda-offer.png" class="img-responsive">
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
                                   <!-- <li class="">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body fashion-Tourism-home ">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/product-10-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="<?php echo e(URL::to('/')); ?>/webassets/image/populer_Bands/amazon-offer.png" class="img-responsive">
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
                                   <!-- <li class="">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body  fashion-Tourism-home">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/product-3-a-medium-notinclude.jpg" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="<?php echo e(URL::to('/')); ?>/webassets/image/populer_Bands/Bata.png" class="img-responsive">
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
       <!--end household-->       

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
                       <?php if($logo=App\Model\MainManuModel::where('status','=',1)->where('id',5)->first()): ?>
                        <h3><?php echo e($logo->manu_name); ?></h3>
                        <?php endif; ?>
                       </div>
                       <div class="cata-fashion-h ">
                           <div class="">
                               <ul class="owl-decorator">
                               <?php foreach($decorateor as $decorate): ?>
                                   <li class="" style="">
                                       <div class="content-box single-product ">
                                           <div class="h-ca-fa-body  fashion-Tourism-home">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="<?php echo e(URL::to('/')); ?>/details/<?php echo e($decorate->product_id); ?>"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/category_image/<?php echo e($decorate->home_Cat_image); ?>" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                               <?php if($logo=App\Model\MarchentRegModel::where('user_id','=',$product->marchent_id)->first()): ?>
                                                   <img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/<?php echo e($logo->company_logo); ?>" class="img-responsive">
                                                <?php endif; ?>   
                                               </div>
                                               <div class="tittle-description-ca-h text-center">
                                                   <a href="catagory_fashoion-details.html"><h3 class="product-name "><?php echo e($house->product_name); ?></h3></a>
                                                   <h4 class="price-catagory"><?php echo e($house->selling_price); ?> <span>৳</span></h4>
                                               </div>
                                               <div class="pri-description-ca-h">
                                                   <a class="btn-floating btn-large waves-effect waves-light cata-h-btn add-to-card yellow-co"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                               </div>
                                           </div>
                                       </div>
                                   </li>
                              <?php endforeach; ?>     
                                   <!-- <li class="">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body fashion-Tourism-home">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/product-5-b-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="<?php echo e(URL::to('/')); ?>/webassets/image/populer_Bands/flipkart-offer.png" class="img-responsive">
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
                                   <!-- <li class="">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body fashion-Tourism-home ">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/product-19-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="<?php echo e(URL::to('/')); ?>/webassets/image/populer_Bands/foodpanda-offer.png" class="img-responsive">
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
                                  <!--  <li class="">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body fashion-Tourism-home ">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/product-10-a-medium-notinclude.png" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="<?php echo e(URL::to('/')); ?>/webassets/image/populer_Bands/amazon-offer.png" class="img-responsive">
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
                                   <!-- <li class="">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body  fashion-Tourism-home">
                                               <div class=" h-ca-product-image text-center">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/product-3-a-medium-notinclude.jpg" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="brand-logo-cata text-center">
                                                   <img src="<?php echo e(URL::to('/')); ?>/webassets/image/populer_Bands/Bata.png" class="img-responsive">
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
       <!--end decorator-->       


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
                       <?php if($logo=App\Model\MainManuModel::where('status','=',1)->where('id',3)->first()): ?>
                        <h3><?php echo e($logo->manu_name); ?></h3>
                        <?php endif; ?>
                           </div>
                           <div class="">
                               <ul class="owl-hotel">
                               <?php foreach($hotel as $hotelValue): ?>
                                   <li class="h-ca-hotel-section">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body-hotel ">
                                               <div class="col-md-5 gird-2 h-ca-product-image">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/hotelImage/category/<?php echo e($hotelValue->image_one); ?>" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="col-md-7 gird-right">
                                                   <div class="tittle-description-ca-h">
                                                       <a href="catagory_fashoion-details.html"><h3 class="product-name"><?php echo e($hotelValue->title); ?></h3></a>
                                                       <p class="product-details"><?php echo e($hotelValue->state_address); ?></p>
                                                   </div>
                                                   <div class="pri-description-ca-h mobile-pri-description-ca-h">
                                                       <h4 class="price-catagory"><?php echo e($hotelValue->price); ?> BDT</h4>
                                                       <a class=" " href="catagory_company_hotel_profile_details.html"><button type="submit" class="btn btn-default hotel-rel-cata-h-btn add-to-card">Booking</button></a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </li>
                              <?php endforeach; ?>
                                   <!--product-1-->
                                   <!-- <li class="h-ca-hotel-section">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body-hotel ">
                                               <div class="col-md-5 gird-2 h-ca-product-image">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/room-penthouse-380.jpg" class="img-responsive lazy-image" alt=""></a>
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
                                   </li> -->
                                   <!--product-1-->
                                   <!-- <li class="h-ca-hotel-section">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body-hotel ">
                                               <div class="col-md-5 gird-2 h-ca-product-image">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/room-penthouse-380.jpg" class="img-responsive lazy-image" alt=""></a>
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
                                   </li> -->
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
                           <a href="catagory_fashoion.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/banner/gg.png" class="img-responsive"></a>
                       </div>
                   </div>

               </div>
           </div>
       </section>
       <!--end offer add-->





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
                        <?php if($logo=App\Model\MainManuModel::where('status','=',1)->where('id',4)->first()): ?>
                        <h3><?php echo e($logo->manu_name); ?></h3>
                        <?php endif; ?>
                           </div>
                           <div class="">
                               <ul class="owl-tourism">
                               <?php foreach($tourist as $turistValue): ?>
                                   <li class="h-ca-hotel-section">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body-hotel ">
                                               <div class="col-md-5 gird-2 h-ca-product-image">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/touristImage/category/<?php echo e($turistValue->category_image); ?>" class="img-responsive lazy-image" alt=""></a>
                                               </div>
                                               <div class="col-md-7 gird-right">
                                                   <div class="tittle-description-ca-h">
                                                       <a href="catagory_fashoion-details.html"><h3 class="product-name"><?php echo e($turistValue->tourist_name); ?></h3></a>
                                                       <p class="product-details"><?php echo e($turistValue->title); ?></p>
                                                   </div>
                                                   <div class="pri-description-ca-h mobile-pri-description-ca-h">
                                                       <h4 class="price-catagory"><?php echo e($turistValue->price); ?> BDT</h4>
                                                       <a class=" " href="catagory_company_hotel_profile_details.html"><button type="submit" class="btn btn-default hotel-rel-cata-h-btn add-to-card">Booking</button></a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </li>
                              <?php endforeach; ?>     
                                   <!--product-1-->
                                   <!-- <li class="h-ca-hotel-section">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body-hotel ">
                                               <div class="col-md-5 gird-2 h-ca-product-image">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/room-penthouse-380.jpg" class="img-responsive lazy-image" alt=""></a>
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
                                   </li> -->
                                   <!--product-1-->
                                   <!-- <li class="h-ca-hotel-section">
                                       <div class="content-box single-product ">
                                           <div class=" h-ca-fa-body-hotel ">
                                               <div class="col-md-5 gird-2 h-ca-product-image">
                                                   <a href="catagory_fashoion-details.html"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/details/room-penthouse-380.jpg" class="img-responsive lazy-image" alt=""></a>
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
                                   </li> -->
                               </ul>
                               <!--product-1-->
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.webmasterlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>