<?php $__env->startSection('content'); ?>
        <section class=" clearfix cart-mobile">    
            <div class="container " style="">
                <div class="row">
                    <div class="search-bg clearfix">
                        <form  method="POST" action="" class="" id="customer-form">

                            <div class="input-field col-md-3">
                                <select class="select">
                                    <option value="0" disabled selected>Category</option>
                                    <option value="1">Man</option>
                                    <option value="2">Woman</option>
                                </select>

                            </div>
                            <div class="input-field col-md-3">
                                <select class="select">
                                    <option value="0" disabled selected>Subcategory</option>
                                    <option value="1">Shirt</option>
                                    <option value="2">T-shirt</option>
                                    <option value="3">Pants</option>
                                    <option value="3">Panjabi</option>
                                </select>

                            </div>
                            <div class="input-field col-md-3">
                                <select class="select">
                                    <option value="0" disabled selected>Price</option>
                                    <option value="1">1000</option>
                                    <option value="2">1500</option>
                                    <option value="3">2000</option>
                                </select>

                            </div>
                            <div class="ca-fa-btn mb col-md-3">
                                <button class="waves-effect waves-light btn yellow-co" type="submit">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>




        <section class="clearfix m-top">
            <div class="container">
                <div class="row">
                    <ul class="ajaxLoadUrl">
                    <?php foreach($fashionList as $value): ?>
                        <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="<?php echo e(URL::to('/')); ?>/details/<?php echo e($value->product_id); ?>"><img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/category_image/<?php echo e($value->home_Cat_image); ?>" class="img-responsive lazy-image" alt=""></a>
                                    </div>
                                    <div class="brand-logo-cata text-center">
                                   <?php if($logo=App\Model\MarchentRegModel::where('user_id','=',$value->marchent_id)->first()): ?>
                                               <?php if($logo->company_logo!=null): ?>
                                              
                                      <img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/<?php echo e($logo->company_logo); ?>" class="img-responsive" alt="<?php echo e($logo->company_name); ?>">
                                               <?php else: ?>
                                               <img src="<?php echo e(URL::to('/')); ?>/Belogin/public/product_image/logo/asfalt-light.png" class="img-responsive" alt="<?php echo e($logo->company_name); ?>">
                                       <span style="margin-left: -100px; font-style: initial;font-color:black;font-weight: bold;"><?php echo e($logo->company_name); ?></span>
                                               <?php endif; ?>
                                               <?php endif; ?>    
                                    </div>
                                    <div class="tittle-description-ca-h text-center">
                                        <a href="catagory_fashoion-details.html"><h3 class="product-name "><?php echo e($value->product_name); ?></h3></a>
                                        <h4 class="price-catagory"><?php echo e($value->selling_price); ?> <span>৳</span></h4>
                                    </div>

                                    <div class="pri-description-ca-h">
                                        <a class="btn-floating btn-large waves-effect waves-light cata-h-btn add-to-card yellow-co"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                    </div>
                                </div> 
                            </div>
                        </li>

                    <?php endforeach; ?>        
                        <!-- <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="catagory_fashoion-details.html"><img src="Assets/image/details/31VewM4zAqL._AC_UL260_SR200,260_.jpg" class="img-responsive lazy-image" alt=""></a>
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
                        </li>
                        <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="catagory_fashoion-details.html"><img src="Assets/image/details/31hKrIpZPWL._AC_UL260_SR200,260_.jpg" class="img-responsive lazy-image" alt=""></a>
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
                        </li>
                        <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="catagory_fashoion-details.html"><img src="Assets/image/details/31hKrIpZPWL._AC_UL260_SR200,260_.jpg" class="img-responsive lazy-image" alt=""></a>
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
                        </li>
                        <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="catagory_fashoion-details.html"><img src="Assets/image/details/31hKrIpZPWL._AC_UL260_SR200,260_.jpg" class="img-responsive lazy-image" alt=""></a>
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
                        </li>
                        <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="catagory_fashoion-details.html"><img src="Assets/image/details/31hKrIpZPWL._AC_UL260_SR200,260_.jpg" class="img-responsive lazy-image" alt=""></a>
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
                        </li>
                        <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="catagory_fashoion-details.html"><img src="Assets/image/details/31hKrIpZPWL._AC_UL260_SR200,260_.jpg" class="img-responsive lazy-image" alt=""></a>
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
                        </li>
                        <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="catagory_fashoion-details.html"><img src="Assets/image/details/31hKrIpZPWL._AC_UL260_SR200,260_.jpg" class="img-responsive lazy-image" alt=""></a>
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
                        </li>
                        <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="catagory_fashoion-details.html"><img src="Assets/image/details/31hKrIpZPWL._AC_UL260_SR200,260_.jpg" class="img-responsive lazy-image" alt=""></a>
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
                        </li>
                        <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="catagory_fashoion-details.html"><img src="Assets/image/details/31hKrIpZPWL._AC_UL260_SR200,260_.jpg" class="img-responsive lazy-image" alt=""></a>
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
                        </li>
                        <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="catagory_fashoion-details.html"><img src="Assets/image/details/31hKrIpZPWL._AC_UL260_SR200,260_.jpg" class="img-responsive lazy-image" alt=""></a>
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
                        </li>
                        <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="catagory_fashoion-details.html"><img src="Assets/image/details/31hKrIpZPWL._AC_UL260_SR200,260_.jpg" class="img-responsive lazy-image" alt=""></a>
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
                        </li>
                        <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="catagory_fashoion-details.html"><img src="Assets/image/details/31hKrIpZPWL._AC_UL260_SR200,260_.jpg" class="img-responsive lazy-image" alt=""></a>
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
                        </li>
                        <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="catagory_fashoion-details.html"><img src="Assets/image/details/31hKrIpZPWL._AC_UL260_SR200,260_.jpg" class="img-responsive lazy-image" alt=""></a>
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
                        </li>
                        <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="catagory_fashoion-details.html"><img src="Assets/image/details/31hKrIpZPWL._AC_UL260_SR200,260_.jpg" class="img-responsive lazy-image" alt=""></a>
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
                        </li>
                        <li class="cata-fashion-section-pa">
                            <div class="content-box single-product ">
                                <div class="h-ca-fa-body-pa">
                                    <div class=" h-ca-product-image text-center">
                                        <a href="catagory_fashoion-details.html"><img src="Assets/image/details/31hKrIpZPWL._AC_UL260_SR200,260_.jpg" class="img-responsive lazy-image" alt=""></a>
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

                    <!--product-1-->
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
        </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webmasterlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>