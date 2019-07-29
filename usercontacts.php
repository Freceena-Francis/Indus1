<?php
include('db.php');
$sql0="SELECT * FROM user";
$result0=$conn->query($sql0);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>View User </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  

            <!-- sidebar menu -->
            <?php 
            include("./base/sidebar.php");
            ?>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
       <?php 
            include("./base/topnavigation.php");
            ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            

<!-- New content start -->



                      <br></br>
                      <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        
                      </div>

                      <div class="clearfix"></div>
					  <?php 
					  while($row0=$result0->fetch_assoc())
					  {
						  
					  ?>

                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i><?php $role_check=$row0['role'];
						  if($role_check == '0')
						  {
							 echo $role_new = 'Indus User';
						  }
						  else if($role_check == '1')
						  {
							echo $role_new = 'User';
						  }
						  else
						  {
							echo $role_new ='Admin';
						  } ?></i></h4>
                            <div class="left col-xs-7">
                              <h2><?php echo $row0['name']; ?></h2>
                              
                              <ul class="list-unstyled">
                                <!--<li><i class="fa fa-users"></i> Team: </li>-->
                                <li><i class="fa fa-building"></i> Alps ID:<?php echo $row0['alpsid']; ?> </li>
                                <li><i class="fa fa-at"></i> Email: <?php echo $row0['mail']; ?> </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="images/img.jpg" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              
                                <a href="viewprofile.php" class="btn btn-primary btn-xs">
                                <i class="fa fa-user"> </i>View Profile</a>
                              
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
					  <?php 
					  }
					  ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>

<!-- new content end  -->


          
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php
        include("./base/footer.php");
        ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
	
  </body>
</html>
