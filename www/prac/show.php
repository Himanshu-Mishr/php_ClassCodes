<!DOCTYPE html>
<html>
<head>
	<title>ALL Employee LIST</title>
</head>
<body>
<center>
<h1><img src="nettech.png" width='300' height='150'>Add Employee form</h1><hr>
<?php
$con=mysqli_connect('localhost', 'root', 'himanshu', 'foodie');
$id=$_GET['emp_code'];
$str='select * from nettech where emp_code='.$id.';';
$result=mysqli_query($con, $str);
$row=mysqli_fetch_array($result);
echo "<table border='1' width='500'>";
echo "<tr align='center'><td>Employee code</td><td>".$row[0]."</td></tr>";
echo "<tr align='center'><td>Employee Name</td><td>".$row[1]."</td></tr>";
echo "<tr align='center'><td>Phone NO</td><td>".$row[2]."</td></tr>";
echo "<tr align='center'><td>Year Of experience</td><td>".$row[3]."</td></tr>";

echo "</table>";
?>
</center>	<hr><p align='right'><a href='menu.html'>Menu</a></p>
</body>
</html>