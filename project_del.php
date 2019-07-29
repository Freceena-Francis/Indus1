<div class="modal fade " id="modaldelete" tabindex="-1" role="dialog" aria-hidden="true">
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
                          <input type="hidden" name="delete_ok" id="delete_ok" value=''>
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="close3">Close</button>
                          <button class="btn btn-danger btn-xs delete" value="<?php echo $row['project_code']; ?>" id="deleteproject"><span class = "glyphicon glyphicon-trash "></span> Delete</button>
                         

                        </div>

                      </div>
                    </div>
                  </div>