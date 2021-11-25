<?php


require('../Classes/code_class.php');

function add_code_controller($language,$upload_date,$fileloc){
    // create an instance of the code class
    $code_instance = new code();
    // call the method from the class
    return $code_instance->add_code($language,$upload_date,$fileloc);

}



function delete_code_controller($id){
    // create an instance of the code class
    $code_instance = new code();
    // call the method from the class
    return $code_instance->delete_one_code($id);

}

function update_code_controller($code_id,){
    // create an instance of the code class
    $code_instance = new code();
    // call the method from the class
    return $code_instance->update_one_code($code_id,$language,$upload_date,$fileloc);

}


function select_all_code_controller(){
    // create an instance of the code class
    $product_instance = new code();
    // call the method from the class
    return $code_instance->select_all_code();

}



function select_one_code_controller($id){
    // create an instance of the code class
    $product_instance = new code();
    // call the method from the class
    return $code_instance->select_one_code($id);

}


function search_code_controller($word){
    // create an instance of the code class
    $product_instance = new code();
    // call the method from the class
    return $code_instance->search_code($word);

}

function pick_random_controller(){
    $product_instance = new code();
    return $code_instance->pick_random();

}




?>