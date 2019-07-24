
<!-----------header Includes--------------------------------------------------------------------------------------------------------------->



<?php include("includes/header.php");	?>	


<!-------------------------------------------------------------------------------------------------------------------------->

			
<!--------------------------------------------------------------------------------------------------------------------->

<?php include("includes/title.php");	?>	


<!------------------------------------------------------------------------------------------------------------------->




			
	<div class="banner1">
		<div class="container">
		
	</div>
	</div>
<!-- header -->
<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
		  	  <form name="registration" action="insert_user_registration.php" method="POST" onsubmit="return validate()"> 
				 <div class="register-top-grid">
				 
				 <span><i>IMPORTANT NOTE: <b>If Page is Re-Directed to LOGIN Page Means Registration is Successfull and If Not than Registration is Unsuccessfull </b></i></span>
				 <br>
					<h3>PERSONAL INFORMATION</h3>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>First Name<label>*</label></span>
						<input type="text" name="firstname" id="firstname" placeholder="Enter First Name"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Last Name<label>*</label></span>
						<input type="text"  name="lastname" id="lastname" placeholder="Enter Last Name"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Email Address<label>*</label></span>
						 <input type="text" name="email" id="email" placeholder="Enter Email Address"> 
					 </div>
					 
					  <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Gender<label>*</label></span>
						<!-- Default unchecked -->
						<!-- Default inline 1-->
						<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" class="custom-control-input" id="male" name="gender" value="Male">
								<label class="custom-control-label" for="gender">Male</label>
						</div>

						<!-- Default inline 2-->
						<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" class="custom-control-input" id="Female" name="gender" value="Female">
								<label class="custom-control-label" for="gender">Female</label>
						</div>


					
					 </div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>LOGIN INFORMATION</h3>
							  <span id="confirmMessage" class="confirmMessage"></span>
							 <div class="wow fadeInLeft" data-wow-delay="0.4s">
								<span>Password<label>*</label></span>
								<input type="text" name="password" id="password" placeholder="">
							 </div>
							 <div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Confirm Password<label>*</label></span>
								<input type="text" name="conpassword" id="conpassword" placeholder="">
							 </div>
					 </div>
					  <label class="checkbox"><input type="checkbox" name="checkbox" value="check"><i> </i>Agree Terms and Privacy</label>
			
				<div class="clearfix"> </div>
				<div class="register-but">
				  
					   <input type="submit"  name="Submit" value="Submit" onclick="if(!this.form.checkbox.checked){alert('You must agree to the terms first.');return false}">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
		 </div>
	</div>
<!-- registration -->



<!-- footer -->


<?php include("includes/footer.php");	?>	


<!-- footer -->

