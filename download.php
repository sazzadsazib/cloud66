<?php include('connection.php');

session_start();
if(isset($_SESSION['username'])){

}else {
    header("location: logout.php");
}

$id = $_GET['id'];

//amar local file delete korte link lagbe

$q="SELECT * FROM `fileinfo` WHERE `fileID`=$id";

//echo $q;
$qee_q = mysqli_query( $conn, $q);
$row = mysqli_fetch_array ($qee_q);
$location = $row['userFiles'];
//echo $location;

//echo $qrr;
$file = "$location"; 

header("Content-Description: File Transfer"); 
header("Content-Type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=\"$file\""); 

readfile ($file); 


?>