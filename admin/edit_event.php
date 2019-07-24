<?php
session_start();
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	<script src="js/editevent_validation.js"></script> 
</head>
<body>
    <div id="wrapper">
       <?php include("includes/admin_nav.php")?>
        <!-- /. NAV TOP  -->
		
        <?php include("includes/admin_sidebar.php")?>
        <!-- /. NAV SIDE  -->
		
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">UPDATE</h1>
                       

                    </div>
					
					<?php

include("includes/connect.php");

$edit_id = @$_GET['edit'];

$result = mysqli_query($con,$result = "select * from events where event_id='$edit_id' ");
	$numrows = mysqli_num_rows($result);

while($row = mysqli_fetch_array($result)) 

{
	
	$Event_id1 = $row['event_id'];
	$event_name= $row['event_name'];
	$event_date= $row['event_date'];
	$event_details = $row['event_details'];
	$event_author = $row['event_author'];
	$event_image= $row['event_image'];
	$event_status = $row['event_status'];
			

?>
					
					
					
 <div class="container">

 <form name="editevents" class="form-horizontal" action="edit2.php?edit=<?php echo $Event_id1;?>" method="POST" id="fupForm"  onsubmit="return validate()"  enctype="multipart/form-data">
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="title">Edit Event Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title"  placeholder="Enter Post Title" name="title" value="<?php echo $event_name; ?>" style="width:60%">
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="author">Edit Event Writer</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="author" placeholder="Enter Author Name" name="author"  value="<?php echo $event_author; ?>" style="width:60%">
      </div>
    </div>
	
    <div class="form-group">        
      <label class="control-label col-sm-2" for="date">Edit Event Date</label>
      <div class="col-sm-10">          
       <b> <input type="date" class="form-control" id="date"  name="date" onload="SetDate()" value="<?php echo $event_date; ?>" style="width:60%; height:1%;" ></b>
      </div>
      </div>
	  
 <div class="form-group">        
      <label class="control-label col-sm-2" for="image"> Edit Image</label>
      <div class="col-sm-10" style="margin-top:1%;">          
        <input type="file" id="file"  name="image" style="width:60%;"><span><img src="images/<?php echo $event_image; ?>" width="6%"> </span>
    </div>   
 </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="comment"> Edit Event Details</label>
	  <div class="col-sm-10">
      <textarea class="form-control" rows="5" name="comment" id="comment" name="comment"   style="width:60%;"><?php echo $event_details; ?></textarea>
    </div>
	</div>
	
   <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit"  name="update"  value="UPDATE" class="btn btn-danger submitBtn"><b>UPDATE</b></button>
      </div>
    </div>
  </form>
  <?php  }
?>
</div>
                </div>
                <!-- /. ROW  -->
                 
                                 
          
                   <!-- /. ROW  -->
            
                    <!-- /. ROW  -->
            
                    <!-- /. ROW  -->

                    <!-- /. ROW  -->
          

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>
