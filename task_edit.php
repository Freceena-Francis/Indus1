    <div id="edit<?php echo $row['task_code']; ?>" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
      
      <?php
    $n1="SELECT * FROM task WHERE task_code='".$row['task_code']."'";
    $n=$conn->query($n1);
    $nrow=$n->fetch_assoc();

  ?>
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
  <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Edit Task</h4>
                          </div>
                        <div class="modal-body">
                            <form class="form-horizontal form-label-left">

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="task_code">Task Code<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="task_code<?php echo $row['task_code']; ?>" value="<?php echo $nrow['task_code']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="task_name">Task Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                          <input type="text" id="task_name<?php echo $row['task_code']; ?>" value="<?php echo $nrow['task_name']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="task_category">Category<span class="required">*</span>
                        </label>



                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="task_category<?php echo $row['task_code']; ?>"  class="form-control"  >
                            <option <?php echo ($nrow['task_category'] == 'Reliability')?"selected":"" ?> >Reliability</option>
                            <option <?php echo ($nrow['task_category'] == 'Safety')?"selected":"" ?> >Safety</option>
                            <option  <?php echo ($nrow['task_category'] == 'Both')?"selected":"" ?> >Both</option> 
                            <option  <?php echo ($nrow['task_category'] == 'Others')?"selected":"" ?> >Others</option> 
                            
                          </select>
                        </div>
                      </div>

                      
                    </form>
                        </div>
                        <div class="modal-footer">
                          
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="close2">Close</button>               
                          <button type="button" id="update"  value="<?php echo $row['task_code']; ?>" class="btn btn-primary">Edit</button>

                        </div>

                      </div>
                    </div>
                  </div>
               