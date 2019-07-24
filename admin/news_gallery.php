<?php 
session_start();
include("includes/connect.php");

 if(!isset($_SESSION['user_id']) || ($_SESSION['role'] != 1))
{
	 header('Location: ../index.php');
    // not logged in
   
    exit();
}


else
	
?>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Static Navbar Extended</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="css/image.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">Brand</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
               <!-- <li class="active"><a href="#">Home</a></li>-->
                <li><a href="#">Profile</a></li>
				<li>
                    <a  href="add_news.php">Add News</a></li>
					<li>
                    <a  href="view.php">View News</a></li>
					<li>
                    <a  href="add_events.php">Add Events</a></li>
					<li>
                    <a  href="view_events.php">View Events</a></li>
					<li>
                    <a  href="gallery.php">Gallery</a></li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </nav>
</div>

	

	
	
		<div class="container">
		
	
		<div class="row">
		<div class="navbar-collapse gallery">			
			<ul>
			<li>	
		<?php
		include("includes/connect.php");
$result5 = mysqli_query($con,"select * from posts");
		$numrows = mysqli_num_rows($result5);


while($row = mysqli_fetch_array($result5))
		{
			?>
					
					<a href="images/<?php echo $row["Post_image"]; ?>" data-title="<?php echo $row["Post_title"]; ?>"><img
			src="images/<?php echo $row["Post_image"]; ?>" class="images" width="200" height="200"></a>
				
				<?php } ?>
				</li>
               
           <!-- col-6 / end -->

          
		   </ul>
		    
              </div>
        </div> <!-- list-group / end -->
		
		</div>


</body>

</html>