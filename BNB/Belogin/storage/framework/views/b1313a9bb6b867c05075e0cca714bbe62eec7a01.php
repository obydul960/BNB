<section class="clearfix m-top cart-mobile">
            <div class="container ">
                <div class="col-md-12 col-sm-12 gird-2 clear-display  ">
                    <div class="col-md-9 col-sm-7 col-xs-12 gird-left " style="box-shadow: 0 2px 3px 0 rgba(177, 168, 168, 0.3),0 2px 5px 0 rgba(189, 183, 183, 0.1);">
                        <div class="demo-card-wide1" >
                            <div id="main-slider" class="slider-pro">
                                <div class="sp-slides">
                                <?php foreach($slider=App\Model\SliderModel::orderBy('id','DESC')->take(5)->get() as $sliderImage): ?>
                           
                                    <div class="sp-slide">
                                        <a href="<?php echo e($sliderImage->url_link); ?>">
                                            <img class="sp-image lazy-image"
                                                 src="<?php echo e(URL::to('/')); ?>/Belogin/public/sliderImages/<?php echo e($sliderImage->image_name); ?>"
                                                 data-src="<?php echo e(URL::to('/')); ?>/Belogin/public/sliderImages/<?php echo e($sliderImage->image_name); ?>" >
                                        </a>  
                                    </div>
                                <?php endforeach; ?>  
                                   <!--  <div class="sp-slide">
                                        <a href="catagory_fashoion.html">
                                            <img class="sp-image lazy-image"
                                                 src="<?php echo e(URL::to('/')); ?>/webassets/image/slider/3.jpg"
                                                 data-src="<?php echo e(URL::to('/')); ?>/webassets/image/slider/3.jpg" >
                                        </a>

                                    </div>
                                    <div class="sp-slide">
                                        <a href="catagory_fashoion.html">
                                            <img class="sp-image lazy-image"
                                                 src="<?php echo e(URL::to('/')); ?>/webassets/image/slider/22.jpg"
                                                 data-src="<?php echo e(URL::to('/')); ?>/webassets/image/slider/22.jpg" >
                                        </a>
                                    </div>
                                    <div class="sp-slide">
                                        <a href="catagory_fashoion.html">
                                            <img class="sp-image lazy-image"
                                                 src="<?php echo e(URL::to('/')); ?>/webassets/image/slider/2.jpg"
                                                 data-src="<?php echo e(URL::to('/')); ?>/webassets/image/slider/2.jpg" >
                                        </a>
                                    </div>
                                    <div class="sp-slide">
                                        <a href="catagory_fashoion.html">
                                            <img class="sp-image lazy-image"
                                                 src="<?php echo e(URL::to('/')); ?>/webassets/image/slider/3.png"
                                                 data-src="<?php echo e(URL::to('/')); ?>/webassets/image/slider/3.jpg" >
                                        </a>
                                    </div> -->

                                    <div class="sp-thumbnails">
                                    <?php foreach($slider as $sliderImage): ?>
                                        <div class="sp-thumbnail">
                                            <div class="sp-thumbnail-text">
                                                <div class="sp-thumbnail-title"> <?php echo e($sliderImage->image_title); ?></div>
                                                <div class="sp-thumbnail-description">
                                                <?php echo $sliderImage->slider_details; ?>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>    

                                       <!--  <div class="sp-thumbnail">

                                            <div class="sp-thumbnail-text">
                                                <div class="sp-thumbnail-title">EID Collection at @ Grameen UNIQLO EID Collection at @ Grameen UNIQLO</div>
                                                <div class="sp-thumbnail-description">ঈদে খুশিতে থাকুন, খুশিতে রাখুন সবাইকে গ্রামীণ ইউনিক্লো কালেকশনে ঈদে খুশিতে থাকুন, খুশিতে রাখুন সবাইকে গ্রামীণ ইউনিক্লো কালেকশনে..</div>
                                            </div>
                                        </div>

                                        <div class="sp-thumbnail">

                                            <div class="sp-thumbnail-text">
                                                <div class="sp-thumbnail-title">EID Collection Grameen UNIQLO</div>
                                                <div class="sp-thumbnail-description"> খুশিতে রাখুন সবাইকে গ্রামীণ ইউনিক্লো কালেকশনে..</div>
                                            </div>
                                        </div>

                                        <div class="sp-thumbnail">

                                            <div class="sp-thumbnail-text">
                                                <div class="sp-thumbnail-title">EID Collection at @ Grameen UNIQLO </div>
                                                <div class="sp-thumbnail-description">ঈদে খুশিতে থাকুন, খুশিতে রাখুন সবাইকে গ্রামীণ ইউনিক্লো কালেকশনে ঈদে খুশিতে থাকুন..</div>
                                            </div>
                                        </div>

                                        <div class="sp-thumbnail">
                                            <div class="sp-thumbnail-text">
                                                <div class="sp-thumbnail-title">EID Collection at @ Grameen UNIQLO EID Collection at @ Grameen UNIQLO</div>
                                                <div class="sp-thumbnail-description">ঈদে খুশিতে থাকুন, খুশিতে রাখুন সবাইকে গ্রামীণ ইউনিক্লো কালেকশনে ঈদে খুশিতে থাকুন, খুশিতে রাখুন সবাইকে গ্রামীণ ইউনিক্লো কালেকশনে..</div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5 col-xs-12 clearfix gird-right ">
                        <div class="best-seller ">
                            <div class="h-po-band-tittle">
                                <h3>Best Seller</h3>
                            </div>
                            <div class="h-ca-product-image">
                                <a href="#" id="bigimage"><img src="<?php echo e(URL::to('/')); ?>/webassets/image/add/Citygroup.jpg" class="img-responsive lazy-image" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
