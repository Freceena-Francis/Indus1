<?php
include('db.php');
if($_POST['id'])
{
$id=$_POST['id'];
$sql="SELECT project_name,project_intcode from project where type='$id'";
$result = $conn->query($sql);
 while($row = $result1->fetch_assoc())
{
$code=$row['project_intcode'];
$name=$row['name'];
echo '<option value="'.$code.'">'.$name.'</option>';
}
}
?>
