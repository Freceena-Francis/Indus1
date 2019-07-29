
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
    <!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
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
                          
                          <th>Value</th>
                          <th>Code</th>
                          <th>Task</th>
                          <th>Sub Task</th>
                          <th>Hours</th>
                          
                          <th>Deliverable</th>
                          
                          <th>Timestamp</th>
                          <th style="width: 20%">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                       
                        <tr>
                          <td>412670</td>
                          <td>12-05-2012</td>
                          <td>Electrical</td>
                          
                          <td>Project</td>
                          <td>DIR001</td>
                          <td>Indus Management</td>
                          <td>IMFU</td>
                          <td>8</td>
                          
                          <td>Yes</td>
                          
                          <td>12:10:09</td>
                          <td>

                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#viewactivity"><i class="fa fa-eye" name="view"></i></button>
                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editactivity"><i class="fa fa-pencil" name="edit"></i></button>
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteactivity"> <i class="fa fa-trash-o" name="delete"></i></button>
                          </td>
                        </tr>
                        
                          </tbody>
                      </table>
                        </div></div></div>

                        <!--View model starts-->
                                
                         <div id="viewactivity" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" >
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
                    <form class="form-horizontal form-label-right input_mask" method="post">
                      <!--<div class="form-group">-->
                        <div class="row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-9">Alps ID: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-9" style="text-align: left;">412670</label>
                      
                        <label class="control-label col-md-3 col-sm-3 col-xs-9">Date:</label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-9" style="text-align: left;">12-05-2012</label>
                        

                        <label class="control-label col-md-3 col-sm-3 col-xs-9">Domain: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-9" style="text-align: left;">Electrical</label>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Type: </label>
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">Direct</label>
                       
                       
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Value: </label>
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">Project</label>
                         
        
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Code: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">DIR001</label>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Task: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">Indus Management</label>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Task: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">IMFU</label>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Hours: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">8 Hrs</label>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Industrialization: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">Industry </label>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Deliverable: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">Yes</label>


                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Timestamp: </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">12:10:09</label>

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
                        <!---view model ends-->

<!---Edit model starts-->

<div id="editactivity" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Edit Activity</h4>
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
                    <form class="form-horizontal form-label-right input_mask" method="post">
                      
       <div class="row">
                      <div class="form-group">
                       
                          <label class="control-label col-md-3"> Date</label>
                          <div class="col-md-3 ">
                          <input type="text" name="date" value="" id="" class="form-control" placeholder="12-05-2012">
                        </div>
                         <label class="control-label col-md-2"> Time Booked</label>
                          <div class="col-md-3 ">
                       <input type="text" name="date" value="" id="" class="form-control" placeholder="4 Hrs">
                      </div>
                  </div>
                    </div> 
                  
                      <div class="row">
                            <div class="form-group">
                        <label class="control-label col-md-3 ">Domain</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="projectdomain" id="" required>
                            
                           <option value='Electrical' selected="">Electrical</option>
                            <option value='MFI'>MFI</option>
                            <option  value='Interiors'>Interiors</option>
                            <option  value='CBS'>CBS</option>
                           <option  value='Tooling'>Tooling</option>
                           <option  value='Bids'>Bids</option>
                           <option  value='Special Process'>Special Process</option>
                           <option  value='PIM/PRIM'>PIM/PRIM</option>
                            </select>
                        </div>
                       
                        
                        <label class="control-label col-md-2">Type</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="projectcategory" id="" required>
                            
                           <option value='Direct-Project' selected="">Direct-Project</option>
                            <option value='Direct-SEC'>Direct-SEC</option>
                            <option  value='Direct-COE'>Direct-COE</option>
                            <option  value='Direct-Bids'>Direct-Bids</option>
                             <option  value='Indirect'>Indirect</option>
                          </select>
                        </div>
                        <br><br>
                        </div>
                    </div>
                        <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Category</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="project" id="" required>
                            <option selected disabled>Project</option>
                          
                          </select>
                        </div>
                        
                       
                       
                          <label class="control-label col-md-2 "> Code</label>
                          <label class="control-label col-md-1">IND001</label>
                                                </div>
                                            </div>
                        <div class="row">
                        <div class="form-group">
                        <label class="control-label col-md-3 ">Task</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="task" id="" required>
                           
                            <option value='Indus Management' selected="">Indus Management</option>
                            <option value='Change Management'>Change Management</option>
                            <option value='Site Support'>Site Support</option>
                            <option value='Mounting Reviews'>Mounting Reviews</option>
                            <option value='Special Process'>Special Process</option>
                            <option value='Co-Engg'>Co-Engg</option>
                            <option value='Indus Deliverables'>Indus Deliverables</option>
                            <option value='Other'>Other</option>
                            <option value="none">None</option>
                          </select>
                        </div>
                       
                        
                        <label class="control-label col-md-2">Sub Task</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="subtask" id="" required>
                            <option selected disabled>Choose SubTask</option>
                            
                          </select>
                        </div>
                        <br><br>
                        </div>
                        <div class="row">
                        <div class="form-group">
                        <label class="control-label col-md-3">Hours Consumed</label>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="hours"  value="" id="" placeholder="8">
                        </div>
                        <div class="">
                            <label class="control-label col-md-2">Deliverables Done</label>
                            <input type="checkbox" class="js-switch" />
                          </div>
                        
                      </div>
                  </div>
                      <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-3">Industrialization</label>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="ind"  value="" id="" placeholder="Industry">
                        </div>
                      <label class="control-label col-md-2">Remarks</label>
                         <div class="col-md-3">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 characters long comment.." data-parsley-validation-threshold="10" placeholder="Comments!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!"></textarea>
                    </div>
                </div></div>
                <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="close3">Close</button>
                          <button type="button" class="btn btn-primary" data-dismiss="modal" name="ok">Save Changes</button>
                        </div>
                      

                    </form>
                  </div>
                </div>
            
            </div>
          </div>
      


<!---Edit model ends--->

                        <!---Delete Model starts--->

<div class="modal fade bs-example-modal-sm" id="deleteactivity" tabindex="-1" role="dialog" aria-hidden="true">
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
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">OK</button>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                  <!---Delete Model ends--->


 
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
    <!-- Switchery -->
    <script src="vendors/switchery/dist/switchery.min.js"></script>
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
