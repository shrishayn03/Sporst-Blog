<?php session_start();

$_SESSION['user_id'];
?>


<!DOCTYPE HTML>
<html>
<head>

<title>Hiking A Sports Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>

<!--------------------------------------------------------------------------------------------------------------------------------------------------->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hiking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,800' rel='stylesheet' type='text/css'>





<style>
.button {
    background-color: white; /* Green */
    border: none;
    color: white;
    padding: 10px px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button5:hover {
    background-color: #555555;
    color: white;
}

</style>





<!------------------------------------------------------------------------------------------------------------------------------------------------------->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 <script src="js/newpass.js"></script>
<script src="js/clock.js"></script>
<script src="js/jquery.min.js"></script>
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
		$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
		});
		});
	</script>
	



	<!------------------------------------------------------------------------------------------------------------------------------------------------------>
	
</head>
<body>
<!-- header -->

	<div class="header">
	
	<div class="container">
	<?php if(isset($_SESSION['DANGER3']))
			  {
								echo $error = $_SESSION['DANGER3'];
								unset($_SESSION['DANGER3']);
								}				
				?>
				
				<?php if(isset($_SESSION['DANGER2']))
			  {
								echo $error = $_SESSION['DANGER2'];
								unset($_SESSION['DANGER2']);
								}				
				?>
				
				<?php if(isset($_SESSION['DANGER1']))
			  {
								echo $error = $_SESSION['DANGER1'];
								unset($_SESSION['DANGER1']);
								}				
				?>
			<div class="header-top">
				<div class="header-right">
			
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
			

<!--------------------- title ------------------------------------------------------------------------------------------------>

<?php include("includes/title.php");	?>	

 
<div class="container" style="margin-top:-30px;">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Change Password</h2>
                  <p>You can Change your password here.</p>
                  <div class="panel-body">
    
                    <form name="form" id="register-form" role="form" action="pass.php" class="form" method="post" onsubmit="return validate1()">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span><i><b>Current Password</b></i></span>
                          <input id="current" name="current" placeholder="Enter Current Password" class="form-control"  type="password">
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <div class="input-group">
                          <span><i><b> Enter New Password</b></i></span>
                          <input id="confirm" name="confirm" placeholder="Enter New Password" class="form-control"  type="password">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="input-group">
                          <span><i><b>Confirm New Password</b></i></span>
                          <input id="confirm1" name="confirm1" placeholder="Confirm New Password" class="form-control"  type="password">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <input name="submit" class="btn btn-lg btn-primary btn-block" value="Change Password" type="submit">
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>

</body>
</html>