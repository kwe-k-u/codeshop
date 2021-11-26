<?php
	require ("market_class.php");


	function start(){
		$market_instance = new marketplace();

		return $market_instance->get_all_listing();
	}


	function insert_listing($language, $fileloc, $title, $desc, $s_desc, $price, $user_id, $img){
		$market_instance = new marketplace();
		return $market_instance->insert_listing($language, $fileloc, $title, $desc, $s_desc, $price, $user_id, $img);


	}


	function search_listing($name){
		$market_instance = new marketplace();
		return $market_instance->search_listing($name);
	}

	function search_by_id($id){
		$market_instance = new marketplace();
		return $market_instance->search_by_id($id);
	}

	function remove_listing($id){
		$market_instance = new marketplace();
		return $market_instance->remove_listing($id);

	}


	function get_product_owner($id){
		$market_instance = new marketplace();
		return $market_instance->get_product_owner($id)["username"];

	}

	function find_user_by_id($id){
		$market_instance = new marketplace();
		return $market_instance->find_user_by_id($id);
	}
?>