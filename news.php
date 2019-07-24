<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hiking A Sports Category Flat Bootstarp Resposive Website Template | About :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hiking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />


<!--------------------------------------------------------------js LINKS------------------------------------------------------->

<script src="js/jquery.min.js"></script>
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="js/clock.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	
	
<!--------------------------------------------------------------------------------JS ------------------------------------------------------->	
	
	
	<style>
* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 49%;
	margin-left:1%;
    padding: 10px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
/* Style the buttons */
.btn {
    border: none;
    outline: none;
    padding: 12px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
}

.btn:hover {
    background-color: #ddd;
}

.btn.active {
    background-color: #666;
    color: white;
}
</style>
	
	
	<style>
span {
  border: solid black;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.right {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
}

</style>
	
	
	
	
	
	
	
	
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



			
	<div class="banner1">
		<div class="container">
	</div>
	</div>
<!-- header -->
<!-- about -->
	
		<!-- news -->
		
		
		
		
		

		<div class="news">
			<div class="container">
			<h3>LATEST NEWS</h3>
			<br>
		
<div id="btnContainer">
<button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
<button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>
<br>

<div class="row">

	<?php
		include("includes/connect.php");
		
		$sql= mysqli_query($con,"SELECT * FROM posts");
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
  <div class="column well">
  <center><a  href="full_content.php?postid=<?php echo $Post_id; ?>"><img src="admin/images/<?php echo $Post_image; ?>" style="height:160px; width:70%;"></a></center>
    <h3> <a  href="full_content.php?postid=<?php echo $Post_id; ?>"><?php echo $Post_title; ?></a></h3>
    <p><?php echo substr($Post_content,0,80); ?><a  href="full_content.php?postid=<?php echo $Post_id; ?>"> <font size="2"><b>READ MORE </b></font><span class="right"></span><span class="right"></span><span class="right"></span></a></p>
  </div>
  
  <div class="col-2">
		</div>
		<?php } ?>
		
</div>







			<!----------------------------------------------------------------------------------------------------------------------------
			<div class="latest-events">
					<div class="news-grids">
					<div class="col-md-4 news-grid">
						<div class="news-grid-text">
							<h4>euismod tincidunt</h4>
							<span>10.00 - 12.00 | sep 24,2014</span>
						</div>
						<img src="images/img3.jpg" class="img-responsive" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						<div class="read-more blue">
							<a href="#">Read More &gt;&gt;</a>
						</div>
					</div>
					<div class="col-md-4 news-grid">
						<div class="news-grid-text">
							<h4>Ut wisi enim ad</h4>
							<span>8.00 - 10.00 | JUN 09,2014</span>
						</div>
						<img src="images/img1.jpg" class="img-responsive" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						<div class="read-more blue">
							<a href="#">Read More &gt;&gt;</a>
						</div>
					</div>
					<div class="col-md-4 news-grid">
						<div class="news-grid-text">
							<h4>suscipit lobortis nisl</h4>
							<span>9.00 - 10.00 | FEB 15,2014</span>
						</div>
						<img src="images/img2.jpg" class="img-responsive" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						<div class="read-more blue">
							<a href="#">Read More &gt;&gt;</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>--------------------------------------------------------------->
		</div>
		<!-- //news -->	
		
		
		</div>
	
		</div>
<!-- about -->
<!-- footer -->
	
	
<?php include("includes/footer.php");	?>		
	
	
	
<!-- footer -->

</body>
</html>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "100%";
    }
}

// Grid View
function gridView() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "45%";
    }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>