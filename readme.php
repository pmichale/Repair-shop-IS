<?php 
session_start();
?>

<?php include('menu.php'); ?>

<!DOCTYPE html>
<html lang="cs">
<head>
<title>Servis</title>
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

  <div class="w3-container" style="margin-top:80px" id="readme">
      <h1 class="w3-jumbo"><b>PŘEČTIMĚ!</b></h1>
    <h1 class="w3-xxxlarge w3-text-blue"><b>Projekt servis.</b></h1>
    <hr style="width:50px;border:5px solid #2196f3" class="w3-round">
    <p>Projekt zahrnuje hlavní stránku servisu s možností zobrazení ceníku a vytvoření rezervace opravy. Zákazník vyplní potřebné údaje, vybere zařízení z vyhledávacího pole s našeptávačem a vytvoří rezervaci.
    Administrační část systému pro zaměstnance je přístupná po přihlášení registrovaným účtem. Heslo je v databázi ukládáno jako sha512 salted hash.</p>
    <p>(login: admin, password: adminpass)</p>
    <p>V sekci "rezervace" je možno prohlížet zákazníky vytvořené rezervace, filtrovat je dle vybraných kritérií a vytvořit k nim příslušnou objednávku.</p>
    <p>Sekce "objednávky" má totožné funkce, ale tlačítko pro vytvoření objednávky nahrazuje 
    možnost přejít na detail objednávky, kde je možné editovat některé zákazníkem zadané informace v případě, že udělal chybu, doplňovat podrobnosti o zařízení a výsledku práce/diagnostiky a přidávat díly do objednávky. Objednávce je přiřazen technik dle přihlášeného uživatele.
    Do objednávky lze přidat pouze skutečně existující kombinace modelů zařízení, kapacity úložiště a barevného provedení.</p>
   <p>V sekci "díly" je možné zobrazit existující díly a jejich cenu a přidávat nové díly. </p>
    <p>Zbývá stránka "uživatelé", kde je možné zobrazit existující uživatelské účty a registrace nového.</p>
    </p>
  </div>

  <div class="w3-container" style="margin-top:80px" id="er">

    <h1 class="w3-xxxlarge w3-text-blue"><b>ER diagram.</b></h1>
    <hr style="width:50px;border:5px solid #2196f3" class="w3-round">
  </div>
  <img src="erd.png" alt="ERD" width="1370" height="550">


<!-- End page content -->
</div>

</body>
</html>
