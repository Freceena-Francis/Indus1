
<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Activity Sheet</title>
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
                <h3>ACTIVITY SHEET</h3>
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

<div class="x_panel">
                  <div class="x_title">
                    <h2>Activity Details</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                                        
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="pull-right">
                     
                         <!--<button type="button" class="btn btn-primary" data-toggle="modal" onclick="item.php"> Add Project</button>-->
                        <a href="indus_booking.php" class="btn btn-primary">Add Activity </a>
                      </div>

                    <!-- start project list -->
                     <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th>Alps</th>
                          <th>Date </th>
                          <th>Domain</th>
                          <th>Type</th>
                          <th>Value</th>
                          <th>Code</th>
                          <th>Task</th>
                          <th>Sub Task</th>
                          <th>Hours</th>
                          <th>Industrialization</th>
                          <th>Done</th>
                          <th>Comment</th>
                          <th style="width: 20%">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql1="SELECT * FROM booking";
$result1 = $conn->query($sql1);
    while($row = $result1->fetch_assoc())
     {
      ?>
                        <tr>
                          <td><?php echo $name=$row['alpsid']; ?></td>
                          <td><?php echo $name=$row['date']; ?></td>
                          <td><?php echo $name=$row['domain_f ']; ?></td>
                          <td><?php echo $name=$row['type_f']; ?></td>
                          <td><?php echo $name=$row['value']; ?></td>
                          <td><?php echo $name=$row['code']; ?></td>
                          <td><?php echo $name=$row['task_f']; ?></td>
                          <td><?php echo $name=$row['subtask_f']; ?></td>
                          <td><?php echo $name=$row['hrs-consumed ']; ?></td>
                          <td><?php echo $name=$row['industrialization']; ?></td>
                          <td><?php echo $name=$row['deliverable_done']; ?></td>
                          <td><?php echo $name=$row['comments ']; ?></td>
                          <td><?php echo $name=$row['timestamp']; ?></td>
                          <td>
                            <a href="item.php" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm"> <i class="fa fa-trash-o" name="delete"></i>Delete</button>
                          </td>
                        </tr>
                        <?php
}
                        ?>
                          </tbody>
                      </table>
                        </div></div></div>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          </div>
                        <div class="modal-body">
                            <div style='text-align:center'><p>Are you sure that you want to delete the task?</p>
                          <p>Press 'OK' to continue</p></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="close3">Close</button>
                          <button type="button" class="btn btn-primary" data-dismiss="modal" name="ok">OK</button>
                        </div>

                      </div>
                    </div>
                  </div>


 

                  

                        <!--modal 1-->
                         <div id="modalone" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">View Activity</h4>
                        </div>
                        <div class="modal-body">
                          
<div class="x_panel">
                  <div class="x_title">
                    <h2>Activity Details</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form class="form-horizontal form-label-right input_mask" >
                      <!--<div class="form-group">-->
                        <div class="row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-9">Ref Code: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-9" style="text-align: left;">RAP</label>
                      
                        <label class="control-label col-md-3 col-sm-3 col-xs-9">Safety/Reliability:</label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-9" style="text-align: left;"> Reliability</label>
                        <br><br>

                        <label class="control-label col-md-3 col-sm-3 col-xs-9">Activity: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-9" style="text-align: left;"> PHA Customization for ML3 + Adaptation of the  NEW RISK Matrix  of MML3 </label>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Hours: </label>
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;"> 180 </label>
                       
                       <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Supplier: </label>
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">xxx</label>
                          <br><br>
        
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">yyyy </label>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tech Error: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">yyyy </label>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Process Error: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">yyyy </label>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Formatting Error: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">yyyy </label>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">FTR: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">yyyy </label>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Receiving Date Planned: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">02-09-1998 </label>


                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Input OTIF: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">03-09-1998 </label>

                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Planned Start Date: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">02-09-1998 </label>

                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Actual Start Date: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">02-09-1998 </label>

                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Planned End Date: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">02-09-1998 </label>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Actual End Date: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">02-09-1998 </label>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">Pending</label>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Planned Completion Month: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">December</label>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">OTIF: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">02-09-1998 </label>


                     <!-- </div>-->
                      </div>
                    </form>
                      
                        
                        
                      
                      
                     
                       
                </div>
                        
                      </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <!--<button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>-->
                        </div>
                      </div></div>
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
    <!-- bootstrap-datetimepicker --> 
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	<!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  </body>
</html>
