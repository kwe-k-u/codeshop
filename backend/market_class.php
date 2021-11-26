<?php

require ('Database_class.php');



class marketplace extends Connection{

	function get_all_listing(){
		return $this->fetch("select * from listing;");
	}

	function get_all_code(){
		return $this->fetch("select * from code;");

	}

	function get_last_listing(){
		return end($this->get_all_listing())["listing_id"];
	}

	function get_last_code(){
		return end($this->get_all_listing())["code_id"];
	}


	function insert_listing($language, $fileloc, $title, $desc, $s_desc, $price, $user_id, $imgs){
		$date = date('Y-m-d');
		$listing_id = $this->get_last_listing();
		$code_id = $this->get_last_code();
		echo $language ."<br>";
		echo $fileloc ."<br>";
		echo $title ."<br>";
		echo $desc ."<br>";
		echo $s_desc ."<br>";
		echo $price ."<br>";
		echo $user_id ."<br>";


		// code
		 return $this->query("INSERT INTO code value ('$language','$date', '$fileloc');");
		//  listing
		 $this->query("INSERT INTO listing(listing_id, title, description, short_description,price)
		  value ('$listing_id','$title', '$desc', '$s_desc', $price);");

		//listing image
		foreach ($imgs as $img) {
			$this->query("INSERT INTO listing_images($img, $listing_id)");
		}

		//   ownership
		return $this->query("INSERT INTO code_ownership value ('$user_id','$code_id', '$listing_id');");
	}


}
