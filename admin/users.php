<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<?php include('menu.php'); ?>
<?php include('db_conn.php'); ?>

<!DOCTYPE html>
<html lang="cs">
<head>
<title>Uživatelé</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
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
$sql = "SELECT id, user_name, name FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
} else {
  echo "0 results";
}
?>

<h1>Seznam uživatelů</h1>

<table id="users" name="users" method="post">
<table class="w3-table-all w3-hoverable w3-centered w3-card-4"style="width:40%">
 <tr class="w3-blue">
        <th>id</th>
        <th>Uživatel</th>
        <th>Oslovení</th>
      </tr>
<?php
    foreach($result as $row) {
      echo "  <tr>\n";
      echo "    <td>".$row['id']."</td>\n";
      echo "    <td>".$row['user_name']."</td>\n";
      echo "    <td>".$row['name']."</td>\n";
      echo "  </tr>\n";
    }
  ?>
</table>
<hr>
<a href="signup.php" class="w3-button w3-blue w3-padding-large w3-hover-black">Přidat uživatele</a>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-white w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"></div>

</body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>