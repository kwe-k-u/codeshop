<?php

// include ('Database_connection_finalproject.php');
require ('marketplace_controller.php');

if(isset($_POST['upload_btn']))
{
    $language = $_POST['language'];
    $fileloc = "";
    $title = $_POST['title'];
    $desc = $_POST['lDescription'];
    $s_desc = $_POST['sDescription'];
    $price = $_POST['price'];
    $images = ["",""];
    // $images = $_POST['screenshots'];
    $user_id = $_POST['user_id'];
    // $fileloc = $_POST['fileloc'];



    $insert = insert_listing($language, $fileloc, $title, $desc, $s_desc, $price, $user_id, $images);

    if($insert === true){
        echo "Data inserted sucessfully";
        header('Location: ../marketplace.php');
    }
    else {
        echo "Upload  failed";
        // header('Location: ../views/register.php');
        echo '<script>alert("Upload failed failed")</script>';

    }
}

?>
