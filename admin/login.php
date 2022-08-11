<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
     $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Beze jména to nepůjde.");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Bez hesla to nepůjde.");
	    exit();
	}else{

        
		$sql = "SELECT * FROM users WHERE user_name='$uname'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			      $user_password = $row['password'];
			      $salt = substr($user_password, -4);
			      $hash = substr($user_password, 0, -4);
			      $hashpass = hash("sha512", $pass . $salt);
            if ($row['user_name'] == $uname && $hashpass == $hash) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Špatný jméno nebo heslo.");
		        exit();
			}
		}else{
			header("Location: index.php?error=Špatný jméno nebo heslo.");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}