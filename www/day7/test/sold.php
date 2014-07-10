<?php
session_start();
if($_SESSION['a']!='3' || $_SESSION['a']!='1') {
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
<table bgcolor='blue' width='400' height='50' ><tr><td align='center'>HLL SALES REGISTER</td></tr>
</table>
<br><br>
<form method='GET' action=''>
<table  width='400' height='50' border='2' ><tr><td align='center'></td></tr>
<tr><td align='center'>Product Name</td><td align='center'><input type='text' name='name'></td></tr>
<tr><td align='center'>Qty Sold</td><td align='center'><input type='text' name='qty'></td></tr>

</table>
<input type='submit' name='submit' value='SALES'>
</form>
</center>
<?php
$str='';
$name=$_GET['name'];
$qty=$_GET['qty'];
// to make connection after submit button .......
if(isset($_GET['submit']))
$con=mysqli_connect('localhost', 'root', 'himanshu', 'foodie');
if($con) {
	// check whether product is there or not
	// if yes then add to it
	$str='select * from product';
	$result=mysqli_query($con, $str);
	$flag=0;
	while ($row=mysqli_fetch_array($result)) {
		$flag=1;
		if($name==$row[0]) {
			$temp=$row[1] - $qty;
			if($temp >= 0) {
				$str="update product set qty=".$temp." where name='".$name."';";
				//echo $str;
				mysqli_query($con, $str);
				$flag=0;
				break;
			}
			else {
				echo "<center><h2>INFO:QTY ENTERED IS MORE THAN AVAIABLE</h2></center>";
				$flag=0;
				break;
			}
		}
		}
		if($flag==1) {
			echo "<center><h2>ERROR:Product Name not in entry</h2></center>";
		}
	

}
?>
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

