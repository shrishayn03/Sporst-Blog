  <?php

session_start();
include("includes/connect.php");


if(isset($_POST['update']))
{
	
	 
	$update_id = $_GET['edit'];
	
	  $Post_title = $_POST['title'];
	
	  $Post_author = $_POST['author'];
	  $Post_date = $_POST['date'];
	   $Post_image = $_FILES['image']['name'];
	    
		 $Post_image_type = $_FILES['image']['type'];
		$Post_image_size = $_FILES['image']['size'];
		$Post_image_temp = $_FILES['image']['tmp_name'];
	  
	    $Post_content = $_POST['comment'];
		
		move_uploaded_file($Post_image_temp,"images/$Post_image");
     
	
	

	
	echo $update_query = "update posts set Post_title='$Post_title',Post_author='$Post_author',Post_date='$Post_date',Post_image='$Post_image',Post_content='$Post_content' where Post_id='$update_id'";
	
	
	
	if(mysqli_query($con,$update_query)){
   
		
	//header("location:show_farmer.php?updated");					
 //echo "<script>alert('info has been updated'";
	     $_SESSION['SUCCESS']="<font color='ORANGE' size='4'><b>NEWS UPDATED !!!!!</font></b>";
			header("location: view_news.php");		
 	} 	
}

?>