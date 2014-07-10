<!DOCTYPE html>
<html>
<head>
	<title>Printing Table</title>
</head>
<body>
<center>
	<font>


<!-- this is for printing the table -->
		<table border='1' width='500'>
<?php
$con=mysqli_connect('localhost', 'root', '', 'foodie');
if(!$con) {
	die('Could Not Connect!!!');
}
else {
	$str='select * from dhaba_menu';
	$result=mysqli_query($con, $str);
	while ($row=mysqli_fetch_array($result)) {

		echo "<tr align='center'><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
	}
}
?>

		</table>
	</font>
</center>
</body>
</html>