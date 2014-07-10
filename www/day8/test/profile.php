<?php
session_start();
$id=$_SESSION['id'];
$con=mysqli_connect('localhost', 'root', 'himanshu', 'foodie');
if( $_SESSION['a']!='1' || $_SESSION['a']!='2') {
	//header("location:login.php");
}

if($_SESSION['a']=='1') {
	//admin
	$id=$_SESSION['id'];
	$str="select * from user_profile where p_id='".$id."';";
	//echo $str;
	$result=mysqli_query($con, $str);
	$row=mysqli_fetch_array($result);
	echo "<table border='1' width='500'>";
		echo "<h1>WELCOME    ".$_COOKIE['uname']."</h1>";
	echo "<tr align='center'><td>Profile ID</td><td>".$row[0]."</td></tr>";
	echo "<tr align='center'><td> Name</td><td>".$row[1]."</td></tr>";
	echo "<tr align='center'><td>Contact </td><td>".$row[2]."</td></tr>";
	echo "<tr align='center'><td>Address </td><td>".$row[3]."</td></tr>";
	echo "<tr align='center'><td>Skills </td><td>".$row[4]."</td></tr>";
	echo "</table>";

}
else if($_SESSION['a']=='2') {
	//user
	$id=$_SESSION['id'];
	$str="select * from user_profile where p_id='".$id."';";
	//echo $str;
	$result=mysqli_query($con, $str);
	$row=mysqli_fetch_array($result);
	echo "<h1>WELCOME    ".$_COOKIE['uname']."</h1>";
	echo "<table border='1' width='500'>";
	echo "<tr align='center'><td>Profile ID</td><td>".$row[0]."</td></tr>";
	echo "<tr align='center'><td> Name</td><td>".$row[1]."</td></tr>";
	echo "<tr align='center'><td>Contact </td><td>".$row[2]."</td></tr>";
	echo "<tr align='center'><td>Address </td><td>".$row[3]."</td></tr>";
	echo "<tr align='center'><td>Skills </td><td>".$row[4]."</td></tr>";
	echo "</table>";
	
}
echo "<br><br><br><a href='logout.php'>logout</a>";
?>