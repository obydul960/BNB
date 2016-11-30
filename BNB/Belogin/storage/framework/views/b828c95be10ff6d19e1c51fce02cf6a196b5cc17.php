<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="<?php echo e(URL::to('/')); ?>/assets/images/favicon.png">

    <title>Editable Table</title>

    <!--Core CSS -->
    <link href="<?php echo e(URL::to('/')); ?>/assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(URL::to('/')); ?>/assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo e(URL::to('/')); ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/js/data-tables/DT_bootstrap.css" />

    <!-- Custom styles for this template -->
    <link href="<?php echo e(URL::to('/')); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo e(URL::to('/')); ?>/assets/css/style-responsive.css" rel="stylesheet" />

</head>

<body>


<!-- page start-->

<div class="row">
<div class="col-sm-6">
<section class="panel">
<header class="panel-heading">
    Editable Table
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
</header>
<div class="panel-body">
<div class="adv-table editable-table ">
<div class="clearfix">
    <div class="btn-group">
        <button id="editable-sample_new" class="btn btn-primary">
            Add New <i class="fa fa-plus"></i>
        </button>
    </div>
    <div class="btn-group pull-right">
        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
        </button>
        <ul class="dropdown-menu pull-right">
            <li><a href="#">Print</a></li>
            <li><a href="#">Save as PDF</a></li>
            <li><a href="#">Export to Excel</a></li>
        </ul>
    </div>
</div>
<div class="space15"></div>
<table class="table table-striped table-hover table-bordered" id="editable-sample">
<thead>
<tr>
    <th>Points</th>
    <th>Status</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
</thead>
<tbody>
<tr class="">
    <td>3455</td>
    <td class="center">Lorem ipsume</td>
    <td><a class="edit" href="javascript:;">Edit</a></td>
    <td><a class="delete" href="javascript:;">Delete</a></td>
</tr>
<tr class="">
    <td>567</td>
    <td class="center">new user</td>
    <td><a class="edit" href="javascript:;">Edit</a></td>
    <td><a class="delete" href="javascript:;">Delete</a></td>
</tr>
<tr class="">
    <td>987</td>
    <td class="center">ipsume dolor</td>
    <td><a class="edit" href="javascript:;">Edit</a></td>
    <td><a class="delete" href="javascript:;">Delete</a></td>
</tr>
<tr class="">
    <td>342</td>
    <td class="center">Good Org</td>
    <td><a class="edit" href="javascript:;">Edit</a></td>
    <td><a class="delete" href="javascript:;">Delete</a></td>
</tr>


<tr class="">
    <td>622</td>
    <td class="center">author</td>
    <td><a class="edit" href="javascript:;">Edit</a></td>
    <td><a class="delete" href="javascript:;">Delete</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</section>
</div>
</div>
<!-- page end-->


<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="<?php echo e(URL::to('/')); ?>/assets/js/jquery-1.8.3.min.js"></script>
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

<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/data-tables/DT_bootstrap.js"></script>

<!--common script init for all pages-->
<script src="<?php echo e(URL::to('/')); ?>/assets/js/scripts.js"></script>

<!--script for this page only-->
<script src="<?php echo e(URL::to('/')); ?>/assets/js/table-editable.js"></script>

<!-- END JAVASCRIPTS -->
<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>

</body>
</html>
