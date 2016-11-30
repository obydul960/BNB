<?php $__env->startSection('content'); ?>
<section class="panel panel-default">
    <header class="panel-heading">
        <input type="text" name="searchName" id="searchName" class="form-control" placeholder="search">
    </header>
    <div class="panel-body">
      <table>
          <tr>
              <td>ID</td>
              <td><input type="text" name="id" id="id" class="form-control" placeholder="ID"></td>
          </tr>
          <tr>
              <td></td>
              <td><br></td>
          </tr>
          <tr>
              <td>Name</td>
              <td><input type="text" name="name" class="form-control" placeholder="Name"></td>
          </tr>
      </table>
    </div>

</section>

<script type="text/javascript">
    $(document).ready(function(){
        $( "#searchName" ).autocomplete({
            source: '<?php echo URL::Route('autocompleteData'); ?>',
            minLength: 1,
            select: function(e,ui) {
                $('#searchName').val(ui.item.value);
            }
        });
    });


</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backentMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>