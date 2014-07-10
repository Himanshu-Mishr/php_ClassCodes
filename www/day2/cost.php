
<!DOCTYPE html=en>
<html>
	<head>
	<meta charset='utf-8'>
	</head>
	
	<body>
	<center text="green"><h1>The Foodies</h1><hr>
<?php
$item1_qnty=$_POST['item1_quantity'];
$item1_pr=$_POST['item1_price'];

$item2_qnty=$_POST['item2_quantity'];
$item2_pr=$_POST['item2_price'];

$item3_qnty=$_POST['item3_quantity'];
$item3_pr=$_POST['item3_price'];

$item1=$item1_qnty*$item1_pr;
$item2=$item2_qnty*$item2_pr;
$item3=$item3_qnty*$item3_pr;
$total=$item1+$item2+$item3;
$tax=$total*0.145;
$finalammount=$tax+$total; 

echo " ITEM1 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$item1."<br>";
echo "ITEM2 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$item2."<br>";
echo "ITEM3 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$item3."<br>";
echo "TAX@14.5 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$tax."<br>";
echo "FINAL AMMOUNT &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp ".$finalammount."<br>";

?>
	</center>
	</body>
</html>
