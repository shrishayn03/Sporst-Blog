<?php
session_start();
include("includes/connect.php");

if(!isset($_SESSION['user_id']) || ($_SESSION['role'] != 1))
{
    // not logged in
    header('Location: ../login.php');
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
	
	<!---------------------------------------------------------------CSS----------------------------------------->
	
	  <link href="CSS/events.css" rel="stylesheet" />
	
	<!--------------------------------------------------------------------------------------------------------------------------------->
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  
   <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  <!-----------------------------------------------------JS LINKS---------------------------------------------------->
  <script src="js/search.js"></script>
  <script src="js/yes.js"></script>
   <script src="js/tooltip.js"></script>
  
  
  <!-------------------------------------------------------------------------------------------------------------------->
 
 
  <!-----------------------------------------------------CSS LINKS---------------------------------------------------->
  <link href="css/searchbox1.css" rel="stylesheet" type="text/css" media="all" />
  <!-------------------------------------------------------------------------------------------------------------------->
<style>
/* The container */
.container {
   
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
  
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
  
<style>
.button {
    background-color: red; /* Green */
    border: none;
    color: white;
    padding: 13px 44px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {font-size: 12px;}

</style>
  </head>
<body>
    <div id="wrapper">
       <?php include("includes/admin_nav.php")?>
        <!-- /. NAV TOP  -->
		
        <?php include("includes/admin_sidebar.php")?>
        <!-- /. NAV SIDE  -->
		
        <div id="page-wrapper">
            <div id="page-inner">
			<div style=" float:left;">
           
         </div>
                <div class="row">
                    <div class="col-md-12">
					<?php if(isset($_SESSION['success']))
			  {
								echo $error = $_SESSION['success'];
								unset($_SESSION['success']);
								}				
				?>
				
				<?php if(isset($_SESSION['SUCCESS']))
			  {
								echo $error = $_SESSION['SUCCESS'];
								unset($_SESSION['SUCCESS']);
								}				
				?>
				
					<?php if(isset($_SESSION['DELETE']))
			  {
								echo $error = $_SESSION['DELETE'];
								unset($_SESSION['DELETE']);
								}				
				?>
				
					<?php if(isset($_SESSION['error']))
			  {
								echo $error = $_SESSION['error'];
								unset($_SESSION['error']);
								}				
				?>
				
                        <h1 class="page-head-line">View Events</h1>
                     
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for News Event Name or Writer.." title="Type in a name">
                    </div>
                </div>
                <!-- /. ROW  -->
                 
                  <form name="actionForm" action="action.php" method="post" onsubmit="return deleteConfirm();"> 
				  <button class="button button2"  id="submit" name="submit" value="Submit"><b>DELETE ALL</b></button>
					<!--<input type="submit" id="submit" name="submit" value="Submit">     -->      
<div class="container">
 <div class="col-md-10"> 
 <br>
 <table id="table">
  <thead>
    <tr>
	
	<th scope="col"> <center><label class="container" style="margin-left:60px;"><input type="checkbox" name="check_all" id="check_all" value=""/><span class="checkmark"></span></center></th>
	 <th scope="col">Image</th>
      <th scope="col">Event Name</th>
      <th scope="col">Event Writer</th>
      <th scope="col">View</th>
      <th scope="col">Edit/Delete</th>
	  <th scope="col">Event Status</th>
    </tr>
  </thead>
  <?php
	$result5 = mysqli_query($con,"select * from events ");
		$numrows = mysqli_num_rows($result5);


while($row = mysqli_fetch_array($result5))
		{
			$Event_id = $row['event_id'];
			$event_name= $row['event_name'];
			$event_date= $row['event_date'];
			$event_details = $row['event_details'];
			$event_author = $row['event_author'];
			$event_image= $row['event_image'];
			$event_status = $row['event_status'];
			
			

?>
  <tbody id="myTable">
    <tr>
		<td data-label="Select"><label class="container" style="margin-left:60px;"><input type="checkbox" name="selected_id[]" class="checkbox" value="<?php echo $Event_id; ?>"></center><span class="checkmark"></span></td>
	<td data-label="Image"><img src="images/<?php echo $event_image; ?>" width="44%"></td>
      <td data-label="Event Name"><?php echo $event_name; ?></td>
      <td data-label="Event Writer"><?php echo $event_author; ?></td>
      <td data-label="View"><a href="view.php?view=<?php echo $Event_id; ?>" data-toggle="tooltip" title="View Details">VIEW</a></td>
      <td data-label="Edit/Delete"><a href="edit_event.php?edit=<?php echo $Event_id; ?>" data-toggle="tooltip" title="Edit!"><img src="images/edit.png" height="28" width="28"></a> | <a href="del_event.php?event=<?php echo $Event_id; ?>" data-toggle="tooltip" title="Delete!" class="delete" data-confirm="Are you sure to delete this Event ??"><img src="images/delete.png" height="28" width="28"></td>
	  
	  <?php
	  if($event_status==0)
	  {
		  ?>
	   <td data-label="Status">ON</td>
	  <?php }
	   else
	   {
		?>   
		   <td data-label="Status">OFF</td>
	   <?php } ?>
    </tr>
   
  </tbody>
		<?php } ?>
</table>

</div>
</div>
  </form>    
           
                  
            
            
                 
            
         
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

<script>
var $submit = $('#submit');
$checkbox = $('input[type=checkbox]');

$submit.prop('disabled', true);

$checkbox.on('click', function(){
    if ($("input:checkbox:checked").length > 0) {
        $submit.removeAttr('disabled');
    }else{
        $submit.prop('disabled', true);
    }
});

</script>


<script>
function deleteConfirm(){
    var result = confirm("Do you really want to delete records?");
    if(result){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){
    $('#check_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#check_all').prop('checked',true);
        }else{
            $('#check_all').prop('checked',false);
        }
    });
});
</script>
</html>
