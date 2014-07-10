<html>
	<head>
	<title>Online Ticket Booking</title>
	<style>
	h1, hr {
		color:blue;}
	</style>
	</head>
	<body>
	<font face="verdana">
	<center>
		<h1 >Online Ticket Booking<hr></h1>
		<form method="POST" action="driver.php">
		<b>
		<table width="500" >
			<tr align="center"><td align="left">NAME </td><td><input type="text" name="name"></td></tr>
			
			<tr align="center"><td align="left">JOURNEY DATE</td>
			<td><input type="text" name="date"></td>
			</tr>
			<tr align="center"><td align="left">TRAIN NAME</td><td>
							<select name="train_name">
							<option value="Rajdhani Express">Rajdhani Express</option>
							<option value="Howrah Express">Howrah Express</option>
							<option value="Shatabdi Express">Shatabdi Express</option>
							<option value="Dehra Dun Express">Dehra Dun Express</option>
							</select>
							</td></tr>
			<tr align="center"><td align="left">NO.OF.TICKETS</td><td><input type="text" name="nooftickets"></td></tr>
		</table>
			<input type="submit" name="SUBMIT" value="SUBMIT">
		</form>
	</center>
	</font>
	</body>
</html>
<?php
?>