<?php
$msg = "";
if(isset($_POST['submit_signup'])){
require "../php/server.php";
$name = $_POST['name'];
$address = $_POST['add'];
$image = $_FILES['shop_photo']['name'];
$phone = $_POST['ph'];
$mail = $_POST['mail'];
$user_name = $_POST['uname'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];
$target = "../profile/".basename($_FILES['shop_photo']['name']);


if (empty($name) || empty($address) || empty($phone) || empty($mail) || empty($user_name) || empty($pass) || empty($repass)) {
    header("Location: ../user_signup.php?error=emptyfields");
    exit();
  }
  elseif(!preg_match("/^[a-zA-Z0-9]*$/",$user_name)){
    header("Location: ../user_signup.php?error=invalidusername");
    exit();
  }
  elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../user_signup.php?error=invalidemail");
    exit();
  }elseif ($pass !== $repass) {
    header("Location: ../user_signup.php?error=wrongpass");
    exit();
  }
  else {
    $sql1 = mysqli_query($conn, "SELECT * FROM users WHERE Uname = '$user_name'");
    $row =mysqli_num_rows($sql1);
    if($row > 0){
      header("location: ../user_signup.php?error=usernametaken");
      exit();
    }
    $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE Email = '$mail'");
    $rows =mysqli_num_rows($sql3);
    if($rows > 0){
      header("location: ../user_signup.php?error=emailtaken");
      exit();
    }
    else{
      $hash = password_hash($pass, PASSWORD_DEFAULT);
    $sql = mysqli_query($conn, "INSERT INTO users (name ,email, 	address,phone,	image, username, pass) VALUES('$name', '$mail', '$address',  '$phone','$image','$user_name','$hash')");
    if(move_uploaded_file($_FILES['shop_photo']['tmp_name'], $target)){
      $msg = "success";
          mysqli_query($conn, "UPDATE users SET stat = 1 WHERE Uname = '$user_name'");
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
  header("Location: ../user_signup.php");
  exit();
}
 ?>
