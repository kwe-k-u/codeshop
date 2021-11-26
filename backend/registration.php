<?php
require ('header.php');
require('backend/user_controller.php');

session_start();

if(isset($_POST['buyer'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hash = password_hash($password,PASSWORD_DEFAULT);
    

    $result = add_user_controller($name, $email,$hash);


    if($result === true){
        echo "Data inserted sucessfully";
        header('Location: index.php');
    } 
    else {
        echo "Registration  failed";
        // header('Location: ../views/register.php');
        echo '<script>alert("Login failed")</script>';
        
    }

}


if(isset($_POST['login_user'])){
    $email = $_POST['email'];
    $pword = $_POST['password'];


    $result = login_user_controller($email);


    if(password_verify($password, $result['password']) ){

            if($result['user_role'] == 1){
                $_SESSION['user_role'] = 1;
            }

            $_SESSION['user_id'] = $result['username'];
            $_SESSION['user_id'] = $result['user_id'];
            $_SESSION['email'] = $result['email'];


            echo '<script>alert("Logged In)</script>';
            header('Location: index.php');
    } 
    else{
        echo '<script>alert("Login failed")</script>';
       
        
       

    } 
}


if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['user_id']);
    header('location: index.php');    

}

?>
