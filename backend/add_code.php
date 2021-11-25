<?php 
require('../Controllers/code_controller.php');



if(isset($_POST['update_prod'])){
    // retrieve the name, description and quantity from the form submission
    $code_id = $_POST['cd_id'];
    $language = $_POST[''];
    $upload_date = $_POST[date("Y-m-d")];
    $fileloc = $_POST[''];

    echo $code_id,$language,$upload_date,$fileloc;

    // call the add_product_controller function: return true or false
    $result =   update_code_controller($code_id,$language,$upload_date,$fileloc);


    if($result === true){
        header('Location: ../Admin/code_list.php');
        
        // header('Location: ');
    } 
    else {
        // header('Location: ../View/add_product_page.php');
        echo '<script>alert("Unable to insert")</script>';
        
    }

}

if(isset($_POST['del_code'])){
    // retrieve the name, description and quantity from the form submission
    $code_id = $_POST['cd_id'];



    // call the add_product_controller function: return true or false
    $result =   delete_code_controller($code_id);


    if($result === true){
        header('Location: ../Admin/code_list.php');
        
        // header('Location: ');
    } 
    else {
        // header('Location: ../View/add_product_page.php');
        echo '<script>alert("Unable to insert")</script>';
        
    }

}









?>