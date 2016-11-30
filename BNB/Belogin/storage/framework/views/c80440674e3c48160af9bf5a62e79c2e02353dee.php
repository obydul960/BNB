<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('includeweb.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>

<?php echo $__env->make('includeweb.headerMenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!--main content start-->

            <!-- page start-->

           <?php echo $__env->yieldContent('content'); ?>

            <!-- page end-->

    <!--main content end-->


<!-- Placed js at the end of the document so the pages load faster -->
<?php echo $__env->make('includeweb.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>
