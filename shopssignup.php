<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="shop_signup.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Shop signup</title>
  </head>
  <body>
<div class="container">
  <h1>SHOP SIGNUP</h1>
  <form class="" action="php/shopsignup.php" method="post" enctype="multipart/form-data" id="usrform">
  <div class="row">
    <div class="col-sm-6">
      <label>Shop name:</label>
      <input type="text" name="name"  class="form-control" placeholder="Enter your shop name">
    </div>
    <div class="col-sm-6">
      <label>Shop photo:</label>
      <input type="file" name="shop_photo" >
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <label>Address:</label>
      <input type="text" name="add" class="form-control" placeholder="Enter your shop Address">
    </div>
    <div class="col-sm-6">
      <label>Type of Business:</label>
      <select  name="type">
        <option>Hotels</option>
        <option>Groceries</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <label>Phone no:</label>
      <input type="text" name="ph" class="form-control" placeholder="Enter your shop phone number" maxlength="10">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <label>Email ID:</label>
      <input type="text" name="mail" class="form-control" placeholder="Enter your Email ID">
    </div>
  </div><br>
  <h3>LOGIN DETAILS</h3>
  <div class="row">
    <div class="col-sm-12">
      <label>Username:</label>
      <input type="text" name="uname" class="form-control" placeholder="Enter your username">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <label>password:</label>
      <input type="password" name="pass" class="form-control" placeholder="Enter your password">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <label>re-password:</label>
      <input type="password" name="repass" class="form-control" placeholder="Enter your repassword">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <button type="submit" class="btn btn-primary" name="submit_signup">submit</button>
    </div>
    <div class="col-sm-6">
      <button type="reset" class="btn btn-primary" >reset</button>
    </div>
  </div><br>
    </form>
    <div class="row">
      <div class="col-sm-12">
        <textarea rows="4" cols="50" name="desc" form="usrform" placeholder="Enter shop description here:" required></textarea>

      </div>
    </div>
</div>
  </body>
</html>
