<?php include('connection.php');
?><link rel="shortcut icon" href="img/icon.ico"/> <?php
	$userFirstName = $_POST['fname'];
	$userLastName = $_POST['lname'];
	$userDOB = $_POST['dob'];
	$userName = $_POST['username'];
	$userPass = $_POST ['pass'];
	$pin = $_POST ['pin'];
	$emailvar= $_POST ['emails'];
	$flag="false";
	$hesh=md5($userPass);

	 $queryName= "INSERT INTO `userinformation` (`userID`, `userName`, `userEmail`, `FirstName`, `LastName`, `userType`, `userPass`, `userDOB`) VALUES (NULL, '$userName', '$emailvar', '$userFirstName', '$userLastName', 0, '$hesh', '$userDOB');";
	//echo $queryName;
	if($pin=="5553"){
		//echo "hi";
	 $query = mysqli_query( $conn,$queryName);
	 if($query) {
	 $flag="true";
	}
	}
     
?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Register-Cloud66</title>
    
    
    <link rel="shortcut icon" href="img/icon.ico"/>
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="wrapper">
	<div class="container">
		<img src="img/logo.png">
		<h1>Access The Sky</h1>
		<h6>a Demo Project by <span style="font-size: 18px;">SazzadSazib</span></h6>
		
		<br/><br/>
		<h2>Signup Was &nbsp; <span style="font-size: 45px;"><?php if($flag=="true") {echo "Successful";} else {echo "Failed";} ?></span></h2>
		<form class="form" action="index.php" style="Margin: 0 0 0 0;">
		<button type="submit" style="width: 100px;" >Login</button>
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
