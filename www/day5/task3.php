<!DOCTYPE html>
<html>
<head>
	<title>Update Table</title>
</head>
<body>
<center>
<a href='student_db.php'>HOME</a><br>
		<a href='task1.php'>search the student record</a><br>
		<a href='task2.php'>Insert new data in student record</a>
		<a href='task3.php'>Update</a><br>
	<font>
	<form method='GET' action='task3.php'>
	select the student ID: 
	<select name='id'>
	
<?php
$flag=0;
$con=mysqli_connect('localhost', 'root', 'himanshu', 'student');
if(!$con) {
	die('Could Not Connect!!!');
}
else {
	$str='select * from student_details';
	$result=mysqli_query($con, $str);
	while ($row=mysqli_fetch_array($result)) {

		echo "<option value=".$row[0].">".$row[0]."</option>";
	}
	$flag=1;
}
$stud_id=$_GET['id'];
echo "</select>
<input type='submit' name='submit'>
</form>;

<form method='GET' action='task3.php'>
	<table>
	<tr>
	<td>Enter data for ".$stud_id."</td>
 <td><input type='text' name='stud_id' value=".$stud_id." ></td>
	<td><input type='text' name='stud_name'></td>
	<td><input type='text' name='address'></td>
	<td><input type='text' name='contact_no'></td>
	<td><input type='text' name='email_id'></td>
	</tr>
	</table>
	<input type='submit' name='submit'>";
	?> 
<?php
if($flag==1)

$stud_name=$_GET['stud_name'];
$address=$_GET['address'];
$contact_no=$_GET['contact_no'];
$email_id=$_GET['email_id'];
$stud_id=$_GET['stud_id'];
if(isset($_GET['submit']))
		$str="update student_details set stud_name='".$stud_name."', address='".$address."', contact_no=".$contact_no.", email_id='".$email_id."'  where stud_id='".$stud_id."';";
		echo $str;
	mysqli_query($con, $str);
?>  
		</table>
	</font>
</center>
</body>
</html>