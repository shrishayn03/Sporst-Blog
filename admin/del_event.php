<?php
	
session_start();
include("includes/connect.php");	
	





if(isset($_GET['event']))

{
 $event_id = $_GET['event'];
 $delete_query = "delete from events where  event_id='$event_id'";
 
 if(mysqli_query($con,$delete_query)){
	   $_SESSION['DELETE']="<font color='RED' size='4'><b>EVENT DELETED !!!!!</b></font>";
		header("location:view_events.php");

 }
}
?>
	
