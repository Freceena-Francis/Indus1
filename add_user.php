<?php
include('db.php');
if(isset($_POST['add'])){
	$name=$_POST['name'];
$desig=$_POST['desig'];	
$alpsid=$_POST['alpsid'];
$mail=$_POST['email'];

$new = [
    'options' => ['cost' => 11],
    'algo' => PASSWORD_DEFAULT,
    'hash' => null
];
$pass=$_POST['pass'];
$newHash = password_hash($pass, $new['algo'], $new['options']);
       
$sql="INSERT INTO user(name,alpsid,role,password,mail) VALUES ('$name','$alpsid','$desig','$newHash','$mail')";
$result=$conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <title>Add User</title>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
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
  <body>

 <style>
                  select:required:invalid {
                    color: grey;
                  }
                  option[value=""][disabled] {
                    display: none;
                  }
                  option {
                    color: black;
                  }
                  </style> 
  

            <!-- sidebar menu -->
            <?php 
            include("./base/sidebar.php");
            ?>
            
           
          </div>
        </div>

        
         <?php 
            include("./base/topnavigation.php");
            ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>ADD USER</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <!-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            
<div class="x_panel">
                  <div class="x_title">
                    <h2>Input Data </h2>
                    <ul class="nav navbar-right panel_toolbox">
                       <li>                  
                     <i class="fa fa-chevron-up"></i>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form id="demo-form2" method="POST" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                        <div class="row">
                      <div class="form-group">
                       
                          <label class="control-label col-md-3"> Name</label>
                          <div class="col-md-3 ">
                          <input type="text" name="name" value="" id="name" class="form-control">
                        </div>
                         <label class="control-label col-md-2"> Designation</label>
                          <div class="col-md-3 ">
                          <select id="desig"  name="desig" class="form-control"  >
						  <option  value="" selected="selected" >Choose</option> 
                            <option value="0" >Indus User</option>
                            <option value="1" >User</option>
                            <option value="2">Admin</option> 
                            
                            
                          </select>
                        </div>
                  </div>
                    </div> 
                     <div class="row">
                      <div class="form-group">
                       
                          <label class="control-label col-md-3">Alps Id</label>
                          <div class="col-md-3 ">
                          <input type="text" name="alpsid" value="" id="alpsid" class="form-control">
                        </div>
                         <label class="control-label col-md-2">Password</label>
                          <div class="col-md-3 ">
                          <input type="text" name="pass" value="" id="pass" class="form-control">
                        </div>
                  </div>
                  
                  <div class="form-group">
                       
                          <label class="control-label col-md-3">Email</label>
                          <div class="col-md-3 ">
                          <input type="Email" name="email" value="" id="email" class="form-control">
                        </div>
                        
                  
                  </div>
                    </div> 
                    <div class="ln_solid"></div>
                    <div class="pull-right">
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						<button type="submit"  name="add" placeholder="" class="btn btn-success">Add</button>
                          
                        </div>
                      </div>
                      </div>

                    <!--Add model start-->
<!--<div class="modal fade bs-example-modal-sm" id="adduser" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                         
                                        </div>
                                        <div class="modal-body">
                                            <div style='text-align:center'><p>User added succesfully</p></div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">OK</button>
                                        </div>
                                        </div>
                                        </div>
                                        </div>-->
                    <!--- Add model ends--->

                    </form>
                  </div>
                </div>
<!-- New content start -->


                    <!--<table class="table table-striped projects">
                      
                        </tr>-->
                      

<!-- new content end  -->

          </div>
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
    <!-- bootstrap-datetimepicker --> 
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  </body>
 </html>
