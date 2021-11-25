<?php 
session_start();

require('cart_controller.php');

if(isset($_POST['add_order'])){

        $list_id = '';
        $buyer_id = "";
        $date = date("Y-m-d");

        $result = add_to_orders_controller( $_SESSION['user_id'], $list_id, $buyer_id, $date);

        if($result){
             header('Location: ../Views/checkout.php');
        }
}


?>
