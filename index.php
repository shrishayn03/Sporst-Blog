<?php session_start();

?>


<!DOCTYPE HTML>
<html>
<head>

<title>Hiking A Sports Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>

<!--------------------------------------------------------------------------------------------------------------------------------------------------->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hiking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,800' rel='stylesheet' type='text/css'>





<style>
.button {
    background-color: white; /* Green */
    border: none;
    color: white;
    padding: 10px px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button5:hover {
    background-color: #555555;
    color: white;
}

</style>





<!------------------------------------------------------------------------------------------------------------------------------------------------------->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 

<script src="js/jquery.min.js"></script>
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
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
	



	<!------------------------------------------------------------------------------------------------------------------------------------------------------>
	
</head>
<body>
<!-- header -->

	<div class="header">

	<div class="container">
			<div class="header-top">
				<div class="header-right">
					<div class="search2">
					 <form>
						 <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						 <input type="submit" value="">
					  </form>
			
							
					</div>
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
<div class="events">
		<div class="container">
		<center><h3><font color="orange">Breaking News </font></h3></center>
		<br>
		
		
	
			 <div class="row">
				<?php
		include("includes/connect.php");
		
		$sql= mysqli_query($con,"SELECT * FROM posts ORDER BY Post_date DESC LIMIT 3");
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
				 <div class="col-xs-12 col-sm-1">
				 </div>
				 
                    <div class="col-xs-12 col-sm-3">
                        <div class="card">
                            <center><a href="full_content.php?postid=<?php echo $Post_id; ?>" class="img-card">
                            <img src="admin/images/<?php echo $Post_image;?>"  height="70" width="200"/>
                          </a></center>
						  
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="full_content.php?postid=<?php echo $Post_id; ?>"><b><?php echo $Post_title; ?></b></a></h4><b><?php echo $Post_date; ?></b>
                                  
                                
                                <p class="">
                                    <?php echo substr($Post_content,0,80); ?>
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="full_content.php?postid=<?php echo $Post_id; ?>" class="btn btn-link btn-block">
                                    See More
                                </a>
                            </div>
                        </div>
                    </div>
					<?php } ?>
			</div>
		</div>
			
			<div class="clearfix"> </div>
			
		</div>
		
		</div>
	</div>
	
<!----------------------------------------------------------------------------------------------------------------------

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/sp1.jpg" alt="First slide" height="400">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/sp2.png" alt="Second slide" height="400">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/sp3.png" alt="Third slide" height="400">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-------------------------------------------------------------------------------------------------------------------------->
			
	
<!-- header -->
<!-- curabitur -->
	<div class="curabitur">
		<div class="container">
			<div class="col-md-4 curabitur-top">
				<img src="images/events.png" height="80" width="100"></img>
				
			
				<h4><a href="events.php">Upcoming Events</a></h4>
				<br>
				<a href="events.php" class="btn  btn-1c btn1 btn-1d">Explore</a>
			</div>
			<div class="col-md-4 curabitur-top">
				<img src="images/sportsnews.png" height="80" width="100"></img>
				
				<h4><a href="news.php">Sports News</a></h4>
				<br>
				<a href="news.php" class="btn  btn-1c btn1 btn-1d">Explore</a>
			</div>
			<div class="col-md-4 curabitur-top">
				<img src="images/blog.png" height="80" width="100"></img>
				<br>
				<h4><a href="events.php">Popular Sports Blog</a></h4>
				<br>
				<a href="events.php" class="btn  btn-1c btn1 btn-1d">Explore</a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

<!-- curabitur -->



<!-- welcome 
	<div class="welcome">
		<div class="container">
			<h2>Welcome</h2>
			<p>Donec id velit feugiat, congue nunc non, iaculis neque. Vivamus nisl justo, finibus in interdum nec, iaculis non odio. Aliquam lacus tellus, tempus a finibus ac, laoreet rutrum dui. Praesent ex nulla, sagittis imperdiet convallis a, tincidunt sit amet mauris. Cras suscipit cursus eros id tincidunt. Praesent ac dapibus lacus, condimentum commodo ligula.</p>
			<a href="#" class="btn  btn-1c btn1 btn-1d">More</a>
		</div>
	</div>
<!-- welcome -->




<!-- vide 
	<div class="vide">
		<div class="container">
			<div class="col-md-8 vide-left">
				<h3>Lorem ipsum dolor sit amet, consectetur a maximus metus semper et. </h3>
				<h6> enim pharetra, dictum tortor quis, hendrerit tortor.</h6>
				<p>  </p>
			</div>
			<div class="col-md-4 vide-right">
				<img src="images/img1.jpg" class="img-responsive" alt="" />
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><span> </span></a>
				<div id="small-dialog" class="mfp-hide">
					<iframe src="//player.vimeo.com/video/78016933" width="" height="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
				</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- vide -->


<!-- events -->
	<div class="events">
		<div class="container">
			<h2>Upcoming Events</h2>
			<div class="row">
			<?php
		include("includes/connect.php");
		
		$sql= mysqli_query($con,"SELECT * FROM events ORDER BY event_date DESC LIMIT 3");
		$numrows = mysqli_num_rows($sql);
		
		
		while($row = mysqli_fetch_array($sql))
		{
		
			
				$event_id = $row['event_id'];
		  $event_name= $row['event_name'];
			$event_date= $row['event_date'];
			$event_details = $row['event_details'];
			$event_author= $row['event_author'];
			$event_image = $row['event_image'];
			
			?>
			<div class="col-xs-12 col-sm-1">
				 </div>
			
			<div class="col-xs-12 col-sm-3">
                        <div class="card">
                            <center><a href="full_content.php?event_id=<?php echo $event_id; ?>" class="img-card">
                            <img src="admin/images/<?php echo $event_image;?>"  height="70" width="200"/>
                          </a></center>
						  
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="full_content.php?event_id=<?php echo $event_id; ?>"><b><?php echo $Post_title; ?></b></a></h4><b><?php echo $event_date; ?></b>
                                  
                                
                                <p class="">
                                    <?php echo substr($Post_content,0,80); ?>
                                </p>
								
                            </div>
                            <div class="card-read-more">
                                <a href="full_content.php?event_id=<?php echo $event_id; ?>" class="btn btn-link btn-block">
                                    See More
                                </a>
                            </div>
							<br>
                        </div>
                    </div>
			
		
			
		<?php } ?>
		</div>
		</div>
	</div>
<!-- events -->
<!-- footer -->


<?php include("includes/footer.php");	?>	

<!-- footer -->

</body>
</html>
	<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>




<script type="text/javascript">
// (c) 2000-2014 ricocheting.com
dg = new Array();
dg[0]=new Image();dg[0].src="dg0.gif";
dg[1]=new Image();dg[1].src="dg1.gif";
dg[2]=new Image();dg[2].src="dg2.gif";
dg[3]=new Image();dg[3].src="dg3.gif";
dg[4]=new Image();dg[4].src="dg4.gif";
dg[5]=new Image();dg[5].src="dg5.gif";
dg[6]=new Image();dg[6].src="dg6.gif";
dg[7]=new Image();dg[7].src="dg7.gif";
dg[8]=new Image();dg[8].src="dg8.gif";
dg[9]=new Image();dg[9].src="dg9.gif";
dgam=new Image();dgam.src="dgam.gif";
dgpm=new Image();dgpm.src="dgpm.gif";

function dotime(){ 
	var d=new Date();
	var hr=d.getHours(),mn=d.getMinutes(),se=d.getSeconds();

	// set AM or PM
	document.ampm.src=((hr<12)?dgam.src:dgpm.src);

	// adjust from 24hr clock
	if(hr==0){hr=12;}
	else if(hr>12){hr-=12;}

	document.hr1.src = getSrc(hr,10);
	document.hr2.src = getSrc(hr,1);
	document.mn1.src = getSrc(mn,10);
	document.mn2.src = getSrc(mn,1);
	document.se1.src = getSrc(se,10);
	document.se2.src = getSrc(se,1);
}

function getSrc(digit,index){
	return dg[(Math.floor(digit/index)%10)].src;
}

window.onload=function(){
	dotime();
	setInterval(dotime,1000);
}

</script>
