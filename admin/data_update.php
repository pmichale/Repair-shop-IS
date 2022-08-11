<?php
session_start();
include 'db_conn.php';

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

$table_name = $_POST['table_name'];
$col_name = $_POST['col_name'];
$whereclause = $_POST['whereclause'];
$whereequals = $_POST['whereequals'];

$id_order = $_SESSION['id_order'];

$sqlup = "UPDATE ".$table_name." SET ".$col_name." = '".$thedata."' WHERE ".$whereclause." = ".$whereequals;
$stmt = $conn->prepare($sqlup);
$stmt->execute();

// Commit transaction
if (!$conn -> commit()) {
  echo "Commit transaction failed";
  exit();
}
header("Refresh:0; url=order_detail.php?args=".$id_order)
?>
