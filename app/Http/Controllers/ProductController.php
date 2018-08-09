<?php
/**
 * Created by PhpStorm.
 * User: vidhi_BSP
 * Date: 8/9/2018
 * Time: 2:49 PM
 */

namespace App\Http\Controllers;


class ProductController {

    public function productDetails(){
        return view('product.product_list');
    }
    public function api_add_data(){

        $total = $_POST['price'] *$_POST['quantity_of_stock'];
        $date = date('d/m/Y');
        $jsonString = file_get_contents('data.json');
        $data = json_decode($jsonString, true);
        if(isset($_POST['id']) && !empty($_POST['id'])){
            foreach ($data as $key => $entry) {
                if ( $data[$key]['id'] ==  $_POST['id']) {
                    $data[$key]['product_name'] = $_POST['product_name'];
                    $data[$key]['quantity_of_stock'] = $_POST['quantity_of_stock'];
                    $data[$key]['date'] = $date;
                    $data[$key]['price'] =  $_POST['price'];
                    $data[$key]['total'] = $total;
                }
            }
        }else{
            if(isset($data) && !empty($data)){
                $key = count($data);
            }else{
                $key = 0;
            }
                $data[$key]['id'] = $key + 1;
                $data[$key]['product_name'] = $_POST['product_name'];
                $data[$key]['quantity_of_stock'] = $_POST['quantity_of_stock'];
                $data[$key]['date'] = $date;
                $data[$key]['price'] = $_POST['price'];
                $data[$key]['total'] = $total;

        }

        $newJsonString = json_encode($data);
        file_put_contents('data.json', $newJsonString);
        return $jsonString;
    }


    public function get_add_data(){
        $jsonString = file_get_contents('data.json');
        return $jsonString;
    }

    public function edit_add_data(){
        $id = $_POST['id'];
        $jsonString = file_get_contents('data.json');
        $data = json_decode($jsonString, true);
        $response = $data[$id -1];
        return $response;
    }
}