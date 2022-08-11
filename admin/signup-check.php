<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
     $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: signup.php?error=Bez loginu to nepůjde.&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Bez hesla to nepůjde.&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Bez potvrzení hesla to nepůjde.&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Bez jména to nepůjde.&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=Hesla se neshodují.&$user_data");
	    exit();
	}

	else{
      $password = $pass;
      $salt = str_pad((string) rand(1, 1000), 4, '0', STR_PAD_LEFT);
      $pass = hash("sha512", $password . $salt) . $salt;
	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=Login je již používaný.&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Účet byl vytvořen úspěšně.");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}