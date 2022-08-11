<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="cs">
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Placeholder<br>Servis</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Domů</a> 
    <a href="index.php#cenik" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Ceník</a> 
    <a href="index.php#rezervace" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Rezervace</a>
    <a href="admin/" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Admin</a>
    <?php if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?> <a href="admin/logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white" style="color:red;">Odhlásit (<?php echo $_SESSION['user_name']; ?>)</a>
    <?php } ?>
    <a href="readme.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">README</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
  <span>Placeholder Servis</span>
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
