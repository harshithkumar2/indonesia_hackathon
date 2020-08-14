<?php
$msg = "";
if(isset($_POST['submit_signup'])){
require "../php/server.php";
$name = $_POST['name'];
$address = $_POST['add'];
$type = $_POST['type'];
$image = $_FILES['shop_photo']['name'];
$phone = $_POST['ph'];
$mail = $_POST['mail'];
$user_name = $_POST['uname'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];
$description = $_POST['desc'];
$target = "../profile/".basename($_FILES['shop_photo']['name']);


if (empty($name) || empty($address) || empty($phone) || empty($mail) || empty($user_name) || empty($pass) || empty($repass)|| empty($description) || empty($type)) {
    header("Location: ../shopssignup.php?error=emptyfields");
    exit();
  }
  elseif(!preg_match("/^[a-zA-Z0-9]*$/",$user_name)){
    header("Location: ../shopssignup.php?error=invalidusername");
    exit();
  }
  elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../shopssignup.php?error=invalidemail");
    exit();
  }elseif ($pass !== $repass) {
    header("Location: ../shopssignup.php?error=wrongpass");
    exit();
  }
  else {
    $sql1 = mysqli_query($conn, "SELECT * FROM shop WHERE Uname = '$user_name'");
    $row =mysqli_num_rows($sql1);
    if($row > 0){
      header("location: ../shopssignup.php?error=usernametaken");
      exit();
    }
    $sql3 = mysqli_query($conn, "SELECT * FROM shop WHERE Email = '$mail'");
    $rows =mysqli_num_rows($sql3);
    if($rows > 0){
      header("location: ../shopssignup.php?error=emailtaken");
      exit();
    }
    else{
      $hash = password_hash($pass, PASSWORD_DEFAULT);
    $sql = mysqli_query($conn, "INSERT INTO shop (Name ,Uname, 	Address, type,	Email, 	phone, 	pwd, 	image, 	description) VALUES('$name', '$user_name', '$address', '$type', '$mail', '$phone', '$hash','$image', '$description')");
    if(move_uploaded_file($_FILES['shop_photo']['tmp_name'], $target)){
      $msg = "success";
          mysqli_query($conn, "UPDATE shop SET stat = 1 WHERE Uname = '$user_name'");
        }
        else {
          $msg="failed";
        }
    header("location: ../shop_login.php?success=Done");
    exit();
  }
  }
}
else {
  header("Location: ../shopssignup.php");
  exit();
}
 ?>
