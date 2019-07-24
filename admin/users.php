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
					
                        <h1 class="page-head-line">View Users</h1>
                     
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for News Event Name or Writer.." title="Type in a name">
                    </div>
                </div>
                <!-- /. ROW  -->
                 
                              
           <div class="container">
 <div class="col-md-10">      
 <table id="table">
  <thead>
    <tr>
	 <th scope="col">User Name</th>
      <th scope="col">Email</th>
     
      <th scope="col">Gender</th>
      <th scope="col">Account Status</th>
	 
    </tr>
  </thead>
  <?php
	$result5 = mysqli_query($con,"select * from user where role='0'");
		$numrows = mysqli_num_rows($result5);


while($row = mysqli_fetch_array($result5))
		{
			$user_id = $row['user_id'];
			$firstname= $row['firstname'];
			$lastname= $row['lastname'];
			$email = $row['email'];
			$password = $row['password'];
			$gender= $row['Gender'];
			$role = $row['role'];
			$Account_status= $row['Account_status'];
			

?>
  <tbody id="myTable">
    <tr>
	<td data-label="User Name"><?php  echo $firstname." ".$lastname ?></td>
      <td data-label="Email"><?php echo $email; ?></td>
      <td data-label="Gender"><?php echo $gender; ?></td>
      <td data-label="Account Status"><?php echo $Account_status; ?></td>
	  
	 
    </tr>
   
  </tbody>
		<?php } ?>
</table>
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
