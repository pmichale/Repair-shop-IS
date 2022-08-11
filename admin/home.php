<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {¨
?>

<?php include('menu.php'); ?>

<!DOCTYPE html>
<html lang="cs">
<head>
<title>Admin</title>
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

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="domu">
    <h1 class="w3-jumbo"><b>Vítej, <?php echo $_SESSION['name']; ?>!</b></h1>
    <h1 class="w3-xxxlarge w3-text-blue"><b>Návod.</b></h1>
    <hr style="width:50px;border:5px solid #2196f3" class="w3-round">
    <p>Tato stránka by sloužila k seznámení s interním systémem, ale už se mi nechce psát, protože to je všechno v README tak jako tak.</p>
  </div>
  


  <!-- Rezervace -->
  <div class="w3-container" id="rezervace" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-blue"><b>Rezervace.</b></h1>
    <hr style="width:50px;border:5px solid #2196f3" class="w3-round">
    <p>Seznam rezervací od zákazníků. Tlačítkem lze vytvořit objednávku.</p>
  </div>
  
    <!-- Objednavky -->
  <div class="w3-container" id="objednavky" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-blue"><b>Objednávky.</b></h1>
    <hr style="width:50px;border:5px solid #2196f3" class="w3-round">
    <p>Seznam objednávek. Tlačítkem lze přejít na detail objednávky, kde lze přidat data.</p>
  </div>
  
  <!-- Dily -->
  <div class="w3-container" id="dily" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-blue"><b>Díly.</b></h1>
    <hr style="width:50px;border:5px solid #2196f3" class="w3-round">
    <p>Tady je seznam dílů a jejich ceny.</p>
  </div>


  <!-- Uzivatele -->
  <div class="w3-container" id="uzivatele" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-blue"><b>Uživatelé.</b></h1>
    <hr style="width:50px;border:5px solid #2196f3" class="w3-round">
    <p>Tady je seznam uživatelů. A možnost registrace nového uživatele.</p>
  </div>


<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"></div>

</body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>