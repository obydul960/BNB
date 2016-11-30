//sub category add
<script>
    jQuery(document).ready(function($){
        n=1;
        $('#mainCat').change(function(){

            $.get("<?php echo e(url('api/dropdown/subcategory')); ?>",

                    { option: $(this).val() },
                    function(data) {
                        var model = $('#subcat');
                        model.empty();
                        model.append("<option value=''>" + 'Select Subcategory' + "</option>");
                        $.each(data, function(index,element) {
                            model.append("<option value='"+ element +"'>" + element + "</option>");
                        });
                    });
        });
    });
</script>