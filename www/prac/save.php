<!DOCTYPE html>
<html>
<head>
	<title>Add Employee form</title>
</head>
<body>
<center>
<h1><img src="nettech.png" width='300' height='150'>Add Employee form</h1><hr>
	<font>
	<form method='GET' action='save.php'>
	<table width='500' border='1'>
	<tr><td>Name:</td><td><input type='text' name='emp_name'></td></tr>
	<tr><td>Employee code :</td><td><input type='text' name='emp_code'></td></tr>
	<tr><td>Phone No:</td><td><input type='text' name='phno'></td></tr>
	<tr><td>Year Of Experience:</td><td><input type='text' name='year_exp'></td></tr>
	</table>
	<input type='submit' name='submit'>
<?php
$flag=0;
$emp_name=$_GET['emp_name'];
$emp_code=$_GET['emp_code'];
$phno=$_GET['phno'];
$year_exp=$_GET['year_exp'];


if(isset($_GET['submit']))
$con=mysqli_connect('localhost', 'root', 'himanshu', 'foodie');
if($con) {
	$str="insert into nettech values('".$emp_code."','".$emp_name."',".$phno.",".$year_exp.");";
	mysqli_query($con, $str);
	$flag=1;
}
?>  
<!-- this is for printing the table -->
		<table border='1' width='500'>
<?php
if($flag==1) {
	$str='select * from nettech';
	$result=mysqli_query($con, $str);
	while ($row=mysqli_fetch_array($result)) {

		echo "<tr align='center'><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
		}
		}
?>

		</table>
	</font>
</center><hr><p align='right'><a href='menu.html'>Menu</a></p>
</body>
</html>