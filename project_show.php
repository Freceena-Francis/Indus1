

 <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">Code</th>
                          <th style="width: 20%">Domain </th>
                          <th>Direct/Indirect</th>
                          <th>Project</th>
                          <th>Hours Consumed</th>
                          <th style="width: 20%">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                          <td>SYD001</td>
                          <td>
                            <a>Electrical</a>
                          </td>
                          <td>
                            <a>Direct Project</a>
                          </td>
                          <td>
                            <a>Sydney</a>
                          </td>
                           <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57" aria-valuenow="55" style="width: 70.5%;"></div>
                            </div>
                            <small>6 hrs</small>
                          </td>
                          <!-- <td>
                            <ul class="list-inline">
                              <a></a>
                            </ul>
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57" aria-valuenow="55" style="width: 78%;"></div>
                            </div>
                            <small>78% Complete</small>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td> -->
                          <td>
                                                     
                            <!--<a href="editproject.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>-->
                            <!--<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a> -->
                             <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modaldelete"><span class = "fa fa-trash-o"></span> delete</button>
                             <?php
                             include("project_del.php");
                             ?>
                          </td>
                        </tr>
                       </tbody>
                      </table>
                      