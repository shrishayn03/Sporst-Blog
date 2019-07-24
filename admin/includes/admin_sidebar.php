 <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
							
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
								
								Welcome Admin :
                      
                                <small><b><?php echo $firstname." ".$lastname ;?></b></small>
							<?php }?>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>News  <span class="fa arrow"></span></a>
                       

					   <ul class="nav nav-second-level">
                            <li>
                                <a href="add_news.php"><i class="fa fa-toggle-on"></i>ADD News</a>
                            </li>
                            <li>
                                <a href="view_news.php"><i class="fa fa-bell "></i>VIEW News</a>
                            </li>
                            <!-- <li>
                                <a href="progress.html"><i class="fa fa-circle-o "></i>Progressbars</a>
                            </li>
                             <li>
                                <a href="buttons.html"><i class="fa fa-code "></i>Buttons</a>
                            </li>
                             <li>
                                <a href="icons.html"><i class="fa fa-bug "></i>Icons</a>
                            </li>
                             <li>
                                <a href="wizard.html"><i class="fa fa-bug "></i>Wizard</a>
                            </li>
                             <li>
                                <a href="typography.html"><i class="fa fa-edit "></i>Typography</a>
                            </li>
                             <li>
                                <a href="grid.html"><i class="fa fa-eyedropper "></i>Grid</a>
                            </li>
                            -->
                           
                        </ul> 
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Events <span class="fa arrow"></span> 
						</a>
                       <ul class="nav nav-second-level">
                            <li>
                                <a href="add_events.php"><i class="fa fa-coffee"></i>ADD Events</a>
                            </li>
                            <li>
                                <a href="view_events.php"><i class="fa fa-flash "></i>VIEW Events</a>
                            </li>
                             <!--<li>
                                <a href="component.html"><i class="fa fa-key "></i>Components</a>
                            </li>
                             <li>
                                <a href="social.html"><i class="fa fa-send "></i>Social</a>
                            </li>
                            
                             <li>
                                <a href="message-task.html"><i class="fa fa-recycle "></i>Messages & Tasks</a>
                            </li>
                            
                           -->
                        </ul> 
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flash "></i>Categories <span class="fa arrow"></span> </a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_categories.php"><i class="fa fa-coffee"></i>ADD Categories</a>
                            </li>
                            <li>
                                <a href="view_categories.php"><i class="fa fa-flash "></i>VIEW Categories</a>
                            </li>
							</ul>
                    </li>
                     <li>
                        <a href="gallery.php"><i class="fa fa-anchor "></i>Gallery</a>
                       <!--  <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="form.html"><i class="fa fa-desktop "></i>Basic </a>
                            </li>
                             <li>
                                <a href="form-advance.html"><i class="fa fa-code "></i>Advance</a>
                            </li>
                             
                           
                        </ul> -->
                    </li>
                    <!--  <li>
                        <a href="view_news.php"><i class="fa fa-anchor "></i>View News</a>
                    </li>
                     <li>
                        <a href="View_events.php"><i class="fa fa-bug "></i>View Events</a>
                    </li>
					 <li>
                        <a href="View_Categories.php"><i class="fa fa-bug "></i>View Sports Categories</a>
                    </li>-->
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-in "></i>Log Out</a>
                    </li>
                   
                       <!-- <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-bicycle "></i>Second Level Link</a>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-flask "></i>Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#"><i class="fa fa-plus "></i>Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments-o "></i>Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="blank.html"><i class="fa fa-square-o "></i>Blank Page</a>
                    </li>-->
                </ul>

            </div>

        </nav>