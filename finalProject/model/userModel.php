<?php 
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

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

		$res = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($res);

		if(mysqli_num_rows($res)){
			$_SESSION['uid'] = $row["id"];
			$_SESSION['utype'] = $row["usertype"];
			$_SESSION['uname'] = $row["username"];
			$_SESSION['upass'] = $row["password"];
			$_SESSION['uemail'] = $row["email"];
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
		$sql = "SELECT * FROM users WHERE id = '{$id}'";

		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		$usertype = $row["usertype"];
		$username = $row["username"];
		$password = $row["password"];
		$email = $row["email"];

		return array($usertype,$username,$password,$email);
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

	function updateUser($id, $username, $password, $email){
		$conn = getConnection();
		$sql = "UPDATE users SET username='{$username}',password='{$password}',email='{$email}' WHERE id='{$id}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllNotice(){
		$conn = getConnection();
		$sql = "SELECT * FROM notice";

		$res = mysqli_query($conn, $sql);
		return $res;
	}

	function deleteNoticeById($id){
		$conn = getConnection();
		$sql = "DELETE FROM notice WHERE id='{$id}'";
		$del = mysqli_query($conn, $sql);
		
		if($del){
			return true;
		}
		else{
			return false;
		}
	}

	function addNotice($date, $title, $detail){
		$conn = getConnection();
		$sql = "insert into notice values ('','{$date}', '{$title}', '{$detail}')";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>