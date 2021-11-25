<?php  

require ('../Settings/db_class.php');

class Customer extends Connection{

    function add_user($name, $email, $password){
		// return true or false
		return $this->query("insert into users(username, email, password) values('$name', '$email', '$password')");
	}

	function delete_user($id){
		// return true or false
		return $this->query("delete from user where user_id = '$id'");
	}

	function update_customer($id, $name, $email, $password){
		// return true or false
		return $this->query("update user set username='$name', email='$email', password='$password'");
	}

	function select_all_user(){
		// return array or false
		return $this->fetch("select * from user");
	}

	function select_one_user($id){
		// return associative array or false
		return $this->fetchOne("select * from user where user_id='$id'");
	}

	function login_user($email){
		// return associative array or false
		return $this->fetchOne("select * from user where email='$email'");
	}
}
?>