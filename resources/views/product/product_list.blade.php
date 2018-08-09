<?php
/**
 * Created by PhpStorm.
 * User: vidhi_BSP
 * Date: 8/9/2018
 * Time: 2:51 PM
 */?>

<html>
<head>
    <title>Laravel Test</title>

    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{asset('assets/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

</head>
<!DOCTYPE html>
<html>
<head>

<body>


<div class="container">
    <form name="contact" id="contact" method="post" class="text-center border border-light p-5">
        <h2>Product</h2>

        <div class="col-md-12 text-center">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="form-group" id="div_product">
                        <input type="text" name="product_name" id="product_name" class="form-control"
                               placeholder="Product Name"/>
                        <span class="pull-right text-danger" id="msg_product"></span><br/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group" id="div_quantity">
                        <input type="text" name="quantity_of_stock" id="quantity_of_stock" class="form-control"
                               placeholder="Quantity of Stock"/>
                        <span class="pull-right text-danger" id="msg_quantity"></span><br/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group" id="div_prices">
                        <input type="price" name="price" id="price" class="form-control" placeholder="price"/>
                        <span class="pull-right text-danger" id="msg_price"></span><br/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <input type="button" class="btn btn-primary" value="Submit" name="submit" id="submit"/>
                    </div>
                </div>

            </div>
        </div>

    </form>


<table class="table table-bordered">
    <thead>
    <tr>
        <th> ID</th>
        <th> Product name</th>
        <th> Quantity Of Stock</th>
        <th> Price per item</th>
        <th> Datetime submitted</th>
        <th> Total</th>
        <th> Actions</th>
    </tr>
    </thead>
    <tbody id="table_laravel">

    </tbody>
</table>
</div>
</body>
</html>


<script type="text/javascript">
    $(document).ready(function () {
        $("#submit").click(function () {

            if($("#product_name").val()== ''){
                $("#div_product").addClass('has-error');
                $("#msg_product").html("Please enter product name.");
                return false;
            }else{
                $("#div_product").removeClass('has-error');
                $("#msg_product").html("");
            }
            if($("#price").val() <=0 || $("#price").val()== ''){
                $("#div_prices").addClass('has-error');
                $("#msg_price").html("Please enter price more then zero.");
                return false;
            }else{
                $("#div_prices").removeClass('has-error');
                $("#msg_price").html("");
            }
            if($("#quantity_of_stock").val() <=0 || $("#quantity_of_stock").val()== ''){
                $("#div_quantity").addClass('has-error');
                $("#msg_quantity").html("Please enter price more then zero.");
                return false;
            }else{
                $("#div_quantity").removeClass('has-error');
                $("#msg_quantity").html("");
            }

            $.ajax({
                url: "{{route('api_add_data')}}",
                type: "POST",
                data: {
                    id: $("#product_id").val(),
                    product_name: $("#product_name").val(),
                    price: $("#price").val(),
                    quantity_of_stock: $("#quantity_of_stock").val(),
                    '_token': '<?php echo csrf_token();?>'
                },
                dataType: "JSON",
                success: function (jsonStr) {
                    location.reload();
                }
            });
        });

        $.ajax({
            url: '{{route('get_add_data')}}',
            method: 'POST',
            data: {
                '_token': '<?php echo csrf_token();?>'
            },
            success: function (result) {
                $obj = JSON.parse(result);

                for (var i = 0; i < $obj.length; i++) {
                    $table = '<tr>' +
                    '<td>' + $obj[i].id + '</td>' +
                    '<td>' + $obj[i].product_name + '</td>' +
                    '<td>' + $obj[i].quantity_of_stock + '</td>' +
                    '<td>' + $obj[i].price + '</td>' +
                    '<td>' + $obj[i].date + '</td>' +
                    '<td>' + $obj[i].total + '</td>' +
                    '<td> <button class="btn btn-primary" onclick="edit_data(' + $obj[i].id + ')"><i class="fa fa-pencil"></i> Edit</button></td>' +
                    '</tr>';
                    $("table tbody").append($table);
                }

            }
        });
    });

    function edit_data($id) {
        alert($id);
        $.ajax({
            url: "{{route('edit_add_data')}}",
            type: "POST",
            data: {
                id: $id,
                '_token': '<?php echo csrf_token();?>'
            },
            dataType: "JSON",
            success: function (jsonStr) {
                console.log(jsonStr);
                $("#product_id").val(jsonStr.id);
                $("#product_name").val(jsonStr.product_name);
                $("#quantity_of_stock").val(jsonStr.quantity_of_stock);
                $("#price").val(jsonStr.price);
            }
        });
    }
</script>


