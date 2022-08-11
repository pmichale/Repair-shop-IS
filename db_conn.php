<?php

$sname= "localhost";
$unmae= "m192291";
$password = "mrkev.5225";
$db_name = "m192291";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}