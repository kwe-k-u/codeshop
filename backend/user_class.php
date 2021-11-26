<?php

require ('Database_class.php');

class user extends Connection{

    function add_user($name, $email, $password, $type){


		$this->query("insert into users(username, email, password) values('$name', '$email', '$password'); ");

		$id = $this->get_user_count();



		if ($type === "buyer"){
			return $this->query("insert into buyers values ($id);"); #insert into buyer
		}

		return $this->query("insert into developers values ($id);"); #insert into developer

	}

	function delete_user($id){
		return $this->query("delete from users where user_id = '$id'");
		return $this->query("delete from buyers where user_id = '$id'"); #delete from buyer
		return $this->query("delete from developers where user_id = '$id'"); #delete from developer
	}

	function get_user_count(){
		$response = $this->select_all_user();
		return end($response)["user_id"];
	}

	function update_customer($id, $name, $email, $password){
		return $this->query("update users set username='$name', email='$email', password='$password' where user_id = $id");
	}

	function select_all_user(){
		return $this->fetch("select * from users");
	}

	function select_one_user($id){
		return $this->fetchOne("select * from users where user_id=$id");
	}

	function login_user($email){
		return $this->fetchOne("select * from users where email='$email'");
	}
}
?>
