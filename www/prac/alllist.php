<!DOCTYPE html>
<html>
<head>
	<title>ALL Employee LIST</title>
</head>
<body>
<center>
<h1><img src="nettech.png" width='300' height='150'>ALL Employee LIST</h1><hr>
<center>
		<table border='1' width='500'>
<?php	
$con=mysqli_connect('localhost', 'root', 'himanshu', 'foodie');
	$str='select * from nettech';
	$result=mysqli_query($con, $str);
	while ($row=mysqli_fetch_array($result)) {

		echo "<tr align='center'><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
		}
?>

		</table>
		</center>
	<hr><p align='right'><a href='menu.html'>Menu</a></p>
</body>
</html>