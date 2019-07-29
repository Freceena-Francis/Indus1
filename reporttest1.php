<?php
include('db.php');

if($_POST['id'])
{
	$id1=$_POST['id'];
$sql2="SELECT * FROM subtask WHERE task_codeint='$id1'";
$result2=$conn->query($sql2);
while($row2=$result2->fetch_assoc())
{
$id=$row2['subtask_intcode'];
$data=$row2['subtask_name'];
echo '<option value="'.$id.'">'.$data.'</option>';
}
}


?>
