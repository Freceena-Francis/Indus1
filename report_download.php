<?php
include('db.php');
$sql0="SELECT * FROM domain";
$result0=$conn->query($sql0);
$sql1="SELECT * FROM booking";
$result1=$conn->query($sql1);
$sql2="SELECT type_intcode,CONCAT(type_cat,'-', type_name) AS p FROM type WHERE type_cat='Direct'";
$result2=$conn->query($sql2);
$sql3="SELECT * FROM task";
$result3=$conn->query($sql3);
if(isset($_POST['search'])){
$start=$_POST['start'];
$end=$_POST['end'];
$domain=$_POST['domain'];
$type=$_POST['type'];
$task=$_POST['task'];
$sub=$_POST['subtask'];
$sql4="SELECT * FROM booking WHERE domain_f='$domain' AND type_f='$type' AND task_f='$task' AND subtask_f='$sub' AND date BETWEEN '$start' AND '$end'";
$result4=$conn->query($sql4);

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
      
    <title>REPORTS</title>
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
	<!-- Datatables -->
	<link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
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
          
            <div class="page-title">
              <div class="title_left">
                <h3>DOWNLOAD DATA</h3>
              </div>

             
            </div>
            <div class="clearfix"></div>
            <div class="x_content">
              <div class="x_panel">
                    <br>
                    <form id="timehseet" method="post" class="form-horizontal form-label-left" novalidate="">
                        <div class="row">
                      <div class="form-group">
                       
                          <label class="control-label col-md-3">Start Date</label>
                          <div class="col-md-3 ">
                          <input type="date" name="start" value="" id="start" class="form-control">
                        </div>
                       <label class="control-label col-md-2">End Date</label>
                          <div class="col-md-3 ">
                          <input type="date" name="end" value="" id="end" class="form-control">
                        </div>
                  </div>
                    </div> 
                    <div class="row">
                            <div class="form-group">
                        <label class="control-label col-md-3 ">Domain</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="domain" id="domain" required>
                            <option selected disabled>Choose Domain</option>
                           <?php
							 while ($row0 = $result0->fetch_assoc()) {
								 
								 
                         echo "<option  value='" . $row0['domain_intcode'] ."'>" . $row0['domain_name'] ."</option>";
						 
}?>
                            </select>
                        </div>
                       
                        
                        <label class="control-label col-md-2">Type</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="type" id="type" required>
                            <option selected disabled>Choose Type</option>
                           <?php
							  while ($row2 = $result2->fetch_assoc()) {
								  echo '<option value="'.$row2['type_intcode'].'" >'.$row2['p'].'</option>';
								  
							  }
							  echo '<option value="'.'Indirect'.'">'.'Indirect'.'</option>';
							  
							 
?>
                          </select>
                        </div>
                        <br><br>
                        </div></div>
                        <div class="row">
                        <div class="form-group">
                        <label class="control-label col-md-3 ">Task</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="task" id="task" required>
                            <option selected disabled>Choose Task</option>
                             <?php
							 
							 while ($row3 = $result3->fetch_assoc()) {
							echo "<option value='" . $row3['task_intcode'] ."'>" . $row3['task_name'] ."</option>";
}?>
                          </select>
                        </div>
                       
                        
                        <label class="control-label col-md-2">Sub Task</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="subtask" id="subtask" required>
                            <option selected disabled>Choose SubTask</option>
                            
                          </select>
                        </div>
                        <br><br>
                        </div>
                      </div>
                   
                    <div class="pull-right">
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit"  name="search" placeholder="" class="btn btn-success">Search</button>
                        </div>
                      </div>
                      </div>
                  </form>
                  </div>
                </div>

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <!--<div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
					<div class="dt-buttons btn-group">
					 <a class="btn btn-default buttons-copy buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#"><span>Copy</span></a>
					 <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#"><span>CSV</span></a>
					 <a class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#"><span>Print</span></a>
					 </div>-->
					 <!--<div id="datatable-buttons_filter" class="dataTables_filter">
					<label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-buttons"></label>
					</div>-->
					<table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="datatable-buttons_info" style="width: 948px;">
                      

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
                          <th>Timestamp</th>
                          <!--<th style="width: 20%">Actions</th>-->
                        </tr>
                      </thead>
                      <tbody>
                       
                       
						<?php
						while($row4=$result4->fetch_assoc())
						{?>
					 <tr>
						<td><?php echo $row4['alpsid'] ?></td>
                <td ><?php echo $row4['date'] ?></td>
                <td><?php echo $row4['domain_f'] ?></td>
				<td><?php echo $row4['type_f'] ?></td>
				<td><?php echo $row4['value'] ?></td>
				<td><?php echo $row4['code'] ?></td>
				<td><?php echo $row4['task_f'] ?></td>
				<td><?php echo $row4['subtask_f'] ?></td>
				<td><?php echo $row4['hrs-consumed'] ?></td>
				<td><?php echo $row4['industrialization'] ?></td>
				<td><?php echo $row4['deliverable_done'] ?></td>
				<td><?php echo $row4['comments'] ?></td>
				<td><?php echo $row4['timestamp'] ?></td>
                         
                          <!--<td>
                            <a href="item.php" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm"> <i class="fa fa-trash-o" name="delete"></i>Delete</button>
                          </td>-->
						  
                        </tr>
                        <?php 
						  }
						  ?>
                          </tbody>
                      </table>
                    <!--<div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>-->
					<!--<div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
					<ul class="pagination"><li class="paginate_button previous disabled" id="datatable-buttons_previous">
					<a href="#" aria-controls="datatable-buttons" data-dt-idx="0" tabindex="0">Previous</a></li>
					<li class="paginate_button active"><a href="#" aria-controls="datatable-buttons" data-dt-idx="1" tabindex="0">1</a></li>
					<li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="2" tabindex="0">2</a></li>
					<li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="3" tabindex="0">3</a></li>
					<li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="4" tabindex="0">4</a></li>
					<li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="5" tabindex="0">5</a></li>
					<li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="6" tabindex="0">6</a></li>
					<li class="paginate_button next" id="datatable-buttons_next"><a href="#" aria-controls="datatable-buttons" data-dt-idx="7" tabindex="0">Next</a></li></ul>
					</div>
					</div>-->
                  </div>
                </div>
             <!-- </div>-->

         
         

        <!-- /page content -->

        <!-- footer content -->
        <?php
        include("./base/footer.php");
        ?>
		
        <!-- /footer content -->
		 </div>
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
	<!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
  </body>
  <script type="text/javascript">
$(document).ready(function()
{
	
$("#task").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;
console.log(id);
$.ajax
({
type: "POST",
url: "reporttest1.php",
data:dataString,
cache: false,
success: function(html)
{
$("#subtask").html(html);
} 
});


});
});
</script>
 </html>
