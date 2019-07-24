<?php

session_start();
include("includes/connect.php");

if(!empty($_POST['name']) || !empty($_POST['email']) || !empty($_POST['message']))
{

	$name = $_POST['name'];
    $email = $_POST['email'];
	$message = $_POST['message'];
	
	$query = "INSERT into contact(contact_id,name,email,message) VALUES ('','$name','$email','$message')";
	$result = mysqli_query($con,$query);
	print "<b>Your Message is Received !!! We Will Get Back To You !!</b>";
}

?>