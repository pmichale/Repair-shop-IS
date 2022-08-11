<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
<title>Založení účtu</title>
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
     <form action="signup-check.php" method="post">
     	<h1 class="w3-xxxlarge w3-text-blue"><b>Registrace.</b></h1>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Oslovení.</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="jméno"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="jméno"><br>
          <?php }?>

          <label>Login.</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="login"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="login"><br>
          <?php }?>


     	<label>Heslo.</label>
     	<input type="password" 
                 name="password" 
                 placeholder="heslo"><br>

          <label>Ověření hesla</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="heslo znovu"><br>
                 
      <a href="https://mrkev.fme.vutbr.cz/~m192291/projekt/admin/users.php" class="w3-button w3-blue w3-padding-large w3-hover-black">Zpět</a>
     	<button class="w3-button w3-blue w3-padding-large w3-hover-black">Registrovat</button>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>