<?php
	require ("market_class.php");


	function start(){
		$market_instance = new marketplace();

		return $market_instance->get_all_products();
	}
?>