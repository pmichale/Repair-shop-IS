<?php
session_start();
include 'db_conn.php';

if ($conn->connect_error) {
  die("Připojení k databázi selhalo: " . $conn->connect_error);
}

echo '<p text-align: right; style="font-size:6px;">Databáze připojena. </p>';

$allvals = array();
$id_order = $_SESSION['id_order'];
foreach($_POST as $item){
    $val = "('".$item."', '".$id_order."')";
    array_push($allvals, $val);
}

$stringarray = array();
foreach($allvals as $allsql)
{
	array_push($stringarray,$allsql);
}
$stringsql = implode(",",$stringarray);
 


$sqlup = "INSERT INTO `order_has_part` (`part_id_part`, `orders_id_order`) VALUES ".$stringsql;
echo $sqlup;
$stmt = $conn->prepare($sqlup);
$stmt->execute();

// Commit transaction
if (!$conn -> commit()) {
  echo "Commit transaction failed";
  exit();
}
header("Refresh:0; url=order_detail.php?args=".$id_order)
?>

