<?php
session_start();
?>

<!doctype html>
<html>

<head>
  <title>Add address | LlamaClothes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap.css">
  <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap-responsive.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://djyhxgczejc94.cloudfront.net/builds/80037b02082b29f5f9cea127cab2a4ba4365ec67.css">
  <script src="https://app.divshot.com/js/jquery.min.js"></script>
  <script src="https://app.divshot.com/js/bootstrap.min.js"></script>
  <script src="js/jquery-1.9.1.min.js"></script>
  <script src="js/address.js"></script>
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
 .dropdown-menu a{
  color:black!important;
}
a{
  color:white!important;
}
.navbar{
  -moz-box-shadow: 0px 1px 2px #362E30;
  -webkit-box-shadow: 0px 1px 2px #362E30;
  -box-shadow: 0px 1px 2px #362E30;
}
</style>   
</head> 

<body>
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
              <a href="../php/account.php">Account</a> 
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
    <div class="hero-unit hidden-phone">
      <h1>Add address:</h1>
      <hr>
      <form>
        <table style="text-align: right">
          <thead>
            <tr>
              <th>Country:</th><img src="img/address.png" style="float: right; width: 24%">
              <th><select id="country_select"></select></th>
            </tr>
            <tr>
              <th>State:</th>
              <th><select id="state_select"></select></th>
            </tr>
            <tr>
              <th>Address Type:</th>
              <th><select id="type"></select></th>
            </tr>
            <tr>
              <th>Street 1:</th>
              <th><input id='street' type="text" placeholder="Street 1"></th>
            </tr>
            <tr>
              <th>Street 2:</th>
              <th><input id='street2' type="text" placeholder="Street 2"></th>
            </tr>
            <tr>
              <th>Zipcode:</th>
              <th><input id='zip' type="text" placeholder="Zipcode"></th>
            </tr>
            <tr>
              <th></th>
              <th><input class="btn btn-block btn-warning btn-small" id='btn_addcustomer' type="button" value="Add" onclick="addAddress()"></th>
            </tr>
          </thead>
        </table>         
      </form>
    </div> 
  </div>
  <script type="text/javascript" src="http://localhost/multi/php/js/jquery.dropdown.js"></script>
  <script>$('.dropdown-toggle').dropdown()</script>  
</body>
</html>