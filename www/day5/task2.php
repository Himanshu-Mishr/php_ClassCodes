<!DOCTYPE html>
<html>
<head>
	<title>INSERT</title>
</head>
<body>
<center>
	<a href='student_db.php'>HOME</a><br>
		<a href='task1.php'>search the student record</a><br>
		<a href='task2.php'>Insert new data in student record</a>
		<a href='task3.php'>Update</a><br>
	<font>
	<form method='GET' action='task2.php'>
	<table>
	<tr>
	<td><input type='text' name='stud_id'></td>
	<td><input type='text' name='stud_name'></td>
	<td><input type='text' name='address'></td>
	<td><input type='text' name='contact_no'></td>
	<td><input type='text' name='email_id'></td>
	</tr>
	</table>
	<input type='submit' name='submit'>
<?php

$stud_id=$_GET['stud_id'];
$stud_name=$_GET['stud_name'];
$address=$_GET['address'];
$contact_no=$_GET['contact_no'];
$email_id=$_GET['email_id'];

if(isset($_GET['submit']))
$con=mysqli_connect('localhost', 'root', 'himanshu', 'student');
if($con) {
		$str="insert into student_details values('".$stud_id."','".$stud_name."','".$address."',".$contact_no.",'".$email_id."');";\
		echo $str;
	mysqli_query($con, $str);
}
?>  
<!-- this is for printing the table -->
		<table border='1' width='500'>
<?php

	$str='select * from student_details';
	$result=mysqli_query($con, $str);
	while ($row=mysqli_fetch_array($result)) {

		echo "<tr align='center'><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
		}
?>

		</table>
	</font>
</center>
</body>
</html>