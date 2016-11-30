<?php $__env->startSection('content'); ?>
    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->user==1 || Auth::user()->user==3): ?>

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            add Hotel Rome
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <?php echo Form::open(['url'=>'addRomeStore','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype' => 'multipart/form-data','files'=>true]); ?>

                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Selected Hotel</label>
                                    <div class="col-lg-6">
                                        <select name="hotelName" class=" form-control" id="hotelName">
                                            <option value="">--Select Hotel--</option>
                                            <?php foreach($hotelList as $hotelName): ?>
                                           <option value="<?php echo e($hotelName->company_name); ?>"><?php echo e($hotelName->company_name); ?></option>
                                           <?php endforeach; ?> 
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Division</label>
                                    <div class="col-lg-6">
                                        <select name="division" class=" form-control" id="division">
                                            <option value="">--Select Division--</option>
                                           <?php foreach($division as $k=>$v): ?>
                                           <option value="<?php echo e($k); ?>"><?php echo e($v); ?></option>
                                           <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Districts</label>
                                    <div class="col-lg-6">
                                        <select name="district" class=" form-control" id="district">
                                           <option value="">--Select District--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Thana</label>
                                    <div class="col-lg-6">
                                    <select name="thana" class=" form-control" id="thana">
                                            <option value="">--Select Thana--</option>
                                        
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">state address </label>
                                    <div class="col-lg-6">
                                        <textarea name="stateAddress" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Title </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" id="title" name="title" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Room Number </label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="roomNumber" name="roomNumber" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Price </label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="price" name="price" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Commission</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="commission" name="commission" type="text" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3 col-sm-3">Discription</label>
                                    <div class="col-lg-8 col-sm-9">
                                        <textarea class="form-control ckeditor" id="discrioption" name="discrioption" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <button class="btn btn-default" type="reset">Cancel</button>
                                    </div>
                                </div>
                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
<!-- Division district and thena show  -->
<script type="text/javascript">
$('#division').on('change',function(e){       //state change
        console.log(e);
         var cat_id = e.target.value;

        $.get('division?cat_id=' + cat_id, function(data){

              $('#district').empty();

            $.each(data, function(edit, subcatObj){
                  
            $('#district').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');

            });
        });

    });
  $('#district').on('change',function(e){         //distric change
        console.log(e);
         var cat_id = e.target.value;

        $.get('thanaShow?cat_id=' + cat_id, function(data){
              $('#thana').empty();
            $.each(data, function(edit, subcatObj){
                $('#thana').append('<option value="'+subcatObj.name+'">'+subcatObj.name+'</option>');
            });
        });

    });

</script>            

        <?php else: ?>
            <?php
            Session::flash('error', 'please your not permitted...');
            ?>
        <?php endif; ?>
    <?php else: ?>
        <?php
        Session::flash('error', 'please try to login again...');
        ?>
    <?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backentMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>