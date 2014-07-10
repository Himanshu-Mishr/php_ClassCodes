<?php
session_start();
?>
<!DOCTYPE html=en>
<html>
<head>

</head>		


<body bgcolor='#0000' text='white'>
<br><br><br><br><br><br><br><br><br><br><br>
<center>
<form method='POST'>

<table border='1' >
<tr><td>username</td><td><input type='text' name='user'></td></tr>
<tr><td>password</td><td><input type='text' name='pass'></td></tr>
</table>
<br><br>
<input type='submit' name='submit'>
</form>
</center>
</body>
</html>

<?php
if(isset($_POST['submit']))  {
$user=$_POST['user'];
$pass=$_POST['pass'];

if($user=='admin') {
	$_SESSION['a']='1';
	header("location:admin.php");
}
else if($user=='normal') {
	$_SESSION['a']='2';
	header("location:normal.php");
}
}
?>