
<?php
include('db.php');
if(isset($_POST['addproject']))
{

$Pname=$_POST['pname'];
$Pcode=$_POST['pcode'];
$Ploc=$_POST['ploc'];
$Sdate=$_POST['sdate'];
$Edate=$_POST['edate'];
$Plead=$_POST['plead'];
$Status=$_POST['status'];

$sqlinsert="INSERT INTO Project(project_code,project_name,project_location,start_date,end_date,project_lead,project_status) VALUES ('$Pcode','$Pname','$Ploc','$Sdate','$Edate','$Plead','$Status')";
//$result = $conn->query($sqlinsert);
if($conn->query($sqlinsert))
    {
    $message = "Record Saved Successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
    $message = "Record Insertion Failed!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }
}


//DELETE 
if(isset($_POST['deleteproj']))
{


$Pcode=$_POST['project_code'];
$sqldelete="DELETE FROM Project WHERE project_code='$Pcode'";
$resultdelete = $conn->query($sqldelete);
}

if(isset($_POST['editproject']))
{
	$code_=$_POST['code'];
  $code=$_POST['project_code'];
  $n=$_POST['project_name'];
  $l=$_POST['project_location'];
  $s=$_POST['start_date'];
  $e=$_POST['end_date'];
  $le=$_POST['project_lead'];
  $st=$_POST['project_status'];

 
  $sqlsaveedit="UPDATE Project SET project_name='$n',project_location='$l',start_date='$s',end_date='$e',project_lead='$le',project_status='$st' WHERE project_code='$code'";
  $resultsaveedit=$conn->query($sqlsaveedit);

}


