<?php
include 'db_conn.php';

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

if ($conn->connect_error) {
  die("Připojení k databázi selhalo: " . $conn->connect_error);
}
echo '<p text-align: right; style="font-size:6px;">Databáze připojena. </p>';

if($_POST['res_id']){
    $res_id = $_POST['res_id'];
    echo "res_id ok";
}else{
    echo "res_id not received";
    exit;
}

$stmt = $conn->prepare("INSERT INTO `orders` (`initial_state`, `resulting_state`, `IMEI_SN`, `reservation_id_reservation`, `user_id`)
VALUES ('Stav zařízení při převzetí', 'Stav zařízení po opravě', 'IMEI nebo sériové číslo', ?, ?)");
$stmt->bind_param("ss",$res_id,$_SESSION['id']);
$stmt->execute();

// Commit transaction
if (!$conn -> commit()) {
  echo "Commit transaction failed";
  exit();
}
header("Refresh:0; url=order_success.php");

}
else{
     header("Location: index.php");
     exit();
}
 ?>