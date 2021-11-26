<?php

require ('Database_class.php');



class marketplace extends Connection{

	function get_all_listing(){
		return $this->fetch("select * from listing;");
	}

	function search_by_id($id){
		return $this->fetchOne("select * from listing where listing_id = $id;");
	}

	function search_listing($name){
		$result = $this->fetch("select * from listing where title like '%$name%' or description like '%$name%' or short_description like '%$name%';");
		return $result;

	}

	function find_user_by_id($id){
		$result = $this->fetchOne("select * from users where user_id = $id;");
		return $result;
	}

	function get_all_code(){
		return $this->fetch("select * from code;");

	}

	function get_last_listing(){
		$result = $this->get_all_listing();

		return intval(end($result)["listing_id"]);

	}

	function get_last_code(){
		$result = $this->get_all_code();
		return intval(end($result)["code_id"]);
	}


	function insert_listing($language, $fileloc, $title, $desc, $s_desc, $price, $user_id, $imgs){
		$date = date('Y-m-d');
		$listing_id = $this->get_last_listing()+1;
		$code_id = $this->get_last_code();




		// code
		 $this->query("INSERT INTO code(language,upload_date,file_location) values ('$language','$date', '$fileloc');");
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
