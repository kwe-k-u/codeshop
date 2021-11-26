<?php

require('user_controller.php');

session_start();

//buyer sign up
if(isset($_POST['buyer'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['psw'];


    $hash = password_hash($password,PASSWORD_DEFAULT);


    $result = add_user_controller($name, $email,$hash,"buyer");


    if($result === true){
        echo "Data inserted sucessfully";
        header('Location: ../marketplace.php');
    }
    else {
        echo "Registration  failed";
        // header('Location: ../views/register.php');
        echo '<script>alert("Registeration failed")</script>';

    }

}

//developer sign up
if(isset($_POST['developer'])){
    $name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $hash = password_hash($password,PASSWORD_DEFAULT);


    $result = add_user_controller($name, $email,$hash,"developer");


    if($result === true){
        echo "Data inserted sucessfully";
        header('Location: ../marketplace.php');
    }
    else {
        echo "Registration  failed";
        // header('Location: ../views/register.php');
        echo '<script>alert("Sign up failed")</script>';

    }

}


if(isset($_POST['login'])){
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];


    $result = login_user_controller($email);


    if(password_verify($password, $result['password']) ){

            if($result['user_role'] == 1){
                $_SESSION['user_role'] = 1;
            }

            $_SESSION['username'] = $result['username'];
            $_SESSION['user_id'] = $result['user_id'];
            $_SESSION['email'] = $result['email'];


            echo '<script>alert("Logged In)</script>';
            header('Location: ../marketplace.php');
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
