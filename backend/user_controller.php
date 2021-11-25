<?php

require('../Classes/customer_class.php');

function add_user_controller($name, $email, $password){
    // create an instance of the buyer class
    $user_instance = new User();
    // call the method from the class
    return $user_instance->add_user($name, $email, $password);

}

function delete_user_controller($id){
    // create an instance of the Product class
    $user_instance = new user();
    // call the method from the class
    return $user_instance->delete_user($id);

}

function update_user_controller($id, $name, $email, $password){
    // create an instance of the Product class
    $buyer_instance = new user();
    // call the method from the class
    return $user_instance->update_buyer($id, $name, $email, $password);

}

function select_all_user_controller(){
    // create an instance of the buyer class
    $buyer_instance = new user();
    // call the method from the class
    return $user_instance ->select_all_user();

}

function select_one_user_controller($id){
    // create an instance of the buyer class
    $user_instance = new user();
    // call the method from the class
    return $user_instance->select_one_user($id);

}

function login_user_controller($email){
    // create an instance of the buyer class
    $user_instance = new user();
    // call the method from the class
    return $user_instance->login_user($email);

}




?>