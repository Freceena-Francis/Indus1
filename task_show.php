
<?php
  include('db.php');
  if(isset($_POST['show'])){
    ?>
<table class="table table-striped projects">
                      <thead>
                        <tr>
                         <!--  <th style="width: 1%">#</th> -->
                          <!--<th style="width: 20%">Project Name</th>-->
                          <th>Task Code</th>
                          <th>Task Name</th>
                          <th>Category</th>
                          <th>Action</th>
                          <!--<th style="width: 20%">#Edit</th>-->
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                  $sql2="SELECT * FROM task WHERE task_status=0 ";
$result = $conn->query($sql2);

                
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
        <tr >
                
                 <td><?php echo $row['task_code'] ?></td>
                <td ><?php echo $row['task_name'] ?></td>
                <td><?php echo $row['task_category'] ?></td>
                <td><button class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit<?php echo $row['task_code']; ?>" ><i class="fa fa-pencil" ></i>Edit</button>
                  <?php include('task_edit.php'); ?>
                  <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete<?php echo $row['task_code']; ?>" ><i class="fa fa-trash-o" ></i>Delete</button>
               <?php include('task_del.php'); ?>

                   

                  </td>
            </tr>             
                        

       <?php 
                
              }

?>
 </tbody>
                    </table>    
                    <?php
  }

?>                
