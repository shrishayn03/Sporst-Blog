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


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN PANEL</title>

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
	
	
	<!---------------------------------------------------------------------js-------------------------------------------------------------------->
		<script src="js/event_validation.js"></script> 
	<script src="js/date.js"></script> 
	
	
	
	
	<!-----------------------------------------------------------------------js------------------------------------------------------------------>

	<script>


//Program a custom submit function for the form
$("#Form1").submit(function(event){
 
  //disable the default form submission
  event.preventDefault();
 
  //grab all form data  
  var formData = new FormData($(this)[0]);
 
  $.ajax({
    url: 'insert_event.php',
    type: 'POST',
    data: formData,
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndata) {
      if (returndata == true) {
                    alert("You will now be redirected.");
                    window.location = "add_events.php";
    }
  },
  
  failure: function (response) {
                alert(returndata);
            }
 
  return false;



 //file type validation
    $("#file").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
            alert('Please select a valid image file (JPEG/JPG/PNG).');
            $("#file").val('');
            return false;
        }
    });

 });
 
 });
</script>
	
	
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
                        <h1 class="page-head-line">ADD EVENTS</h1>
                          <center> <?php if(isset($_SESSION['errormsg']))
			  {
								echo $error = $_SESSION['errormsg'];
								unset($_SESSION['errormsg']);
								}				
				?>
				
				<?php if(isset($_SESSION['error']))
			  {
								echo $error = $_SESSION['error'];
								unset($_SESSION['error']);
								}				
				?>
				</center>

                    </div>
                </div>
                <!-- /. ROW  -->
                 
                                 
            <div class="container">
                <form name="addevents" class="form-horizontal" action="insert_event.php" method="POST" id="Form1"  onsubmit="return validate()"  enctype="multipart/form-data">
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="title">Post  Event Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title"  placeholder="Enter Event Title" name="title" style="width:60%">
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="author">Post Event Author</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="author" placeholder="Enter Event Author Name" name="author" style="width:60%">
      </div>
    </div>
	
    <div class="form-group">        
      <label class="control-label col-sm-2" for="date">Post Event Date</label>
      <div class="col-sm-10">          
       <b> <input type="date" class="form-control" id="date"  name="date" onload="SetDate()" style="width:60%; height:1%;" ></b>
      </div>
      </div>
	  
 <div class="form-group">        
      <label class="control-label col-sm-2" for="image">Post Event Image</label>
      <div class="col-sm-10" style="margin-top:1%;">          
        <input type="file" id="file" name="file" style="width:60%;">
    </div>   
 </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="comment">Event Description:</label>
	  <div class="col-sm-10">
      <textarea class="form-control" rows="5" name="comment" id="comment" name="comment"  style="width:60%;"></textarea>
    </div>
	</div>
	
   <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit"  name="submit"  value="submit" class="btn btn-danger submitBtn" >Submit</button>
      </div>
    </div>
  </form> 
               
                
            </div>
                  
            
            
          
           
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


