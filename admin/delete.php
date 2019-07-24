<?php
	
session_start();
include("includes/connect.php");	
	





if(isset($_GET['id']))

{
 $Post_id = $_GET['id'];
 $delete_query = "delete from posts where  Post_id='$Post_id'";
 
 if(mysqli_query($con,$delete_query)){
	 $_SESSION['DELETE']="<font color='RED' size='4'><b>NEWS DELETED !!!!!</font></b>";
		header("location:view_news.php");

 }
}
?>
	
