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
    <title>Home-Cloud66</title>
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
                    <li><a href="files.php">Files</a></li>
                     <li><a href="home.php#stats">Upload</a></li>
                      <li><a href="home.php#contact-sec">Contact Us</a></li>                 
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
               <?php echo $_SESSION["username"]; ?>'s Information 
            <?php
            $user=$_SESSION['username'];
              $qry="SELECT * FROM `userinformation` WHERE `userName`='$user';";
               // echo $qry;
             $query = mysqli_query($conn, $qry);
            ?>

                <table class="table table-hover">
                   <?php   $row = mysqli_fetch_array ($query); ?>
                          <tr>
                            <td class="title" style="font-style: bold;">User Name </td>
                            <td class="break">:</td>
                            <td style="color: #4ACEBC;"><?php echo $row['userName']; ?></td>
                          </tr>
                          <tr>
                            <td class="title" style="font-style: bold;">Email </td>
                            <td class="break">:</td>
                            <td style="color: #4ACEBC;"><?php echo $row['userEmail']; ?></td>
                          </tr>
                          <tr>
                            <td class="title" style="font-style: bold;">First Name </td>
                            <td class="break">:</td>
                            <td style="color: #4ACEBC;"><?php echo $row['FirstName']; ?></td>
                          </tr>
                          <tr>
                            <td class="title" style="font-style: bold;">Last Name </td>
                            <td class="break">:</td>
                            <td style="color: #4ACEBC;"><?php echo $row['LastName']; ?></td>
                          </tr>
                          <tr>
                            <td class="title" style="font-style: bold;">Account Type </td>
                            <td class="break">:</td>
                            <td style="color: #4ACEBC;"><?php 
                              if($row['userType'] == 1) {
                            echo "ADMIN";
                            }else {
                              echo "USER";
                            } ?></td>
                          </tr>
                          <tr>
                            <td class="title" style="font-style: bold;">Password </td>
                            <td class="break">:</td>
                            <td style="color: #4ACEBC;"><?php echo $row['userPass']; ?></td>
                          </tr>
                         
                          <tr>
                            <td class="title" style="font-style: bold;">Date Of Birth </td>
                            <td class="break">:</td>
                            <td style="color: #4ACEBC;"><?php echo $row['userDOB']; ?></td>
                          </tr>
                        </table>
                        
            </div>
        </div>
    </div>
    <!-- /DEVELOPER SECTION END  -->
     <div id="stats" data-scroll-reveal="enter from the bottom after 0.2s">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h1><strong>Upload Files </strong></h1>
                    <h3> Oh!! crap !! Dont Upload .. u know ;)</h3>
                  

                    <form  method="post" enctype="multipart/form-data">
                    <div class="form-group" style="width:30%; Margin: 0 0 0 35%">
                            <input type="text" class="form-control" name="title" required="required" placeholder="File Name" />
                        </div>
                     <br/>
                    <label class="btn btn-info ">
                Select&hellip; <input type="file" name="codes" style="display: none;" required/>
            </label> <br/>
            <br>
              <button style="width: 20%; margin: 0 0 0 40%; font-size: 10pt;" class="btn btn-lg  btn-info btn-block" name="ss" type="submit">
                 Upload</button>
                  </form>
                  <?php 

                  if(isset($_POST['ss'])){
                  $fileName=$_FILES['codes']['name'];
                 $files_tmp=$_FILES['codes']['tmp_name'];
                 
                 $filetitle = $_POST['title'];
                // echo $codeTitle;
                  

                $userName = $_SESSION['username'];
               // echo $userName;
                 // echo $codes_name;
                 // echo "\n \n $codes_tmp";
                 $qrrr=  "SELECT * FROM `fileinfo` WHERE `fileName`='$fileName';";

                 $queryy = mysqli_query( $conn, $qrrr);
                 $count = mysqli_num_rows($queryy);
                
                 if($count>0) {
                  ?>  <h4 class="section-heading" style="text-align: center; color: #f05f40;  font-style: bold;">  <br/> Sorry File With Same Name Already Exist In Our Database<br/> Rename File and Try Again</h4><?php
                 }else {


                 $uploadLink="files/$fileName";
                 $qrr= "INSERT INTO `fileinfo` (`userName`, `userFiles`, `fileTitle`, `fileName`) VALUES ('$userName', '$uploadLink', '$filetitle', '$fileName');";
                // echo $qrr;

                // $qrr=  "INSERT INTO `usercodes` (`codeID`, `codeName`, `userName`, `userCodeLink`, `userAccess`, `userAdminApproval`) VALUES (NULL, '$codes_name', '$userName', '$uploadLink', '0', '0');";


                 
                  $query = mysqli_query( $conn, $qrr);
                 // echo $uploadLink;
                 // echo $qrr;
                  if($query) {
                    echo "Upload Successful";
                  }

                  move_uploaded_file($files_tmp,$uploadLink);
             }
         }

                  ?>

                </div>
                </div>
            </div>
         </div>
    <!-- /STATS SECTION END  -->
  
 
    <div id="contact-sec">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-12">

                    <h1 data-scroll-reveal="enter from the bottom after 0.1s"><strong>Contact Us </strong></h1>
                    <div data-scroll-reveal="enter from the bottom after 0.3s">
                        
                        Send Us Email At
                          at  &nbsp; <strong>sazib6666@gmail.com</strong>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- /CONTACT SECTIO END  -->
    <div id="footer">
        &copy 2016 Sazzad Sazib | All Rights Reserved |  <a href="http://sazzadsazib.github.io" style="font-size: 16px; color: #fff" target="_blank">Github</a>

    </div>
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
