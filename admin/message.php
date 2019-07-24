<?php
session_start();
include("includes/connect.php");

if(!isset($_SESSION['user_id']) || ($_SESSION['role'] != 1))
{
    // not logged in
    header('Location: ../login.php');
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
	
	<!---------------------------------------------------------------CSS----------------------------------------->
	
	  <link href="CSS/events.css" rel="stylesheet" />
	
	<!--------------------------------------------------------------------------------------------------------------------------------->
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  
  
  <!-----------------------------------------------------JS LINKS---------------------------------------------------->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
 <script src="js/search.js"></script>
  <script src="js/yes.js"></script>
   <script src="js/tooltip.js"></script>
  
  
  <!-------------------------------------------------------------------------------------------------------------------->
 
 
  <!-----------------------------------------------------CSS LINKS---------------------------------------------------->
  <link href="css/searchbox1.css" rel="stylesheet" type="text/css" media="all" />
  <!-------------------------------------------------------------------------------------------------------------------->

  
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
					
                        <h1 class="page-head-line">Messages and Suggestions</h1>
                     

                    </div>
                </div>
                <!-- /. ROW  -->
               <center>  <?php if(isset($_SESSION['DELETE']))
			  {
								echo $error = $_SESSION['DELETE'];
								unset($_SESSION['DELETE']);
								}				
				?>
                       </center>       
         
		<div class="container">
  <div class="row">
    <div class="col-md-10">
   <?php

  
	$result5 = mysqli_query($con,"select * from contact ");
		$numrows = mysqli_num_rows($result5);

 if (mysqli_num_rows($result5)>0)
{
while($row = mysqli_fetch_array($result5))
		{
			$Contact_id = $row['contact_id'];
			$name = $row['name'];
			$email= $row['email'];
			$message= $row['message'];
			
			
			

?>  
	 
	 
	 
         <div class="well well-lg" id="myTable" ><b>Name</b> :<?php echo $name; ?>  <br>
		 <b>Email</b> :<?php echo $email; ?><br>
		 <b>Message</b> :<?php echo $message; ?>
		 <br>
		  <a href="delete_message.php?del=<?php echo $Contact_id ; ?>" data-toggle="tooltip" title="Delete!" class="delete">DELETE</a>
		
		 
		 </div>
	
		 <?php } }
ELSE 	{ 
echo "<B>NO MESSAGES AVAILABLE </B>";		
}
 ?>
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
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
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
