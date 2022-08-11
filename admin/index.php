<?php 
session_start();
if (!isset($_SESSION['id']) && !isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html lang="cs">
<html>
<head>
<title>Přihlášení</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
</head>
<style>
body,h1,h2,h3,h4,h5, button {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>
     <form action="login.php" method="post">
     	<h1 class="w3-xxxlarge w3-text-blue"><b>Login.</b></h1>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Login.</label>
     	<input type="text" name="uname" placeholder="login"><br>

     	<label>Heslo.</label>
     	<input type="password" name="password" placeholder="heslo"><br>
     	<div class="w3-left">
     	<a href="https://mrkev.fme.vutbr.cz/~m192291/projekt/index.php" class="w3-button w3-blue w3-padding-large w3-hover-black">Zpět</a>
     	</div>
     	<div class="w3-right" style="-">
     	<button class="w3-button w3-blue w3-padding-large w3-hover-black">Přihlásit se</button>
     	</div>
     </form>
</body>
</html>
<?php 
}else{
     header("Location: home.php");
     exit();
}
 ?>