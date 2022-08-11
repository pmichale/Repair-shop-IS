<?php
include "db_conn.php";

if ($conn->connect_error) {
  die("Pripojení k databázi selhalo: " . $conn->connect_error);
}
echo '<p text-align: right; style="font-size:6px;">Databáze pripojena. </p>';

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_GET['term'])) {
    $search_for = $_GET['term'];

    $select = $conn->prepare("SELECT `device_name` FROM `device` WHERE `item` LIKE ?;");
    $select->execute(array("%$search_for%"));
    $data = $select->fetchAll();

    $items = array();
    foreach ($data as $an_item) {
        $items[] = $an_item['item'];
    }
    echo json_encode($items);
}