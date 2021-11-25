<?php

require('../Controllers/user_controller.php');

session_start();

// check if a POST variable 'add_user' exists
if(isset($_POST['add_user'])){
    // retrieve the name, description and quantity from the form submission
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hash = password_hash($password,PASSWORD_DEFAULT);
    

    // call the add_code_controller function: return true or false
    $result = add_user_controller($name, $email,$hash);


    if($result === true){
        echo "Data inserted sucessfully";
        header('Location: ../views/login.php');
    } 
    else {
        echo "Registration  failed";
        // header('Location: ../views/register.php');
        echo '<script>alert("Login failed")</script>';
        
    }

}


if(isset($_POST['login_user'])){
    // retrieve the name, description and quantity from the form submission
    $email = $_POST['email'];
    $pword = $_POST['password'];


    // call the add_product_controller function: return true or false
    $result = login_user_controller($email);

    //print_r(login_customer_controller());


    if(password_verify($password, $result['password']) ){

            if($result['user_role'] == 1){
                $_SESSION['user_role'] = 1;
            }

            $_SESSION['user_id'] = $result['username'];
            $_SESSION['user_id'] = $result['user_id'];
            $_SESSION['email'] = $result['email'];


            echo '<script>alert("Logged In)</script>';
            header('Location: ../index.php');
    } 
    else{
        echo '<script>alert("Login failed")</script>';
       
        
        // header('Location: login.php');
       

    } 
}


if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['user_id']);
    header('location: ../index.php');    

}


?>