
<?php 
//require 'db.php';

function intcode($prefix) {
    $b=rand(1000,9999);
  $intcode=$prefix.$b;
    return $intcode;
  }

if (isset($_POST['adddomain1']))
{
  $domainname=$_POST["domain_name"];
  $domainintcode=intcode("DOM");
  $sql0="SELECT domain_intcode FROM domain";
  $result0=$conn->query($sql0);
  while ($row0 = $result0->fetch_assoc()) {
  if (($row0['domain_intcode'])=='$domainintcode')
  {
      $domainintcode=intcode("DOM");
  }
else
{
  $sql1="INSERT INTO domain(domain_name,domain_intcode) VALUES('$domainname','$domainintcode')";
  $result1=$conn->query($sql1);
}
}
}

if (isset($_POST['adddirectmodalbutton']))
{
  $directaddname=$_POST['direct_addname'];
  $directintcode=intcode("DIR");
  $sql2="SELECT type_intcode FROM type";
  $result2=$conn->query($sql2);
  while ($row2 = $result2->fetch_assoc()) {
  if (($row2['type_intcode'])=='$directintcode')
  {
      $directintcode=intcode("DIR");
  }
else
{
  $sql20="INSERT INTO type(type_name,type_intcode,type_cat) VALUES('$directaddname','$directintcode','Direct')";
  $result20=$conn->query($sql20);
}
}
}

if (isset($_POST['addindirectmodalbutton']))
{
  $indirectaddname=$_POST['indirect_addname'];
  $indirectaddcode=$_POST['indirect_addcode'];
  $indirectintcode=intcode("IND");
  $sql3="SELECT type_intcode FROM type";
  $result3=$conn->query($sql3);
  while ($row3 = $result2->fetch_assoc()) {
  if (($row3['type_intcode'])=='$indirectintcode')
  {
      $indirectintcode=intcode("IND");
  }
else
{
  $sql30="INSERT INTO type(type_name,type_intcode,type_cat,type_usrcode) VALUES('$indirectaddname','$indirectintcode','Indirect','$indirectaddcode')";
  $result30=$conn->query($sql30);
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
    
    <title>Setup Page </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet"></head>

  

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
                <h3></h3>
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
            <div class="clearfix"></div>

            <div class="">
               <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="x_panel" >
                  <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> Direct</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="panel-body" style="max-height: 250px;overflow-y: scroll;">

                    <!-- start accordion -->
                    <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne">
                          <h4 class="panel-title">Projects</h4>
                        </a>
                        <div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                         
                          <div class="panel-body" style="max-height: 250px;overflow-y: scroll;">
                          <div class="pull-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adddirect">ADD</button>
                                </div>
                                <!---Add Model-->
                                <div id="adddirect" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                         <h4 class="modal-title" id="myModalLabel">ADD</h4>
                        </div>
                        <div class="modal-body">
                 
<form class="form-horizontal form-label-left" novalidate="" method="post" id="addmodalform">                 
                      <div class="item form-group">
                        <label class="control-label" for="task_code">Project Name<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_code" name="task_code" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label" for="task_name">Project Code<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_name" name="task_name" required="required" class="form-control">
                        </div>
                      </div>


                     </div>   
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="addclose">Close</button>
                         <button type = "button" id="addnew" class = "btn btn-primary">Add</button>
                         </form>
                        </div>

                      </div>
                    </div>
                  </div>
                                  <!---Add Model ends---> 
                              
                                  <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Code</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th><td>Sydney</td>
                                  <td>SYD</td>
                                  <td>
                                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#editdirect"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                  <button type="button" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deletedirect"><span class = "glyphicon glyphicon-trash "></span>Delete</button>
                                  </td>
                                </tr>
                                 <!---Edit Model-->
                                       
                  <div id="editdirect" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                         <h4 class="modal-title" id="myModalLabel">Edit</h4>
                        </div>
                        <div class="modal-body">
                 
<form class="form-horizontal form-label-left" novalidate="" method="post" id="addmodalform">                 
                      <div class="item form-group">
                        <label class="control-label" for="task_code">Project Name<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_code" name="task_code" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label" for="task_name">Project Code<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_name" name="task_name" required="required" class="form-control">
                        </div>
                      </div>
</form>

                     </div>   
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="addclose">Close</button>
                         <button type = "button" id="addnew" class = "btn btn-primary">Save Changes</button>
                        </div>

                      </div>
                    </div>
                  </div>



                                  <!---Edit Model ends---> 

                                  <!----Delete Model-->
                                        <div class="modal fade bs-example-modal-sm" id="deletedirect" tabindex="-1" role="dialog" aria-hidden="true">
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
                                 <!---Delete Model Ends-->

                                <tr>
                                  <th scope="row">2</th>
                                   <td>Eloco</td>
                                  <td>ELO</td>
                                  <td><button class="btn btn-info btn-xs" value="" id="editproject"><span class="glyphicon glyphicon-pencil "></span> Edit</button>
                                  <button class="btn btn-danger btn-xs delete" value="" id="deleteproject"><span class="glyphicon glyphicon-trash"></span>Delete</button></td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Montreal</td>
                                  <td>MON</td>
                                  <td><button class="btn btn-info btn-xs" value="" id="editproject"><span class="glyphicon glyphicon-pencil "></span> Edit</button>
                                  <button class="btn btn-danger btn-xs delete" value="" id="deleteproject"><span class="glyphicon glyphicon-trash"></span>Delete</button></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title">SEC</h4>
                        </a>
                        <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                             <div class="panel-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Code</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                  <th scope="row">1</th>
                                  <td>M7</td>
                                  <td>M7</td>
                                  <td>
                                  <button class="btn btn-info btn-xs" value="" id="editproject"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                  <button class="btn btn-danger btn-xs delete" value="" id="deleteproject"><span class = "glyphicon glyphicon-trash "></span> Delete</button></td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                    <td>MP14</td>
                                  <td>MP14</td>
                                  <td>
                                  <button class="btn btn-info btn-xs" value="" id="editproject"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                  <button class="btn btn-danger btn-xs delete" value="" id="deleteproject"><span class = "glyphicon glyphicon-trash "></span> Delete</button></td>
                                </tr>
                                
                              </tbody>
                            </table>
                          </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree1" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                          <h4 class="panel-title">CoE</h4>
                        </a>
                        <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                           <div class="panel-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Code</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>NEO-CoE</td>
                                  <td>NEO-CoE</td>
                                  <td>
                                  <button class="btn btn-info btn-xs" value="" id="editproject"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                  <button class="btn btn-danger btn-xs delete" value="" id="deleteproject"><span class = "glyphicon glyphicon-trash "></span> Delete</button></td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>TRB Training</td>
                                  <td>TRB</td>
                                  <td>
                                  <button class="btn btn-info btn-xs" value="" id="editproject"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                  <button class="btn btn-danger btn-xs delete" value="" id="deleteproject"><span class = "glyphicon glyphicon-trash "></span> Delete</button></td>
                                </tr>
                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                       <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingFour1" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1" aria-expanded="false" aria-controls="collapseFour">
                          <h4 class="panel-title">Bids</h4>
                        </a>
                        <div id="collapseFour1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                           <div class="panel-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Code</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mumbai L3</td>
                                  <td>ML3</td>
                                  <td>
                                  <button class="btn btn-info btn-xs" value="" id="editproject"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                  <button class="btn btn-danger btn-xs delete" value="" id="deleteproject"><span class = "glyphicon glyphicon-trash "></span> Delete</button></td>
                                </tr> <tr>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Mumbai L2/L7</td>
                                  <td>ML2</td>
                                  <td>
                                  <button class="btn btn-info btn-xs" value="" id="editproject"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                  <button class="btn btn-danger btn-xs delete" value="" id="deleteproject"><span class = "glyphicon glyphicon-trash "></span> Delete</button></td>
                                </tr>
                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end of accordion -->


                  </div>
                </div>
              </div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Indirect </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                        <div class="panel-body" style="max-height: 250px;overflow-y: scroll;">
                          <div class="pull-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addindirect">ADD</button>
                              </div>
                                <!---Add Model-->
                                <div id="addindirect" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                         <h4 class="modal-title" id="myModalLabel">Add</h4>
                        </div>
                        <div class="modal-body">
                 
<form class="form-horizontal form-label-left" novalidate="" method="post" id="addmodalform">                 
                      <div class="item form-group">
                        <label class="control-label" for="task_code">Name<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_code" name="task_code" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label" for="task_name">Code<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_name" name="task_name" required="required" class="form-control">
                        </div>
                      </div>
</form>

                     </div>   
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="addclose">Close</button>
                         <button type = "button" id="addnew" class = "btn btn-primary">Add</button>
                        </div>

                      </div>
                    </div>
                  </div>



                                  <!---Add Model ends---> 
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Code</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                   <td>Meeting</td>
                                  <td>meet</td>
                                  <td>
                                  <button class="btn btn-info btn-xs" value="" data-toggle="modal" data-target="#editindirect"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                  <button type="button" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deleteindirect"><span class = "glyphicon glyphicon-trash "></span>Delete</button>
                                </td>

                                   <!---Edit Model-->
                                       
                  <div id="editindirect" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                         <h4 class="modal-title" id="myModalLabel">Edit</h4>
                        </div>
                        <div class="modal-body">
                 
<form class="form-horizontal form-label-left" novalidate="" method="post" id="addmodalform">                 
                      <div class="item form-group">
                        <label class="control-label" for="task_code">Name<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_code" name="task_code" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label" for="task_name">Code<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_name" name="task_name" required="required" class="form-control">
                        </div>
                      </div>
</form>

                     </div>   
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="addclose">Close</button>
                         <button type = "button" id="addnew" class = "btn btn-primary">Save Changes</button>
                        </div>

                      </div>
                    </div>
                  </div>



                                  <!---Edit Model ends---> 

                                  

                                  <!----Delete Model-->
                                        <div class="modal fade bs-example-modal-sm" id="deleteindirect" tabindex="-1" role="dialog" aria-hidden="true">
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
                                 <!---Delete Model Ends-->
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Tasks </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                        <div class="panel-body" style="max-height: 250px;overflow-y: scroll;">
                          <div class="pull-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addtasks">ADD</button>
                                </div>
                                <!---Add Model-->
                                <div id="addtasks" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                         <h4 class="modal-title" id="myModalLabel">Add</h4>
                        </div>
                        <div class="modal-body">
                 
<form class="form-horizontal form-label-left" novalidate="" method="post" id="addmodalform">                 
                      <div class="item form-group">
                        <label class="control-label" for="task_code">Task Name<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_code" name="task_code" required="required" class="form-control ">
                        </div>
                      </div>
                      
</form>

                     </div>   
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="addclose">Close</button>
                         <button type = "button" id="addnew" class = "btn btn-primary">Add</button>
                        </div>

                      </div>
                    </div>
                  </div>



                                  <!---Add Model ends---> 
                              
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Task Name</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Indus Management</td>
                                  <td>
                                    <button class="btn btn-info btn-xs" value="" data-toggle="modal" data-target="#edittask"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                  <button type="button" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deletetask"><span class = "glyphicon glyphicon-trash "></span>Delete</button>
                                  </td>
                                  <div id="edittask" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                         <h4 class="modal-title" id="myModalLabel">Edit</h4>
                        </div>
                        <div class="modal-body">
                 
<form class="form-horizontal form-label-left" novalidate="" method="post" id="addmodalform">                 
                      <div class="item form-group">
                        <label class="control-label" for="task_code">Task Name<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_code" name="task_code" required="required" class="form-control ">
                        </div>
                      </div>
                      
</form>

                     </div>   
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="addclose">Close</button>
                         <button type = "button" id="addnew" class = "btn btn-primary">Save Changes</button>
                        </div>

                      </div>
                    </div>
                  </div>



                                  <!---Edit Model ends---> 
                                  
                                  <!----Delete Model-->
                                        <div class="modal fade bs-example-modal-sm" id="deletetask" tabindex="-1" role="dialog" aria-hidden="true">
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
                                 <!---Delete Model Ends-->
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Change Management</td>
                                  <td>
                                    <button class="btn btn-info btn-xs" value="" data-toggle="modal" data-target="#edittask"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                   <button type="button" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deletetask"><span class = "glyphicon glyphicon-trash "></span>Delete</button>
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Site Support</td>
                                  <td>
                                    <button class="btn btn-info btn-xs" value="" data-toggle="modal" data-target="#edittask"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                   <button type="button" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deletetask"><span class = "glyphicon glyphicon-trash "></span>Delete</button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> Subtasks</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<div class="panel-body" style="max-height: 250px;overflow-y: scroll;">
                    <!-- start accordion -->
                    <div class="accordion" id="accordion2" role="tablist" aria-multiselectable="true">
                      <div class="panel" >
                        <a class="panel-heading collapsed" role="tab" id="headingOne2" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="false" aria-controls="collapseOne">
                          <h4 class="panel-title">Indus Management</h4>
                        </a>
                        <div id="collapseOne2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                          <div class="pull-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addsubtasks">ADD</button>
                              </div>

                                <!---Add Model-->
                                 <div id="addsubtasks" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                         <h4 class="modal-title" id="myModalLabel">Add</h4>
                        </div>
                        <div class="modal-body">
                 
<form class="form-horizontal form-label-left" novalidate="" method="post" id="addmodalform">                 
                      <div class="item form-group">
                        <label class="control-label" for="task_code">Subtask Name<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_code" name="task_code" required="required" class="form-control ">
                        </div>
                      </div>
                      
</form>

                     </div>   
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="addclose">Close</button>
                         <button type="button" id="addnew" class="btn btn-primary">Add</button>
                        </div>

                      </div>
                    </div>
                  </div>



                                <!---Add Model ends---> 
                      <div id="editsubtask" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                         <h4 class="modal-title" id="myModalLabel">Edit</h4>
                        </div>
                        <div class="modal-body">
                 
<form class="form-horizontal form-label-left" novalidate="" method="post" id="addmodalform"></form>                 
                      <div class="item form-group">
                        <label class="control-label" for="task_code">Subtask Name<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_code" name="task_code" required="required" class="form-control ">
                        </div>
                      </div>
                      


                     </div>   
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="addclose">Close</button>
                         <button type="button" id="addnew" class="btn btn-primary">Save Changes</button>
                        </div>

                      </div>
                    </div>
                  </div><div class="modal fade bs-example-modal-sm" id="deletesubtask" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                         
                                        </div>
                                        <div class="modal-body">
                                            <div style="text-align:center"><p>Are you sure that you want to delete the task?</p>
                                            <p>Press 'OK' to continue</p></div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">OK</button>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                   <th>Subtask Name</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                                   <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>IMFU</td>
                                  <td>
                                    <button class="btn btn-info btn-xs" value="" data-toggle="modal" data-target="#editsubtask"><span class="glyphicon glyphicon-pencil "></span> Edit</button>
                                  <button type="button" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deletesubtask"><span class="glyphicon glyphicon-trash "></span>Delete</button>
                                  </td>
                                  <div id="editsubtask" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                         <h4 class="modal-title" id="myModalLabel">Edit</h4>
                        </div>
                        <div class="modal-body">
                 
<form class="form-horizontal form-label-left" novalidate="" method="post" id="addmodalform">                 
                      <div class="item form-group">
                        <label class="control-label" for="task_code">Subtask Name<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_code" name="task_code" required="required" class="form-control ">
                        </div>
                      </div>
                      
</form>

                     </div>   
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="addclose">Close</button>
                         <button type = "button" id="addnew" class = "btn btn-primary">Save Changes</button>
                        </div>

                      </div>
                    </div>
                  </div>






                                  <!---Edit Model ends---> 
                                  
                                  <!----Delete Model-->
                                         <div class="modal fade bs-example-modal-sm" id="deletesubtask" tabindex="-1" role="dialog" aria-hidden="true">
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
                                 <!---Delete Model Ends-->
                                </tr>
                                <tr>
                                  <th scope="row">2</th><td>Industrial Gap Analysis</td>
                                  <td>
                                    <button class="btn btn-info btn-xs" value="" data-toggle="modal" data-target="#editsubtask"><span class="glyphicon glyphicon-pencil "></span> Edit</button>
                                   <button type="button" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deletesubtask"><span class="glyphicon glyphicon-trash "></span>Delete</button>
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                   <td>Criticality Matrix</td>
                                  <td>
                                    <button class="btn btn-info btn-xs" value="" data-toggle="modal" data-target="#editsubtask"><span class="glyphicon glyphicon-pencil "></span> Edit</button>
                                   <button type="button" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deletesubtask"><span class="glyphicon glyphicon-trash "></span>Delete</button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo2" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title">Change Management</h4>
                        </a>
                        <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                           <div class="panel-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Username</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree2" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree">
                          <h4 class="panel-title">Site Support</h4>
                        </a>
                        <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                           <div class="panel-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Username</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                        <div class="panel">
                         <a class="panel-heading collapsed" role="tab" id="headingFour2" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour2" aria-expanded="false" aria-controls="collapseFour">
                          <h4 class="panel-title">Mounting Reviews</h4>
                        </a>
                         <div id="collapseFour2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                          <div class="panel-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Username</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                        <div class="panel">
                         <a class="panel-heading collapsed" role="tab" id="headingEight2" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight2" aria-expanded="false" aria-controls="collapseEight">
                          <h4 class="panel-title">Special Process</h4>
                        </a>
                         <div id="collapseEight2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                          <div class="panel-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Username</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                        <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingFive2" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive2" aria-expanded="false" aria-controls="collapseFive">
                          <h4 class="panel-title">Co-Engg</h4>
                        </a>
                         <div id="collapseFive2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                          <div class="panel-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Username</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                        <div class="panel">
                       <a class="panel-heading collapsed" role="tab" id="headingSix2" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix2" aria-expanded="false" aria-controls="collapseSix">
                          <h4 class="panel-title">Indus Deliverables</h4>
                        </a>
                         <div id="collapseSix2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                          <div class="panel-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Username</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                        <div class="panel">
                         <a class="panel-heading collapsed" role="tab" id="headingSeven2" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven2" aria-expanded="false" aria-controls="collapseSeven">
                          <h4 class="panel-title">Other</h4>
                        </a>
                        <div id="collapseSeven2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                          <div class="panel-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Username</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end of accordion -->


                  </div>
                </div>
              </div>
              <div class="clearfix"></div>


               <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Domain </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                       <div class="panel-body" style="max-height: 250px;overflow-y: scroll;">
                        <div class="pull-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adddomain">ADD</button>
                              </div>
                                <!---Add Model-->
                                <div id="adddomain" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                         <h4 class="modal-title" id="myModalLabel">Add</h4>
                        </div>
                        <div class="modal-body">
                 
<form class="form-horizontal form-label-left" novalidate="" method="post" id="addmodalform">                 
                      <div class="item form-group">
                        <label class="control-label" for="task_code">Domain Name<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_code" name="task_code" required="required" class="form-control ">
                        </div>
                      </div>
                      
</form>

                     </div>   
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="addclose">Close</button>
                         <button type = "button" id="addnew" class = "btn btn-primary">Add</button>
                        </div>

                      </div>
                    </div>
                  </div>



                                  <!---Add Model ends---> 
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Domain Name</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Electrical</td>
                                  <td>
                                    <button class="btn btn-info btn-xs" value="" data-toggle="modal" data-target="#editdomain"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                  <button type="button" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deletedomain"><span class = "glyphicon glyphicon-trash "></span>Delete</button>
                                  </td>
                                  <div id="editdomain" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                         <h4 class="modal-title" id="myModalLabel">Edit</h4>
                        </div>
                        <div class="modal-body">
                 
<form class="form-horizontal form-label-left" novalidate="" method="post" id="addmodalform">                 
                      <div class="item form-group">
                        <label class="control-label" for="task_code">Domain Name<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_code" name="task_code" required="required" class="form-control ">
                        </div>
                      </div>
                      
</form>

                     </div>   
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="addclose">Close</button>
                         <button type = "button" id="addnew" class = "btn btn-primary">Save Changes</button>
                        </div>

                      </div>
                    </div>
                  </div>



                                  <!---Edit Model ends---> 
                                  
                                  <!----Delete Model-->
                                        <div class="modal fade bs-example-modal-sm" id="deletedomain" tabindex="-1" role="dialog" aria-hidden="true">
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
                                 <!---Delete Model Ends-->
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>MFI</td>
                                  <td>
                                    <button class="btn btn-info btn-xs" value="" data-toggle="modal" data-target="#editdomain"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                   <button type="button" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deletedomain"><span class = "glyphicon glyphicon-trash "></span>Delete</button>
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Interiors</td>
                                  <td>
                                    <button class="btn btn-info btn-xs" value="" data-toggle="modal" data-target="#editdomain"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                   <button type="button" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deletedomain"><span class = "glyphicon glyphicon-trash "></span>Delete</button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                </div>
              </div>


             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Direct </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                                          </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                        <div class="panel-body" style="max-height: 250px;overflow-y: scroll;">
                           <div class="pull-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adddirect1">ADD</button>
</div>
                                <!---Add modal-->
                                <div id="adddirect1" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                         <h4 class="modal-title" id="myModalLabel">Add</h4>
                        </div>
                        <div class="modal-body">
                 
<form class="form-horizontal form-label-left" novalidate="" method="post" id="addmodalform">                 
                      <div class="item form-group">
                        <label class="control-label" for="task_code">Name<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_code" name="task_code" required="required" class="form-control ">
                        </div>
                      </div>
                      
</form>

                     </div>   
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="addclose">Close</button>
                         <button type = "button" id="addnew" class = "btn btn-primary">Add</button>
                        </div>

                      </div>
                    </div>
                  </div>



                                  <!---Add Model ends---> 
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                   <th>Name</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                   <td>Projects</td>
                                  <td><button class="btn btn-info btn-xs" value="" data-toggle="modal" data-target="#editdirect1"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                    <button type="button" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deletedirect1"><span class = "glyphicon glyphicon-trash "></span>Delete</button></td>

                                    <div id="editdirect1" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                         <h4 class="modal-title" id="myModalLabel">Edit</h4>
                        </div>
                        <div class="modal-body">
                 
<form class="form-horizontal form-label-left" novalidate="" method="post" id="addmodalform">                 
                      <div class="item form-group">
                        <label class="control-label" for="task_code">Name<span class="required">*</span>
                        </label>
                        <div>
                          <input type="text" id="task_code" name="task_code" required="required" class="form-control ">
                        </div>
                      </div>
                      
</form>

                     </div>   
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="addclose">Close</button>
                         <button type = "button" id="addnew" class = "btn btn-primary">Save Changes</button>
                        </div>

                      </div>
                    </div>
                  </div>



                                  <!---Edit Model ends---> 
<!----Delete Model-->
                                        <div class="modal fade bs-example-modal-sm" id="deletedirect1" tabindex="-1" role="dialog" aria-hidden="true">
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
                                 <!---Delete Model Ends-->
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>SEC</td>
                                  <td>
                                    <button class="btn btn-info btn-xs" value="" data-toggle="modal" data-target="#editdirect1"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                    <button type="button" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deletedirect1"><span class = "glyphicon glyphicon-trash "></span>Delete</button></td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>COE</td>
                                  <td>
                                    <button class="btn btn-info btn-xs" value="" data-toggle="modal" data-target="#editdirect1"><span class = "glyphicon glyphicon-pencil "></span> Edit</button>
                                    <button type="button" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deletedirect1"><span class = "glyphicon glyphicon-trash "></span>Delete</button></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
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

    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  
  </body>
</html>