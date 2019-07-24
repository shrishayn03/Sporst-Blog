<?php 
session_start();
include("includes/connect.php");

 if(!isset($_SESSION['user_id']) || ($_SESSION['role'] != 1))
{
	 header('Location: ../index.php');
    // not logged in
   
    exit();
}


else
	
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN PANEL</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	<link href="css/gallery.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <div id="wrapper">
         <?php include("includes/admin_nav.php")?>
        <!-- /. NAV TOP  -->
       <?php include("includes/admin_sidebar.php")?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Gallery Example</h1>
                       

                    </div>
                </div>
                <!-- /. ROW  -->
                 
				<section class="wrapper">
    <div class="container-fostrap">
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
				
				 <div class="col-xs-12 col-sm-1">
				 </div>
				 
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="news_gallery.php">
                            <img src="images/11.jpg" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="news_gallery.php"> NEWS GALLERY
                                  </a>
                                </h4>
                                <p class="">
                                    Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="news_gallery.php" class="btn btn-link btn-block">
                                    See More
                                </a>
                            </div>
                        </div>
                    </div>
					
					
					
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="event_gallery.php">
                            <img src="images/10.jpg" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="event_gallery.php"> EVENT GALLERY
                                  </a>
                                </h4>
                                <p class="">
                                    Material Design is a visual programming language made by Google. Language programming...
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="event_gallery.php" class="btn btn-link btn-block">
                                    See More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

				
				
				
				
                    </div>
                </div>

            </div>

           
              

            
          
               

       
  
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
     <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
     <!-- CUSTOM Gallery Call SCRIPTS -->
    <script src="assets/js/galleryCustom.js"></script>
</body>
</html>
