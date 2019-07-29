<div id="projectaddmodal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Add New Project</h4>
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
                    <form class="form-horizontal form-label-left input_mask " method="post" id="addprojectmodalform">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Code</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input  name="pcode" id="pcode" type="text" class="form-control"  placeholder="Project Code">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="pname" id="pname" type="text" class="form-control"  placeholder="Project Name" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Location </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="ploc" id="ploc" type="text" class="form-control"  placeholder="Project Location" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="forn-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Start Date</label>
                          <div class="col-md-3 col-sm-7 ">
                          <input type="date"  name="sdate" id="sdate"class="form-control" required>
                        </div>
                          <label class="control-label col-md-3 col-sm-1 col-xs-12">End Date</label>
                          <div class="col-md-3 col-sm-7 col-xs-12">
                          <input type="date" name="edate" id="edate" class="form-control" required>
                        </div>
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Lead</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="plead" id="plead" type="text" class="form-control"  placeholder="Project Lead" required>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <select name="status" id="status" name="status" class="form-control" required >
                            <option value="" disabled selected>Choose option</option>
                            <option value="0">Tender</option>
                            <option value="1">Design</option>
                            <option value="2">Service</option>
                            </select>
                        </div>
                        <br><br>
                     
                  </div>
                </div></form></div>
                        </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <input type="submit"  id="addnewproject" value="save changes" placeholder="save changes" class="btn btn-primary">
                        
                        

                        </div>
                      </div></div></div>

<!---delete modal---->

