<?php
session_start(); 
include("includes/connect.php");


if(isset($_REQUEST['Login'])){
	
	$email=mysqli_real_escape_string($con,$_POST['email']); 
	$password=mysqli_real_escape_string($con,$_POST['password']); 
	$encrypt=MD5($password);
	
	
	$sql= mysqli_query($con,"SELECT * FROM user WHERE email='$email' and password='$encrypt'");
	$row=mysqli_fetch_assoc($sql);
	

	$_SESSION['user_id']=$row['user_id'];
	$_SESSION['role']=$row['role'];
	
	
	$count=mysqli_num_rows($sql);
	
	if($count==1)
{
	if ($row['role']==1)
			{ 
 
                               header ("location: admin/index.php"); 
                             
			}
			else if ($row['role']==0)
			{ 
                               $_SESSION['role']=$row['role'];
 
                               header ("location: index.php"); 
                             
 
			}
}	
else
	{
$_SESSION['errormsg']="<font color='red' size='4'><b>Email or Password is Invalid</font></b>";
 header ("location: login.php"); 

}
}