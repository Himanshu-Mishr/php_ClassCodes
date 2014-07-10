<!DOCTYPE html>
<html>
<head>
	<title>Printing Table</title>
</head>
<body>
<center>
<a href='student_db.php'>HOME</a><br>
		<a href='task1.php'>search the student record</a><br>
		<a href='task2.php'>Insert new data in student record</a>
		<a href='task3.php'>Update</a><br>
	<font>
	<form method='GET' action='task1.php'>
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
echo "</select>
<input type='submit' name='submit'>
</form>";
?>  

<?php
if($flag==1)
if(isset($_GET['submit']))
$id=$_GET['id'];
$str='select * from student_details where stud_id='.$id.';';
$result=mysqli_query($con, $str);
$row=mysqli_fetch_array($result);
echo "<table border='1' width='500'>";
echo "<tr align='center'><td>student ID</td><td>".$row[0]."</td></tr>";
echo "<tr align='center'><td>Student Name</td><td>".$row[1]."</td></tr>";
echo "<tr align='center'><td>Student Address</td><td>".$row[2]."</td></tr>";
echo "<tr align='center'><td>Student Contact</td><td>".$row[3]."</td></tr>";
echo "<tr align='center'><td>Student Email Address</td><td>".$row[4]."</td></tr>";
echo "</table>";
?>
	</font>
</center>
</body>
</html>