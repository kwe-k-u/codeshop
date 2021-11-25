<?php 
session_start();

require('cart_controller.php');


if(isset($_POST['update_quantity'])){
    $code_id = $_POST['cd_id'];
    $user_id = $_POST['us_id'];
    $quantity = $_POST['quantity'];
 
    $result =  update_code_quantity_controller($code_id, $user_id,$quantity);


    if($result === true){
         header('Location: shopping_cart.php ');
    } 
    else {
        echo '<script>alert("Unable to update")</script>';
        
    }

}

?>
