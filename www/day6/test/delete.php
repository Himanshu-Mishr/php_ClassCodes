<!DOCTYPE html=en>
<html>
<style>
a {
color:white;
}
</style>
<head>

</head>		

<body bgcolor='green' text='white'>
<center>
<img src="books.jpg" width='400' height='250'>
<h1>Online Library Management System</h1>

<a href='alllist.php'>View all book list</a>
<a href='add.php'>Add new book title</a>
<a href='delete.php'>delete book title</a>
<a href='edit.php'>Edit Book information</a><br>
</center>
<form action="" method="GET">
<fieldset>
<legend> Delete Item</legend>


<?php
// to make connection after submit button .......
require "connection.php";
if($con) {
	$str="select book_id, book_title from books";
	//echo $str;
	$result=mysqli_query($con, $str);
	while($row=mysqli_fetch_array($result)) {
		//echo $row[0]."<br>";
		echo "&#10084;<input type='checkbox' value='$row[0]' name='todelete[]'> $row[1] <br>";
	}
}
?>
</fieldset>
<input type='submit' name='submit'>
</form>

<?php
if(isset($_GET['submit']) && isset($_GET['todelete']))
{
	require "connection.php";
	if($con) {
		foreach ($_GET['todelete'] as $id) {
			$str="delete from books where book_id='".$id."'";
			echo $str;
			mysqli_query($con, $str);
		}
		header("location:delete.php");
	}
}
?>
<br>
<br>
<br>
<hr>
<p align='right'><a href='main.php'>Main Menu</a></p>
<p align='right'>Author : Himanshu Mishra</p>
</body>
</html>