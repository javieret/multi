<?php
session_start();
?>
<!doctype html>
<html>

<head>
  <title>Articles | LlamaClothes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap.css">
  <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap-responsive.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://djyhxgczejc94.cloudfront.net/builds/80037b02082b29f5f9cea127cab2a4ba4365ec67.css">
  <script src="https://app.divshot.com/js/jquery.min.js"></script>
  <script src="https://app.divshot.com/js/bootstrap.min.js"></script>
  <script src="js/article.js"></script>
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
  h3.rojo {
    color: #FFF;
    text-shadow: #000 1px 2px 4px;
    position: relative;
    z-index: 2;
    position: relative;
    width: 70%;
    font-size: 18px;
    font-weight: bold;
    padding: 10px 0px 10px 32px;
    margin: -19px 0px 15px -40px;
    line-height: 25px;
    background-color: #E74C3C;

    -webkit-box-shadow: 0px 2px 4px #888;
    box-shadow: 0px 2px 4px #888;
  }
  h3.rojo:after {
    content: ' ';
    position: absolute;
    width: 0;
    height: 0;
    left: 0px;
    top: 100%;
    border-width: 5px 10px;
    border-style: solid;
    border-color: #666 #666 transparent transparent;
  }
  .products_div{
    -moz-box-shadow: 0px 1px 2px #362E30;
    -webkit-box-shadow: 0px 1px 2px #362E30;
    -box-shadow: 0px 1px 2px #362E30;
  }
  .center_img{
    position: relative;
    left:30%;
  }
  .hero-unit{
    -moz-box-shadow: 0px 1px 2px #362E30;
    -webkit-box-shadow: 0px 1px 2px #362E30;
    -box-shadow: 0px 1px 2px #362E30;
  }
  .well{
    -moz-box-shadow: 0px 1px 2px #362E30;
    -webkit-box-shadow: 0px 1px 2px #362E30;
    -box-shadow: 0px 1px 2px #362E30;
  }
  a{
  color:white!important;
}
  </style>  

</head>

<!-- Comentario en una página HTML --> 

<body onload="getArticle2()"><!-- Este  codigo es para que se cargue los productos desde el principio -->
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
  <div id="espacio">
    <br>
    <br>
    <br>
  </div>
  <div class="hero-unit hidden-phone"style="background-image:url(img/1.jpg); background-size:cover; background-repeat: no-repeat; color: white; text-shadow: black 0.1em 0.1em 0.2em">
    <h1>Articles</h1>

  </div>
  <a class="btn btn-large btn-primary btn-block visible-phone" href="#"><span class="btn-label">Sign Up Today!</span></a>
  <div class="row main-features">   
    <div id="contenedor_articulos"></div>
  </div>

</div>
<script type="text/javascript" src="http://localhost/multi/php/js/jquery.dropdown.js"></script>
<script>$('.dropdown-toggle').dropdown()</script>
</body>

</html>