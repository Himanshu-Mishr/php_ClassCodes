<center>
<form method='GET'>
<table width="500" border="1">
<?php
require "connection.php";
if(!$con) {
	die('could not connect');
	}
else {
	echo "Yes connected !!! Party time : ) ";
	$str="select * from dhaba_menu;";
	$result=mysqli_query($con, $str);
	while($row=mysqli_fetch_array($result)) {
		echo "<tr align='center'><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td><a href='delete.php?code=$row[0]'>Delete</a></td></tr>";
	}
}
?></table>
</form>