<?php

require ('../Settings/db_class.php');

// inherit the methods from Connection
class Code extends Connection{


	function add_code($language,$upload_date,$fileloc){
		// return true or false
		return $this->query("insert into code(language,update_date, file_location)
								values('$language','$upload_date','$fileloc')");
	}

	function delete_one_code($id){
		// return true or false
		return $this->query("delete from code where code_id = '$id'");
	}

	function update_one_code($language,$upload_date,$fileloc)
    {
        // return true or false
        return $this->query(
            "update code set language='$language',upload_date='$upload_date',file_location='$fileloc'");
    }



	function select_all_codes(){
		// return array or false
		return $this->fetch("select * from code");
		// return $this->fetch("Select * from codes join brands on product_brand = brands.brand_id
								//  join categories on product_cat = categories.cat_id ");
	}


    function select_one_product($code_id)
    {
        // return associative array or false
        return $this->fetchOne("select * from code inner join categories on products.product_cat = categories.cat_id
                                                        inner join brands on products.product_brand = brands.brand_id
                                                        where product_id='$code_id'");
    }

	function search_product($word)
    {
        // return associative array or false
        return $this->fetch("Select * From code where language Like '%$word%'");
    }




}

?>