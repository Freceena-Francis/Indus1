<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Profile Page </title>

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
                <h3>User Profile</h3>
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

<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                     
                    <h2>User Report <small><a href="indus_booking.php">Download</a></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Anna</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> 401234
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Engineer
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-at"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">xyz@alstomgroup.com</a>
                        </li>
                      </ul>

                      <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br>

                      <!-- start skills -->
                      <!-- <h4>Skills</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>Mumbai</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="49" style="width: 50%;"></div>
                          </div>
                        </li>
                        <li>
                          <p>Lucknow</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70" aria-valuenow="69" style="width: 70%;"></div>
                          </div>
                        </li>
                        <li>
                          <p>E-Loco</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30" aria-valuenow="28" style="width: 30%;"></div>
                          </div>
                        </li>
                        
                      </ul> -->
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>User Activity Report</h2>
                        </div>
                        <div class="col-md-6">
                          <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>January 27, 2019 - February 25, 2019</span> <b class="caret"></b>
                          </div>
                        </div>
                      </div>
                      <!-- start of user-activity-graph -->
                      <div id="graph_bar" style="width: 100%; height: 280px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="280" version="1.1" width="519" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.25px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël @@VERSION</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="42.84375" y="213.11439601237498" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.005021012374982" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.34375,213.11439601237498H494" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.84375" y="166.08579700928124" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.007672009281237" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.34375,166.08579700928124H494" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.84375" y="119.05719800618749" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.010323006187491" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">200</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.34375,119.05719800618749H494" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.84375" y="72.02859900309375" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.0129740030937455" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">300</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.34375,72.02859900309375H494" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.84375" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">400</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.34375,25H494" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="472.0671875" y="225.61439601237498" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-56.6469,326.4762)"><tspan dy="4.005021012374982" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Other</tspan></text><text x="428.2015625" y="225.61439601237498" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-85.5704,315.6679)"><tspan dy="4.005021012374982" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">SAP</tspan></text><text x="384.3359375" y="225.61439601237498" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-82.5795,282.8575)"><tspan dy="4.005021012374982" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">FMECA</tspan></text><text x="340.4703125" y="225.61439601237498" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-98.1604,263.0512)"><tspan dy="4.005021012374982" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">PHA</tspan></text><text x="296.6046875" y="225.61439601237498" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-95.2692,230.4201)"><tspan dy="4.005021012374982" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">RAMS Plan</tspan></text><text x="252.7390625" y="225.61439601237498" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-106.378,207.3784)"><tspan dy="4.005021012374982" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">SSHA</tspan></text><text x="208.8734375" y="225.61439601237498" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-111.1358,180.0977)"><tspan dy="4.005021012374982" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">FTA</tspan></text><text x="165.0078125" y="225.61439601237498" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-126.0666,159.7268)"><tspan dy="4.005021012374982" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Hazard Log</tspan></text><text x="121.1421875" y="225.61439601237498" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-130.1765,131.8994)"><tspan dy="4.005021012374982" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Safety Case</tspan></text><text x="77.2765625" y="225.61439601237498" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-134.9343,104.6186)"><tspan dy="4.005021012374982" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">SRIL</tspan></text><rect x="60.826953125" y="189.28657251747416" width="32.89921875" height="23.827823494900827" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="104.692578125" y="172.04275288300644" width="32.89921875" height="41.07164312936854" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="148.55820312499998" y="195.87057637790727" width="32.89921875" height="17.243819634467712" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="192.423828125" y="114.60515730056127" width="32.89921875" height="98.50923871181371" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="236.289453125" y="172.04275288300644" width="32.89921875" height="41.07164312936854" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="280.155078125" y="78.04825967548973" width="32.89921875" height="135.06613633688525" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="324.020703125" y="141.38010633298933" width="32.89921875" height="71.73428967938565" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="367.886328125" y="64.44131836392793" width="32.89921875" height="148.67307764844705" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="411.751953125" y="120.87563716764045" width="32.89921875" height="92.23875884473453" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="455.617578125" y="127.14611703471961" width="32.89921875" height="85.96827897765537" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="left: 37.0766px; top: 111px; display: none;"><div class="morris-hover-row-label">SIL</div><div class="morris-hover-point" style="color: #26B99A">
  Geekbench:
  380
</div></div></div>
                      <!-- end of user-activity-graph -->

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                          </li>
                          
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <ul class="messages">
                              <li>
                                <img src="images/img.jpg" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-info">24</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Desmond Davison</h4>
                                  <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br>
                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                  </p>
                                </div>
                              </li>
                              <li>
                                <img src="images/img.jpg" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-error">21</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Brian Michaels</h4>
                                  <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br>
                                  <p class="url">
                                    <span class="fs1" aria-hidden="true" data-icon=""></span>
                                    <a href="#" data-original-title="">Download</a>
                                  </p>
                                </div>
                              </li>
                              <li>
                                <img src="images/img.jpg" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-info">24</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Desmond Davison</h4>
                                  <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br>
                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                  </p>
                                </div>
                              </li>
                              <li>
                                <img src="images/img.jpg" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-error">21</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Brian Michaels</h4>
                                  <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br>
                                  <p class="url">
                                    <span class="fs1" aria-hidden="true" data-icon=""></span>
                                    <a href="#" data-original-title="">Download</a>
                                  </p>
                                </div>
                              </li>

                            </ul>
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Project Name</th>
                                  <th>Type</th>
                                  <th class="hidden-phone">Hours Spent</th>
                                  <th>Contribution</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Mumbai</td>
                                  <td>Metro</td>
                                  <td class="hidden-phone">18</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="35" aria-valuenow="35" style="width: 35%;"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Lucknow</td>
                                  <td>Metro</td>
                                  <td class="hidden-phone">13</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-danger" data-transitiongoal="15" aria-valuenow="15" style="width: 15%;"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>E-Loco</td>
                                  <td>Locomotive</td>
                                  <td class="hidden-phone">30</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="45" aria-valuenow="45" style="width: 45%;"></div>
                                    </div>
                                  </td>
                                </tr>
                              
                              </tbody>
                            </table>
                            <!-- end user projects -->

                          </div>
                         
                        </div>
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
