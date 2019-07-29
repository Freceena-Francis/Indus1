 <div id="edit<?php echo $row['project_code']; ?>" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" >
  <?php

  $sqlselectinsert="SELECT * FROM Project WHERE project_code='".$row['project_code']."'";
    $n = $conn->query($sqlselectinsert);
    $nrow=$n->fetch_assoc();
  ?>
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">



                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Edit Project</h4>
                        </div>
                        <div class="modal-body">
                          
<div class="x_panel">
  
 
                  <div class="x_title">
                    <h2>Enter Project Details</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <br>
                      <form class="form-horizontal form-label-left input_mask" method="post">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Code</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" name="projectcode" value="<?php echo $nrow['project_code']; ?>" id="uprojectcode<?php echo $row['project_code']; ?>" disabled="disabled"  placeholder="Project Code">
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" name="projectname" value="<?php echo $nrow['project_name']; ?>" id="uprojectname<?php echo $row['project_code']; ?>" disabled="disabled"  placeholder="Project Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Location </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" name="projectloc" value="<?php echo $nrow['project_location']; ?>" id="uprojectlocation<?php echo $row['project_code']; ?>" placeholder="Project Location">
                        </div>
                      </div>
                     <div class="row">
                        <div class="forn-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Start Date</label>
                          <div class="col-md-3 col-sm-7 ">
                          <input type="date" name="startdate" value="<?php echo $nrow['start_date']; ?>" id="ustartdate<?php echo $row['project_code']; ?>"class="form-control">
                        </div>
                          <label class="control-label col-md-3 col-sm-1 col-xs-12">End Date</label>
                          <div class="col-md-3 col-sm-7 col-xs-12">
                          <input type="date" name="edate" value="<?php echo $nrow['end_date']; ?>" id="uenddate<?php echo $row['project_code']; ?>" class="form-control">
                        </div>
                        </div>
                      </div><br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Lead</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" name="projectlead"  value="<?php echo $nrow['project_lead']; ?>" id="uprojectlead<?php echo $row['project_code']; ?>" placeholder="Project Lead">
                        </div></div>
                        <br>
                        
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <select  class="form-control" name="projectstatus" id="uprojectstatus<?php echo $row['project_code']; ?>" required>
                            <option selected disabled>Choose option</option>
                           <option value='0' <?php echo ($nrow['project_status'] == '0')?"selected":"" ?> >Tender</option>
                            <option value='1' <?php echo ($nrow['project_status'] == '1')?"selected":"" ?> >Design</option>
                            <option  value='2' <?php echo ($nrow['project_status'] == '2')?"selected":"" ?> >Service</option>
                            </select>
                        </div>
                        <br><br>
</div>
                      </form>
                  </div>
                
                        
                      </div></div>
                        <div class="modal-footer">
                          
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          
                          <button type="button" class="updateuser btn btn-success" id="updateuser" value="<?php echo $row['project_code']; ?>"><span class = "glyphicon glyphicon-floppy-disk"></span> Save</button>
                        </div>

</div>
                  
                    </div></div>