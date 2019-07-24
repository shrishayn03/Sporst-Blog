<?php
session_start();
include("includes/connect.php");

if(isset($_SESSION['user_id'])&& ($_SESSION['role'] == 0))
{
	
	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hiking A Sports Category Flat Bootstarp Resposive Website Template | About :: w3layouts</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hiking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<!-----------------------------------------------js------------------------------------------------------------------------------------>
<script src="js/jquery.min.js"></script>
<script src="js/clock.js"></script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
		$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
		});
		});
	</script>
<!-------------------------------------------------------------------js--------------------------------------------------------------------------->	
<!---------------------------------------------------CSS LINKS---------------------------------------------------------->	
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
	
	<style>
* {
    box-sizing: border-box;
}

/* Add a gray background color with some padding */
body1 {
    font-family: Arial;
    padding: 20px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header1 {
    padding: 30px;
    font-size: 40px;
    text-align: center;
    background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 75%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 25%;
    padding-left: 20px;
}

/* Fake image */
.fakeimg {
  
    padding: 20px;
}

/* Add a card effect for articles */
.card {
     background-color: white;
     padding: 20px;
     margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}
</style>
	
	
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
   
    font-size: 16px;
    resize: none;
}


input[type=submit]:hover {
    background-color: #45a049;
}


</style>	
<!------------------------------------------------------------------------------------------------------------------------>	
	
</head>
<body>
<!-- header -->
	<div class="header">
  	    <div class="container">
			<div class="header-top">
				<div class="header-right">
					
				</div>
				<div class="header-left">
					<ul>
						<li>
					
						<img src="dg8.gif" name="hr1">
						<img src="dg8.gif" name="hr2">
						<img src="dgc.gif">
						<img src="dg8.gif" name="mn1">
						<img src="dg8.gif" name="mn2">
						<img src="dgc.gif">
						<img src="dg8.gif" name="se1">
						<img src="dg8.gif" name="se2">
						<img src="dgam.gif" name="ampm">
					
					
				</li>
						
						<?php if(isset($_SESSION['user_id']) && ($_SESSION['role'] == 0)){ ?>
						<font size="2"><b><li><a href="profile.php?user=<?php echo $_SESSION['user_id']; ?>"  data-toggle="tooltip" data-placement="bottom" title="Profile!">
						<?php 
						
								include("includes/connect.php");
							
								
							$sql= "SELECT * FROM  user WHERE user_id='".$_SESSION['user_id']."'";
				
					$numrows = mysqli_query($con,$sql);
	
							while($row = mysqli_fetch_array($numrows))
							{
								
								$user_id = $row['user_id'];
								$firstname= $row['firstname'];
								$lastname= $row['lastname'];
								$email = $row['email'];
								$password= $row['password'];
								$Gender = $row['Gender'];
								$role= $row['role'];
								$conpassword = $row['conpassword'];
								$Account_status= $row['Account_status'];
								
								?>
								
							
                      
                               <b><?php echo $firstname." ".$lastname ;?></b>
							<?php }?>
						</a></li></b></font>
					<?php } elseif(isset($_SESSION['user_id']) && ($_SESSION['role'] == 1))
					{ 
					?>
					<font size="2"><b><li><a href="admin/index.php">Admin</a></li>
					<?php }
					else
					{
						?>
				
						<li><a href="registration.php">Registration</a></li>
						<?php } ?>
						
						
						<?php if(isset($_SESSION['user_id'])){ ?>
						<li><a href="logout.php">Logout</a></li>
						<?php }else{ ?>
						<li><a href="login.php">Login</a></li>
						<?php } ?>
						</b></font>
					</ul>
				</div>
					<div class="clearfix"> </div>
			</div>
		</div> 				
	</div> 		
	
	
<!--------------------- title ------------------------------------------------------------------------------------------------>

<?php include("includes/title.php");	?>	


<!------------------------------------------------------------------------------------------------------------------->	
	
<!----------------------------------------------------------------POST DESCRIPTION------------------------------------------------->

	<div class="container">
		<?php 
	
include("includes/connect.php");
		
	$id = $_GET['postid'];
	
	$result = mysqli_query($con,$result = "select * from posts where Post_id ='$id' ");
	$numrows = mysqli_num_rows($result);
	
	while($row = mysqli_fetch_array($result)) 

{
	$Post_id = $row["Post_id"];
	$Post_title = $row["Post_title"];
	$Post_author = $row["Post_author"];
	$Post_date = $row["Post_date"];
	$Post_image = $row["Post_image"];
	$Post_content = $row["Post_content"];
	$Post_title = $row["Post_title"];
	$Post_tags = $row["Post_tags"];
	$Post_comment_count = $row["Post_comment_count"];
	$Post_status = $row["post_status"];
	?>
		<div class="row">
				 <div class="leftcolumn">
					<div class="card">
						<h2><b><?php echo $Post_title; ?></b></h2>
						<h5><i>By </i>&nbsp&nbsp <b><?php echo $Post_author; ?>, <?php echo $Post_date; ?></b></h5>
						
						 <div class="fakeimg well"><img src="admin/images/<?php echo $Post_image; ?>" style="height:200px; width:100%"> </div>
						 <br>
							
						<p><font size="3"><?php  echo wordwrap($Post_content,500,"<br><br>\n");?></font></p>
					</div>
						
	<?php }  ?>					
				</div>
	
				<div class="card" style="margin-top:3%">
				<h3>Popular Post</h3>
				
				<?php
		include("includes/connect.php");
		
		$sql= mysqli_query($con,"SELECT * FROM POSTS ORDER BY RAND() LIMIT 3;");
		$numrows = mysqli_num_rows($sql);
		
		
		while($row = mysqli_fetch_array($sql))
		{
				$Post_id = $row['Post_id'];
		  $category_id= $row['category_id'];
			$Post_title= $row['Post_title'];
			$Post_date = $row['Post_date'];
			$Post_image= $row['Post_image'];
			$Post_content = $row['Post_content'];
			$Post_tags= $row['Post_tags'];
			$Post_comment_count = $row['Post_comment_count'];
			$Post_status = $row['post_status'];
			
?>
				
				
				
				
				
				<div class="fakeimg well" style="margin-top:-7px; margin-right:-40px;"><a href="full_content.php?postid=<?php echo $Post_id; ?>"><center><img src="admin/images/<?php echo $Post_image; ?>" height="70" width="200"></a><h5><br><b><a href="full_content.php?postid=<?php echo $Post_id; ?>"><?PHP echo $Post_title;?></a></b></h5></center></div><br>
			<?php } ?>			
				</div>
		
			
	
			</div>

	</div>
<div class="container">
  <form method="Post" action="">
   

    

      <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="subject">Comment</label>
    <textarea id="subject" name="subject" placeholder="Comments....." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="Submit">
  </form>
</div>
	
<!-------------------------------------------------------------------------------------------------------------------------------------->
<?PHP	if(!empty(isset($_POST['Submit']))){

		$Comment=$_POST['subject'];
		$name=$_POST['name'];
	
		$result5 = "select * from user where user_id=".$_SESSION['user_id']."";
		$results = mysqli_query($con,$result5);

		
		
		
		$a= $_SESSION['user_id'];
		
		
		$result2 = "select * from posts where id='$id '";
		$results = mysqli_query($con,$result2);
	
		$query = "INSERT into comment(comment_id,user_id,Post_id,comment_body,created_at,updated_at,name) VALUES ('','$a','$id','$Comment','NOW()','','$name')";
		 $result = mysqli_query($con,$query);
		 
}

?>
<!-- footer -->


<div class="container">
  <div class="row">
    <div class="col-md-8">
     
        <section class="comment-list">
          <!-- First Comment -->
		  <h2 class="page-header">Comments</h2>
		  <?php 
		  $result5 = mysqli_query($con,"select * from comment,posts where posts.post_id=comment.post_id and posts.post_id='$id'");
		
		
		
		   
		   while($row = mysqli_fetch_array($result5))
		{
			$Post_id = $row['Post_id'];
			$category_id= $row['category_id'];
			$Post_title= $row['Post_title'];
			$Post_author = $row['Post_author'];
			$Post_date = $row['Post_date'];
			$Post_image= $row['Post_image'];
			$Post_content = $row['Post_content'];
			$Post_tags= $row['Post_tags'];
			$Post_comment_count = $row['Post_comment_count'];
			$Post_status = $row['post_status'];
			
			$comment_id = $row['comment_id'];
			$user_id = $row['user_id'];
			$comment_body = $row['comment_body'];
			$created_at=$row['created_at'];
			$updated_at= $row['updated_at'];
			$name= $row['name'];
			
			
			
			
		  ?> 
          <article class="row">
           <!-- <div class="col-md-2 col-sm-2 hidden-xs">
              <figure class="thumbnail">
                <img class="img-responsive" src="admin/images/10.jpg" />
                <div class="text-center"><?php echo $firstname; ?></figcaption>
              </figure>
            </div>-->
            <div class="col-md-10 col-sm-10">
              <div class="panel panel-default arrow left">
                <div class="panel-body">
                  <header class="text-left">
                    <div class="comment-user"><i class="fa fa-user"></i><b><?php echo $name; ?></b></div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i><?php echo $created_at; ?></time>
                  </header>
                  <div class="comment-post">
                    <p>
                    <?php echo $comment_body ?>
                    </p>
                  </div>
                  <p class="text-right"><a href="#" class="btn btn-default btn-sm" disabled><i class="fa fa-reply"></i>update</a></p>
                </div>
              </div>
            </div>
          </article>
		<?php } ?>
</div>
</div>
</div>




<?php include("includes/footer.php");	?>	


<!-- footer -->	
	
	
	
	
</body>
</html>	
<?php }
else
{	

 include("content.php");	
 } ?>


