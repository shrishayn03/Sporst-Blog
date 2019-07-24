


Comment Your Views:
<form method="POST" action="pages.php?post=<?php echo $a;?>">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">


<label for="msg">Comment</label>
    <textarea id="msg" name="msg" placeholder="Comment"></textarea>
  
    <input type="submit" value="Submit">
  </form>
  
  
  <?php
 
 include("includes/connect.php");
 
 
 
	if(isset($_POST['submit']))
	{
		$post_com_id = $a;
	$comment_name = $_POST['comment_name'];	
	$comment_email = $_POST['comment_email'];
	$comment_text = $_POST['comment_text'];
	
	$status = "unapprove";
	
	if($comment_name=='' OR $comment_email=='' OR $comment_text=='')	
		{
			echo "<script>alert('PLEASE FILL ALL THE BLANKS')</script>";
			
			exit();
			
			
			}
		else
		{
		
		$query_comment = "insert into comments (post_id,comment_name,comment_email,comment_text,status) values 
	('$post_com_id','$comment_name','$comment_email','$comment_text','$status')";
	
	$run_query = mysqli_query($con,$query_comment);
	
		echo "<script>alert('comment will be published after approval')</script>";
			
	

	}


	}

?>
