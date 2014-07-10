<?php
echo "
<!DOCTYPE html=en>
	<html>
		<head>
		</head>
			
		<body>
		<form method='POST' action='login.php'>
			<input type='text' name='username' >


			<input type=text' name='password' >
			<input type='submit' name='submit' >
		</form>
		</body>
	</html>
";

if($_POST['username'] == "hm" && $_POST['password'] == "hm") {
	header('location:welcome.php');
}
else if(isset($_POST['submit'])){
	header('location:getout.php');
}
?>