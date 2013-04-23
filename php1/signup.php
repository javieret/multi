<!doctype html>
<html>

<head>
  <title>Sign Up! | LlamaClothes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap.css">
  <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap-responsive.css">
  <link rel="stylesheet" href="https://djyhxgczejc94.cloudfront.net/builds/80037b02082b29f5f9cea127cab2a4ba4365ec67.css">
  <script src="https://app.divshot.com/js/jquery.min.js"></script>
  <script src="https://app.divshot.com/js/bootstrap.min.js"></script>
  <script src="js/jquery-1.9.1.min.js"></script>
  <script src="js/customer.js"></script>
  
 
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

<body>
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
      </div>
    </div>
  </div>
  <div class="container">
    <br><br><br>      
    <div class="hero-unit hidden-phone">
      <h1>LlamaClothes! Create account:</h1>
      <hr>

      <form>
          <table style="text-align: right">
            <thead>
              <tr>
                <th>First Name:</th><img src="img/create_account.png" style="float: right; width: 24%">
                <th><input class="input-xxlarge" type="text" name="lname" placeholder="Juan" id="first"></th>
              </tr>
              <tr>
                <th>Last Name:</th>
                <th><input class="input-xxlarge" type="text" name="lname" placeholder="Cordova" id="last"></th>
              </tr>
              <tr>
                <th>Email:</th>
                <th><input class="input-xxlarge" type="email" name="lname" placeholder="example@mail.com" id="email"></th>
              </tr>
              <tr>
                <th>Username:</th>
                <th><input class="input-xxlarge" type="text" name="lname" placeholder="username" id="user"></th>
              </tr>
              <tr>
                <th>Password:</th>
                <th><input class="input-xxlarge" type="password" name="lname" placeholder="password" id="pass"></th>
              </tr>
              <tr>
                <th></th>
                <th><input class="btn btn-block btn-warning btn-small" id='btn_addcustomer' type="button" value="SUBMIT" onclick="addCustomer()">
              </tr>
            </thead>
          </table>         
      </form>
    </div> 
  </div>   
</body>
</html>