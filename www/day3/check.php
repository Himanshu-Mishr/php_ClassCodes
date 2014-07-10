<?php
echo "
<!DOCTYPE html=en>
	<html>
		<head>
		</head>
			
		<body>
		<form method='POST' action='check.php'>
			<input type='text' name='name' >
			<input type='submit' name='submit1' >
		</form>";
if(isset($_POST['submit1'])) {
	echo "<br>button1 is pressed";
}
else{
	echo "<br>button1 not pressed";
}

echo "<form method='POST' action='check.php'>
			<input type=text' name='name' >
			<input type='submit' name='submit2' >
		</form>
		</body>
	</html>
";
if(isset($_POST['submit2'])) {
	echo "<br>button2 is pressed";
}
else{
	echo "<br>button2 not pressed";
}
?>