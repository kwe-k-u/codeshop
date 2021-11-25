<?php
include ('Database_connection_finalproject.php');
require ('upload_code_form.php');

if(isset($_POST['upload_btn']))
{		
    $project_title = $_POST['title'];
    $short_description = $_POST['sDescription'];
    $full_description = $_POST['lDescription'];
    $screenshots = $_POST['screenshots'];
    $inputState = $_POST['inputState'];
    $code_upload = $_POST['formFilelg'];
    $compiled_upload = $_POST['formFilelg'];


    $insert = mysqli_query($db,"INSERT INTO ``(`fullname`, `age`) VALUES ('$fullname','$age')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($db); // Close connection
?>
