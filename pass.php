<?php 
session_start();
include("includes/connect.php");


    if (isSet($_POST['submit']) && isSet($_POST['confirm']) && isSet($_POST['confirm1']) && isSet($_POST['current']) && $_POST['current'] != '' && $_POST['confirm'] != '' && $_POST['confirm1'] != '') {
    	$new = $_POST['confirm'];
    	$new2 = $_POST['confirm1'];
    	if ($new == $new2) {
    		$new = md5($new);
    		$cur = $_POST['current'];
    		$cur = md5($cur);
    		$user = $_SESSION['user_id'];
    		$q = mysqli_query($con, "SELECT * FROM user WHERE user_id='$user'");
    		if (mysqli_num_rows($q) > 0) {
    			$info = mysqli_fetch_array($q);
    			echo $info['password'].' : '.$cur;
    			if ($info['password'] == $cur) {
    				 $qq = mysqli_query($con, "UPDATE user SET password = '$new' WHERE user_id='$user'");
					 echo  $qq;
    				if ($qq) {
    					 $_SESSION['SUCCESS']="<font color='GREEN' size='4'><b> PASSWORD UPDATED!!</b></font>";
						 header('location:profile.php?user=$user');
    				}else
						 $_SESSION['DANGER']="<font color='RED' size='4'><b>Failed to update your password !!</b></font>";
						 header("location:profile.php?user=$user");
    					
    			}else
					 $_SESSION['DANGER1']="<font color='RED' size='4'><b>Your entered current password was not correct. Please try again.!!</b></font>";
						 header("location:changepass.php");
    			
    		}else
				 $_SESSION['DANGER2']="<font color='RED' size='4'><b>Your username was not found in our users database !!</b></font>";
						 header("location:profile.php");
    			
    	}else
			 $_SESSION['DANGER3']="<font color='RED' size='4'><b>The two new passwords did not match. Please ensure they match and that the current password field is correct then try again !!</b></font>";
						 header("location:changepass.php");
    		
     
    }

?>