<?php
echo "<!DOCTYPE html=en>
	<html>
		<head>
		</head>
		
		<body>
		<center>
		<table border='5', width='500' >
";
$a=1;
for($i=1;$i<11;$i++) {
	echo "<tr align='center'> <td> 5 </td><td>X</td><td>".$i."</td><td>= ".($i*5)."</td></tr>";
	
}
echo "
</table></body>
	</html>
";