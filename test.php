<?php
include('db.php');
$sql0="SELECT * FROM domain";
$result0=$conn->query($sql0);
$sql1="SELECT * FROM type";
$result1=$conn->query($sql1);
$sql2="SELECT type_intcode,CONCAT(type_cat,'-', type_name) AS p FROM type WHERE type_cat='Direct'";
$result2=$conn->query($sql2);
$sql3="SELECT * FROM task";
$result3=$conn->query($sql3);


if(isset($_POST['submit'])){//to run PHP script on submit
$date=$_POST['date'];
$domain=$_POST['domain'];
$type=$_POST['type'];
$value=$_POST['project'];
$code=$_POST['code'];
$task=$_POST['task'];
$sub=$_POST['subtask'];
$hrs=$_POST['hours'];
$ind=$_POST['ind'];
$comm=$_POST['comm'];
//if(!empty($_POST['checkbox'])){
$sql4="INSERT INTO booking(alpsid,date,domain_f,type_f,value,code,task_f,subtask_f,hrs_consumed,industrialization,deliverable_done,comments) VALUES ('422180','$date','$domain','$type','$value','$code','$task','$sub','$hrs','$ind','1','$comm')";
$result4=$conn->query($sql4);
//}
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
      
    <title>Time Sheet Entry</title>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
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
                          <input type="date" name="date" value="" id="date" class="form-control">
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
                         <select  class="form-control" name="domain" id="domain" required>
                            <option selected disabled>Choose Domain</option>
                           <?php
							 while ($row0 = $result0->fetch_assoc()) {
                         echo "<option value='" . $row0['domain_intcode'] ."'>" . $row0['domain_name'] ."</option>";
}?>
                            </select>
                        </div>
                       
                        
                        <label class="control-label col-md-2">Type</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="type" id="type" required>
                            <option selected="selected">Choose Type</option>
							 <?php
							  while ($row2 = $result2->fetch_assoc()) {
								  echo '<option value="'.$row2['type_intcode'].'" >'.$row2['p'].'</option>';
								  
							  }
							  echo '<option value="'.'Indirect'.'">'.'Indirect'.'</option>';
							  
							 
?>
                          </select>
                        </div>
                        <br><br>
                        </div>
                    </div>
                        <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Category</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="project" id="project" required>
                            <option selected="selected">Choose Category</option>
                          
                          </select>
                        </div>
                        
                       
                       
                          <label class="control-label col-md-2 "> Code</label>
						  <div name="code" id="code">
                          <label class="control-label col-md-1"></label>
						  </div>
                                                </div>
                                            </div>
                        <div class="row">
                        <div class="form-group" >
                        <label class="control-label col-md-3 ">Task</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="task" id="task" required>
                            <option selected="selected">Choose Task</option>
                             <?php
							 while ($row3 = $result3->fetch_assoc()) {
                         echo "<option value='" . $row3['task_intcode'] ."'>" . $row3['task_name'] ."</option>";
}?>
                          </select>
                        </div>
                       
                        
                        <label class="control-label col-md-2">Sub Task</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="subtask" id="subtask" required>
                            <option selected="selected" >Choose SubTask</option>
                            
                          </select>
                        </div>
						
                        <br><br>
                        </div>
                        <div class="row">
                        <div class="form-group">
                        <label class="control-label col-md-3">Hours Consumed</label>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="hours"  value="" id="hours" placeholder="">
                        </div>
                        <div class="">
                            <label class="control-label col-md-2">Deliverables Done</label>
                            <input type="checkbox" name="checkbox" class="js-switch" checked />
                          </div>
                        
                      </div>
                  </div>
                      <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-3">Industrialization</label>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="ind"  value="" id="ind" placeholder="">
                        </div>
                      <label class="control-label col-md-2">Remarks</label>
                         <div class="col-md-3">
                        <textarea id="message" required="required" class="form-control" name="comm" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                    </div>
                </div></div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <input type="submit"  id="submit" value="submit" placeholder="" class="btn btn-success">
                          
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
    <!-- Switchery -->
    <script src="vendors/switchery/dist/switchery.min.js"></script>
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
  <script type="text/javascript">
$(document).ready(function()
{
	console.log('ready');
$("#type").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;
console.log(id);
if (id=="Indirect")
{
	$.ajax
({
type: "POST",
url: "test1.php",
data:{id: id, 
      indirect :1,
	  },
cache: false,
success: function(html)
{
$("#project").html(html);
/* document.getElementById( 'task' ).style.display = 'none';
document.getElementById( 'subtask' ).style.display = 'none'; */
} 
});
}
else
{

$.ajax
({
type: "POST",
url: "test1.php",
data: {id: id, 
      direct :1,
	  },
cache: false,
success: function(html)
{
$("#project").html(html);
} 
});
}

});

$("#task").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;
console.log(id);
$.ajax
({
type: "POST",
url: "test1.php",
data:dataString,
cache: false,
success: function(html)
{
$("#subtask").html(html);
} 
});


});

$("#project").change(function()
{
var id1=$(this).val();
var dataString = 'id1='+ id1;
$("#code").html(""+ id1);


});

});
</script>
 </html>
