<?php

require('user_class.php');

function add_user_controller($name, $email, $password,$type){
    $user_instance = new user();
    return $user_instance->add_user($name, $email, $password, $type);

}

function delete_user_controller($id){
    $user_instance = new user();
    return $user_instance->delete_user($id);

}

function update_user_controller($id, $name, $email, $password){
    $buyer_instance = new user();
    return $buyer_instance->update_customer($id, $name, $email, $password);

}

function select_all_user_controller(){
    $buyer_instance = new user();
    return $buyer_instance ->select_all_user();

}

function select_one_user_controller($id){
    $user_instance = new user();
    return $user_instance->select_one_user($id);

}

function login_user_controller($email){
    $user_instance = new user();
    return $user_instance->login_user($email);

}


?>
