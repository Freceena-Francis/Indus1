<?php
include('db.php');
if($_POST['id'])
{
$sql="SELECT * FROM type WHERE type_cat='Indirect'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
$id=$row['type_intcode'];
$data=$row['type_name'];
echo '<option value="'.$id.'">'.$data.'</option>';


}
}


?>
