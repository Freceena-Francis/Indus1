
                  <div id="addmodal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                         <h4 class="modal-title" id="myModalLabel">Add Task</h4>
                        </div>
                        <div class="modal-body">
                         
                      <!--<div class="x_content">-->

                    <form class="form-horizontal form-label-left" novalidate="" method="post" id="addmodalform">

                                        
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="task_code">Task Code<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="task_code" name="task_code" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="task_name">Task Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="task_name" name="task_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="task_category">Category<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="task_category" id="task_category">
                            <option value="">Choose option</option>
                            <option >Reliability</option>
                            <option>Safety</option>
                            <option>Both</option>
                            <option>Others</option>
                          </select>
                        </div>
                      </div>

                      

                  <!--</div>-->


                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="addclose">Close</button>
                         <button type = "button" id="addnew" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Add</button>
                        </div>
</form>
                      </div>
                    </div>
                  </div>


