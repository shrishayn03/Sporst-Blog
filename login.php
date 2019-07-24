<?php session_start(); ?>

<!-----------header Includes--------------------------------------------------------------------------------------------------------------->



<?php include("includes/header.php");	?>	


<!-------------------------------------------------------------------------------------------------------------------------->

			
	<!--------------------- title ------------------------------------------------------------------------------------------------>

<?php include("includes/title.php");	?>	


<!------------------------------------------------------------------------------------------------------------------->		
			
			
	<div class="banner1">
		<div class="container">
		
	</div>
	</div>
<!-- header -->

<!-- login -->
<div class="account_grid">
<br>
			<center> <?php if(isset($_SESSION['errormsg']))
			  {
								echo $error = $_SESSION['errormsg'];
								unset($_SESSION['errormsg']);
								}				
				?></center>
	<div class="login-page">
		<div class="container">
		
		 
			
				<div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
					<h3>NEW CUSTOMERS</h3>
					<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
					<a class="acount-btn" href="registration.php">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  
			
			
					<h3>REGISTERED CUSTOMERS</h3>
					
					<p>If you have an account with us, please log in.</p>
					<form name="login" action="login1.php" method="POST" onsubmit="return validate1()">
						<div>
							<span>Email Address<label>*</label></span>
							<input type="text" name="email" id="email" placeholder="Enter Email Address"> 
						</div>
						<div>
							<span>Password<label>*</label></span>
							<input type="password"  name="password" id="myInput" value="" placeholder="Enter Password">
							
							
						</div>
					
						<input type="checkbox" onclick="myFunction()"> <b>Show Password</b>
						<br>
						<!--<a class="forgot" href="#">Forgot Your Password?</a>-->
						<input type="submit" name="Login" value="Login">
						
						
						
					</form>
			   </div>	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- login -->
<!-- footer -->


<?php include("includes/footer.php");	?>	

<!-- footer -->

</body>
</html>

<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>