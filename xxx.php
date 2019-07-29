

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <title>PROJECTS</title>
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
                <h3>TIME SHEET ENTRY</h3>
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
            
<div class="x_panel">
                  <div class="x_title">
                    <h2>Add Data </h2>
                    <ul class="nav navbar-right panel_toolbox">
                       <li>                  
                     <i class="fa fa-chevron-up"></i>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form id="timehseet" method="post" class="form-horizontal form-label-left" novalidate="">
                        <div class="row">
                      <div class="form-group">
                       
                          <label class="control-label col-md-3"> Date</label>
                          <div class="col-md-3 ">
                          <input type="date" name="date" value="" id=""class="form-control">
                        </div>
                         <label class="control-label col-md-2"> Time Booked</label>
                          <div class="col-md-3 ">
                        <div class="progress">
                        <div class="progress-bar progress-bar-success" data-transitiongoal="50" aria-valuenow="50" style="width: 50%;">4 Hrs</div>
                      </div>
                      </div>
                  </div>
                    </div> 
                  
                      <div class="row">
                            <div class="form-group">
                        <label class="control-label col-md-3 ">Domain</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="projectdomain" id="" required>
                            <option selected disabled>Choose Domain</option>
                           <option value='Electrical'>Electrical</option>
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
                         <select  class="form-control" name="projectType" id="projectType" required>
                            <option selected disabled>Choose Type</option>
                           <option value='Direct-Project'>Direct-Project</option>
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
                         <select  class="form-control" name="projectcat" id="projectcat" required>
                            <option selected disabled>Choose Category</option>
                          
                          </select>
                        </div>
                        
                       
                       
                          <label class="control-label col-md-2 "> Code</label>
                          <label class="control-label col-md-1"> sss</label>
                                                </div>
                                            </div>
                        <div class="row">
                        <div class="form-group">
                        <label class="control-label col-md-3 ">Task</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="task" id="" required>
                            <option selected disabled>Choose Task</option>
                            <option value='Indus Management'>Indus Management</option>
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
                          <input type="text" class="form-control" name="hours"  value="" id="" placeholder="">
                        </div>
                        <label class="control-label col-md-2">Deliverable</label>
                        <div class="checkbox">
                            <label class="">
                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Yes
                            </label>
                          </div>
                        
                      </div>
                  </div>
                      <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-3">Industrialization</label>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="ind"  value="" id="" placeholder="">
                        </div>
                      <label class="control-label col-md-2">Remarks</label>
                         <div class="col-md-3">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                    </div>
                </div></div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

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
    <script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$("#projectType").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "select_cat.php",
data: dataString,
cache: false,
success: function(html)
{
$("projectcat").html(html);
} 
});

});

});
</script>
  </body>
 </html>
