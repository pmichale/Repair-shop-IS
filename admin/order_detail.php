<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<?php include('menu.php'); ?>
<?php include('db_conn.php'); ?>

<?php
 if(!empty($_GET['args'])){

    $id_order = $_GET['args'];
    echo $paramOne;
    echo "<br>";
?>


<!DOCTYPE html>
<html lang="cs">
<head>
<title>Objednávka</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

<?php
if ($conn->connect_error) {
  die("Připojení k databázi selhalo: " . $conn->connect_error);
}
echo '<br>';
//echo '<p text-align: right; style="font-size:6px;">Databáze připojena. </p>';
$stmt = $conn->prepare("SELECT reservation.id_reservation, orders.id_order, reservation.customer_name, device.device_name, device.id_device, reservation.problem,
orders.initial_state, orders.resulting_state, orders.IMEI_SN, users.user_name, reservation.reservation_date, reservation.create_date, device_storage.storage,
device_color.color, reservation.phone_number, reservation.mail, orders.id_device_color, orders.id_device_storage
FROM (((((orders 
LEFT JOIN reservation ON reservation.id_reservation = orders.reservation_id_reservation) 
LEFT JOIN device ON device.id_device = reservation.device_id_device)
LEFT JOIN device_storage ON device_storage.id_device_storage = orders.id_device_storage)
LEFT JOIN device_color ON device_color.id_device_color = orders.id_device_color)
LEFT JOIN users ON users.id = orders.user_id)
WHERE id_order = ?");
$stmt->bind_param("s",$id_order);
$stmt->execute();
$result = $stmt->get_result();

$justpart = $conn->prepare("SELECT orders.id_order, parts.part_name
FROM((orders
INNER JOIN order_has_part ON order_has_part.orders_id_order = orders.id_order)
INNER JOIN parts ON parts.id_part = order_has_part.part_id_part)
WHERE id_order = ?");
$justpart->bind_param("s",$id_order);
$justpart->execute();
$resultpart = $justpart->get_result();

if ($result->num_rows > 0) {
} else {
  echo "0 results";
}
?>
<?php echo '<h1>Objednávka: '.$id_order.'</h1>' ?>


<?php
    foreach($result as $row) {
      echo '    <div style="width:50%"> <header class="w3-container w3-light-grey"><h5>Jméno zákazníka</h5></header>';
      echo '    <ul class="w3-ul w3-center">';
      echo '    <li>'.$row['customer_name'];
      echo '    </li></ul></div>';
      echo '    <div style="width:50%"> <header class="w3-container w3-light-grey"><h5>E-mail</h5></header>';
      echo '    <ul class="w3-ul w3-center">';
      echo '    <li onclick="popup(1)" class="w3-hover-blue">'.$row['mail'].'</li>';
      echo '    </li></ul></div>';
      echo '    <div style="width:50%"> <header class="w3-container w3-light-grey"><h5>Telefon</h5></header>';
      echo '    <ul class="w3-ul w3-center">';
      echo '    <li onclick="popup(2)" class="w3-hover-blue">'.$row['phone_number'].'</li>';
      echo '    </li></ul></div>';
      echo '    <div style="width:50%"> <header class="w3-container w3-light-grey"><h5>Zařízení</h5></header>';
      echo '    <ul class="w3-ul w3-center">';
      echo '    <li>'.$row['device_name'].'</li>';
      echo '    </li></ul></div>';
      echo '    <div style="width:50%"> <header class="w3-container w3-light-grey"><h5>Úložiště</h5></header>';
      echo '    <ul class="w3-ul w3-center">';
      if(is_null($row['storage'])){
      echo '    <li onclick="popup(3)" class="w3-hover-blue">Doplň velikost úložiště.</li>';}
      else{
      echo '    <li onclick="popup(3)" class="w3-hover-blue">'.$row['storage'].'</li>';
      }
      echo '    </li></ul></div>';
      echo '    <div style="width:50%"> <header class="w3-container w3-light-grey"><h5>Barva</h5></header>';
      echo '    <ul class="w3-ul w3-center">';
      if(is_null($row['color'])){
      echo '    <li onclick="popup(4)" class="w3-hover-blue">Doplň barevné provedení.</li>';}
      else{
      echo '    <li onclick="popup(4)" class="w3-hover-blue">'.$row['color'].'</li>';
      }
      echo '    </ul></div>';
      echo '    <div style="width:50%"> <header class="w3-container w3-light-grey"><h5>IMEI nebo SN</h5></header>';
      echo '    <ul class="w3-ul w3-center">';
      echo '    <li onclick="popup(5)" class="w3-hover-blue">'.$row['IMEI_SN'].'</li>';
      echo '    </li></ul></div>';
      echo '    <div style="width:50%"> <header class="w3-container w3-light-grey"><h5>Závada</h5></header>';
      echo '    <ul class="w3-ul w3-center">';
      echo '    <li>'.$row['problem'].'</li>';
      echo '    </li></ul></div>';
      echo '    <div style="width:50%"> <header class="w3-container w3-light-grey"><h5>Stav při převzetí</h5></header>';
      echo '    <ul class="w3-ul w3-center">';
      echo '    <li onclick="popup(6)" class="w3-hover-blue">'.$row['initial_state'].'</li>';
      echo '    </li></ul></div>';
      echo '    <div style="width:50%"> <header class="w3-container w3-light-grey"><h5>Výsledek</h5></header>';
      echo '    <ul class="w3-ul w3-center">';
      echo '    <li onclick="popup(7)" class="w3-hover-blue">'.$row['resulting_state'].'</li>';
      echo '    </li></ul></div>';
      echo '    <div style="width:50%"> <header class="w3-container w3-light-grey"><h5>Použité díly</h5></header>';
      echo '    <ul class="w3-ul w3-center">';
      $allparts = array();
      foreach($resultpart as $rowpart){
          array_push($allparts, $rowpart['part_name']);
      }
      $stringarray = array();
      foreach($allparts as $allprt)
      {
	      array_push($stringarray,$allprt);
      }
      $stringparts = implode(", ",$stringarray);
      if(is_null($rowpart['part_name'])){
      echo '    <li onclick="popup(8)" class="w3-hover-blue">Doplň použité díly.</li>';}
      else{
      echo '    <li onclick="popup(8)" class="w3-hover-blue">'.$stringparts.'</li>';
      }
      echo '    </ul></div>';
      echo '    <div style="width:50%"> <header class="w3-container w3-light-grey"><h5>Technik</h5></header>';
      echo '    <ul class="w3-ul w3-center">';
      echo '    <li>'.$row['user_name'].'</li>';
      echo '    </li></ul></div>';
      echo '    <div style="width:50%"> <header class="w3-container w3-light-grey"><h5>Datum přijetí rezervace</h5></header>';
      echo '    <ul class="w3-ul w3-center">';
      echo '    <li>'.$row['create_date'].'</li>';
      echo '    </li></ul></div>';
      echo '    <div style="width:50%"> <header class="w3-container w3-light-grey"><h5>Rezervovaný termín</h5></header>';
      echo '    <ul class="w3-ul w3-center">';
      echo '    <li>'.$row['reservation_date'].'</li>';
      echo '    </li></ul></div>';
      $id_device = $row['id_device'];
    }
  $juststorage = $conn->prepare("SELECT device.id_device, device.device_name, device_storage.storage, device_storage.id_device_storage
  FROM((device
  LEFT JOIN device_has_device_storage ON device_has_device_storage.device_id_device = device.id_device)
  LEFT JOIN device_storage ON device_storage.id_device_storage = device_has_device_storage.device_storage_id_device_storage)
  WHERE device.id_device = ?");
  $juststorage->bind_param("s",$id_device);
  $juststorage->execute();
  $resultstorage = $juststorage->get_result();
  
  $justcolor = $conn->prepare("SELECT device.id_device, device.device_name, device_color.color, device_color.id_device_color
  FROM((device
  LEFT JOIN device_has_device_color ON device_has_device_color.device_id_device = device.id_device)
  LEFT JOIN device_color ON device_color.id_device_color = device_has_device_color.device_color_id_device_color)
  WHERE device.id_device = ?");
  $justcolor->bind_param("s",$id_device);
  $justcolor->execute();
  $resultcolor = $justcolor->get_result();
  
  $partstock = $conn->prepare("SELECT * FROM parts");
  $partstock->execute();
  $resultstock = $partstock->get_result();

  $_SESSION['id_order'] = $row['id_order'];
  ?>
<hr>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-white w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"></div>

  <div id="id1" class="w3-modal">
    <div class="w3-modal-content w3-animate-opacity">
      <div class="w3-container w3-card">
        <span onclick="document.getElementById('id1').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      <?php
      echo '<h2>E-mail</h2>';
      echo '<form action="data_update.php" method="post">';
      echo '<input class="input w3-border" type="text" name="thedata" value="'.$row['mail'].'" required>';
      
      echo '<input hidden class="input w3-border" type="text" name="table_name" value="reservation" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="col_name" value="mail" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="whereclause" value="id_reservation" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="whereequals" value="'.$row['id_reservation'].'" readonly required>';

      echo '<br><br><button type="submit" id="submitBT" class="w3-button w3-blue w3-padding-small">Uložit</button>';
      echo '</form><br>';
      ?>
      </div>
    </div>
  </div>

  <div id="id2" class="w3-modal">
    <div class="w3-modal-content w3-animate-opacity">
      <div class="w3-container w3-card">
        <span onclick="document.getElementById('id2').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      <?php
      echo '<h2>Telefonní číslo</h2>';
      echo '<form action="data_update.php" method="post">';
      echo '<input class="input w3-border" type="text" name="thedata" value="'.$row['phone_number'].'" required>';

      echo '<input hidden class="input w3-border" type="text" name="table_name" value="reservation" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="col_name" value="phone_number" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="whereclause" value="id_reservation" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="whereequals" value="'.$row['id_reservation'].'" readonly required>';

      echo '<br><br><button type="submit" id="submitBT" class="w3-button w3-blue w3-padding-small">Uložit</button>';
      echo '</form><br>';
      ?>
      </div>
    </div>
  </div>

  <div id="id3" class="w3-modal">
    <div class="w3-modal-content w3-animate-opacity">
      <div class="w3-container w3-card">
        <span onclick="document.getElementById('id3').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      <?php
      echo '<h2>Úložište</h2>';
      echo '<form action="data_update.php" method="post">';
      echo '<select name="thedata" id="thedata">';
      echo '<option disabled hidden selected>Vyber úložiště</option>';
      foreach($resultstorage as $rowstorage) {
      echo '<option value="'.$rowstorage['id_device_storage'].'">'.$rowstorage['storage'].'</option>';
      }
      echo '</select>';
      echo '<input hidden class="input w3-border" type="text" name="table_name" value="orders" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="col_name" value="id_device_storage" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="whereclause" value="id_order" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="whereequals" value="'.$id_order.'" readonly required>';

      echo '<br><br><button type="submit" id="submitBT" class="w3-button w3-blue w3-padding-small">Uložit</button>';
      echo '</form><br>';
      ?>
      </div>
    </div>
  </div>

  <div id="id4" class="w3-modal">
    <div class="w3-modal-content w3-animate-opacity">
      <div class="w3-container">
        <span onclick="document.getElementById('id4').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      <?php
      echo '<h2>Barva</h2>';
      echo '<form action="data_update.php" method="post">';
      echo '<select name="thedata" id="thedata">';
      echo '<option disabled hidden selected>Vyber barvu</option>';
      foreach($resultcolor as $rowcolor) {
      echo '<option value="'.$rowcolor['id_device_color'].'">'.$rowcolor['color'].'</option>';
      }
      echo '</select>';
      echo '<input hidden class="input w3-border" type="text" name="table_name" value="orders" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="col_name" value="id_device_color" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="whereclause" value="id_order" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="whereequals" value="'.$id_order.'" readonly required>';

      echo '<br><br><button type="submit" id="submitBT" class="w3-button w3-blue w3-padding-small">Uložit</button>';
      echo '</form><br>';
      ?>
      </div>
    </div>
  </div>
  
  <div id="id5" class="w3-modal">
    <div class="w3-modal-content w3-animate-opacity">
      <div class="w3-container w3-card">
        <span onclick="document.getElementById('id5').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      <?php
      echo '<h2>IMEI nebo sériové číslo</h2>';
      echo '<form action="data_update.php" method="post">';
      echo '<input class="input w3-border" style="width:50%" type="text" name="thedata" value="'.$row['IMEI_SN'].'" required>';
      
      echo '<input hidden class="input w3-border" type="text" name="table_name" value="orders" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="col_name" value="IMEI_SN" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="whereclause" value="id_order" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="whereequals" value="'.$id_order.'" readonly required>';

      echo '<br><br><button type="submit" id="submitBT" class="w3-button w3-blue w3-padding-small">Uložit</button>';
      echo '</form><br>';
      ?>
      </div>
    </div>
  </div>

  <div id="id6" class="w3-modal">
    <div class="w3-modal-content w3-animate-opacity">
      <div class="w3-container w3-card">
        <span onclick="document.getElementById('id6').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      <?php
      echo '<h2>Stav při převzetí</h2>';
      echo '<form action="data_update.php" method="post">';
      echo '<input class="input w3-border" style="width:70%" type="text" name="thedata" value="'.$row['initial_state'].'" required>';

      echo '<input hidden class="input w3-border" type="text" name="table_name" value="orders" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="col_name" value="initial_state" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="whereclause" value="id_order" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="whereequals" value="'.$id_order.'" readonly required>';

      echo '<br><br><button type="submit" id="submitBT" class="w3-button w3-blue w3-padding-small">Uložit</button>';
      echo '</form><br>';
      ?>
      </div>
    </div>
  </div>
  
  <div id="id7" class="w3-modal">
    <div class="w3-modal-content w3-animate-opacity">
      <div class="w3-container w3-card">
        <span onclick="document.getElementById('id7').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      <?php
      echo '<h2>Výsledek opravy/diagnostiky, stav při vyzvednutí</h2>';
      echo '<form action="data_update.php" method="post">';
      echo '<input class="input w3-border" style="width:70%" type="text" name="thedata" value="'.$row['resulting_state'].'" required>';

      echo '<input hidden class="input w3-border" type="text" name="table_name" value="orders" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="col_name" value="resulting_state" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="whereclause" value="id_order" readonly required>';
      echo '<input hidden class="input w3-border" type="text" name="whereequals" value="'.$id_order.'" readonly required>';

      echo '<br><br><button type="submit" id="submitBT" class="w3-button w3-blue w3-padding-small">Uložit</button>';
      echo '</form><br>';
      ?>
      </div>
    </div>
  </div>

  <div id="id8" class="w3-modal">
    <div class="w3-modal-content w3-animate-opacity">
      <div class="w3-container">
        <span onclick="document.getElementById('id8').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      <?php
      echo '<h2>Přidat nebo smazat díly:</h2>';
      echo '<form action="part_insert.php" method="post">'; 
      foreach($resultstock as $rowstock) {
      echo '<p><input class="w3-check" type="checkbox" name="'.$rowstock['id_part'].'" value="'.$rowstock['id_part'].'"><label> '.$rowstock['part_name'].'</label></p>';
      }
      echo '<br><br><button type="submit" id="submitBT" class="w3-button w3-blue w3-padding-small">Přidat díly</button>';
      echo '</form><p> </p>';
      echo '<form action="part_clear.php" method="post">';
      echo '<input hidden class="input w3-border" type="text" name="whereequals" value="'.$id_order.'" readonly required>'; 
      echo '<button type="submit" id="submitBT" class="w3-button w3-red w3-padding-small">Smazat všechny díly z objednávky</button>';
      echo '</form><br>';
      ?>
      </div>
    </div>
  </div>
  
</body>
</html>

<script>

function popup(id_id) {
if (id_id == 1) {
  var id_str = 'id1';}
if (id_id == 2) {
  var id_str = 'id2';}
if (id_id == 3) {
  var id_str = 'id3';}
if (id_id == 4) {
  var id_str = 'id4';}
if (id_id == 5) {
  var id_str = 'id5';}
if (id_id == 6) {
  var id_str = 'id6';}
if (id_id == 7) {
  var id_str = 'id7';}
if (id_id == 8) {
  var id_str = 'id8';}
  document.getElementById(id_str).style.display='block'
}

</script>
<?php
} 
else{
    echo "The args was not received";
}

?>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>