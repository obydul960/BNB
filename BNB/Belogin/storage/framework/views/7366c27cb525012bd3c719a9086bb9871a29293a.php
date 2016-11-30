<?php $__env->startSection('content'); ?>

    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->user==1 || Auth::user()->user==3): ?>

            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Manage Room List Table.
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <?php if(Auth::user()->user==1): ?>
                                <button id="btn_add" name="btn_add" class="btn btn-success pull-left "><a href="<?php echo e(url('addRome')); ?>"><i class="fa fa-plus-circle"></i> Add New Room</a></button>
                            <?php else: ?>
                                <button id="btn_add" name="btn_add" class="btn btn-success pull-left "><a href="<?php echo e(url('marchentRoomAdd')); ?>"><i class="fa fa-plus-circle"></i>  Add New Room</a></button>
                            <?php endif; ?>
                            <div class="adv-table">
                                <?php if(Auth::user()->user==1): ?>
                                    <form  class="form-horizontal" role="form" action="<?php echo e(url('manageRoomSearch')); ?>" method="post">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <div class="form-group">
                                            <div class="col-lg-2" style="margin-left: 20px">
                                                <select name="area" class="form-control">
                                                    <option>Area</option>
                                                    <?php foreach($bnbmanageRoom as $area): ?>
                                                        <option value="<?php echo e($area->area); ?>"><?php echo e($area->area); ?></option>
                                                    <?php endforeach; ?>

                                                </select>
                                            </div>
                                            <div class="col-lg-2" style="margin-left: 20px">
                                                <select name="location" class="form-control">
                                                    <option selected value="">Location</option>
                                                    <?php foreach($bnbmanageRoom as $location): ?>
                                                        <option value="<?php echo e($location->location); ?>"> <?php echo e($location->location); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-2">
                                                <select name="hotelName" class="form-control" id="selectCategory">
                                                    <option selected value="">Hotel Name</option>
                                                    <?php foreach($bnbmanageRoom as $hotel): ?>
                                                        <option value="<?php echo e($hotel->hotel_name); ?>"><?php echo e($hotel->hotel_name); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="submit" name="dataSeacrhFrom" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                <?php else: ?>
                                    <form  class="form-horizontal" role="form" action="<?php echo e(url('manageRoomSearch')); ?>" method="post">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <div class="form-group">
                                            <div class="col-lg-2" style="margin-left: 20px">
                                                <select name="area" class="form-control">
                                                    <option selected value="">Area</option>
                                                    <?php foreach($manageRoom as $area): ?>
                                                        <option value="<?php echo e($area->area); ?>"><?php echo e($area->area); ?></option>
                                                    <?php endforeach; ?>

                                                </select>
                                            </div>
                                            <div class="col-lg-2" style="margin-left: 20px">
                                                <select name="location" class="form-control">
                                                    <option selected value="">Location</option>
                                                    <?php foreach($manageRoom as $location): ?>
                                                        <option value="<?php echo e($location->location); ?>"> <?php echo e($location->location); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-2">
                                                <select name="hotelName" class="form-control" id="selectCategory">
                                                    <option selected value="">Hotel Name</option>
                                                    <?php foreach($manageRoom as $hotel): ?>
                                                        <option value="<?php echo e($hotel->hotel_name); ?>"><?php echo e($hotel->hotel_name); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="submit" name="dataSeacrhFrom" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                <?php endif; ?>
                                <table  class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Availability</th>
                                        <th>Book</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(Auth::user()->user==3): ?>
                                        <!-- Only show hotel merchant wish-->
                                        <?php foreach($manageRoom as $value): ?>
                                            <tr>
                                                <td><?php echo e($value->hotel_name); ?></td>
                                                <td><?php echo e($value->title); ?></td>
                                                <td>
                                                    <?php if(Auth::user()->user==1 ): ?>
                                                        <?php echo Form::open(['url'=>['manageRoomStatus',$value->id],'class'=>'form-horizontal']); ?>

                                                        <select name="mangeRoomPublish" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                            <option selected>
                                                            <?php if($value->manage_room_status == 0): ?>
                                                                <option value="0" selected>No</option>
                                                                <option value="1">Yes</option>
                                                            <?php elseif($value->manage_room_status == 1): ?>
                                                                <option value="1" selected>Yes</option>
                                                                <option value="0">No</option>
                                                                <?php endif; ?>
                                                                </option>


                                                        </select>
                                                        <?php echo Form::close(); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php echo Form::open(['url'=>['manageRoomAvailability',$value->id],'class'=>'form-horizontal']); ?>

                                                    <select name="manageRoomAvailability" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        <?php if($value->availability == 0): ?>
                                                            <option value="0" selected>No</option>
                                                            <option value="1">Yes</option>
                                                        <?php elseif($value->availability == 1): ?>
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                            <?php endif; ?>
                                                            </option>
                                                    </select>
                                                    <?php echo Form::close(); ?>

                                                </td>
                                                <td>
                                                    <?php if($value->availability == 1): ?>
                                                        <button type="button" class="btn btn-success">Book</button>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo e($value->room_id); ?>">Manage Image </button>
                                                    <?php if(Auth::user()->user==1): ?>
                                                        <a class="btn btn-success" href="<?php echo e(url('manageRoomEdit')); ?>/<?php echo e($value->id); ?>">Edit</a>
                                                    <?php else: ?>
                                                        <a class="btn btn-success" href="<?php echo e(url('merchantManageRoomEdit')); ?>/<?php echo e($value->id); ?>">Edit</a>
                                                    <?php endif; ?>

                                                    <?php if(Auth::user()->user==1 ): ?>
                                                        <button  class="manageRoomDelete btn btn-danger" data-item-id="<?php echo e($value->id); ?>">Delete</button>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <!-- All data show supper admin-->
                                        <?php foreach($bnbmanageRoom as $value): ?>
                                            <tr>
                                                <td><?php echo e($value->hotel_name); ?></td>
                                                <td><?php echo e($value->title); ?></td>
                                                <td>
                                                    <?php if(Auth::user()->user==1 ): ?>
                                                        <?php echo Form::open(['url'=>['manageRoomStatus',$value->id],'class'=>'form-horizontal']); ?>

                                                        <select name="mangeRoomPublish" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                            <option selected>
                                                            <?php if($value->manage_room_status == 0): ?>
                                                                <option value="0" selected>No</option>
                                                                <option value="1">Yes</option>
                                                            <?php elseif($value->manage_room_status == 1): ?>
                                                                <option value="1" selected>Yes</option>
                                                                <option value="0">No</option>
                                                                <?php endif; ?>
                                                                </option>


                                                        </select>
                                                        <?php echo Form::close(); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php echo Form::open(['url'=>['manageRoomAvailability',$value->id],'class'=>'form-horizontal']); ?>

                                                    <select name="manageRoomAvailability" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                        <option selected>
                                                        <?php if($value->availability == 0): ?>
                                                            <option value="0" selected>No</option>
                                                            <option value="1">Yes</option>
                                                        <?php elseif($value->availability == 1): ?>
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                            <?php endif; ?>
                                                            </option>
                                                    </select>
                                                    <?php echo Form::close(); ?>

                                                </td>
                                                <td>
                                                    <?php if($value->availability == 1): ?>
                                                        <button type="button" class="btn btn-success">Book</button>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo e($value->room_id); ?>">Manage Image </button>
                                                    <a class="btn btn-success" href="<?php echo e(url('manageRoomEdit')); ?>/<?php echo e($value->id); ?>">Edit</a>
                                                    <?php if(Auth::user()->user==1 ): ?>
                                                        <button  class="manageRoomDelete btn btn-danger" data-item-id="<?php echo e($value->id); ?>">Delete</button>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>



<!-- Hotel room image upload  using modal-->
            <?php if(Auth::user()->user==1): ?>
                <?php foreach($bnbmanageRoom as $value): ?>
                    <div class="container">
                        <!-- Modal -->
                        <div class="modal fade" id="myModal<?php echo e($value->room_id); ?>" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body col-md-12">
                                        <div class="form col-md-10">
                                            <?php echo Form::open(['url'=>'addRomeImageStore','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype' => 'multipart/form-data','files'=>true]); ?>



                                            <input type="hidden" name="roomId" value="<?php echo e($value->room_id); ?>">
                                            <div class="form-group">
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload One<span style="color: red">(*)</span></span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            <?php foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow): ?>
                                                                <?php if($packageImageShow->image_one!=null): ?>
                                                                    <img src="Belogin/public/hotelImage/category/<?php echo e($packageImageShow->image_one); ?>" alt=""  style="width: 150px; height: 150px;"/>
                                                                <?php else: ?>
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width: 150px; height: 150px;" />
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageOne" name="imageOne" />
                                                   </span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload Two <span style="color: red">(*)</span></span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            <?php foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow): ?>
                                                                <?php if($packageImageShow->image_two!=null): ?>
                                                                    <img src="Belogin/public/hotelImage/details/<?php echo e($packageImageShow->image_two); ?>" alt="" style="width: 150px; height: 150px;"/>
                                                                <?php else: ?>
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""  style="width: 150px; height: 150px;"/>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageTwo" name="imageTwo" />
                                                   </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload Three</span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            <?php foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow): ?>
                                                                <?php if($packageImageShow->imge_three!=null): ?>
                                                                    <img src="Belogin/public/hotelImage/details/<?php echo e($packageImageShow->imge_three); ?>" alt="" style="width: 150px; height: 150px;" />
                                                                <?php else: ?>
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width: 150px; height: 150px;" />
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageThree" name="imageThree" />
                                                   </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload Foure</span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            <?php foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow): ?>
                                                                <?php if($packageImageShow->image_four!=null): ?>
                                                                    <img src="Belogin/public/hotelImage/details/<?php echo e($packageImageShow->image_four); ?>" alt=""  style="width: 150px; height: 150px;" />
                                                                <?php else: ?>
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width: 150px; height: 150px;"/>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageFour" name="imageFour" />
                                                   </span>
                                                        </div>
                                                    </div>
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
                                        <div class="col-md-2">
                                            <?php foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow): ?>
                                                <?php echo Form::open([ 'url' =>['addRomeImageDelete',$packageImageShow->id], 'files' => true, 'enctype' => 'multipart/form-data','id' => 'image-upload' ]); ?>

                                                <div class="col-lg-2" style="margin-top: 40px">
                                                    <h6>Image One</h6>
                                                    <button name="ImageOne" value="<?php echo e($packageImageShow->image_one); ?>"  class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                <div class="col-lg-2">
                                                    <h6>Image Two</h6>
                                                    <button name="imageTwo" value="<?php echo e($packageImageShow->image_two); ?>" class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                <div class="col-lg-2">
                                                    <h6>Image Three</h6>
                                                    <button name="imageThree" value="<?php echo e($packageImageShow->imge_three); ?>" class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                <div class="col-lg-2">
                                                   <h6>Image Four</h6> <button name="imageFour" value="<?php echo e($packageImageShow->image_four); ?>" class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                <?php echo Form::close(); ?>

                                            <?php endforeach; ?>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <?php foreach($manageRoom as $value): ?>
                    <div class="container">
                        <!-- Modal -->
                        <div class="modal fade" id="myModal<?php echo e($value->room_id); ?>" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body col-md-12">
                                        <div class="form col-md-10">
                                            <?php echo Form::open(['url'=>'addRomeImageStore','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype' => 'multipart/form-data','files'=>true]); ?>



                                            <input type="hidden" name="roomId" value="<?php echo e($value->room_id); ?>">
                                            <div class="form-group">
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload One</span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            <?php foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow): ?>
                                                                <?php if($packageImageShow->image_one!=null): ?>
                                                                    <img src="Belogin/public/hotelImage/category/<?php echo e($packageImageShow->image_one); ?>" alt=""  style="width: 150px; height: 150px;"/>
                                                                <?php else: ?>
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width: 150px; height: 150px;" />
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageOne" name="imageOne" />
                                                   </span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload Two</span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            <?php foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow): ?>
                                                                <?php if($packageImageShow->image_two!=null): ?>
                                                                    <img src="Belogin/public/hotelImage/details/<?php echo e($packageImageShow->image_two); ?>" alt="" style="width: 150px; height: 150px;"/>
                                                                <?php else: ?>
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""  style="width: 150px; height: 150px;"/>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageTwo" name="imageTwo" />
                                                   </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload Three</span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            <?php foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow): ?>
                                                                <?php if($packageImageShow->imge_three!=null): ?>
                                                                    <img src="Belogin/public/hotelImage/details/<?php echo e($packageImageShow->imge_three); ?>" alt="" style="width: 150px; height: 150px;" />
                                                                <?php else: ?>
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width: 150px; height: 150px;" />
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageThree" name="imageThree" />
                                                   </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4" style="margin-right: 15px;margin-left: 15px">
                                                    <span>Image Upload Foure</span>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                            <?php foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow): ?>
                                                                <?php if($packageImageShow->image_four!=null): ?>
                                                                    <img src="Belogin/public/hotelImage/details/<?php echo e($packageImageShow->image_four); ?>" alt=""  style="width: 150px; height: 150px;" />
                                                                <?php else: ?>
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width: 150px; height: 150px;"/>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="imageFour" name="imageFour" />
                                                   </span>
                                                        </div>
                                                    </div>
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
                                        <?php /*<div class="col-md-2">
                                            <?php foreach($productImage=App\Model\Hotel\HotelImageModel::where('room_id','=',$value->room_id)->get() as $packageImageShow): ?>
                                                <?php echo Form::open([ 'url' =>['addRomeImageDelete',$packageImageShow->id], 'files' => true, 'enctype' => 'multipart/form-data','id' => 'image-upload' ]); ?>

                                                <div class="col-lg-2" style="margin-top: 40px">
                                                    <button name="ImageOne" value="<?php echo e($packageImageShow->image_one); ?>"  class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                <div class="col-lg-2">
                                                    <button name="imageTwo" value="<?php echo e($packageImageShow->image_two); ?>" class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                <div class="col-lg-2">
                                                    <button name="imageThree" value="<?php echo e($packageImageShow->imge_three); ?>" class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                <div class="col-lg-2">
                                                    <button name="imageFour" value="<?php echo e($packageImageShow->image_four); ?>" class="btn btn-danger" type="submit">Delete</button>
                                                </div><br/><br/><br/><br/><br/><br/><br/>
                                                <?php echo Form::close(); ?>

                                            <?php endforeach; ?>
                                        </div>*/ ?>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>


            <!--- Swite message show  delete form product by obydul date:20-10-16 -->
            <script>
                $('button.manageRoomDelete').click(function() {
                    var itemId = $(this).attr("data-item-id");
                    mainCategoryDelete(itemId);
                });
                function mainCategoryDelete(itemId) {
                    swal({
                        title: "Are you sure?",
                        text: "Are you sure that you want to delete this Item ?",
                        type: "warning",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        confirmButtonText: "Yes, delete it!",
                        confirmButtonColor: "#ec6c62"
                    }, function() {
                        $.ajax({
                            method: "GET",
                            url: "<?php echo e(URL::to('/')); ?>/manageRoomDelete/" + itemId,
                            type: "DELETE"
                        })
                                .done(function(data) {
                                    swal("Deleted!", "Your item was successfully deleted!", "success");
                                    location.reload();
                                })
                                .error(function(data) {
                                    swal("Oops", "We couldn't connect to the server!", "error");
                                    location.reload();
                                });
                    });
                }
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