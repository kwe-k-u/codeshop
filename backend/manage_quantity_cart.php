<?php 
session_start();

require('../Controllers/cart_controller.php');


// check if theres a POST variable with the name 'add_pname'
if(isset($_POST['update_quantity'])){
    // retrieve the name, description and quantity from the form submission
    $code_id = $_POST['cd_id'];
    $user_id = $_POST['us_id'];
    $quantity = $_POST['quantity'];
 
    // call the add_product_controller function: return true or false
    $result =  update_code_quantity_controller($code_id, $user_id,$quantity);


    if($result === true){
         header('Location: ../views/cart.php ');
    } 
    else {
        // header('Location: ../View/add_product_page.php');
        echo '<script>alert("Unable to update")</script>';
        
    }

}


?>