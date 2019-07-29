<?php

	require 'C:\wamp64\www\GitHub\db.php';
		// insert new user code will go here
		
		
$sql="SELECT * FROM projectplanner";
//$conn->execute(sql1);}


$result=$conn->query($sql);

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
    
    <title>Project Planning </title>

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
                <h3>Project Planning</h3>
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

          <div class="x_title">
            <h2>Enter the details </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>

          <div class="x_panel">
            <div class="x_content">
              <br>
              <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="POST">
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Project</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control">
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

                    <div class="col-md-3 col-sm-9 col-xs-12 ">
                      <button type="submit" class="btn btn-success" data-dismiss="modal">Submit</button>
                    </div>
                    <div class="x_panel">
                    	<br>
              			<table class="table table-striped jambo_table bulk_action">
                        	<thead>
	                        	<tr rowspan="2">
		                          <th>Deliverables</th>
		                          <th>Ref. Code</th>
		                          <th>Total Planned Hours</th>
		                          <th>Actual Hours Consumed</th>
		                          <th colspan="7" style="text-align: center;">Project Life Cycle</th>
	                                <tr>
	                                  <th></th>
	                                  <th></th>
	                                  <th></th>
	                                  <th></th>
	                                  <th>TDR </th>
	                                  <th>LDR </th>
	                                  <th>SDR</th>
	                                  <th>PDR</th>
	                                  <th>CDR</th>
	                                  <th>GFV</th>
	                                  <th>IQR</th>
	                                </tr>                            
	                          	</tr>
                     		</thead>


	                        <tbody>
	                        	<?php
                     				while($rows=$result->fetch_assoc())
                     				{
                     			?>	
	                          <tr>
		                          <td><?php echo $rows['deliverables']; ?></td>
		                          <td><?php echo $rows['refcodes']; ?></td>
		                          <td><?php echo $rows['totplannedhrs']; ?></td>
		                          <td><?php echo $rows['actplannedhrs']; ?></td>
		                          <td><?php echo $rows['tdr']; ?></td>
		                          <td><?php echo $rows['ldr']; ?></td>
		                          <td><?php echo $rows['sdr']; ?></td>
		                          <td><?php echo $rows['pdr']; ?></td>
		                          <td><?php echo $rows['cdr']; ?></td>
		                          <td><?php echo $rows['gfv']; ?></td>
		                          <td><?php echo $rows['iqr']; ?></td>
	                          </tr>
	                          	<?php
	                          		}
	                          	?> 
	                        </tbody>
                  		</table>
              		</div>
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
