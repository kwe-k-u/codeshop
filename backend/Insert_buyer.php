
<?php
include ('Database_connection_finalproject.php');
require ('buyer_account_form');
include ('Database_credentials_finalproject');
if(isset($_POST['buyer']))
{		
    
    $buyer->user_name = $_POST['user_name'];
    $buyer->email = $_POST['email'];
    $buyer->password = base64_encode($_POST['password']);
    $insert = mysqli_query($db,"INSERT INTO 'Buyers'('username', 'email', 'password') VALUES ('$user_name','$email', '$password')");

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
