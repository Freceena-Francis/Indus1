 <div id="delete<?php echo $row['id']; ?>" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
  <div class="modal-header">
    <form class="form-horizontal form-label-left" novalidate="" method="post">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          </div>
                        <div class="modal-body">
                            <div style='text-align:center'><p>Are you sure that you want to delete the task?</p>
                          <p>Press 'OK' to continue</p></div>
                        </div>
                        <div class="modal-footer">
                         
                          <button type="button" class="btn btn-default" data-dismiss="modal" name="deleteclose">Close</button>
                           <button type="button" id="deletethis"  value="<?php echo $row['id']; ?>" class="btn btn-primary">OK</button>
                         

                        </div>
</form>
                      </div>
                    </div>
                  </div>