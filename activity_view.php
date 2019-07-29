    <div id="view<?php echo $row['id']; ?>" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
      
      <?php
    $n1="SELECT * FROM booking WHERE id='".$row['id']."'";
    $n=$conn->query($n1);
    $nrow=$n->fetch_assoc();

  ?>
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
  <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">View</h4>
                          </div>
                        <div class="modal-body">
                            <form class="form-horizontal form-label-left">
							
							 <div class="row">
                      <div class="form-group">
                       
                          <label class="control-label col-md-3"> Date</label>
                          <div class="col-md-3 ">
                          <label class="control-label col-md-3"><?php echo $nrow['date'];?></label>
                        </div>
                         <label class="control-label col-md-2"> Time Booked</label>
                          <div class="col-md-3 ">
                        <div class="progress">
						<?php
						$hr=$nrow['hrs_consumed'];
						$perc=($hr/8.5)*100;
						?>
                        <div class="progress-bar progress-bar-success" data-transitiongoal="<?php echo $perc; ?>" aria-valuenow="50" style="width: <?php echo $perc; ?>%;"><?php echo $hr; ?>Hrs</div>
                      </div>
                      </div>
                  </div>
                    </div> 
                  
                      <div class="row">
                            <div class="form-group">
                        <label class="control-label col-md-3 ">Domain</label>
                        <div class="col-md-3 ">
                        <label class="control-label col-md-3"><?php echo $nrow['domain_f'];?></label>
                        </div>
                       
                        
                        <label class="control-label col-md-2">Type</label>
                        <div class="col-md-3 ">
                         <label class="control-label col-md-3"><?php echo $nrow['type_f'];?></label>
                        </div>
                        <br><br>
                        </div>
                    </div>
                        <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Category</label>
                        <div class="col-md-3 ">
                        <label class="control-label col-md-3"><?php echo $nrow['value'];?></label>
                        </div>
                        
                       
                       <div name="code" id="code">
                          <label class="control-label col-md-2 "> Code</label>
						  <div class="col-md-3 ">
                          <label class="control-label col-md-3"><?php echo $nrow['code'];?></label>
						  </div>
						  </div>
                                                </div>
                                            </div>
                        <div class="row">
                        <div class="form-group" name="task" id="task">
                        <label class="control-label col-md-3 ">Task</label>
                        <div class="col-md-3 ">
                        <label class="control-label col-md-3"><?php echo $nrow['task_f'];?></label>
                        </div>
                       
                        <div name="subtask" id="subtask">
                        <label class="control-label col-md-2">Sub Task</label>
                        <div class="col-md-3 ">
                         <label class="control-label col-md-3"><?php echo $nrow['subtask_f'];?></label>
                        </div>
						</div>
                        <br><br>
                        </div>
						</div>
                        <div class="row">
                        <div class="form-group">
                        <label class="control-label col-md-3">Hours Consumed</label>
                        <div class="col-md-3">
                          <label class="control-label col-md-3"><?php echo $nrow['hrs-consumed'];?></label>
                        </div>
                        <div class="">
                            <label class="control-label col-md-2">Deliverables Done</label>
							<div class="col-md-3 ">
                            <label class="control-label col-md-3"><?php echo $nrow['deliverable_done'];?></label>
                          </div>
						  </div>
                        
                      </div>
                  </div>
                      <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-3">Industrialization</label>
                        <div class="col-md-3">
                          <label class="control-label col-md-3"><?php echo $nrow['industrialization'];?></label>
                        </div>
                      <label class="control-label col-md-2">Remarks</label>
                         <div class="col-md-3">
                        <label class="control-label col-md-3"><?php echo $nrow['comments'];?></label>
                    </div>
                </div></div>
                     

                      
                    </form>
                        </div>
                        <div class="modal-footer">
                          
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="close2">Close</button>               
                          

                        </div>

                      </div>
                    </div>
                  </div>
               