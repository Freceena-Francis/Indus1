<?php
include('db.php');
if($_POST['direct'])
{
$id=$_POST['id'];
$sql="SELECT * FROM project WHERE direct_type='$id'";
$result=$conn->query($sql);
echo '<option >Choose Option</option>'; 
while($row=$result->fetch_assoc())
{
$id=$row['direct_intcode'];
$data=$row['direct_name'];
echo '<option value="'.$id.'">'.$data.'</option>';
}
}
if($_POST['indirect'])
{
$sql1="SELECT * FROM type WHERE type_cat='Indirect'";
$result1=$conn->query($sql1);
echo '<option >Choose Option</option>'; 
while($row1=$result1->fetch_assoc())
{
$id=$row1['type_intcode'];
$data=$row1['type_name'];
echo '<option value="'.$id.'">'.$data.'</option>';
}
}
if($_POST['id'])
{
	$id1=$_POST['id'];
$sql2="SELECT * FROM subtask WHERE task_codeint='$id1'";
$result2=$conn->query($sql2);
echo '<option >Choose Option</option>'; 
while($row2=$result2->fetch_assoc())
{
$id=$row2['subtask_intcode'];
$data=$row2['subtask_name'];
echo '<option value="'.$id.'">'.$data.'</option>';
}
}

if($_POST['d'])
{
	$date=$_POST['id'];
$sqdt="SELECT sum(hrs_consumed) as s FROM booking WHERE date='$date'";
$resultdt=$conn->query($sqdt);
while($rowd=$resultdt->fetch_assoc())
{$id=$rowd['s'];
$perc=($id/8.5)*100;
echo '<div class="progress-bar progress-bar-success" data-transitiongoal="'.$perc.'" aria-valuenow="50" style="width:'.$perc.'%;">'.$id.' Hrs</div>
<input type="hidden" value="'.$id.'" id="bkdhrs" name="bkdhrs">';

}
}
if($_POST['code'])
{
	$id12=$_POST['id'];
$sql22="SELECT * FROM project WHERE direct_intcode='$id12'";
$result22=$conn->query($sql22);
while($row22=$result22->fetch_assoc())
{
$data=$row22['direct_usrcode'];
echo '<label>'.$data.'</label>
       <input type="hidden" name="code_hidden" value="'.$data.'">';

}
}

if($_POST['indirect_code'])
{
	$id13=$_POST['id'];
$sql23="SELECT * FROM type WHERE type_intcode='$id13'";
$result23=$conn->query($sql23);
while($row23=$result23->fetch_assoc())
{
$data=$row23['indr_usrcode'];
echo '<label>'.$data.'</label>
       <input type="hidden" name="code_hidden" value="'.$data.'">';

}
}



?>
