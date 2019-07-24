<?php
session_start();
include("includes/connect.php");



if(isset($_REQUEST['Submit'])){


	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$Gender =$_POST['gender'];
	$password=md5($_POST['password']);
	$conpassword=md5($_POST['conpassword']);

	
			$sql= "SELECT * FROM user WHERE email='$email'";
			$results = mysqli_query($con, $sql);
	
	
	if (mysqli_num_rows($results) > 0) {
		
	 echo "<script type=\"text/javascript\">".
        "alert('success');".
        "</script>";	

	header('Location:registration.php');
  	  exit();
	
	}
	else
	{
	
	$query = "INSERT into USER(user_id,firstname,lastname,email,password,Gender,role,conpassword) VALUES ('','$firstname','$lastname','$email','$password','$Gender','0','$conpassword')";
    $result = mysqli_query($con,$query);
header('Location: login.php');
      echo "<script>alert(Registration Done !!!)</script>";
	
			
			
			
        }
	
	
    
} 
?>	
	