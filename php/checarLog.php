<?php 
session_start();
$log =0;
if (!isset($_SESSION["name"])){ 
  $log =1;
}else{ 
 header("Location: bl/blOrder.php?tipo=4");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap.css">
  <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap-responsive.css">
  <link rel="stylesheet" href="https://djyhxgczejc94.cloudfront.net/builds/80037b02082b29f5f9cea127cab2a4ba4365ec67.css">
  <script src="https://app.divshot.com/js/jquery.min.js"></script>
  <script src="https://app.divshot.com/js/bootstrap.min.js"></script>
  <style type="text/css">
  body {
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
  }

  .form-signin {
    max-width: 300px;
    padding: 19px 29px 29px;
    margin: 0 auto 20px;
    background-color: #fff;
    border: 1px solid #e5e5e5;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
    box-shadow: 0 1px 2px rgba(0,0,0,.05);
  }
  .form-signin .form-signin-heading,
  .form-signin .checkbox {
    margin-bottom: 10px;
  }
  .form-signin input[type="text"],
  .form-signin input[type="password"] {
    font-size: 16px;
    height: auto;
    margin-bottom: 15px;
    padding: 7px 9px;
  }
  .dropdown-menu a{
    color:black!important;
  }
  </style>
</head>
<body>
 <div class="container">

  <form action="bl/blAuth.php" method="post" class="form-signin">
    <h2 class="form-signin-heading">Llama Clothes</h2>
    <input type="text" name="user" id="user" class="input-block-level" placeholder="Username">
    <input type="password" name="pass" id="pass" class="input-block-level" placeholder="Password">
    <input type="hidden" name="hdn" id="hdn" value="compra">
    <button class="btn btn-large btn-primary" type="submit">Sign in</button>
  </form>

</div>
</body>
</html>