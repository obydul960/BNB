<?php $__env->startSection('content'); ?>

    <!--dynamic table-->
    <link href="<?php echo e(URL::to('/')); ?>/assets/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <!-- Data search auto suggest -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Serch product item.
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                        <form  class="form-horizontal" role="form" action="<?php echo e(url('productSerch')); ?>" method="post">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <div class="form-group">
                                <div class="col-md-2 col-xs-2">
                                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                        <input type="text" readonly="" size="16" name="submitDate" class="form-control">
                                              <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
                                    </div>
                                </div>
                                <div class="col-lg-2" style="margin-left: 20px">
                                    <input type="text" name="area" class="typeahead form-control"  id="" placeholder="<?php echo  $areaName=$_POST['area'];?>">

                                </div>
                                <div class="col-lg-2">
                                    <input type="number" name="price" class="form-control" id="" placeholder="Price">
                                </div> 
                                <div class="col-lg-2">
                                   <button type="submit" name="dataSeacrhFrom" class="btn btn-success">Submit</button>
                                </div>                                                               
                            </div>

                        </form>
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Code</th>
                        <th>Date</th>
                        <th>Area</th>
                        <th>Phone</th>
                        <th>Price</th>
                        <th>Status</th>                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($serchData as $value): ?>
                    <tr>
                        <td><?php echo e($value->product_name); ?></td>
                        <td><?php echo e($value->product_code_no); ?></td>
                        <td><?php echo e($value->date); ?></td>                
                        <td><?php echo e($value->address); ?></td>
                        <td><?php echo e($value->phone); ?></td>
                        <td><?php echo e($value->price); ?></td>
                        <td>
                            <?php echo Form::open(['url'=>['productStatus',$value->id],'class'=>'form-horizontal']); ?>

                            <select name="productSataus" class="form-control m-bot15" id="selectText" onchange='this.form.submit()' >
                                <option selected>
                                    <?php if($value->status == 0): ?>
                                        Pending
                                    <?php elseif($value->status == 1): ?>
                                        Deliver
                                    <?php elseif($value->status == 2): ?>
                                        Done
                                    <?php endif; ?>
                                </option>
                                <option value="0">Pending</option>
                                <option value="1">Deliver</option>
                                <option value="2">Done</option>
                            </select>
                            <?php echo Form::close(); ?>

                        </td>                       
                    </tr>
                    <?php endforeach; ?>
                    </tbody>

                    </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>


<!--dynamic table initialization -->
<script src="<?php echo e(URL::to('/')); ?>/assets/js/dynamic_table_init.js"></script>
<!-- Date pickure -->
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets/js/select2/select2.js"></script>
    <script type="text/javascript">
        var path = "<?php echo e(route('areaSearchAutocomplete')); ?>";
        $('input.typeahead').typeahead({
            source:  function (query, process) {
                return $.get(path, { query: query }, function (data) {
                    return process(data);
                });
            }
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backentMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>