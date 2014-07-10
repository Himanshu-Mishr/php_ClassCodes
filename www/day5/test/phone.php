<?php
echo "
	<!DOCTYPE html=en>
	<html>
		<head>
			<title>Vodafone Bill Application</title>
		</head>
		
		<body>
		<center>
			<img src='vodafone.jpg' width='100' height='100'><br>
			<h2>Vodafone Bill Application</h2>
		<form method='POST' action='phone.php'>
		<table width='300' border='1'>
			<tr><td bgcolor='blue'>Particulars</td><td bgcolor='blue'>Amount</td></tr>
			<tr><td>Local Call</td><td><input type='text' name='local'></td></tr>
			<tr><td>Std Call</td><td><input type='text' name='std' ></td></tr>
			<tr><td>SMS</td><td><input type='text' name='sms'></td></tr>
			<tr><td>MMS</td><td><input type='text' name='mms'></td></tr>
		</table>
		<input type='submit' name='submit'>
		</form>
		</center>
";
$local=$_POST['local'];
$std=$_POST['std'];
$sms=$_POST['sms'];
$mms=$_POST['mms'];

$temp=$local*1 + $std*2 + $sms*0.50 + $mms*5;
$discount=$temp*0.10;
$service=($temp-$discount)*1.103;
$total=$service;
if($total > 500) {
	$total=$total - $total*0.10;
	}
if (isset($_POST['submit'])) 
	echo "
		<center>
		<table width='300' border='1'>
			<tr><td bgcolor='blue'>Particulars</td><td bgcolor='blue'>Amount</td></tr>
			<tr><td>Local Call</td><td>".$local."</td></tr>
			<tr><td>Std Call</td><td>".$std."</td></tr>
			<tr><td>SMS</td>".$sms."<td></td></tr>
			<tr><td>MMS</td>".$mms."<td></td></tr>
			<tr><td></td><td></td></tr>
			<tr><td>Discount 10%</td><td>".$discount."</td></tr>
			<tr><td>Service Tax $10.3%</td>".$service."<td></td></tr>
			<tr><td>Total</td><td>".$total."</td></tr>
		</table>
		</center>
		</body>
	</html>
";
?>