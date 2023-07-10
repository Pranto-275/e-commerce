<?php
global $connection;
include 'db/connection.php';
session_start();
$message = '';
$user_id =  $_SESSION['user_id'] ;

if ($_POST['code'] == 111){
    $product_id = $_POST['product_id'];

    $single_product = "SELECT * FROM products WHERE id = $product_id";
    $single_product_result = mysqli_query($connection,$single_product);

    $data = mysqli_fetch_assoc($single_product_result);

    echo json_encode($data);
}



if ($_POST['code'] == 112){
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    $add_cart = "INSERT INTO cart(product_id,user_id,qty) VALUES ('$product_id','$user_id','$quantity')";
    $add_cart_result = mysqli_query($connection,$add_cart);
    if ($add_cart_result == 'true'){
        echo "Product Added into cart";
    }
}


if ($_POST['code'] == 113){


    $notification = "SELECT count(*) as user_count FROM cart WHERE user_id = '$user_id' ";
    $notification_result = mysqli_query($connection,$notification);

    $row = mysqli_fetch_assoc($notification_result);
    $user_count = $row['user_count'];
    echo $user_count;

}


if ($_POST['code'] == 114){

    $side_nav_product = "SELECT * FROM products p, cart c WHERE p.id = c.product_id AND c.user_id = '$user_id'";
    $side_nav_product_result = mysqli_query($connection,$side_nav_product);

    $arr = [];
    while ($row = mysqli_fetch_assoc($side_nav_product_result)){
        array_push($arr,$row);
    }
    echo json_encode($arr);

}


if ($_POST['code'] == 115){


    $cart_product = "SELECT * FROM products p, cart c WHERE p.id = c.product_id AND c.user_id = '$user_id'";
    $cart_product_result = mysqli_query($connection,$cart_product);

    $arr = [];
    while ($row = mysqli_fetch_assoc($cart_product_result)){
        array_push($arr,$row);
    }
    echo json_encode($arr);

}

if ($_POST['code'] == 116){

    $cart_id = $_POST['cart_id'];

    $delete_cart_product = "DELETE FROM cart WHERE id = '$cart_id'";
    $delete_cart_product_result = mysqli_query($connection,$delete_cart_product);
    echo "Successfully Deleted";


}


if ($_POST['code'] == 117){

    $cart_array = $_POST['cart_array'];
    $linee_id = $_POST['linee_id'];

    for($i=0;$i<count($cart_array);$i++){
       $cart_update = "UPDATE cart SET qty = '$cart_array[$i]' WHERE id = '$linee_id[$i]' AND user_id = '$user_id'";
      $cart_update_result =  mysqli_query($connection,$cart_update);
      if ($cart_update_result == 'ture'){
          echo "true";
      }else{
          echo "false";
      }

    }



}

if ($_POST['code'] == 118){




      echo  $cart_delete = "DELETE FROM cart WHERE user_id = '$user_id'";
        $cart_delete_result =  mysqli_query($connection,$cart_delete);
        if ($cart_delete_result == 'ture'){
            echo "true";
        }else{
            echo "false";
        }




}