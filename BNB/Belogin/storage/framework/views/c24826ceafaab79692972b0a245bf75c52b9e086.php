<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>

<section id="container" >
<?php echo $__env->make('include.headerMenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->

           <?php echo $__env->yieldContent('content'); ?>

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->
<?php echo $__env->make('include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>
