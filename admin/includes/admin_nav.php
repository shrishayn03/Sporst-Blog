 <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom:0; color=green;" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">COMPANY NAME</a>
            </div>

            <div class="header-right">

                <a href="message.php" class="btn btn-info" title="New Message"><b>
<?PHP
include("includes/connect.php");
$result5 = mysqli_query($con,"select * from contact ");
		$numrows = mysqli_num_rows($result5);
		
		echo "<font color='white'><b>($numrows)</b></font>";



?>


				</b><i class="fa fa-envelope-o fa-2x"></i></a>
             <!--   <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>-->
                <a href="../logout.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>