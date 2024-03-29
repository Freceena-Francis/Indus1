<?php

?>

<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>DESK TOOL</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>User</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class=""></i> User<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="usercontacts.php">View User</a></li>
                      <li><a href="add_user.php">Add User</a></li>
                    </ul>
                  </li> 
                  <li><a><i class=""></i> Activity <span class="fa fa-chevron-down"></span></a>
                   <ul class="nav child_menu">
                    <li><a href="activitytablejust.php"> Booking log</a></li>
                      <li><a href="indus_booking.php">Time Booking</a></li>
                      <!-- <li><a href="presentation.php">Performance</a></li> -->
                    
                   </ul>
                  </li>
                  <li><a><i class=""></i>Settings<span class="fa fa-chevron-down"></span></a>
                   <ul class="nav child_menu">
                      <li><a href="indusmain.php">Setup</a></li>
                      <!-- <li><a href="task.php">History</a></li> -->
                    </ul>
                  </li>
                  <li><a><i class=""></i> Profile<span class="fa fa-chevron-down"></span></a>
                   <ul class="nav child_menu">
                      <li><a href="viewprofile.php">View Profile</a></li>
                                           </ul>
                  </li>
                  <li><a><i class=""></i>Reports<span class="fa fa-chevron-down"></span></a>
                   <ul class="nav child_menu">
                      <li><a href="report_download.php">Download</a></li>
                   </ul>
                  </li>
                  
                  
               
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
             <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->