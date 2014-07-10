<?php
$name=$_POST['name'];
$date=$_POST['date'];
$train_name=$_POST['train_name'];
$nooftickets=$_POST['nooftickets'];
$price=3000;
$price_pt=$nooftickets*$price;
$discount=$price_pt*0.10;
$amount=$price_pt-$discount;
echo "
<html>
	<head>
	<title>Online Ticket Booking</title>
	<style>
	h1, hr {
		color:blue;}
	</style>
	</head>
	<body>
	<font face='verdana'>
	<center>
		<h1 >Online Ticket Booking<hr></h1>
		<table width='500' >
			<tr align='center'><td align='left'>NAME </td><td>".$name."</td></tr>
			<tr align='center'><td align='left'>JOURNEY DATE</td><td>".$date."</td></tr>
			<tr align='center'><td align='left'>TRAIN NAME</td><td>".$train_name."</td></tr>
			<tr align='center'><td align='left'>NO.OF.TICKETS</td><td>".$nooftickets."</td></tr>
			<tr align='center'><td align='left'>PRICE</td><td>".$price_pt."</td></tr>
			<tr align='center'><td align='left'>MEMBER DISCOUNT</td><td>".$discount."</td></tr>
			<tr align='center'><td align='left'>Payable Amount </td><td>".$amount."</td></tr>
		</table>
			<input type='submit' name='SUBMIT' value='SUBMIT'>
		</form>
	</center>
	</font>
	</body>
</html>";
?>