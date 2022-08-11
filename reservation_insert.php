<?php
include 'db_conn.php';

if ($conn->connect_error) {
  die("Připojení k databázi selhalo: " . $conn->connect_error);
}
echo '<p text-align: right; style="font-size:6px;">Databáze připojena. </p>';

if($_POST['name']){
    $name = $_POST['name'];
    echo "name ok";
}else{
    echo "name not received";
    exit;
}

if($_POST['email']){
    $email = $_POST['email'];
    echo "email ok";
}else{
    echo "email not received";
    exit;
}

if($_POST['phone']){
    $phone = $_POST['phone'];
    echo "phone ok";
}else{
    echo "phone not received";
    exit;
}

if($_POST['device']){
    $device = $_POST['device'];
    echo "device ok";
}else{
    echo "device not received";
    exit;
}

if($_POST['date']){
    $date = $_POST['date'];
    echo "date ok";
}else{
    echo "date not received";
    exit;
}

if($_POST['problem']){
    $problem = $_POST['problem'];
    echo "problem ok";
}else{
    echo "problem not received";
    exit;
}

$stmt = $conn->prepare("INSERT INTO reservation (customer_name,phone_number,mail,problem,reservation_date,device_id_device,create_date) VALUES (?,?,?,?,?,?,NOW())");
$stmt->bind_param("ssssss",$name,$phone,$email,$problem,$date,$device);
$stmt->execute();

// Commit transaction
if (!$conn -> commit()) {
  echo "Commit transaction failed";
  exit();
}
header("Refresh:0; url=reservation_success.php")
?>
