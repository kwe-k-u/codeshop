<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
//Navigate to appropriate directory for files
define('ROOT_PATH', dirname(__DIR__) . '/../');

//Database connection
include(ROOT_PATH.'User/Database_credentials_finalproject.php');

// instantiate user object
//include(ROOT_PATH.'User/member.php');

session_start();
//checks if the variable user is set
if(isset($_SESSION['user_name'])){    
    echo '<h5 style="color: white;">Welcome ' . $_SESSION['user_name'] . ',</h5>'; 
} 

else{    
    header("Location:index.php");
}  

$database = new Database();
$db = $database-> getConnection();
$buyer = new Buyer($db);                       
 

$develper->user_name = $_POST['user_name'];
$developer->email = $_POST['email'];
$developer->password = base64_encode($_POST['password']);
$developer->cPassword = base64_encode($_POST['confirm']);
$developer->datecreated = date('Y-m-d H:i:s');

if($develper->Insert_developer()){
    echo '<script defer>';
    echo 'swal("Done!", "Account created successfully!", "success").then(function() {
        window.location = "members.php";
    });
    </script>';
}else{
    echo '<script defer>';
    echo 'swal("Something went wrong!", "Error in creating new account!", "error").then(function() {
        window.location = "rides.php";
    });
    </script>';
}

?>

<?php
include ('Database_connection_finalproject');
require ('developer_account_form.php');
incude ('Database_credentials_finalproject');

if(isset($_POST['submit']))
{		
    
    $buyer->user_name = $_POST['user_name'];
    $buyer->email = $_POST['email'];
    $buyer->password = base64_encode($_POST['password']);
    $buyer->cPassword = base64_encode($_POST['confirm']);
    $insert = mysqli_query($db,"INSERT INTO 'Developers'('username', 'email', 'Password', 'Password_ver') VALUES ('$user_name','$email', '$password', '$cPassword')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Buyer account added successfully.";
    }
}

mysqli_close($db); // Close connection
?>