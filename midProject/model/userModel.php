<?php 

	function getConnection(){
		$host = "localhost";
		$dbname= "webtech";
		$dbuser = "root";
		$dbpass = "";

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}


	function login($usertype, $username, $password){
		$conn = getConnection();
		$sql = "select * from users where usertype='{$usertype}' and username='{$username}' and password='{$password}'";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	function signup($usertype, $username, $password, $email){
		$conn = getConnection();
		$sql = "insert into users values ('','{$usertype}', '{$username}', '{$password}', '{$email}')";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "SELECT * FROM users WHERE usertype != 'admin'";

		$res = mysqli_query($conn, $sql);
		return $res;
	}

	function getUserById($id){
		$conn = getConnection();

	}

	function deleteUserById($id){
		$conn = getConnection();
		$sql = "DELETE FROM users WHERE id='{$id}'";
		$del = mysqli_query($conn, $sql);
		
		if($del){
			return true;
		}
		else{
			return false;
		}
	}

	function updateUser($user){
		$conn = getConnection();
	}

?>