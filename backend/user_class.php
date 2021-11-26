<?php

require ('Database_class.php');

class user extends Connection{

    function add_user($name, $email, $password){
		return $this->query("insert into users(username, email, password) values('$name', '$email', '$password')");

	}

	function delete_user($id){
		return $this->query("delete from user where user_id = '$id'");
	}

	function update_customer($id, $name, $email, $password){
		return $this->query("update user set username='$name', email='$email', password='$password'");
	}

	function select_all_user(){
		return $this->fetch("select * from user");
	}

	function select_one_user($id){
		return $this->fetchOne("select * from user where user_id='$id'");
	}

	function login_user($email){
		return $this->fetchOne("select * from user where email='$email'");
	}
}
?>
