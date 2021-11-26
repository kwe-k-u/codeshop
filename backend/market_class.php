<?php

require ('Database_class.php');



class marketplace extends Connection{

	function get_all_products(){
		return $this->fetch("select * from listing");
	}

}
?>