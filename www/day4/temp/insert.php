<!DOCTYPE html>
<html>
<head>
	<title>Storing Data</title>
</head>
<body>
<center>
<font>
<form method="GET" action="insert.php">
<table>
	<tr>
	<td>ID</td>
	<td>NAME</td>
	<td>PH.NO</td>
	</tr>
	<tr>
	<td><input type='text' name='id1'></td>
	<td><input type='text' name='name1'></td>
	<td><input type='text' name='ph1'></td>
	</tr>
	<tr>
	<td><input type='text' name='id2'></td>
	<td><input type='text' name='name2'></td>
	<td><input type='text' name='ph2'></td>
	</tr>
	<tr>
	<td><input type='text' name='id3'></td>
	<td><input type='text' name='name3'></td>
	<td><input type='text' name='ph3'></td>
	</tr>
</table>
<input type='submit' name='submit'>
</form>
<?php
$flag=0;
$id1=$_GET['id1'];
$name1=$_GET['name1'];
$ph1=$_GET['ph1'];

$id2=$_GET['id2'];
$name2=$_GET['name2'];
$ph2=$_GET['ph2'];

$id3=$_GET['id3'];
$name3=$_GET['name3'];
$ph3=$_GET['ph3'];

if(isset($_GET['submit']))
$con=mysqli_connect('localhost', 'root', '', 'foodie');
if ($con) {
	// creating table
	$str="create table student(
		stud_id varchar(5) primary key,
		stud_name char(50),
		stud_ph int(12));
		)";
	// executing the query 
	$result=mysqli_query($con, $str);

	// inserting values
	$str="insert into student values(".$id1.",".$name1.",".$ph1.");";
	mysqli_query($con, $str);

	$str="insert into student values(".$id2.",".$name2.",".$ph2.");";
	mysqli_query($con, $str);

	$str="insert into student values(".$id3.",".$name3.",".$ph3.");";
	mysqli_query($con, $str);
	$flag=1;
	// header("location:query.php");
}

?>



		<table border='1' width='500'>
<?php
if($flag==1)
$con1=mysqli_connect('localhost', 'root', '', 'foodie');
if($con1) {
	$str1='select * from student';
	echo $str1."<br>";
	$result1=mysqli_query($con1, $str1);
	while ($row1=mysqli_fetch_array($result1)) {

		echo "<tr align='center'><td>".$row1[0]."</td><td>".$row1[1]."</td><td>".$row1[2]."</td></tr>";
	}
}
?>
</table>	
</font>
</center>
</body>
</html>

