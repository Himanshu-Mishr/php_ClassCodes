<?php
session_start();
?>
<!DOCTYPE html=en>
<html>
<head>
</head>		

<body>
<center>
<form method='GET' action=''>
<table>
<tr><td><input type='text' name='username'></td></tr>
<tr><td><input type='text' name='password'></td></tr>
</table>
<input type='submit' name='submit'>
</form>
</center>
</body>
</html>
<?php
$username=$_GET['username'];
$password=$_GET['password'];
if(isset($_GET['submit'])) {

	$con=mysqli_connect('localhost', 'root', 'himanshu', 'foodie');
	if($con) {
		$str='select * from login';
		$result=mysqli_query($con, $str);
		while ($row=mysqli_fetch_array($result)) {
		if($username==$row[1] && $password==$row[2]) {
			// then check group
			if($row[3] == 'admin') {
				$_SESSION['a']='1';
				$_SESSION['id']=$row[0];
				setcookie('user_id', $row[0], time()+60*60*8);
				setcookie('uname', $row[1], time()+60*60*8);
				header("location:profile.php");
			}
			else if($row[3] == 'user') {
				$_SESSION['a']='2';
				$_SESSION['id']=$row[0];
				setcookie('user_id', $row[0], time()+60*60+8);
				setcookie('uname', $row[1], time()+60*60+8);
				header("location:profile.php");
			}
		}

		}
	}
}
?>