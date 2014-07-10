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
	
	
	<form method='GET' action='add.php'>
	<table border='1' width='500'>

	<tr><td>Book ID</td><td><input type='text' name='book_id'></td></tr>
	<tr><td>Book Title</td><td><input type='text' name='book_title'></td></tr>
	<tr><td>Category</td><td><input type='text' name='category'></td></tr>
	<tr><td>Author</td><td><input type='text' name='author'></td></tr>
	
	</table>
	<input type='submit' name='submit'>
	
<?php
$book_id=$_GET['book_id'];
$book_title=$_GET['book_title'];
$category=$_GET['category'];
$author=$_GET['author'];

// inserting data (new data)...............................
if(isset($_GET['submit']))
require "connection.php";
if($con) {
	$str="insert into books values('".$book_id."','".$book_title."','".$category."','".$author."');";
	echo $str;
	mysqli_query($con, $str);
}
?>
</center>
<br>
<br>
<br>
<hr>
<p align='right'><a href='main.php'>Main Menu</a></p>
<p align='right'>Author : Himanshu Mishra</p>
</body>
</html>