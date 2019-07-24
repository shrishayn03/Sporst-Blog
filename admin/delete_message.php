<?php
	
session_start();
include("includes/connect.php");	
	





if(isset($_GET['del']))

{
 $event_id = $_GET['del'];
 $delete_query = "delete from contact where  Contact_id='$event_id'";
 
 if(mysqli_query($con,$delete_query)){
	   $_SESSION['DELETE']="<font color='RED' size='4'><b>MESSAGE DELETED !!!!!</font></b>";
		header("location:message.php");

 }
}
?>