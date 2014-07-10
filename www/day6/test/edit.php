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

<form method='GET' action=''>
<select name='book_id'>
<?php
require "connection.php";
if($con) {

	$str='select * from books';
	$result=mysqli_query($con, $str);
	while ($row=mysqli_fetch_array($result)) {

		echo "<option value=".$row[0].">".$row[0]."</option>";
	}
	$flag=1;
}
echo "</select></form>";
?>
<?php
$book_id=$_GET['book_id'];
echo "
	<form method='GET' action=''>
	<table border='1' width='500'>

	<tr><td>Book ID</td><td><input type='text' name='book_id' value=".$book_id."></td></tr>
	<tr><td>Book Title</td><td><input type='text' name='book_title'></td></tr>
	<tr><td>Category</td><td><input type='text' name='category'></td></tr>
	<tr><td>Author</td><td><input type='text' name='author'></td></tr>
	
	</table>
	<input type='submit' name='submit'>
	</form>";
?>
<?php
// updating with primary key
$book_id=$_GET['book_id'];
$book_title=$_GET['book_title'];
$category=$_GET['category'];
$author=$_GET['author'];

if(isset($_GET['submit']))
	$str="update books set book_title='".$book_title."', category='".$category."', author='".$author."' where book_id='".$book_id."';";
	echo $str;
	mysqli_query($con, $str);

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