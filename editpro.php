<?php 
session_start();
include("includes/connect.php");
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
<script src="js/validationpro.js"></script>
<link href="css/pro.css" rel="stylesheet" type="text/css" media="all">

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 800px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: red;
  font-size: 19px;
}



a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}


</style>



</head>
<body>
	<div class="header">

	<div class="container">
			<div class="header-top">
				
			
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
	
	
	<div class="header-bottom">
				<center><div class="container">
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" class="img-responsive" alt="" /></a>
					</div></center>
					</div>
		<div class="card">			
		<?php

include("includes/connect.php");

$edit_id = @$_GET['user'];

$result = mysqli_query($con,$result = "select * from user where user_id='$edit_id' ");
	$numrows = mysqli_num_rows($result);

while($row = mysqli_fetch_array($result)) 

{
								$user_id1 = $row['user_id'];
								$firstname= $row['firstname'];
								$lastname= $row['lastname'];
								$email = $row['email'];
								$password= $row['password'];
								$Gender = $row['Gender'];
								$role= $row['role'];
								$conpassword = $row['conpassword'];
								$Account_status= $row['Account_status'];
								
								?>
 <form name="editpro" class="form-horizontal" action="editpro1.php?edit=<?php echo $user_id1;?>" method="POST" id="fupForm"  onsubmit="return validate()"  enctype="multipart/form-data">
  
    <div class="form-group">
       <label class="control-label col-sm-2" for="author">First Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title" placeholder="Enter First Name" name="title" value="<?php echo $firstname; ?>" style="width:60%">
      </div>
    </div>
	
	 <div class="form-group">
      <label class="control-label col-sm-2" for="author">Last Name</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname"  value="<?php echo $lastname; ?>" style="width:60%">
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="author">Email</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email"  value="<?php echo $email; ?>" style="width:60%">
      </div>
    </div>
	
   <div class="form-group">        
     
        <button type="submit"  name="update"  value="UPDATE" class="btn btn-danger submitBtn" ><b>UPDATE</b></button>
      
    </div>
  </form>
<?php } ?>
</div>
</body>
</html>	