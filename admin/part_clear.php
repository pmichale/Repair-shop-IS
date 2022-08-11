<?php
session_start();
include 'db_conn.php';

if ($conn->connect_error) {
  die("Připojení k databázi selhalo: " . $conn->connect_error);
}
echo '<p text-align: right; style="font-size:6px;">Databáze připojena. </p>';
$id_order = $_SESSION['id_order'];
$where = $_POST['whereequals'];
$stmt = $conn->prepare("DELETE FROM `order_has_part` WHERE `order_has_part`.`orders_id_order` = ?");
$stmt->bind_param("s",$where);
$stmt->execute();

// Commit transaction
if (!$conn -> commit()) {
  echo "Commit transaction failed";
  exit();
}
header("Refresh:0; url=order_detail.php?args=".$id_order)
?>

