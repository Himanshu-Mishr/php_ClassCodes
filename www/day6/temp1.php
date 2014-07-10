<html>
<head>
<title>deleting the row</title>
</head>

<body>
<form action="" method="get">
<fieldset>
<legend> Delete Item</legend>


<?php
$flag=0;
//if(isset($_GET['submit']))
require "connection.php";
if($con) {
	$str="select item_name from dhaba_menu";
	//echo $str;
	$result=mysqli_query($con, $str);
	while($row=mysqli_fetch_array($result)) {
		//echo $row[0]."<br>";
		echo "&#10084;<input type='checkbox' value='$row[0]' name='todelete[]'> $row[0] <br>";
	}
	
}
?>
</fieldset>
<input type='submit' name='submit'>
</form>

<?php

if(isset($_GET['submit']) && isset($_GET['todelete']))
{
	require "connection.php";
	foreach ($_GET['todelete'] as $id) {
		$str="delete from dhaba_menu where item_name='".$id."'";
		echo $str;
		mysqli_query($con, $str);
	}
	header("location:temp1.php");
	}
?>
</body>
</html>