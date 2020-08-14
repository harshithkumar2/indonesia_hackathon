<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="shop_login.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Shop login</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">BUSSINESS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN/SIGNUP
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login_main.php">LOGIN</a>
          <a class="dropdown-item" href="register_main.php">REGISTER</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <img src="img/mai.png" alt="logo" id="logo">
        </div>
      </div>
    <form  action="php/shoplogin.php" method="post">
    <div class="row">
      <div class="col-sm-12">
        <i class="fa fa-user icon"></i>
        <label>Username:</label>
        <input type="text" name="uname" class="form-control" placeholder="Enter username">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <i class="fa fa-key icon"></i>
        <label>Password:</label>
        <input type="password" name="pass"  class="form-control" placeholder="Enter password">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <button type="submit"class="btn btn-primary"  id="submit" name="shop_login">Submit</button>
      </div>
    </div>
    </form>
  </div>
  </body>
</html>
