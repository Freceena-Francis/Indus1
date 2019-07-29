
<?php
  include('db.php');
  if(isset($_POST['show'])){
    ?>
<table class="table table-striped projects">
                      <thead>
                        <tr>
                         <!--  <th style="width: 1%">#</th> -->
                          <!--<th style="width: 20%">Project Name</th>-->
                          <th>Alps</th>
                          <th>Date </th>
                          <th>Domain</th>
                          
                          <th>Value</th>
                          <th>Code</th>
                          <th>Task</th>
                          <th>Sub Task</th>
                          <th>Hours</th>
                          
                          <th>Deliverable</th>
                          
                          <th>Timestamp</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                        $sql1="SELECT * FROM booking";
						$result1 = $conn->query($sql1);
                        while($row = $result1->fetch_assoc())
                         {
							 
					    $sql2="SELECT * FROM domain WHERE domain_intcode='".$row['domain_f']."'";
						$result2 = $conn->query($sql2); 
						$row2= $result2->fetch_assoc();
				        $sql4="SELECT * FROM task WHERE task_intcode='".$row['task_f']."'";
						$result4 = $conn->query($sql4); 
						$row4= $result4->fetch_assoc();
						$sql3="SELECT * FROM type WHERE type_intcode='".$row['type_f']."'";
						$result3 = $conn->query($sql3); 
						$row3= $result3->fetch_assoc();
						$sql5="SELECT * FROM subtask WHERE subtask_intcode='".$row['subtask_f']."'";
						$result5 = $conn->query($sql5); 
						$row5= $result5->fetch_assoc();
                         ?>
            
        <tr >
                
                 <td><?php echo $row['alpsid'] ?></td>
                <td ><?php echo $row['date'] ?></td>
                <td><?php echo $row2['domain_name'] ?></td>
				<td><?php echo $row3['type_name'] ?></td>
				<td><?php echo $row['code'] ?></td>
				<td><?php echo $row4['task_name'] ?></td>
				<td><?php echo $row5['subtask_name'] ?></td>
				<td><?php echo $row['hrs_consumed'] ?></td>
				<td><?php echo $row['deliverable_done'] ?></td>
				<td><?php echo $row['timestamp'] ?></td>
                <td><button class="btn btn-info btn-xs" data-toggle="modal" data-target="#view<?php echo $row['id']; ?>" ><i class="fa fa-eye" ></i></button>
                  <?php include('activity_view.php'); ?>
				<button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit<?php echo $row['id']; ?>" ><i class="fa fa-pencil" ></i></button>
                  <?php include('activity_edit.php'); ?>
				 
                  <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete<?php echo $row['id']; ?>" ><i class="fa fa-trash-o" ></i></button>
               <?php include('activity_del.php'); ?>
			  
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
