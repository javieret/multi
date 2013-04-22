<?php 
session_start();
?>
<!doctype html>
<html>
<head>
  <title>Place Order | LlamaClothes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap.css">
  <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap-responsive.css">
  <link rel="stylesheet" href="https://djyhxgczejc94.cloudfront.net/builds/80037b02082b29f5f9cea127cab2a4ba4365ec67.css">
  <script src="https://app.divshot.com/js/jquery.min.js"></script>
  <script src="https://app.divshot.com/js/bootstrap.min.js"></script>
  <script src="js/article.js"></script>
  <script src="js/address.js"></script>
  <script src="js/index.js"></script>
  <style>
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
  </style>

</head>
<body onload="getArticleDetail()"><!-- Este  codigo es para que se cargue las direcciones desde el principio -->
  <div class="navbar navbar-fixed-top">
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
		<?php if(!isset($_SESSION['name']))
				echo "<input type=button href=# id=popover-link class='pull-right btn btn-success down' rel=popover value=Login>";
			  else
			    echo "<a href=logOut.php><input type=button class='pull-right btn btn-success down' value=Logout></a>";
		?>
      </div>
    </div>
  </div>
  <div class="container">
    <div id="espacio">
      <br>
      <br>
      <br>
    </div>
    <div class="hero-unit hidden-phone">
      <h1>Place Order</h1>
      <p></p>
      <div id="articles_selected">
      </div>
      <div id="contenedor_articulos"></div>

      <div class="btn-group">
       <select class="span4" id="add_address">
       </select>
     </div>
     <br><br>
     <div id="contenedor_direcciones"></div>

     <p id="total">Total: </p>
     <br><br>

    <!--  <button type="submit" class="btn btn-primary">Submit</button> -->
     <a href=checarLog.php><img src=submit.png border=0 title=Submit></a>

   </div>
   <a class="btn btn-large btn-primary btn-block visible-phone" href="#"><span class="btn-label">Sign Up Today!</span></a>
   <div class="row main-features">
    <div class="span4"></div>
  </div>
</div>
</body>

</html>