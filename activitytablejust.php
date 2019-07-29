<?php 
include ('db.php');
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
<div class="col-md-12">
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

                    <!--<p>Simple table with project listing with progress and editing options</p>-->
                    <div class="pull-right">
                    <a href="indus_booking.php" class="btn btn-primary">Add Activity </a>
                    </div>

                  <div class="row">
      <div id="userTable"></div>
      </div>

                    <!-- start project list -->    

                    
                       
      
              </div>
            </div></div>
                            
                         
                    <!-- end project list -->

                  
               
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
  <script type="text/javascript">
    $(document).ready(function(){
    showactivity();
	
    //delete
	$(document).on('click', '#deletethis', function(){
      $id=$(this).val();
       $('#delete'+$id).modal('hide');
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
console.log($id);
        $.ajax({
          type: "POST",
          url: "activity_query.php",
          data: {
            id: $id,
            deleteactivity: 1,
          },
          success: function(){
            showactivity();
          }
        });
    });

   // $(document).on('click', '#deletethis', function(){
    // $uid=$(this).val();
     // $('#delete'+$uid).modal('hide');
      // $('body').removeClass('modal-open');
      // $('.modal-backdrop').remove();
      // $id=$(this).val();
        // $.ajax({
          // type: "POST",
          // url: "activity_query.php",
          // data: {
            // activity_code: $id,
            // del: 1,
          // },
          // success: function(){
            // showactivity();
          // }
        // });
    // });
 /*$(document).on('click', '#update', function(){
      $uid=$(this).val();
      $('#edit'+$uid).modal('hide');
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
      $taskname=$('#task_name'+$uid).val();
      $taskcode=$('#task_code'+$uid).val();
      $taskcategory=$('#task_category'+$uid).val();
        $.ajax({
          type: "POST",
          url: "task_query.php",
          data: {

            taskcode: $uid,
            task_code: $taskcode,
            task_name: $taskname,
            task_category: $taskcategory,
            edit: 1,
          },
          success: function(){
            showtask();
          }
        });
    }); */ 
  });
 
	function showactivity(){
    $.ajax({
      url: 'activity_show.php',
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
