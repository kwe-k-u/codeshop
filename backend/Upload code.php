<?php

include ('Database_connection_finalproject.php');
require ('upload_code_form.php');

if(isset($_POST['upload_btn']))
{		
    $language = $_POST['language'];
    $upload_date = $_POST['upload_date'];
    $filelocation= $_POST['filelocation'];

    $insert = mysqli_query($db,"INSERT INTO code (`language`, `upload_date`, 'filelocation') VALUES ('$fullname','$age')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($db);
?>
