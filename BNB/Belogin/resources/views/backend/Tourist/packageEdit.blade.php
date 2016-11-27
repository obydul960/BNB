@extends('layouts.backentMaster')
@section('content')
    @if(Auth::check())
        @if(Auth::user()->user==1 || Auth::user()->user==4)


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
                                {!! Form::open(['url'=>['packageUpdate',$packageEdit->id],'class'=>' form-horizontal','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Title</label>
                                    <div class="col-lg-6">
                                        <input class="form-control" id="title" name="title" type="text" value="{{ $packageEdit->title }}" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Price </label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="price" name="price" type="number" value="{{ $packageEdit->price }}" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">Commission</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="commission" name="commission" type="number" value="{{ $packageEdit->commission }}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="firstname" class="control-label col-lg-3">Start Date</label>
                                    <div class="col-lg-3">
                                        <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                            <input type="text" readonly="" size="16" name="startDate" class="form-control" value="{{ $packageEdit->start_date }}">
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
                                            <input type="text" readonly="" size="16" name="EndDate" class="form-control" value="{{ $packageEdit->end_date }}">
                                            <span class="input-group-btn add-on">
                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-lg-3 col-sm-3">Discription</label>
                                    <div class="col-lg-8 col-sm-9">
                                        <textarea class="form-control ckeditor" id="discrioption" name="discrioption" rows="6">{{ $packageEdit->discription }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3 col-sm-3">Facilities</label>
                                    <div class="col-lg-8 col-sm-9">
                                        <textarea class="form-control ckeditor" id="facilities" name="facilities" rows="6">{{ $packageEdit->facilities }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <button class="btn btn-default" type="reset">Cancel</button>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        @else
            <?php
            Session::flash('error', 'please your not permitted...');
            ?>
        @endif
    @else
        <?php
        Session::flash('error', 'please try to login again...');
        ?>
    @endif

@endsection