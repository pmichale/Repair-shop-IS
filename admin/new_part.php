<?php
include 'db_conn.php';

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

if ($conn->connect_error) {
  die("Připojení k databázi selhalo: " . $conn->connect_error);
}
echo '<p text-align: right; style="font-size:6px;">Databáze připojena. </p>';

if($_POST['thedata']){
    $thedata = $_POST['thedata'];
    echo " ";
}else{
    echo "thedata not received";
    exit;
}

if($_POST['price']){
    $price = $_POST['price'];
    echo " ";
}else{
    echo "price not received";
    exit;
}

$stringsql = "('".$thedata."', '".$price."')"; 

$sqlup = "INSERT INTO `parts` (`part_name`, `price`) VALUES ".$stringsql;
echo $sqlup;
$stmt = $conn->prepare($sqlup);
$stmt->execute();

// Commit transaction
if (!$conn -> commit()) {
  echo "Commit transaction failed";
  exit();
}
header("Refresh:1; url=parts.php");

}
else{
     header("Location: index.php");
     exit();
}
 ?>