  <?php

session_start();
include("includes/connect.php");


if(isset($_POST['update']))
{
	$update_id = $_GET['edit'];
	
	
	

	$event_name= $_POST['title'];
	$event_date= $_POST['date'];
	$event_details = $_POST['comment'];
	$event_author = $_POST['author'];
	//$event_status = $_POST['event_status'];
	$event_image= $_FILES['image']['name'];
	
	$event_image_type = $_FILES['image']['type'];
	$event_image_size = $_FILES['image']['size'];
	$event_image_temp = $_FILES['image']['tmp_name'];
	  
	   
		
		move_uploaded_file($event_image_temp,"images/$event_image");		
	

	  
	    
		
     
	
	

	
	echo $update_query = "update events set event_name='$event_name',event_date='$event_date',event_details='$event_details',event_author='$event_author',event_image='$event_image',event_status='0' where event_id='$update_id'";
	
	
	
	if(mysqli_query($con,$update_query)){
   
		
	//header("location:show_farmer.php?updated");					
 //echo "<script>alert('info has been updated'";
	     $_SESSION['SUCCESS']="<font color='GREEN' size='4'><b>EVENT UPDATED !!!!!</font></b>";
			header("location: view_events.php");		
 	} 	
}

?>