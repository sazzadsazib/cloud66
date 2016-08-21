<?php 
include('connection.php');
//if(isset($_SESSION['username'])){
//session_destroy();
//}
session_start();

if(isset($_POST["username"])) {
$user= $_POST["username"];

if(isset($_POST["passwords"])) {
	$pass=$_POST["passwords"];
	//ekhane sql;
	$passhesh= md5($pass);
	$qry="SELECT * FROM `userinformation` WHERE `userName`='$user' AND `userPass`='$passhesh'";
	//echo $qry;
	$query = mysqli_query($conn, $qry);
	$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
	$count = mysqli_num_rows($query);
	
	if($count==1) {
		if($result['userType'] == 1) {
            $_SESSION["username"] = $user;
            $_SESSION["password"] = $pass;
            $_SESSION["userType"] = $result['userType'];
            header("location: home.php");

            
        }else {

            $_SESSION["username"] = $user;
            $_SESSION["password"] = $pass;
            $_SESSION["userType"] = $result['userType'];
            header("location: home.php");
        }
} else { 
	header("location: index.php");
}
}
}

?>