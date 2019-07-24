<?php 
session_start();
include("includes/connect.php");
$_SESSION['user_id'];



?>
<html>

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hiking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,800' rel='stylesheet' type='text/css'>



<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/gkcustom.js"></script>
<script src="js/clock.js"></script>
<link href="css/pro.css" rel="stylesheet" type="text/css" media="all">
<!------ Include the above in your HEAD tag ---------->

<!-- header -->


<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 370px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: red;
  font-size: 19px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
	<div class="header">

	<div class="container">

			<div class="header-top">
			
			<div class="header-right">
					<?php if(isset($_SESSION['SUCCESS']))
			  {
								echo $error = $_SESSION['SUCCESS'];
								unset($_SESSION['SUCCESS']);
								}				
				?>
				
					
					<a href="changepass.php"><b>Change Password</b></a>
					 
			
							
					
				</div>
			
			
			
				<div class="header-left">
				
					<ul>

					<li>
					
						<img src="dg8.gif" name="hr1">
						<img src="dg8.gif" name="hr2">
						<img src="dgc.gif">
						<img src="dg8.gif" name="mn1">
						<img src="dg8.gif" name="mn2">
						<img src="dgc.gif">
						<img src="dg8.gif" name="se1">
						<img src="dg8.gif" name="se2">
						<img src="dgam.gif" name="ampm">
					
					</li>
					<?php if(isset($_SESSION['user_id']) && ($_SESSION['role'] == 0)){ ?>
						<font size="2"><b><li><a href="profile.php?user=<?php echo $_SESSION['user_id']; ?>"  data-toggle="tooltip" data-placement="bottom" title="Profile!">
						<?php 
						
								include("includes/connect.php");
							
								
							$sql= "SELECT * FROM  user WHERE user_id='".$_SESSION['user_id']."'";
				
					$numrows = mysqli_query($con,$sql);
	
							while($row = mysqli_fetch_array($numrows))
							{
								
								$user_id = $row['user_id'];
								$firstname= $row['firstname'];
								$lastname= $row['lastname'];
								$email = $row['email'];
								$password= $row['password'];
								$Gender = $row['Gender'];
								$role= $row['role'];
								$conpassword = $row['conpassword'];
								$Account_status= $row['Account_status'];
								
								?>
								
							
                      
                               <b><?php echo $firstname." ".$lastname ;?></b>
							<?php }?>
						</a></li></b></font>
					<?php } elseif(isset($_SESSION['user_id']) && ($_SESSION['role'] == 1))
					{ 
					?>
					<font size="2"><b><li><a href="admin/index.php">Admin</a></li>
					<?php }
					else
					{
						?>
				
						<li><a href="registration.php">Registration</a></li>
						<?php } ?>
						
						
						<?php if(isset($_SESSION['user_id'])){ ?>
						<li><a href="logout.php">Logout</a></li>
						<?php }else{ ?>
						<li><a href="login.php">Login</a></li>
						<?php } ?>
						</b></font>
					</ul>
				</div>
					<div class="clearfix"> </div>
			</div>
		</div> 				
	</div> 
	
<?php
 include("includes/connect.php");
	$d= @$_GET['user'];

$result = mysqli_query($con,$result = "select * from user where user_id ='$d' ");
	$numrows = mysqli_num_rows($result);
	
	while($row = mysqli_fetch_array($result)) 

{
								$user_id = $row['user_id'];
								$firstname= $row['firstname'];
								$lastname= $row['lastname'];
								$email = $row['email'];
								$password= $row['password'];
								$Gender = $row['Gender'];
								$role= $row['role'];
								$conpassword = $row['conpassword'];
								$Account_status= $row['Account_status'];
								
								?>
	
	
<div class="card">
  <img src="admin/images/pro.jpg" alt="John" style="width:100%">
  <h3><b><?php echo $firstname." ".$lastname; ?></b></h3>
  <br>
  <p class="title"><?php echo $email; ?></p>
  <p>Gender:<b><?php echo $Gender; ?></b></p>
  <br>
  <br>
 <p><a href="editpro.php?user=<?php echo $user_id; ?>"><button>EDIT</button></a></p>
</div>
<?php } ?>
	
         </body>
		 
		
</html>		 
    