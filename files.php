<?php 
include('connection.php');
//if(isset($_SESSION['username'])){
//session_destroy();
//}
session_start();

if(isset($_SESSION['username'])){

}else {
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <link rel="shortcut icon" href="img/icon.ico"/>
    <title>Files-Cloud66</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONT-AWESOME CORE STYLE  -->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- CORE CUSTOM STYLE  -->
    <link href="css/custom.css" rel="stylesheet" />
     <!-- THEME COLOUR STYLE (BY DEFAULT GREEN COLOR,  YOU CAN REPLACE green.css to red.css , orange.css, blue.css ,grey-bk.css or black-bk.css)  -->
   
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Signika&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
     
    <link href="css/style-switcher.css" rel="stylesheet" />
</head>
<body>
   
  
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="img/logo.png" width="35%">
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php#prof-sec" class="active">Profile</a></li>
                    <li><a href="#">Files</a></li>
                     <li><a href="home.php#stats">Upload</a></li>
                                       
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
           
        </div>
    </div>
   
    <!-- /HOME SECTION END  -->
    <div id="prof-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s"><strong><center>Welcome <?php echo $_SESSION["username"]; ?></center> </strong></h1>
                    <br />
                </div>
            </div>
            
            
            <div class="row "  style="text-align: center;">
               User Files Are Below:
            </div>
        </div>
    </div>
    <!-- /DEVELOPER SECTION END  -->
     <div id="stats" data-scroll-reveal="enter from the bottom after 0.2s">
        <div class="container">
            <div class="row">
                <br/>

              <center>Files</center> 
              <?php 
            $username= $_SESSION["username"];
        $qrrr=  "SELECT * FROM `fileinfo` WHERE `userName`='$username';";
//echo $qrrr;
$queryy = mysqli_query( $conn, $qrrr);


?>
</div>
<table class="table table-hover" style="color: grey;">
  

  
  <tr style="background-color: #333333;">
    <th>userName</th><th>userFiles</th><th>fileTitle</th><th>fileName</th><th>Download</th><th>Delete</th>
  </tr>
  <?php while ($row = mysqli_fetch_array ($queryy)) { ?>
 
  <tr><td><?php echo $row['userName']; ?></td>
  <td><?php echo $row['userFiles']; ?></td>
  <td><?php echo $row['fileTitle']; ?></td>
  <td><?php echo $row['fileName']; ?></td>
  <td><form method="post" action="download.php?id=<?php echo $row['fileID']; ?>"><button style="width: 60%; font-size: 10pt;" class="btn btn-lmlm btn-primary btn-block" name="submit" type="submit">Download</button></form></td>
  <td><form method="post" action="deletefile.php?id=<?php echo $row['fileID']; ?>"><button style="width: 60%; font-size: 10pt;" class="btn btn-lm btn-primary btn-block" name="submit" type="submit">Delete</button></form></td>


 </tr>
  <?php } ?>

  </tbody>
</table> 
                
            </div>
         </div>
    <!-- /STATS SECTION END  -->
  
 
    
    <!-- /CONTACT SECTIO END  -->
    
    <!-- /FOOTER SECTION END  -->
    <div class="move-me toup-div">
        <a href="#home-sec">
            <i class="fa fa-arrow-up "></i>
        </a>

    </div>
    <!-- /SCROLL TO UP SECTION END  -->
    <!-- JQUERY SCRIPTS FUCTIONS  -->
    <script src="js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS FUCTIONS  -->
    <script src="js/bootstrap.js"></script>
    <!-- SROLLING SCRIPTS   -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- STYLE SWITCHER SCRIPTS   -->
    <script src="js/style-switcher.js"></script>
     <!-- ON SCROLL SCRIPTS   -->
    <script src="js/scrollReveal.js"></script>
    <!-- CUSTOM SCRIPTS   -->
    <script src="js/custom.js"></script>

</body>
</html>
