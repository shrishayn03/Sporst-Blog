<?php

session_start();
include("includes/connect.php");

if(!empty($_POST['title']) || !empty($_POST['author']) || !empty($_POST['date']) || !empty($_FILES['file']['name']) || !empty($_POST['comment'])){
    $uploadedFile = '';
    if(!empty($_FILES["file"]["type"])){
        $fileName = time().'_'.$_FILES['file']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "images/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }


$title = $_POST['title'];
$author = $_POST['author'];
$date = $_POST['date'];
$comment = $_POST['comment'];



 $query = "INSERT into events(event_id,event_name,event_date,event_details,event_author,event_image) VALUES ('','$title','$date','$comment','$author','$uploadedFile')";
  
  
     if(mysqli_query($con,$query))
	 {
	     $_SESSION['errormsg']="<font color='GREEN' size='4'><b>EVENT ADDED !!!!!</font></b>";
 header("location: add_events.php");
} else{
	$_SESSION['error']="<font color='RED' size='4'><b>ERROR !!!!!</font></b>";
	header("location: add_events.php");

}

}


?>