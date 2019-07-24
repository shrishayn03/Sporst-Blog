  <?php
        session_start();
       include("includes/connect.php");
        if (count($_POST["selected_id"]) > 0 ) {
          $all = implode(",", $_POST["selected_id"]);
      echo     $query="DELETE FROM posts WHERE Post_id IN($all)";
          if(mysqli_query($con,$query)){
              $_SESSION['success'] = "<font color='RED' size='4'><b>NEWS HAVE BEEN DELETED SUCESSFULLY !!!!!</b></font>";
			  header("location:view_news.php");
          }
        }else{
            $_SESSION['error'] = "<font color='RED' size='4'><b>SELECT CHECKBOXES TO DELETE THE NEWS !!!!!</b></font>";
			header("location:view_news.php");
        }
      
    ?>