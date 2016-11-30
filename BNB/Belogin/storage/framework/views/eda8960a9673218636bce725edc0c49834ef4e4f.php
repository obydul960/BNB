<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-fileupload/bootstrap-fileupload.css" />

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    add Rome
                    <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                </header>
                <div class="panel-body">
                    <div class="form">
                        <?php echo Form::open(['url'=>['packageUpdate',$packageEdit->id],'class'=>' form-horizontal','method'=>'post','enctype' => 'multipart/form-data','files'=>true]); ?>

                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Title</label>
                            <div class="col-lg-6">
                                <input class="form-control" id="title" name="title" type="text" value="<?php echo e($packageEdit->title); ?>" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Price </label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="price" name="price" type="number" value="<?php echo e($packageEdit->price); ?>" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Commission</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="commission" name="commission" type="number" value="<?php echo e($packageEdit->commission); ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="firstname" class="control-label col-lg-3">Start Date</label>
                            <div class="col-lg-3">
                                <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                    <input type="text" readonly="" size="16" name="startDate" class="form-control" value="<?php echo e($packageEdit->start_date); ?>">
                                    <span class="input-group-btn add-on">
                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="firstname" class="control-label col-lg-3">End Date</label>
                            <div class="col-lg-3">
                                <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                    <input type="text" readonly="" size="16" name="EndDate" class="form-control" value="<?php echo e($packageEdit->end_date); ?>">
                                    <span class="input-group-btn add-on">
                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Hotel Image one</label>
                            <div class="col-md-4">
                                <span>Image Upload One</span>
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="/touristImage/<?php echo e($packageEdit->image_one); ?>" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageOne" name="imageOne" />
                                                   </span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <span>Image Upload Two</span>
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="/touristImage/<?php echo e($packageEdit->image_two); ?>" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageTwo" name="imageTwo" />
                                                   </span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-4">
                                <span>Image Upload Three</span>
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="/touristImage/<?php echo e($packageEdit->image_three); ?>" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageThree" name="imageThree" />
                                                   </span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <span>Image Upload Foure</span>
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="/touristImage/<?php echo e($packageEdit->image_four); ?>" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageFour" name="imageFour" />
                                                   </span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-3 col-sm-3">Discription</label>
                            <div class="col-lg-8 col-sm-9">
                                <textarea class="form-control ckeditor" id="discrioption" name="discrioption" rows="6"><?php echo e($packageEdit->discription); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3 col-sm-3">Facilities</label>
                            <div class="col-lg-8 col-sm-9">
                                <textarea class="form-control ckeditor" id="facilities" name="facilities" rows="6"><?php echo e($packageEdit->facilities); ?></textarea>
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
    <!--Core js-->
    <script src="<?php echo e(URL::to('/')); ?>/assets/js/jquery.js"></script>
    <script src="<?php echo e(URL::to('/')); ?>/assets/bs3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo e(URL::to('/')); ?>/assets/js/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backentMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>