    var url = "http://localhost/BuyNBooking/productAdd";
  //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var product_id = $(this).val();
        //alert(product_id);
        $.get(url + '/' + product_id, function (data) {
            //success data
            console.log(data);
            $('#product_id').val(data.id);
            $('#mainCat').val(data.main_category);
            $('#subcat').val(data.sub_category);
            $('#product').val(data.product);
            $('#code_no').val(data.code_no);
            $('#quantity').val(data.quantity);
            $('#buying_price').val(data.buying_price);
            $('#selling_price').val(data.selling_price);
            $('#commission').val(data.commission);
            $('#bnbCommission').val(data.bnb_commission);
            $('#discount').val(data.discount);
            $('#supplier_name').val(data.supplier_name);
            $('#product_details').val(data.product_details);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
    //display modal form for creating new product create data
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmProducts').trigger("reset");
        $('#myModal').modal('show');
    });
    //create new product / update existing product
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault(); 
        var formData = {
            main_category: $('#mainCat').val(),
            sub_category: $('#subcat').val(),
            product_name: $('#product').val(),
            code_no: $('#code_no').val(),
            quantity: $('#quantity').val(),
            buying_price: $('#buying_price').val(),
            selling_price: $('#selling_price').val(),
            commission: $('#commission').val(),
            bnb_commission: $('#bnbCommission').val(),
            discount: $('#discount').val(),
            supplier_name: $('#supplier_name').val(),
            //product_details: $('#product_details').val(),
            product_details:CKEDITOR.instances.product_details.getData(),
        }
        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();     
        var type = "POST"; //for creating new resource
        var product_id = $('#product_id').val();
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + product_id;

        }

        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var product = '<tr id="product' + data.id + '"><td>' + data.id + '</td><td>' + data.product_name + '</td><td>' + data.code_no + '</td><td>' + data.selling_price + '</td><td>' + data.quantity + '</td>';
                product += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id + '">Edit</button>';
                product += ' <button class="btn btn-danger btn-delete delete-product" value="' + data.id + '">Delete</button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#products-list').append(product);
                }else{ //if user updated an existing record
                    $("#product" + product_id).replaceWith( product );
                }
                $('#frmProducts').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });