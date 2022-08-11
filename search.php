<?php
include "db_conn.php";

if ($conn->connect_error) {
  die("Pripojení k databázi selhalo: " . $conn->connect_error);
}
echo '<p text-align: right; style="font-size:6px;">Databáze pripojena. </p>';

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$term = $_POST['term'];

$sql = mysql_query("SELECT * FROM  device WHERE device_name LIKE '%$term%'");

while ($row = mysql_fetch_array($sql)){
    echo 'Product ID '.$row['id_device'];
    echo '<br/> Model: '.$row['device_name'];
    echo '<br/><br/>';
    }
?>