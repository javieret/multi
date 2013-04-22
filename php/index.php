

<!doctype html>
<html>
  
  <head>
    <title>Articles | LlamaClothessss</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap.css">
    <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="https://djyhxgczejc94.cloudfront.net/builds/80037b02082b29f5f9cea127cab2a4ba4365ec67.css">
    <script src="https://app.divshot.com/js/jquery.min.js"></script>
    <script src="https://app.divshot.com/js/bootstrap.min.js"></script>
        
    <script src="js/article.js"></script>

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
  
  <body onload="getArticle()"><!-- Este  codigo es para que se cargue los productos desde el principio -->
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
          <input  type="button" href="#" id="popover-link" class="pull-right btn btn-success down" rel="popover" value="Login">          
        </div>
      </div>
    </div>
    <div class="container">
      <br><br><br>      
      <div class="hero-unit hidden-phone">
        <h1>Welcome to LlamaClothes!</h1>
        <p>Do you want clothes?</p>
        <p>
          <a class="btn btn-large btn-inverse" href="#"><span class="btn-label">Sign Up!</span></a> 
        </p>
      </div>      
      <div class="row main-features">
        <div id="contenedor_articulos"></div>
      </div>
    </div>   
  </body>
</html>