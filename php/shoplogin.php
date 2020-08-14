<?php
if(isset($_POST['shop_login'])){
  require "../php/server.php";

  $login_name = $_POST['uname'];
  $login_pass = $_POST['pass'];

  if (empty($login_name) || empty($login_pass) ) {
    header("Location: ../shop_login.php?error=emptyfields");
    exit();
  }else{
    $sql = mysqli_query($conn , "SELECT * FROM shop WHERE Uname = '$login_name'");
    $num = mysqli_num_rows($sql);
    if($num == 1){
      $row = mysqli_fetch_assoc($sql);
      $pass_check = password_verify($login_pass, $row['pwd']);
      if($pass_check == true){
        session_start();
        $_SESSION['userID'] = $row['Id'];
        $_SESSION['userName'] = $row['Uname'];
        header("location: ../index.php?success=loggedIN");
        exit();
      }else{
        header("location: ../shop_login.php?error=wrongpwd");
        exit();
      }
    }else{
      header("location: ../shop_login.php?error=nouserfound");
      exit();
    }
  }
}else{
  header("location: ../shop_login.php");
  exit();
}
 ?>
