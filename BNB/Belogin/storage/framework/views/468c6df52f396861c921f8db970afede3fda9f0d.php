<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
        <?php if(Auth::check()): ?>
            <?php if(Auth::user()->user==1 || Auth::user()->user==2): ?>
                <!--fashion and  related statistics start-->
                    <h4>Fashion merchant</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                        <?php if(Auth::user()->user==1): ?>
                                            <?php echo e($bnbTodayOrder); ?>

                                        <?php else: ?>
                                            <?php echo e($todayOrder); ?>

                                        <?php endif; ?>
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
                                        <?php if(Auth::user()->user==1): ?>
                                            <?php echo e($bnbTotalProduct); ?>

                                        <?php else: ?>
                                            <?php echo e($totalProduct); ?>

                                        <?php endif; ?>
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
                                        <?php if(Auth::user()->user==1): ?>
                                            <?php echo e($bnbTotalFashionProfit); ?>৳
                                        <?php else: ?>
                                            <?php echo e($totalFashionProfit); ?>৳
                                        <?php endif; ?>
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
                                         <?php if(Auth::user()->user==1): ?>
                                             <?php echo e($bnbTotalFashionCommission); ?>৳
                                         <?php else: ?>
                                            <?php echo e($totalFashionCommission); ?>৳
                                         <?php endif; ?>
                                    </span>
                                    Commission
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--mini statistics end-->
            <?php endif; ?>
            <?php if(Auth::user()->user==1 || Auth::user()->user==3): ?>
                <!--Hotel Merchant statistics start-->
                    <h4>Hotel merchant</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                         <?php if(Auth::user()->user==1): ?>
                                            <?php echo e($bnbTotalHotelRoom); ?>

                                         <?php else: ?>
                                            <?php echo e($totalHotelRoom); ?>

                                         <?php endif; ?>
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
                                        <?php if(Auth::user()->user==1): ?>
                                            <?php echo e($bnbTotalHotelProfit); ?>৳
                                        <?php else: ?>
                                            <?php echo e($totalHotelProfit); ?>৳
                                        <?php endif; ?>
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
                                        <?php if(Auth::user()->user==1): ?>
                                            <?php echo e($bnbTotalHotelCommission); ?>৳
                                        <?php else: ?>
                                            <?php echo e($totalHotelCommission); ?>৳
                                        <?php endif; ?>
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
            <?php endif; ?>
            <?php if(Auth::user()->user==1 || Auth::user()->user==4): ?>
                <!--Turist Mearchant statistics start-->
                    <h4>Turist merchant</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                        <?php if(Auth::user()->user==1): ?>
                                            <?php echo e($bnbTotalpackageNumber); ?>

                                        <?php else: ?>
                                            <?php echo e($totalpackageNumber); ?>

                                        <?php endif; ?>
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
                                        <?php if(Auth::user()->user==1): ?>
                                            <?php echo e($bnbTotalTourProfit); ?>৳
                                        <?php else: ?>
                                            <?php echo e($totalTourProfit); ?>৳
                                        <?php endif; ?>
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
                                        <?php if(Auth::user()->user==1): ?>
                                            <?php echo e($bnbTotalTourCommission); ?>৳
                                        <?php else: ?>
                                            <?php echo e($totalTourCommission); ?>৳
                                        <?php endif; ?>
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
                <?php endif; ?>
                <?php if(Auth::user()->user==1): ?>
                    <h4>BNB</h4>
                    <!--BNB statistics start-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
                                <div class="mini-stat-info">
                                    <span><?php echo e($totalMerchantFashion); ?></span>
                                    Total number of merchant fashion
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
                                <div class="mini-stat-info">
                                    <span><?php echo e($totalMerchantHotel); ?></span>
                                    Total number of merchant hotel
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
                                <div class="mini-stat-info">
                                    <span><?php echo e($totalMerchantTour); ?></span>
                                    Total number of merchant tour
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                        <?php if(Auth::user()->user==1): ?>
                                            <?php echo e($bnbTotalProduct); ?>

                                        <?php else: ?>
                                            <?php echo e($totalProduct); ?>

                                        <?php endif; ?>
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
                                         <?php if(Auth::user()->user==1): ?>
                                            <?php echo e($bnbTodayOrder); ?>

                                        <?php else: ?>
                                            <?php echo e($todayOrder); ?>

                                        <?php endif; ?>
                                    </span>
                                    Total number of service uploaded
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
                                <div class="mini-stat-info">
                                    <span><?php echo e($totalOrder); ?></span>
                                    Total order
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
                                <div class="mini-stat-info">
                                    <span><?php echo e($totalDelivered); ?></span>
                                    Total delivered
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
                                <div class="mini-stat-info">
                                    <span><?php echo e($totalPending); ?></span>
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
                                    <span><?php echo e($totalConfirmed); ?></span>
                                    Total confirmed
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
                                <div class="mini-stat-info">
                                    <span><?php echo e($totalCancelled); ?></span>
                                    Total cancelled
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
                                <div class="mini-stat-info">
                                    <span><?php echo e($totalRefund); ?></span>
                                    Total refund
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
                                <div class="mini-stat-info">
                                    <span>
                                         <?php if(Auth::user()->user==1): ?>
                                            <?php echo e($bnbTotalFashionCommission); ?>৳
                                        <?php else: ?>
                                            <?php echo e($totalFashionCommission); ?>৳
                                        <?php endif; ?>
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
                                         <?php if(Auth::user()->user==1): ?>
                                            <?php echo e($bnbTotalHotelCommission); ?>৳
                                        <?php else: ?>
                                            <?php echo e($totalHotelCommission); ?>৳
                                        <?php endif; ?>
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
                                           <?php if(Auth::user()->user==1): ?>
                                            <?php echo e($bnbTotalTourCommission); ?>৳
                                        <?php else: ?>
                                            <?php echo e($totalTourCommission); ?>৳
                                        <?php endif; ?>
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
                                    <span><?php echo e($totalCommission); ?>৳</span>
                                    Total
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--mini statistics end-->

            <?php endif; ?>


            <?php if(Auth::user()->user==1 || Auth::user()->user==2): ?>
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
                                            <?php if(Auth::user()->user==1): ?>
                                                <?php foreach($bnbproductOrderList as $bnbproductList): ?>
                                                    <tr>
                                                        <td><?php echo e($bnbproductList->product_name); ?></td>
                                                        <td><?php echo e($bnbproductList->product_code_no); ?></td>
                                                        <td><?php echo e($bnbproductList->phone); ?></td>
                                                        <td><?php echo e($bnbproductList->quentity); ?></td>
                                                        <td><?php echo e($bnbproductList->price); ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <?php foreach($productOrderList as $productList): ?>
                                                    <tr>
                                                        <td><?php echo e($productList->product_name); ?></td>
                                                        <td><?php echo e($productList->product_code_no); ?></td>
                                                        <td><?php echo e($productList->phone); ?></td>
                                                        <td><?php echo e($productList->quentity); ?></td>
                                                        <td><?php echo e($productList->price); ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
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
            <?php endif; ?>
            <?php if(Auth::user()->user==1 || Auth::user()->user==3): ?>
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
                                            <?php if(Auth::user()->user==1): ?>
                                                <?php foreach($bnbRoomOrderList as $bnbRoomList): ?>
                                                    <tr>
                                                        <td><?php echo e($bnbRoomList->client_name); ?></td>
                                                        <td><?php echo e($bnbRoomList->hotel_name); ?></td>
                                                        <td><?php echo e($bnbRoomList->phone); ?></td>
                                                        <td><?php echo e($bnbRoomList->family_member); ?></td>
                                                        <td><?php echo e($bnbRoomList->address); ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <?php foreach($roomOrderList as $roomList): ?>
                                                    <tr>
                                                        <td><?php echo e($roomList->client_name); ?></td>
                                                        <td><?php echo e($roomList->hotel_name); ?></td>
                                                        <td><?php echo e($roomList->phone); ?></td>
                                                        <td><?php echo e($roomList->family_member); ?></td>
                                                        <td><?php echo e($roomList->address); ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
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
            <?php endif; ?>
            <?php if(Auth::user()->user==1 || Auth::user()->user==4): ?>
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
                                            <?php if(Auth::user()->user==1): ?>
                                                <?php foreach($bnbTouristOderList as $bnbTuriestList): ?>
                                                    <tr>
                                                        <td><?php echo e($bnbTuriestList->package_name); ?></td>
                                                        <td><?php echo e($bnbTuriestList->hotel_name); ?></td>
                                                        <td><?php echo e($bnbTuriestList->familly_member); ?></td>
                                                        <td><?php echo e($bnbTuriestList->phone); ?></td>
                                                        <td><?php echo e($bnbTuriestList->address); ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <?php foreach($touristOderList as $turiestList): ?>
                                                    <tr>
                                                        <td><?php echo e($turiestList->package_name); ?></td>
                                                        <td><?php echo e($turiestList->hotel_name); ?></td>
                                                        <td><?php echo e($turiestList->familly_member); ?></td>
                                                        <td><?php echo e($turiestList->phone); ?></td>
                                                        <td><?php echo e($turiestList->address); ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
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
    <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>