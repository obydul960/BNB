<!--end Tourism-->

<footer>
    <footer id="footer" class="m-top clearfix">
        <div class="container-">
            <!--                        <a href="index.html" class="footer-logo">
                                        <img class="retina" src="img/logo.png" alt="">
                                    </a>-->
            <div class="footer-menu text-center">
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="social-link circle text-center">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
            <div class="copyright-sub-title border-top text-center">
                © Copyright 2016 "notificamos". All right reserved
            </div>
        </div>
    </footer>
</footer>

<!-- Back To Top Button -->
<div id="back-top">
    <a href="#slider_part" class="scroll" data-scroll>
        <button class="btn-floating btn-large waves-effect waves-light yellow-co" title="Back to Top"><i class="fa fa-angle-up"></i></button>
    </a>
</div>
<!-- End Back To Top Button -->



<!--jquery js-->
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/webassets/js/jquery-1.10.2.min.js"></script>
<!--bootstrap js-->
<script type="text/javascript" src='<?php echo e(URL::to('/')); ?>/webassets/js/bootstrap.min.js'></script>
<!--materialize min js-->
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/webassets/js/materialize.min.js"></script>
<!--sliderpro min js-->
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/webassets/js/jquery.sliderPro.min.js"></script>
<!--slicknav js-->
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/webassets/js/jquery.slicknav.min.js"></script>
<!--owl carousel js-->
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/webassets/js/owl.carousel.js"></script>
<!--elevatezoom js-->
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/webassets/js/jquery.elevatezoom.js"></script>
<!--lazyimage js-->
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/webassets/js/jquery.lazyimage.js"></script>
<!--social share-->
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/webassets/js/addthis.js"></script>
<!--plugins js-->
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/webassets/js/plugins.js"></script>
<!--main js-->
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/webassets/js/main.js"></script>
<!-- Tuest Flash message show -->
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/webassets/js/toastr/toastr.min.js"></script>

<script type="text/javascript">
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
<!-- Flash message -->
<?php if(Session::has('success')): ?>
<script type="text/javascript">
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            // progressBar: true,
            showMethod: 'slideDown',
            timeOut: 7000
        };
        toastr.success('<?php echo e(Session::get('success')); ?>');
        //alert("hello world");

    }, 1300);
</script>

<?php elseif(Session::has('error')): ?>
<script type="text/javascript">
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            // progressBar: true,
            showMethod: 'slideDown',
            timeOut: 7000
        };
        toastr.error('<?php echo e(Session::get('error')); ?>');

    }, 1300);
</script>

<?php elseif(Session::has('warning')): ?>
<script type="text/javascript">
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            // progressBar: true,
            showMethod: 'slideDown',
            timeOut: 7000
        };
        toastr.warning('<?php echo e(Session::get('warning')); ?>');

    }, 1300);
</script>
<?php elseif(Session::has('voucher')): ?>
<script type="text/javascript">
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            // progressBar: true,
            showMethod: 'slideDown',
            timeOut: 7000
        };
        toastr.success('<a href="<?php echo e(Session::get('id')); ?>"><?php echo e(Session::get('voucher')); ?> | Print Voucher</a>');

    }, 1300);
</script>
<?php endif; ?>
<!-- Flsash message end -- >
