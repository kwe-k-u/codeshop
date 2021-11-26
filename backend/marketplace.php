<?php
	require("marketplace_controller.php");

	$products = start();



	if(isset($_GET['search_btn'])){
		$query = $_GET['search_field'];

		$products = search_listing($query);


	}

	if(isset($_POST['del_btn'])){
		$id = $_POST['listing'];

		$products = remove_listing($id);


	}

?>