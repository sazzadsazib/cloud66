<?php include('connection.php'); 
session_start();

if(isset($_SESSION['username'])){

    header("location:home.php");
}


?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Cloud66</title>
    
    
    <link rel="shortcut icon" href="img/icon.ico"/>
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="wrapper">
	<div class="container">
		<img src="img/logo.png">
		<h1>Access The Sky</h1>
		<h6>a Demo Project by <span style="font-size: 18px;">SazzadSazib</span></h6>
		
		<form class="form" action="logincheck.php" method="post">
			<input type="text" name="username" placeholder="Username" required>
			<input type="password" name="passwords" placeholder="Password" required>
			<button type="submit" name="checklogin">Login</button>
		</form>
		
		<form class="form" action="registration.php" style="Margin: -5% 0 0 24%;">
		<button type="submit" style="width: 100px;" >Register</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
