<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<?php include('menu.php'); ?>
<?php include('db_conn.php'); ?>

<!DOCTYPE html>
<html lang="cs">
<head>
<title>Objednávky</title>
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
$sql = "SELECT reservation.id_reservation, orders.id_order, reservation.customer_name, device.device_name, reservation.problem, orders.initial_state, orders.resulting_state
FROM ((orders 
LEFT JOIN reservation ON reservation.id_reservation = orders.reservation_id_reservation) 
LEFT JOIN device ON device.id_device = reservation.device_id_device)
ORDER BY `orders`.`id_order` DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
} else {
  echo "0 results";
}
?>

<h1>Objednávky</h1>
<br>
<span>Vyhledávat dle: </span><br>
<button class="w3-button w3-blue w3-hover-black" onclick="switchfilter(0)">id</button>
<button class="w3-button w3-blue w3-hover-black" onclick="switchfilter(1)">Jméno</button>
<button class="w3-button w3-blue  w3-hover-black" onclick="switchfilter(2)">Zařízení</button>
<button class="w3-button w3-blue  w3-hover-black" onclick="switchfilter(3)">Závada</button>
<button class="w3-button w3-blue  w3-hover-black" onclick="switchfilter(4)">Stav</button>
<input class="w3-input w3-border w3-padding" type="text" style="width:90%" placeholder="Vyber kategorii a vyhledávej" id="lookup" onkeyup="myFunction()" disabled>
<table id="users" name="users" method="post">
<table class="w3-table-all w3-hoverable w3-centered w3-card-4" id=restable style="width:90%">
 <tr class="w3-blue">
        <th>id</th>
        <th>Jméno</th>
        <th>Zařízení</th>
        <th>Uvedená závada</th>
        <th>Stav při převzetí</th>
        <th>Výsledek</th>
        <th>Detail</th>
      </tr>
<?php
    foreach($result as $row) {
      echo "  <tr>\n";
      echo '    <td>'.$row['id_order'].'</td>';
      echo "    <td>".$row['customer_name']."</td>\n";
      echo "    <td>".$row['device_name']."</td>\n";
      echo "    <td>".$row['problem']."</td>\n";
      echo "    <td>".$row['initial_state']."</td>\n";
      echo "    <td>".$row['resulting_state']."</td>\n";
      echo '    <td><a href="order_detail.php?args='.$row['id_order'].'" method="post"><button type="submit" id="submitBT" class="fa fa-arrow-right w3-button w3-blue w3-hover-black" onclick="order('.$row['id_order'].')"></button>
      <input hidden class="input w3-border" type="text" name="id_order" id="'.$row['id_order'].'" readonly required> </a></td>';
      echo "  </tr>\n";
    }
?>
</table>
<hr>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-white w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"></div>

</body>
</html>

<script>
document.getElementById("lookup").style.opacity = "0.25";

function myFunction() {
  var input, filter, table, tr, td, i;
  let xxx = localStorage.getItem('filter');
  input = document.getElementById("lookup");
  filter = input.value.toUpperCase();
  table = document.getElementById("restable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[xxx];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function switchfilter(fil) {
  var lookup = document.getElementById('lookup');
  var index = fil;
  lookup.disabled = false;
  lookup.value ='';
  localStorage.setItem('filter', `${index}`);
  document.getElementById("lookup").style.opacity = "1";
  myFunction();
}
  
  
function order(id) {
  var resform = document.getElementById(id);
  resform.value = id;
}

</script>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>