<?php
session_start();
if($_SESSION['a']!='4' || $_SESSION['a']!='1') {
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
<table border='1' width='500'>
<tr align='center' bgcolor='blue'><td>Product</td><td>Stock</td></tr>
<?php

$con=mysqli_connect('localhost', 'root', 'himanshu', 'foodie');
if($con) {
}
// printing table ................................
$str='select * from product';
$result=mysqli_query($con, $str);
while ($row=mysqli_fetch_array($result)) {
	echo "<tr align='center'><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
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

