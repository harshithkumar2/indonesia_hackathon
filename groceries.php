<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="home.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">BUSSINESS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="hotel.php">Hotels</a>
          <a class="dropdown-item" href="groceries.php">Crocery</a>
    </div>
  </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php
          if(isset($_SESSION['userID']))
          {
            echo $_SESSION['userName'];
          }
          else {
        echo 'LOGIN/SIGNUP';
          }
           ?>

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
          if(isset($_SESSION['userID']))
          {
            echo '<a class="dropdown-item" href="php/logout.php">LOGOUT</a>';
        }
      else{

        echo '
      <a class="dropdown-item" href="login_main.php">LOGIN</a>
      <a class="dropdown-item" href="register_main.php">REGISTER</a>';
      }
      ?>
      </li>
    </ul>
  </div>
</nav>
    <div class="conatiner">
      <!--<div class="row">
        <div class="col-sm-12">
        <div class="card">
          <h3>HOTEL NAME:'.$row['name'].'</h3>
        </div>

        </div>

      </div> -->
      <?php
            require './php/server.php';
      $sql = mysqli_query($conn, "SELECT * from shop WHERE type='Groceries'");
      $num = mysqli_num_rows($sql);
      if($num > 0){
        while($row = mysqli_fetch_assoc($sql)){
          $id = $row['Id'];
          echo '
          <div class="card" id="card">
          <div class="row">
            <div class="col-sm-12">
              <h3>NAME:'.$row['Name'].'</h3>
            </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <img  id="image" src="./profile/'.$row['image'].'"/>
              </div>
              </div>
            <div class="row">
              <div class="col-sm-4">
                <h5>PHONE NO:'.$row['phone'].'</h5>
              </div>
              <div class="col-sm-4">
                <h5>ADDRESS:'.$row['Address'].'</h5>
              </div>
              <div class="col-sm-4">
                <h5>Email:'.$row['Email'].'</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h5>DESCRIPTION:'.$row['description'].'</h5>
              </div>
              <div class="col-sm-6">
                <h5>Type of BUSSINESS:'.$row['type'].'</h5>
              </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                <a href="index2.php?id='.$id.'"><button type="submit" name="view" class="btn btn-primary" style="display:block;margin-left:auto;margin-right:auto;">View more</button></a>

                </div>
                </div>
            </div>';
        }
      }
             ?>

    </div>
  </body>
</html>
