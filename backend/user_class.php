<?php

require ('Database_class.php');

class user extends Connection{

    function add_user($name, $email, $password, $type){
		$this->query("insert into users(username, email, password) values('$name', '$email', '$password') ");
		// $id = $this->getlast("insert into users(username, email, password) values('$name', '$email', '$password') ");

		$id = count(array($this->select_all_user()));

		if ($type === "buyer"){
			return $this->query("insert into buyers values ($id);"); #insert into buyer
		}

		return $this->query("insert into developers values ($id);"); #insert into developer

	}

	function delete_user($id){
		return $this->query("delete from user where user_id = '$id'");
		return $this->query("delete from buyer where user_id = '$id'"); #delete from buyer
		return $this->query("delete from developer where user_id = '$id'"); #delete from developer
	}

	function get_user_count(){
		$response = $this->select_all_user();
		return count($response);
	}

	function update_customer($id, $name, $email, $password){
		return $this->query("update user set username='$name', email='$email', password='$password' where user_id = $id");
	}

	function select_all_user(){
		return $this->fetch("select * from user");
	}

	function select_one_user($id){
		return $this->fetchOne("select * from user where user_id=$id");
	}

	function login_user($email){
		return $this->fetchOne("select * from user where email='$email'");
	}
}
?>
