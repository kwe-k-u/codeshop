<?php  

require ('../Settings/db_class.php');

class Cart extends Connection{

    function add_to_cart($cd_id,$us_id,$quantity){
		// return true or false
		return $this->query("insert into cart(cd_id,us_id,quantity) values('$cd_id', '$us_id','$quantity')");
	}

	function view_code($cd_id)
    {
        // return array or false
        return $this->fetch("select * from cart inner join code on cart.cd_id = code.code_id where cd_id='$cd_id'");
    }

    function delete_from_cart($id){
		// return true or false
		return $this->query("delete from cart where code_id = '$id'");
	}

  function update_code_quantity($id,$cd_id,$quantity){
		// return true or false
		return $this->query("update cart set quantity='$quantity' where cd_id = '$id' and cd_id = '$cd_id'");
	}

	function sum_price($us_id){
		// return true or false
		return $this->fetch("select SUM(code_price) as total from cart inner join code on cart.cd_id = cd.cd_id where us_id='$us_id'");
		// return $this->query("Select SUM() as total from cart where us_id = '$us_id'");
	}

	function check_duplicate($code_id,$user_id){
		return $this->fetchone("select * from cart where cd_id = '$code_id' and c_id = '$user_id'");
	}

	function add_order($order_id, $date, $list_id, $buyer_id){
        return $this->query("insert into order_table (order_id, order_date, listing_order, buyer_id) values('$order_id', '$date', '$list_id', '$buyer_id')");

    }

	function select_cart($user_id){
        return $this->fetch("select * from cart where us_id ='$user_id'");
    }

	function add_order_details($order_id, $cd_id, $quantity){
        return $this->query("insert into orderdetails (order_id, code_id, quantity) values ('$order_id',  '$cd_id', '$quantity')  ");

    }

	function select_order($user_id){
        return $this->fetchOne("select * from orders where customer_id ='$user_id'");
    }

	function make_payment($user_id, $order_id, $amount, $currency, $paymentdate){
        return $this->query("insert into payment (amount, user_id, order_id, currency, payment_date) values ('$amount','$user_id','$order_id','$currency','$paymentdate' )  ");
        
    }

	function clear_cart($user_id){
        return $this->query("delete from cart where us_id = '$user_id'");
    }

}
?>