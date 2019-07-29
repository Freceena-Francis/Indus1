<?php 
require 'C:\wamp64\www\RAMSDesk\GitHub\db.php';
$sql1="SELECT * FROM task WHERE task_status=0 ";
$result = $conn->query($sql1);
$sql3="SELECT * FROM project";
$result3=$conn->query($sql3);
$sql5="SELECT * FROM task WHERE task_status=1 ";
$result5=$conn->query($sql5);
if (isset($_POST['add2'])) 
{
    // insert new user code will go here
    $taskname=$_POST["task_name"];
        $taskcode=$_POST["task_code"];
    $taskcategory=$_POST["task_category"];

   
$sql4="INSERT INTO task(task_name,task_code,task_category,task_status) VALUES('$taskname','$taskcode','$taskcategory','1')";
//$conn->execute(sql1);}
$result4 = $conn->query($sql4);
}

if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
    $projectcode=$_POST['projectcategory'];
    echo $projectcode;
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
$sql2="INSERT INTO mappedtask(pcode,tcode) VALUES('$projectcode','$selected')";
$result2=$conn->query($sql2);
}
}
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
      
    <title>Map Task | </title>

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
                <h3>Map Task</h3>
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
<div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Master Task</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>Select tasks to assign to project</p>
                    <form action="" method="post">
                   <div class="row">
                  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category1">Select project<span class="required">*</span>
                        </label>

                        
                        <div class="col-md-3 col-sm-9 col-xs-12">
                            
                          <select class="form-control" name="projectcategory">
                            <option>Choose Option</option>
                            <?php 
                            while ($row1 = $result3->fetch_assoc()) {
                         echo "<option value='" . $row1['project_code'] ."'>" . $row1['project_name'] ."</option>";
}?>
</select>
                        </div>
                    
                        <!-- <div class="col-md-3 col-sm-9 col-xs-12 ">
                           <input type="submit" class="btn btn-success" name="add" value="Submit"/>
                        </div> -->
                      </div>
                    </div>
                
                    <br>

                    <!-- start project list -->
                 
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table ">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">Select </th>
                           
                            <th class="column-title">Task Name </th>
                            <th class="column-title">Task Code </th>
                            <th class="column-title">Category </th>
                             <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                            </th>
                           </tr>
                        </thead>
                        <?php 
                  
                   
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>

                        <tbody>
                          <tr class="even pointer" id="<?php echo $row['task_code'] ?>">
                            <td class="a-center ">
                              
                              <input class="flat" type="checkbox" name="check_list[]" value="<?php echo $row['task_code'] ?>">

                            </td>
                            <td class=" "><?php echo $row['task_name'] ?></td>
                            <td class=" "><?php echo $row['task_code'] ?></td>
                            <td class=" "><?php echo $row['task_category'] ?></td>
                            </td>
                          </tr>
                                                 
                        </tbody>
                    <?php } ?>
                      </table>
                    </div>
                    <div class="pull-right">
                    <input type="submit" class="btn btn-primary" name="submit" value="Assign Project"/>
                  </div>
                 
                </div>
              </div>
          </div>
          </form>



<div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Specific Tasks</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">

                    <p>Add specific tasks to assign to project</p>
                      <div class="pull-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalthree" style="align: right;">Add Task</button>
                  </div>
                </div>
                  <div id="modalthree" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                         <h4 class="modal-title" id="myModalLabel">Add Task</h4>
                        </div>
                        <div class="modal-body">
                         
                      <!--<div class="x_content">-->

                    <form class="form-horizontal form-label-left" novalidate="" method="post">

                                        
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="task_name">Task Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="task_name" name="task_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="task_code">Task Code<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="task_code" name="task_code" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="task_category">Category<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="task_category" id="task_category">
                            <option>Choose option</option>
                            <option>Reliability</option>
                            <option>Safety</option>
                            <option>Both</option>
                            <option>Others</option>
                          </select>
                        </div>
                      </div>

                  <!--</div>-->


                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="close1">Close</button>
                          <input type="submit" class="btn btn-primary"  name="add2" value="Add">
                        </div>
</form>
                      </div>
                    </div>
                  </div>

                   
                    <!-- start project list -->
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table ">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">Select </th>
                           
                            <th class="column-title">Task Name </th>
                            <th class="column-title">Task Code </th>
                            <th class="column-title">Category </th>
                            <th class="column-title">Action</th>
                             <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                           
                           </tr>
                        </thead>
                        <?php 
                  
                   
    // output data of each row
    while($row5 = $result5->fetch_assoc()) {
       ?>

                        <tbody>
                          <tr class="even pointer" id="<?php echo $row5['task_code'] ?>">
                            <td class="a-center ">
                              
                              <input class="flat" type="checkbox" name="check_list[]" value="<?php echo $row5['task_code'] ?>">

                            </td>
                            <td class=" "><?php echo $row5['task_name'] ?></td>
                            <td class=" "><?php echo $row5['task_code'] ?></td>
                            <td class=" "><?php echo $row5['task_category'] ?></td>
                            <td>
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sm1"> <i class="fa fa-trash-o" name="delete"></i> Delete</button></td>
                          </tr>
                                                 
                        </tbody>
                    <?php } ?>
                      </table>
                    </div>
                       <div class="pull-right">
                    <button class="btn btn-primary" type="assign">Assign Project</button>
                  </div>
                  <form method="post"  onSubmit="window.location.reload()" action="">
                      
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
                          <input type="hidden" name="delete_ok" id="delete_ok" value=''>
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="close3">Close</button>
                           <input type="submit" name="delete_button"  placeholder="OK" value="OK"  class="btn btn-primary">
                         

                        </div>

                      </div>
                    </div>
                  </div></form>
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
