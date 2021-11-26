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
?>