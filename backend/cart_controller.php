<?php

require('cart_class.php');

function add_to_cart_controller($code_id,$user_id,$quantity){
    $cart_instance = new Cart();
    return $cart_instance->add_to_cart($code_id, $user_id,$quantity);

}


function view_products_controller($us_id){
    $cart_instance = new Cart();
    return $cart_instance ->view_products($us_id);

}

function delete_from_cart_controller($id){
    $cart_instance = new Cart();
    return  $cart_instance->delete_from_cart($id);

}

function update_product_quantity_controller($id,$us_id,$quantity){
    $cart_instance = new Cart();
    return  $cart_instance->update_product_quantity($id,$us_id,$quantityty);

}

function sum_price_controller($us_id){
    $cart_instance = new Cart();
    return  $cart_instance->sum_price($us_id);

}

function check_duplicate_controller($code_id,$user_id){
    $cart_instance = new Cart();
    return $cart_instance->check_duplicate($code_id,$user_id);
}

function add_to_orders_controller($user_id, $date, $list_id, $buyer_id){
    $code_instance = new Cart();
    return $code_instance -> add_order($user_id, $date, $list_id, $buyer_id);
}

function select_from_cart_controller($user_id){
    $cart_instance = new Cart();
    return $cart_instance->select_cart($user_id);

}

function add_order_details_controller($order_id,  $cd_id, $quantity){
    $cart_instance = new Cart();
    return $cart_instance->add_order_details($order_id,  $cd_id, $quantity);
}

function select_order_info($user_id){
    $cart_instance = new Cart();
    return $cart_instance->select_order($user_id);
}


function add_payment_controller($user_id, $order_id, $amount, $currency, $paymentdate){
    $product_instance = new Cart();
    return $code_instance -> make_payment($user_id, $order_id, $amount, $currency, $paymentdate);
}

function clear_cart_controller($user_id){
    $cart_instance = new Cart();
    return $cart_instance->clear_cart($user_id);
}

?>
