<?php

session_start();
include("includes/connect.php");

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hiking A Sports Category Flat Bootstarp Resposive Website Template | About :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hiking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />


<!----------------------------------------------------------------js------------------------------------------------------------->


<script src="js/jquery.min.js"></script>
<script src="js/clock.js"></script>
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

<!-------------------------------------------------------------------------------------------js--------------------------------------------->	
	<style>
	
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;

    padding: 20px;
}
	</style>
	
	<script src="js/contact_validate.js"></script> 
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>	
</head>
<body>
<!-- header -->
	<div class="header">
  	    <div class="container">
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
		
			
<!--------------------------------------------------------------------------------------------------------------------->

<?php include("includes/title.php");	?>	


<!------------------------------------------------------------------------------------------------------------------->


		
	<div class="banner1">
		<div class="container">
	</div>
	</div>
<!-- header -->
<!-- contact -->
<div class="contact-data"> 
			<div class="container">
			
			
			
		       <h2>Get In Touch</h2>
		         <div class="container">
				 
			<!--	 <form id="frmDemo" method="post">
   <div class="input-group">Name </div>
   <div>
        <input type="text" name="name" id="name" class="input-control" />
   </div>
    
	<div class="input-group">E-Mail </div>
   <div>
        <input type="text" name="email" id="email" class="input-control" />
   </div>
   <div class="input-group">Message </div>
   <div>
		<textarea name="message" id="message" class="input-control"></textarea>
   </div>

   <div style="float:left">
        <button type="Submit"  name="Submit"  value="Submit" class="btn btn-danger submitBtn" >Submit</button>
    </div>
	<div id="error_message" class="ajax_response" style="float:left"></div>
	<div id="success_message" class="ajax_response" style="float:left"></div>
</form>	-->
							<form id="frmDemo" method="POST">
									<label for="name">First Name</label>
										<input type="text" id="name" name="name" placeholder="Your name..">

									<label for="email">E-Mail</label>
										<input type="text" id="email" name="email" placeholder="Your E-Mail Address..">

    

									<label for="message">Suggestions or Message</label>
										<textarea id="message" name="message" placeholder="Enter Your Suggestions or Message" style="height:200px"></textarea>
											

										 <button type="Submit"  name="Submit"  value="Submit" class="btn btn-danger submitBtn" >Submit</button>
										 
										<span id="error_message" class="ajax_response" style="float:Right"></span>
										<span id="success_message" class="ajax_response" style="float:right"></span>
										
										
							</form>
							 
					</div>



				  <div class="content_bottom">
				 	<div class="company_address">
				     	<h2>Location</h2>
						    	<p>PUNE Maharashtra,</p>
						   		<p>Dehu Phata , Alandi,</p>
						   		<p>MIT AOE</p>
				   		<p>Phone:8668345030</p>
				   		
				 	 	<p>Email: Shrishayn03@gmail.com <span><a href="mailto:info@mycompany.com">info(at)mycompany.com</a></span></p>
				   		<p>Follow on: <span><a href="https://www.facebook.com/indiafootballhub/">Facebook</a></span>, <span><a href="#">Twitter</a></span></p>
				     </div>
				       <div class="contact_info">
    	 				<h2>Find Us Here</h2>
					    	  <div class="map">
							   	    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15118.857799433757!2d73.88467717140679!3d18.676805547089305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c628ae2ec5f9%3A0x2b421cca670af934!2sAlandi%2C+Kelgaon%2C+Maharashtra+412105!5e0!3m2!1sen!2sin!4v1532288813089" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><br><small>
									<a href="https://goo.gl/maps/e6kJZq7soYR2" style="color:#999;text-align:left;font-size:13px">View Larger Map</a></small>
							  </div>
      				     </div>
				      <div class="clearfix"></div>
	                </div>
		 	  </div>
			</div>		

  <!-- contact -->
<!-- footer -->


<?php include("includes/footer.php");	?>	

<script>
$("#frmDemo").submit(function(e) {
	e.preventDefault();
	var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();
	
	if(name == "") 
	{
		$("#error_message").show().html("Name is Required");
	} else 
		if(email == "") 
	{
		$("#error_message").show().html("Email are Required");
	} else
		
		if(message == "") 
	{
		$("#error_message").show().html("Message is Required");
	} else 
{
		$("#error_message").html("").hide();
		$.ajax({
			type: "POST",
			url: "contact_message.php",
			data: "name="+name+"&email="+email+"&message="+message,
			success: function(data){
				$('#success_message').fadeIn().html(data);
				setTimeout(function() {
					$('#success_message').fadeOut("slow");
				}, 2000 );

			}
		});
	}
})
</script>	
<!-- footer -->
</body>
</html>