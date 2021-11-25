<?php 
require('code_controller.php');

if(isset($_POST['update_prod'])){
    $code_id = $_POST['cd_id'];
    $language = $_POST[''];
    $upload_date = $_POST[date("Y-m-d")];
    $fileloc = $_POST[''];

    echo $code_id,$language,$upload_date,$fileloc;

    $result =   update_code_controller($code_id,$language,$upload_date,$fileloc);


    if($result === true){
        header('Location: ../Admin/code_list.php');
        
    } 
    else {
        // header('Location: ../View/add_product_page.php');
        echo '<script>alert("Unable to insert")</script>';
        
    }

}

if(isset($_POST['del_code'])){
    $code_id = $_POST['cd_id'];

    $result =   delete_code_controller($code_id);


    if($result === true){
        header('Location: ../Admin/code_list.php');
        
    } 
    else {
        echo '<script>alert("Unable to insert")</script>';
        
    }

}

?>
