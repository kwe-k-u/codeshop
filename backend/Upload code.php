<?php

include ('Database_connection_finalproject.php');
require ('upload_code_form.php');

if(isset($_POST['upload_btn']))
{		
    $screenshots = $_POST['screenshots'];
    $Sdescription = $_POST['sDescription'];
    $Ldescription = $_POST['lDescription'];
    $title = $_POST['Title'];
    $type = $_POST['flexRadioDefualt'];
    $input = $_POST['formFileLg'];
    
    

    $insert = mysqli_query($db,"INSERT INTO code (`language`, `upload_date`, 'filelocation') VALUES ('$language','$upload_date','$filelocation')");
    $insert = mysqli_query($db,"INSERT INTO listing (`title`, `description`, 'short_description') VALUES ('$fullname','$age')");
    
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
