  <?php

session_start();
include("includes/connect.php");


if(isset($_POST['update']))
{
	$update_id = $_GET['edit'];
	
	
	 $Post_title = $_POST['title'];
	
	  $lname = $_POST['lname'];
	  $email = $_POST['email'];
	  
	  echo $update_query = "update user set firstname='$Post_title',lastname='$lname',email='$email' where user_id='$update_id'";
	  if(mysqli_query($con,$update_query)){
   
		
	//header("location:show_farmer.php?updated");					
 //echo "<script>alert('info has been updated'";
	    
			header("location: index.php");		
 	} 
}
	  ?>