

            <?php echo Form::open(['url' => 'image','class'=>'form-horizontal' ]); ?>

            <div class="form-group ">
                <label for="cname" class="control-label col-lg-4">Image</label>
                <div class="col-lg-5">
                    <input class=" form-control" id="mainCategory" name="picture" type="file"/>
                </div>
                </div>
                <div class="form-group">
                <div class="col-lg-offset-3 col-lg-6">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button class="btn btn-default" type="reset">Cancel</button>
                </div>
                </div>
            <?php echo Form::close(); ?>