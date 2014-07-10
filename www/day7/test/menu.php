<?php
session_start();
if($_SESSION['a']!='2' || $_SESSION['a']!='1' || $_SESSION['a']!='3' || $_SESSION['a']!='4') {
	header("location:login.php");
}
?>
<!DOCTYPE html=en>
<html>
<head>
</head>		

<body>
<center>
<img src='hll.jpg'>
<table bgcolor='blue' width='400' height='50' ><tr><td align='center'>HLL STOCK MANAGEMENT</td></tr></table>
<br><br>
<table  width='400' height='50' border='2' ><tr><td align='center'></td></tr>
<?php
if($_SESSION['a']=='1') {
	echo "<tr><td align='center'><a href='add.php'>1. Purchase Register</a></td></tr>
<tr><td align='center'><a href='sold.php'>2. Sales Register</a></td></tr>
<tr><td align='center'><a href='show.php'>3. Stock Register</a></td></tr>";
}
if($_SESSION['a']=='2') {
	echo "<tr><td align='center'><a href='add.php'>1. Purchase Register</a></td></tr>";
}
if($_SESSION['a']=='3') {
	echo "<tr><td align='center'><a href='sold.php'>2. Sales Register</a></td></tr>";
}
if($_SESSION['a']=='4') {
	echo "<tr><td align='center'><a href='show.php'>3. Stock Register</a></td></tr>";
}
	?>
</table>
</center>
<br><br><br><br><br>
<center>
<font color='blue'>
<hr>
<a href='menu.php'>HOME</a>
<a href='add.php'>PURCHASE</a>
<a href='sold.php'>SALES</a>
<a href='show.php'>STOCK</a>
</font>
</center><a href='logout.php'>LOGOUT</a>
</body>
</html>

