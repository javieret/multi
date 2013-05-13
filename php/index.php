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
#bg_img{
  background: url(img/1.jpg) no-repeat rgb(10,10,23);
  background-size: cover;
}
.carousel {
  margin-bottom: 60px;
}
.carousel .container {
  position: relative;
  z-index: 9;
}
.carousel-control {
  height: 80px;
  margin-top: 0;
  font-size: 120px;
  text-shadow: 0 1px 1px rgba(0,0,0,.4);
  background-color: transparent;
  border: 0;
}
.carousel .item {
  height: 350px;
}
.carousel img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.carousel-caption {
  background-color: transparent;
  padding:0px;
  width:880px;
  margin:200px auto;
  position: static;
}
.feed{
  margin:-30px auto;
}
.tagline{
  width: 80%;
  color: white;
  margin: 0px auto;
  font-size: 40px;
  text-align: center;
  text-shadow: #000 1px 1px 3px;
  color: white;
  width: 80%;
  font-size: 48px;
  font-size: 3rem;
}
a{
  color:white!important;
}
.navbar{
  -moz-box-shadow: 0px 1px 2px #362E30;
  -webkit-box-shadow: 0px 1px 2px #362E30;
  -box-shadow: 0px 1px 2px #362E30;
}
.call{
  width: 120px;
  margin: 0px auto;
}
.center_class{
  width: 120px;
  margin:0px auto;
}
.dropdown-menu a{
  color:black!important;
}
::-webkit-input-placeholder { font-size:28px;position:relative;top:2px; }
::-moz-placeholder { font-size:28px;position:relative;top:2px; } 
input:-moz-placeholder { font-size:28px;position:relative;top:2px; }
</style>   
</head> 

<body onload="getArticle()"><!-- Este  codigo es para que se cargue los productos desde el principio -->
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

  <div id="myCarousel" class="carousel slide">
    <div id="bg_img" class="carousel-inner">
      <div class="item active">
        <br><br><br><br>
        <br><br>
        <h2 class="tagline">Come and shop clothes In Llama Clothes</h2>
        <div class="center_class">
          <br>
          <a  href="signup.php"><button class="btn btn-success span2 call"><i class="icon-ok"></i> Signup</button></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container feed">      
    <div class="row main-features">
      <div id="contenedor_articulos"></div>
    </div>
  </div>
  <script type="text/javascript" src="http://localhost/multi/php/js/jquery.dropdown.js"></script>
  <script>$('.dropdown-toggle').dropdown()</script>
</body>
</html>