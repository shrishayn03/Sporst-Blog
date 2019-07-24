<?php 
session_start();
include("includes/connect.php");

if(!isset($_SESSION['user_id']) || ($_SESSION['role'] != 1))
{
    // not logged in
    header('Location: index.php');
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
                        <h1 class="page-head-line">DASHBOARD</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-box mb-red">
						
						
                            <a href="view_news.php">
                               <img src="images/news_icon.png" height="74" width="74">
                                <font color="white"><h5> No. Of News Posts: 
								<?php
 
 
							$result3 = mysqli_query($con,"select * from posts ");
							$numrows = mysqli_num_rows($result3);


							echo   "(" .$numrows. ")" ;

							?>
						</h5></font>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main-box mb-dull">
                           <a href="view_events.php">
                               <img src="images/event_icon.png" height="74" width="74">
                                <font color="white"><h5> No. Of Upcoming Events: 
								<?php
 
 
							$result3 = mysqli_query($con,"select * from events ");
							$numrows = mysqli_num_rows($result3);


							echo   "(" .$numrows. ")" ;

							?>
						</h5></font>
                            </a>
                        </div>
                    </div>
					<!--
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="#">
                                <i class="fa fa-dollar fa-5x"></i>
                                <h5>200K Pending</h5>
                            </a>
                        </div>
                    </div>
-->
                </div>
                <!-- /. ROW  -->
								<hr>
                
				
				<div class="row">
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                           <a href="users.php">
                               <img src="images/user.png" height="74" width="74">
                                <font color="white"><h5> No. Of Total Users: 
								<?php
 
 
							$result3 = mysqli_query($con,"select * from user where role='0'");
							$numrows = mysqli_num_rows($result3);


							echo   "(" .$numrows. ")" ;

							?>
						</h5></font>
                            </a>
                        </div>
                       
                      

                       
                    </div>
                    <!-- /.REVIEWS &  SLIDESHOW  -->
                    <div class="col-md-4">
							<div class="main-box mb-red">
                           <a href="male_users.php">
                               <img src="images/male.png" height="74" width="74">
                                <font color="white"><h5> No. Of Male Users: 
								<?php
 
 
							$result3 = mysqli_query($con,"SELECT * FROM `user` WHERE role='0' and gender='male'  ");
							$numrows = mysqli_num_rows($result3);


							echo   "(" .$numrows. ")" ;

							?>
						</h5></font>
                            </a>
                        </div>
                       


                    </div>
					
					
					 <div class="col-md-4">
							<div class="main-box mb-red">
                           <a href="female_users.php">
                               <img src="images/Female.png" height="74" width="74">
                                <font color="white"><h5> No. Of Female Users: 
								<?php
 
 
							$result3 = mysqli_query($con,"SELECT * FROM `user` WHERE role='0' and gender='female'  ");
							$numrows = mysqli_num_rows($result3);


							echo   "(" .$numrows. ")" ;

							?>
						</h5></font>
                            </a>
                        </div>
                       


                    </div>
                  
                </div>
                <!-- /. ROW  -->
					
					
					<div class="row">
					<div class="col-md-6">
                        <div class="card">
                            <a class="img-card" href="event_gallery.php">
                            <img src="images/11.jpg" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="event_gallery.php"> Event Gallery
                                  </a>
                                </h4>
                                <p class="">
                                    Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="event_gallery.php" class="btn btn-link btn-block">
                                    See More
                                </a>
                            </div>
                        </div>
                    </div>
					
					
					
					
					
					<div class="col-md-6">
                        <div class="card">
                            <a class="img-card" href="news_gallery.php">
                            <img src="images/hd.jpg" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="news_gallery.php"> News Gallery
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
				</div>
					
					
					
					

                
               
              
                
               

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2018 Shri Tech | Design By : <a href="../index.php" target="_blank">Shrishay Naik</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    


</body>
</html>
