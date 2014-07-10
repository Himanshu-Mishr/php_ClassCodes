	<!DOCTYPE html=en>
	<html>
		<head>
		<meta charset="utf-8">
		</head>
			
		<body>
		<form method="POST" action="task3.php">
			<input type="text" name="name" >
			<input type="submit" name="submit" >
		</form>
		</body>
	</html>

<?php

if(isset($_POST['submit'])) {
	echo "button is pressed";
}
else{
	echo " not pressed";
	}
?>