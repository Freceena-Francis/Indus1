     <div id="edit<?php echo $row['id']; ?>" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" > 
      <?php
    $n1="SELECT * FROM booking WHERE id='".$row['id']."'";
    $n=$conn->query($n1);
    $nrow=$n->fetch_assoc();

  ?>
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
  <div class="modal-header">

                          <h4 class="modal-title" id="myModalLabel">Edit Activity</h4>
                          </div>
                        <div class="modal-body">
                            <form class="form-horizontal form-label-left" method="post">
							
							 <div class="row">
							<div class="form-group">
                       
                          <label class="control-label col-md-3" for="date"> Date</label>
                          <div class="col-md-3 ">
                          <input type="date" name="date" value="<?php echo $nrow['date']; ?>" id="date<?php echo $row['id']; ?>" class="form-control">
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
                        <label class="control-label col-md-3 "for="domain">Domain</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="domain" id="domain<?php echo $row['id']; ?>" required>
                           
                           // <?php
						    // $sql1="SELECT * FROM domain WHERE domain_intcode='".$nrow['domain_f']."'";
                           // $result1=$conn->query($sql1);
						// while($row1 = $result1->fetch_assoc()){
                         // echo "<option value='" . $row1['domain_intcode'] ."'>".$row1['domain_name']."</option>";
						// }
						    // $sql0="SELECT * FROM domain ";
                           // $result0=$conn->query($sql0);
							// while ($row0 = $result0->fetch_assoc()) {
                         // echo "<option value='" . $row0['domain_intcode'] ."'>".$row0['domain_name']."</option>";
// }
// ?>
                            </select>
                        </div>
                       
                        
                        <label class="control-label col-md-2">Type</label>
                        <div class="col-md-3 ">
                         <select  class="form-control" name="type" id="type" required>
                            <option selected="selected">Choose Type</option>
							 <?php
							  // while ($row2 = $result2->fetch_assoc()) {
								  // echo '<option value="'.$row2['type_intcode'].'" >'.$row2['p'].'</option>';
								  
							  // }
							  // echo '<option value="'.'Indirect'.'">'.'Indirect'.'</option>';
							  
							 
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
                            <option selected disabled>Choose Category</option>
                          
                          </select>
                        </div>
                        
                       
                       <div name="code" id="code">
                          <label class="control-label col-md-2 "> Code</label>
                          <label class="control-label col-md-1" value="<?php echo $nrow['date']; ?>" id="date<?php echo $row['id']; ?>"></label>
						  </div>
                                                </div>
                                            </div>
                        <div class="row">
                        <div class="form-group" name="task" id="task">
                        <label class="control-label col-md-3 ">Task</label>
                        <div class="col-md-3 ">
                         <select  class="form-control"  required>
                            <option selected disabled>Choose Task</option>
                            <option value='Indus Management'>Indus Management</option>
                            <option value='Change Management'>Change Management</option>
                            <option value='Site Support'>Site Support</option>
                            <option value='Mounting Reviews'>Mounting Reviews</option>
                            <option value='Special Process'>Special Process</option>
                            <option value='Co-Engg'>Co-Engg</option>
                            <option value='Indus Deliverables'>Indus Deliverables</option>
                            <option value='Other'>Other</option>
                            <option value="none">None</option>
                          </select>
                        </div>
						
                      
                        <div name="subtask" id="subtask">
                        <label class="control-label col-md-2">Sub Task</label>
                        <div class="col-md-3 ">
                         <select  class="form-control"  required>
                            <option selected disabled>Choose SubTask</option>
                            
                          </select>
                        </div>
						</div>
						</div>
						</div>
                        
                        
                        <div class="row">
                        <div class="form-group">
                        <label class="control-label col-md-3">Hours Consumed</label>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="hours"  value="" id="" placeholder="">
                        </div>
                        <div class="">
                            <label class="control-label col-md-2">Deliverables Done</label>
                            <input type="checkbox" class="js-switch" />
                          </div>
                        
                      </div>
                  </div>
                      <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-3">Industrialization</label>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="ind"  value="" id="" placeholder="">
                        </div>
                      <label class="control-label col-md-2">Remarks</label>
                         <div class="col-md-3">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                    </div>
                </div></div>
                      
					  
                 
                    </form>
					</div>
                       
                        <div class="modal-footer">
                          
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="close2">Close</button>               
                          <button type="button" id="update"  value="<?php echo $row['task_code']; ?>" class="btn btn-primary">Edit</button>

                        </div>

                      </div>
                    </div>
                  </div>
               