<!DOCTYPE html=en>
<html>
<style>
a {
color:white;
}
</style>
<head>

</head>		

<body>
<?php

$code=$_GET['code'];
	require "connection.php";
	if($con) {
			$str="delete from dhaba_menu where item_code='".$code."'";
			echo $str;
		
			mysqli_query($con, $str);
		}
		header("location:task1.php");

?>

</body>
</html>