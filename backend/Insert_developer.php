<?php

include ('Database_connection_finalproject');
require ('developer_account_form.php');
incude ('Database_credentials_finalproject');

if(isset($_POST['developer']))
{		
    
    $buyer->user_name = $_POST['user_name'];
    $buyer->email = $_POST['email'];
    $buyer->password = base64_encode($_POST['password']);
    $insert = mysqli_query($db,"INSERT INTO 'Developers'('username', 'email', 'password') VALUES ('$user_name','$email', '$password')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Buyer account added successfully.";
    }
}

mysqli_close($db);
?>
