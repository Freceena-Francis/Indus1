<?php
	include('db.php');


if(isset($_POST['deleteactivity']))
{


$id=$_POST['id'];
$sqldelete="DELETE FROM booking WHERE id='$id'";
$resultdelete = $conn->query($sqldelete);

}

	
if(isset($_POST['edit'])){
		$task_ =$_POST['taskcode'];
		$taskname=$_POST['task_name'];
		$taskcode=$_POST['task_code'];
		$taskcategory=$_POST['task_category'];
		
		$q2="UPDATE task SET task_name='$taskname', task_code='$taskcode', task_category='$taskcategory' WHERE task_code='$task_'";
		
		$result2=$conn->query($q2);
	}
	
	
?>