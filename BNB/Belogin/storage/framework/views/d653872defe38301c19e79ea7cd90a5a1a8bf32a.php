<!--Core js-->
<script src="<?php echo e(URL::to('/')); ?>/assets/js/jquery-1.8.3.min.js"></script>

<!--Core js-->
<script src="<?php echo e(URL::to('/')); ?>/assets/js/jquery.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="<?php echo e(URL::to('/')); ?>/assets/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="<?php echo e(URL::to('/')); ?>/assets/js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="<?php echo e(URL::to('/')); ?>/assets/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/flot-chart/jquery.flot.pie.resize.js"></script>
<!--JQuery validation-->
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/jquery.validate.min.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/validation-init.js"></script>

<!--common script init for all pages-->
<script src="<?php echo e(URL::to('/')); ?>/assets/js/scripts.js"></script>
<!--- CK editor ---->
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/ckeditor/ckeditor.js"></script>
<!--- ADvance Form --->
<script src="<?php echo e(URL::to('/')); ?>/assets/js/advanced-form.js"></script>
<!----- Tuest Flash message show ------>
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/toastr/toastr.min.js"></script>
<!----- File Uploaded ------>
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<!--- Data table ------>
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/data-tables/DT_bootstrap.js"></script>

<!-- Edit Data table script for this page only-->
<script src="<?php echo e(URL::to('/')); ?>/assets/js/table-editable.js"></script>
<!-- END JAVASCRIPTS -->
<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>

<!--- Flash message ---->
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
<!---- Flsash message end ---- >






