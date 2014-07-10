<?php
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$english=$_POST['english'];
$maths=$_POST['maths'];
$computer=$_POST['computer'];
$avg=($english + $maths + $computer)/3;

echo "
<!DOCTYPE html=en>
<html>
	<head>
	<meta charset='utf-8'>
	</head>
	
	<body>
	<center>
	<form method='POST' action='task2_driver.php'>
		<table width='500'>
			<tr><td>NAME</td><td>".$name."</td></tr>
			<tr><td>ROLL NO</td><td>".$rollno."</td></tr>
			<tr><td>ENGLISH</td><td>".$english."</td></tr>
			<tr><td>MATHS</td><td>".$maths."</td></tr>
			<tr><td>COMPUTER</td><td>".$computer."</td></tr>
			<tr><td>Average</td><td color='green'>";
$a=$avg;
if ($a > 90)
	echo "<font color='green'> You got O ".$a." </font>";
else if($a > 80)
	echo "<font color='green'> You got E ".$a."</font>";
else if($a > 70)
	echo "<font color='green'> You got A ".$a."</font>";
else if($a > 60)
	echo "<font color='green'> You got B ".$a."</font>";
else if($a > 50)
	echo "<font color='green'> You got C ".$a."</font>";
else if($a > 40)
	echo "<font color='green'> You got D ".$a."</font>";
else if($a < 40)
	echo "<font color='red'> You got F ".$a."</font>";
	
echo "</td></tr>
		</table>
	</form>
	</center>
	</body>
</html>
";
?>