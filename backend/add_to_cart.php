<head>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<?php 
session_start();

require('cart_controller.php');


if(isset($_POST['add_cart'])){
    $code_id = $_POST['cd_id'];
    $user_id = $_POST['us_id'];
    $quantity = 1;
 
    $check_dup= check_duplicate_controller($code_id,$user_id);
    



    if($check_dup){
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal(" Already In  Cart","Message!","failure");';
        echo '}, 1000);</script>';
      
    } 
    else {
        $result =  add_to_cart_controller($code_id, $user_id,$quantity);
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal(" Added to cart","Message!","success");';
        echo '}, 1000);</script>';
        
    }

}

if(isset($_POST['del_cart'])){
    $code_id = $_POST['cd_id'];
    $user_id = $_POST['us_id'];
    $quantity = 1;
    
    $result =  delete_from_cart_controller($code_id);

    if($result){
         header('Location: cart.php ');
    } 
    else {
       
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal(" Unable to delete","Message!","success");';
        echo '}, 1000);</script>';
        
    }

}


?>
