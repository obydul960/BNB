<?php $__env->startSection('content'); ?>


<?php if(Auth::check()): ?>
    <?php if(Auth::user()->user==1): ?>


        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Slider add
                        <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <?php echo Form::open(['url'=>'sliderStore','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype' => 'multipart/form-data','files'=>true]); ?>

                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-3">Company Name</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="CompanyName" name="CompanyName" type="text" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-3">Image Title</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="imageTitle" name="imageTitle" type="text" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-3">URL</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="urlLink" name="urlLink" type="text" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Slider Image Upload</label>
                                <div class="col-md-9">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="bigImage" name="sliderImage" />
                                                   </span>
                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3 col-sm-3">Details</label>
                                <div class="col-lg-8 col-sm-9">
                                    <textarea class="form-control ckeditor" id="sliderDetails" name="sliderDetails" rows="6"></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <button class="btn btn-default" type="button">Cancel</button>
                                </div>
                            </div>
                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </section>
            </div>
        </div>

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