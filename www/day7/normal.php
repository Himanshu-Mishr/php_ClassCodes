<?php
session_start();
if(!$_SESSION['a']=='2') {
	header("location:login.php");
}
else{
echo "
<!DOCTYPE html=en>
<html>
<head>
</head>		

<body bgcolor='#0000' text='white'>
<center>
<h1>WECLOME NORMAL</h1>
<a href='logout.php'>LOGOUT</a>
</center>
</body>
</html>";

}
?>