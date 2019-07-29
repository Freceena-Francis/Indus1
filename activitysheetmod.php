
<?php
if (isset($_POST['submit'])) 
{
	require 'C:\wamp64\www\GitHub\db.php';
		// insert new user code will go here
		$project=$_POST["project"];
        $phase=$_POST["phase"];
		$deliverable=$_POST["deliverable"];
		$supplier=$_POST["supplier"];
		#
		$activityname=$_POST["activity"];
		$customer=$_POST["customer"];
		$hrsconsumed=$_POST["hoursconsumed"];
		$techerror=$_POST["techerror"];
		$procerror=$_POST["processerror"];
		$formerror=$_POST["formulatingerror"];
		$remarks=$_POST["remarks"];
		$ftr=$_POST["ftr"];
		
$sql="INSERT INTO activity(project,deliverable,activity,hoursconsumed,phase,refcode,supplier,customer,techerror,processerror,formulatingerror,ftr,remarks) VALUES('$project','$deliverable','$activityname','$hrsconsumed','$phase','CODE_01','$supplier','$customer','$techerror','$procerror','$formerror','$ftr','$remarks')";
//$conn->execute(sql1);}
$result=$conn->query($sql);

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
} 
//mysqli_close($conn);
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
                <h3>Add Activity</h3>
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
                <h2>Enter the details </h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>

              <div class="x_content">
                <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="POST">

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <label class="control-label col-md-12 col-sm-3 col-xs-12">Project</label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <select name="project" class="form-control">
		                    <option selected disabled hidden value="">--Select Option--</option>
		                    <option value="Sydney">Sydney</option>
							<option value="Kochi">Kochi</option>
							<option value="Lucknow">Lucknow</option>
							<option value="Chennai">Chennai</option>
							<option value="Eloco">Eloco</option>
							<option value="Tenders">Tenders</option>
							<option value="Workpackages">Workpackages</option>
							<option value="Others">Others</option>
                    </select>
                  </div>

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <label class="control-label col-md-12 col-sm-3 col-xs-12">Phase</label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <select class="form-control" name="phase">
                              <option selected disabled hidden value="">--Select Option--</option>
                              <option>Option one</option>
                              <option>Option two</option>
                              <option>Option three</option>
                             <option>Option four</option>
                    </select>
                  </div>

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <label class="control-label col-md-12 col-sm-3 col-xs-12">Deliverable</label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <select class="form-control" name="deliverable">
                              <option selected disabled hidden value="">--Select Option--</option>
                              <option>Option one</option>
                              <option>Option two</option>
                              <option>Option three</option>
                             <option>Option four</option>
                    </select>
                  </div>

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <label class="control-label col-md-12 col-sm-3 col-xs-12">Ref. Code</label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label name="refcode" class="control-label col-md-12 col-sm-3 col-xs-12" style="text-align: left">CODE_01</label>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group"></div>
                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <label class="control-label col-md-12 col-sm-3 col-xs-12">Activity</label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <textarea name="activity" class=" form-control" placeholder="Enter the activity" style="resize: none;"></textarea>
                  </div>

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <label class="control-label col-md-12 col-sm-3 col-xs-12">Supplier</label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <input name="supplier" type="text" class="form-control">
                  </div>

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <label class="control-label col-md-12 col-sm-3 col-xs-12">Customer</label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <input name="customer" type="text" class="form-control">
                  </div>

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <label class="control-label col-md-12 col-sm-3 col-xs-12">Hours Consumed</label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <input name="hoursconsumed" type="text" class="form-control">
                  </div>

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <label class="control-label col-md-12 col-sm-3 col-xs-12">Tech Errors</label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <textarea name="techerror" class="resizable_textarea form-control" placeholder="Enter Tech Errors" style="resize: none;"></textarea>
                  </div>

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <label class="control-label col-md-12 col-sm-3 col-xs-12">Process Errors</label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                  <textarea name="processerror" class="resizable_textarea form-control" placeholder="Enter Process Errors" style="resize: none;"></textarea>
                  </div>

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <label class="control-label col-md-12 col-sm-3 col-xs-12">Formulating Errors</label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                  <textarea name="formulatingerror" class="resizable_textarea form-control" placeholder="Enter Formulating Errors" style="resize: none;"></textarea>
                  </div>

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <label class="control-label col-md-12 col-sm-3 col-xs-12">FTR</label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <input name="ftr" type="text" class="form-control">
                  </div>

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <label class="control-label col-md-12 col-sm-3 col-xs-12">Remarks</label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                  <textarea name="remarks" class="resizable_textarea form-control" placeholder="Enter Remarks" style="resize: none;"></textarea>
                  </div>

                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>

                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                      <button type="button" class="btn btn-primary">Cancel</button>
                      <button class="btn btn-primary" type="reset">Reset</button>
                      <button name='submit' type="submit" class="btn btn-success">Submit</button>
                  </div>
                </form>
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
