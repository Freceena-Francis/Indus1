<?php
	include('db.php');
	if(isset($_POST['add'])){
		$taskname=$_POST['task_name'];
		$taskcode=$_POST['task_code'];
		$taskcategory=$_POST['task_category'];
		$q1="INSERT INTO task (task_name,task_code,task_category,task_status) VALUES ('$taskname','$taskcode','$taskcategory','0')";
		$result=$conn->query($q1);
	}
if(isset($_POST['del']))
{
$delid=$_POST['task_code'];
$sql3="DELETE FROM task WHERE task_code='$delid' ";
$result3 = $conn->query($sql3);
header('location: task.php');
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