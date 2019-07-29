
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
                <h3>PROJECTS</h3>
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
                    <h2>Project Details</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                                        
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="pull-right">
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#projectaddmodal"> Add Project</button>
                       </div>
                     <?php
                     include('project_add.php');?>

                     <div class=row>
                     <div id="userTable"></div></div>
                    <!-- start project list -->
                  </div>
                   
</div></div>
                    <!--<table class="table table-striped projects">
                      
                        </tr>-->
                      

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
  <script type = "text/javascript">
  $(document).ready(function(){
    showproject();


    //Add New
    $(document).on('click', '#addnewproject', function(){
       console.log("ready");
      if ($('#pcode').val()=="" || $('#pname').val()=="" || $('#ploc').val()=="" || $('#sdate').val()=="" || $('#edate').val()=="" || $('#plead').val()=="" || $('#status').val()=="" ){

        alert('Please input data first');
      }
      else{
      	 $('#projectaddmodal').modal('hide');
        $('body').removeClass('modal-open');
      $('.modal-backdrop').remove(); 
      $pcode=$('#pcode').val();
      $pname=$('#pname').val(); 
      $ploc=$('#ploc').val();  
      $sdate=$('#sdate').val(); 
      $edate=$('#edate').val(); 
      $plead=$('#plead').val(); 
      $status=$('#status').val(); 
       document.getElementById("addprojectmodalform").reset();
        $.ajax({
          type: "POST",
          url: "project_query.php",
          data: {
            pcode: $pcode,
            pname: $pname,
            ploc: $ploc,
            sdate: $sdate,
            edate: $edate,
            plead: $plead,
            status: $status,
            addproject: 1,
          },
          success: function(){

            showproject();
          }
        });

      }
    });
    //Delete
    $(document).on('click', '#deleteproject', function(){
      $project_code=$(this).val();
       $('#delete'+$project_code).modal('hide');
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();

        $.ajax({
          type: "POST",
          url: "project_query.php",
          data: {
            project_code: $project_code,
            deleteproj: 1,
          },
          success: function(){
            showproject();
          }
        });
    });
    //Update
    $(document).on('click', '#updateuser', function(){
      $uid=$(this).val();
      console.log($uid);
      $('#edit'+$uid).modal('hide');
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
      $uprojectcode=$('#uprojectcode'+$uid).val();
      $uprojectname=$('#uprojectname'+$uid).val();
      $uprojectlocation=$('#uprojectlocation'+$uid).val();
      $ustartdate=$('#ustartdate'+$uid).val();
      $uenddate=$('#uenddate'+$uid).val();
      $uprojectlead=$('#uprojectlead'+$uid).val();
      $uprojectstatus=$('#uprojectstatus'+$uid).val();
      console.log( $uprojectstatus);
        $.ajax({
          type: "POST",
          url: "project_query.php",
          data: {
          	code : $uid,
            project_code: $uprojectcode,
            project_name: $uprojectname,
            project_location: $uprojectlocation,
            start_date: $ustartdate,
            end_date: $uenddate,
            project_lead: $uprojectlead,
            project_status: $uprojectstatus,
            editproject: 1,
          },
          success: function(){
            showproject();
          }
        });
    });
  
  });
  
  //Showing our Table
  function showproject(){
    $.ajax({
      url: 'project_show.php',
      type: 'POST',
      async: false,
      data:{
        show: 1
      },
      success: function(response){
        $('#userTable').html(response);
      }
    });
  }
  
</script>
</html>
