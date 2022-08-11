<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {¨
?>

<!DOCTYPE html>
<html lang="cs">
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Placeholder<br>Servis<br>Admin</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href=".." onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Zpět</a> 
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Návod</a> 
    <a href="rezervace.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Rezervace</a> 
    <a href="objednavky.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Objednávky</a>
    <a href="parts.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Díly</a>
    <a href="users.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Uživatelé</a>
    <?php if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?> <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Odhlásit (<?php echo $_SESSION['user_name']; ?>)</a>
    <?php } ?>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
  <span>Placeholder Servis Admin</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>