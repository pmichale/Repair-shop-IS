<?php 
session_start();
?>

<?php include('menu.php'); ?>
<?php include('db_conn.php'); ?>

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

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="rychle">
    <h1 class="w3-jumbo"><b>Opravíme Vaše zařízení!</b></h1>
    <h1 class="w3-xxxlarge w3-text-blue"><b>Rychle.</b></h1>
    <hr style="width:50px;border:5px solid #2196f3" class="w3-round">
    <p>Průměrná délka opravy činí pouhých 25 minut!</p>
    <p>Abychom proces opravy iPhonu co nejvíce urychlili, držíme náhradní díly na všechny modely skladem přímo 
    v našem servisu. Výměnu displeje, baterie, tlačítek i dalších dílů tak provedeme u každého 
    iPhonu na počkání (doba opravy se může lišit dle aktuální vytíženosti servisu), během nichž se 
    u nás můžete občerstvit a odpočinout. Náročnější opravy jako výměnu zadního skla nebo čelního skla 
    zajistíme ještě tentýž den.</p>
  </div>
  


  <!-- Profesionalne -->
  <div class="w3-container" id="profesionalne" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-blue"><b>Profesionálně.</b></h1>
    <hr style="width:50px;border:5px solid #2196f3" class="w3-round">
    <p>Víme co děláme!</p>
    <p>V našem pozáručním servisu dopřáváme vám i telefonům iPhone nadstandardní péči. 
    Věříme, že i malé detaily znamenají velké rozdíly, a děláme proto věci jinak. 
    Naším motorem je spokojenost zákazníků, a poučení z chyb nás nutí dělat věci ještě o něco lépe. 
    Ať už se jedná u vašeho iPhonu o výměnu prasklého displeje nebo záchranu po utopení, dáváme práci 
    maximum a dotahujeme věci do konce. Při jednání i servisu volíme profesionální přístup, 
    jaký bychom v roli zákazníka sami očekávali.
    </p>
  </div>
  
    <!-- Zaruka -->
  <div class="w3-container" id="zaruka" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-blue"><b>Se zárukou.</b></h1>
    <hr style="width:50px;border:5px solid #2196f3" class="w3-round">
    <p>Záruka je u nás samozřejmostí.!</p>
    <p>Na každý náhradní díl poskytujeme na každý náhradní díl záruku v délce 24 měsíců a na provedenou práci 
    dokonce záruku doživotní. V případě výměny samotné baterie se na její životnost vztahuje půlroční záruka.
    </p>
  </div>
  
  <!-- Hodnoceni -->
  <div class="w3-container" id="hodnoceni" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-blue"><b>Na pět hvězd.</b></h1>
    <hr style="width:50px;border:5px solid #2196f3" class="w3-round">
    <p>Máme nejlepší hodnocení mezi tuzemskými servisy.</p>
    <p>Naši zákazníci jsou vždy nadmíru spokojeni. Svědčí o tom recenze na Google, Yelp, Heureka a dalších! Hodnocení v průměru přesahuje 4.9 bodů z 5. A to každý měsíc od zahájení provozu.
    </p>
    <p><b>Vybrané zkušenosti zákazníků:</b></p>
  </div>

  <!-- Recenze -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="jarin.png" alt="Jarin" style="width:20%">
        <div class="w3-container">
          <h3>Jarda Braník</h3>
          <p class="w3-opacity">Hospodský</p>
          <p>Sou vole jakoby fakt machři opravili mi foun ještě než sem dopil škopek.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="jarin.png" alt="Jarin" style="width:20%">
        <div class="w3-container">
          <h3>Jarda Braník</h3>
          <p class="w3-opacity">Hospodský</p>
          <p>Už jsem vám napsal tu pozitvní recenzi. PUSŤTE MĚ VEN!!!!!!!!</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="jarin.png" alt="Jarin" style="width:20%">
        <div class="w3-container">
          <h3>Jarda Braník</h3>
          <p class="w3-opacity">Nezvěstný</p>
          <p style="white-space: pre-wrap">POMOC
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Ceník -->
  <div class="w3-container" id="cenik" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-blue"><b>Výhodně.</b></h1>
    <hr style="width:50px;border:5px solid #2196f3" class="w3-round">
    <p>Jsme <b>nezávislý</b> servis. To nám umožňuje provádět opravy, které autorizované servisy dělat 
    <b>nesmějí</b> a ceny kterým nemohou (nechtějí) konkurovat. Nenechte se <b>donutit</b> 
    své jinak perfektně funkční zařízení vyměnit kvůli jednoduše odstranitelné závadě.</p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">iPhone</li>
        <li class="w3-padding-16">iPhone 4, 4S, 5, 5S</li>
        <li class="w3-padding-16">iPhone SE (2016, 2020, 2022)</li>
        <li class="w3-padding-16">iPhone 6, 6 Plus, 6S, 6S Plus, 7, 7 Plus, 8, 8 Plus</li>
        <li class="w3-padding-16">iPhone X, Xr, XS, XS Max</li>
        <li class="w3-padding-16">iPhone 11, 11 Pro, 11 Pro Max</li>
        <li class="w3-padding-16">iPhone 12, 12 mini, 12 Pro, 12 Pro Max</li>
        <li class="w3-padding-16">iPhone 13, 13 mini, 13 Pro, 13 Pro Max</li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-dark-grey w3-padding-large w3-hover-black" onclick="popup(1)">Kompletní ceník</button>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-blue w3-xlarge w3-padding-32">iPad</li>
        <li class="w3-padding-16">iPad 1 až 4</li>
        <li class="w3-padding-16">iPad Mini 1 až 6</li>
        <li class="w3-padding-16">iPad Air 1 až 5</li>
        <li class="w3-padding-16">iPad Pro 9.7", 10.5", 11", 12.9"</li>
        <li class="w3-padding-16">iPad 9.7"</li>
        <li class="w3-padding-16">iPad 10.2"</li>
        <li class="w3-padding-16">iPad Pro M1</li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-blue w3-padding-large w3-hover-black" onclick="popup(1)">Kompletní ceník</button>
        </li>
      </ul>
    </div>
  </div>
 
 <?php
if ($conn->connect_error) {
  die("Připojení k databázi selhalo: " . $conn->connect_error);
}
//echo '<p text-align: right; style="font-size:6px;">Databáze připojena. </p>';
$sql = "SELECT * FROM device";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
} else {
  echo "0 results";
}
?> 
  <!-- Rezervace -->
  <div class="w3-container" id="rezervace" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-blue"><b>Rezervace.</b></h1>
    <hr style="width:50px;border:5px solid #2196f3" class="w3-round">
    <p>Oprava lze jednoduše objednat vyplněním formuláře.</p>
    <form action="reservation_insert.php" method="post" id="form1">
      <div class="w3-section">
        <label><b>Jméno</b></label>
        <input class="w3-input w3-border" type="text" name="name" required>
      </div>
      <div class="w3-section">
        <label><b>Email</b></label>
        <input class="w3-input w3-border" type="email" name="email" required>
      </div>
      <div class="w3-section">
        <label><b>Telefon</b></label>
        <input class="w3-input w3-border" type="tel" name="phone" required>
      </div>
      <div class="w3-section">
        <label><b>Datum</b></label>
        <input class="w3-input w3-border" type="datetime-local" name="date" required>
      </div>
      <div class="w3-section">
      <label><b>Zařízení</b></label> <br>
      <input hidden class="input w3-border" type="text" name="device" id="device" readonly required>
      <div class="w3-block w3-dropdown-click">
      <input class="w3-input w3-border" onclick="dropFunction()" type="text" id="devicestring" readonly>
      <button hidden class="button w3-blue" type=button onclick="dropFunction()">Výběr</button>
      <div class="w3-dropdown-content w3-bar-block w3-card w3-light-grey" id="myDIV">
      <input class="w3-input w3-padding" type="text" placeholder="Vyhledat" id="myInput" onkeyup="filterFunction()">
      <?php
          foreach($result as $row) {
            echo '<a class="w3-bar-item w3-button" id="'.$row['id_device'].'" title="'.$row['device_name'].'" onclick="dropFunction(), devsel('.$row['id_device'].')">'.$row['device_name'].'</a>';
          }
       ?>
      </div>
      </div>
      <div class="w3-section">
        <label><b>Závada</b></label>
        <input class="w3-input w3-border" type="text" name="problem" required>
      </div>
      <button type="submit" id="submitBT" class="w3-button w3-block w3-padding-large w3-blue w3-margin-bottom" disabled>Rezervovat</button>
    </form> 

 </div>
 </div>





  
<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"></div>

<?php
if ($conn->connect_error) {
  die("Pripojení k databázi selhalo: " . $conn->connect_error);
}

//echo '<p text-align: right; style="font-size:6px;">Databáze pripojena. </p>';
$sqlparts = "SELECT * FROM parts";
$resultparts = $conn->query($sqlparts);
if ($resultparts->num_rows > 0) {
} else {
  echo "0 results";
}
?>

  <div id="id1" class="w3-modal">
        <span onclick="document.getElementById('id1').style.display='none'" class="w3-button w3-red w3-display-topmiddle">&times;</span>
        <table id="parts" name="parts" method="post">
        <table class="w3-modal-content w3-animate-zoom w3-table-all w3-hoverable w3-card-4"style="width:40%">
        <tr class="w3-blue">
                <th>Oprava</th>
                <th class="w3-center">Cena</th>
        </tr>
<?php
    foreach($resultparts as $rowparts) {
      echo "    <td>".$rowparts['part_name']."</td>";
      echo '    <td class="w3-center">'.$rowparts['price'].' Kč</td>';
      echo "  </tr>\n";
    }
?>

      </div>
    </div>
  </div>



</body>

<script>
// Dropdown
function dropFunction() {
  var x = document.getElementById("myDIV");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Filter
function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDIV");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

function devsel(id) {
  var deviceform = document.getElementById("device");
  var devnamdisp = document.getElementById("devicestring");
  var devnam = document.getElementById(id);
  var name = devnam.getAttribute('title');
  var butt = document.getElementById('submitBT');
  deviceform.value = id;
  devnamdisp.value = name;
  butt.disabled = false;
}

function popup(id_id) {
if (id_id == 1) {
  var id_str = 'id1';}
  if (id_id == 2) {
  var id_str = 'id2';}
  document.getElementById(id_str).style.display='block'
}

</script>

</html>
