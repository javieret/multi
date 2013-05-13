<?php
session_start();
?>
<!doctype html>
<html>

<head>
  <title>About us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap.css">
  <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap-responsive.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://djyhxgczejc94.cloudfront.net/builds/80037b02082b29f5f9cea127cab2a4ba4365ec67.css">
  <script src="https://app.divshot.com/js/jquery.min.js"></script>
  <script src="https://app.divshot.com/js/bootstrap.min.js"></script>
  <script src="js/_about.js"></script>
  <script src="js/index.js"></script>
  <style>
    body{
    font-family: 'Open Sans', sans-serif;
  }
  .down{
    position: relative;
    left: -20px
  }
  .popover-content{
    padding:4px;
  }
  #btn_login{
    width:270px;
  }
  a.black{
    color:black!important;
  }
  a{
  color:white!important;
}
.dropdown-menu a{
  color:black!important;
}
  </style>   
</head>

<body onload="about1()">
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="brand" href="../php">LlamaClothes</a>
        <div class="navbar-content">
          <ul class="nav ">
            <li>
              <a href="../php/articles.php">Articles</a> 
            </li>
            <li>
              <a href="../php/placeholder.php">Shop Cart</a> 
            </li>
            <li>
             <a href="../php/edit.php">Account</a> 
            </li>
            <li>
              <a href="../php/about.php">About</a> 
            </li>
          </ul>  
        </div>
        <?php if(!isset($_SESSION['name'])){
          echo "<input type=button href=# id=popover-link class='pull-right btn btn-success down' rel=popover value=Login>";
        }else{
          echo "<a class='dropdown-toggle btn btn-success pull-right' data-dropdown=#dropdown-1 href=#>Bienvenido ".$_SESSION['name']."</a>";
        }
        ?>
        <ul id="dropdown-1"  class="dropdown-menu">
          <li><a href="logOut.php">Logout</a></li>
          <li><a href="edit.php">Edit Profile</a></li>
          <li><a href="editAddress.php">Edit Address</a></li>
          <li><a href="addAddress.php">Add Address</a></li>
        </ul>

      </div>
    </div>
  </div>
  <div class="container">
    <br><br><br>
    <h1>About Us </h1>

    <ul class="nav nav-tabs">
      <li class="active">
        <a class="black"onclick="about1()">Our History</a> 
      </li>
      <li>
        <a class="black" onclick="about2()">Business Idea</a> 
      </li>
    </ul> 
    <div id="seleccion_menu"></div>   
  </body>
  <script type="text/javascript" src="http://localhost/multicapas_bien/php/js/jquery.dropdown.js"></script>
<script>$('.dropdown-toggle').dropdown()</script>

  </html>