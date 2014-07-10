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
<br>
<table border='1' width='500'>
<tr><td>Book ID</td><td>Book title</td><td>Category</td><td>Author</td></tr>
<?php
require "connection.php";
if($con) {
	// printing table ................................
	$str='select * from books';
	$result=mysqli_query($con, $str);
	while ($row=mysqli_fetch_array($result)) {
		echo "<tr align='center'><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
}

}


?>
</table>
</center>
<br>
<br>
<br>
<hr>
<p align='right'><a href='main.php'>Main Menu</a></p>
<p align='right'>Author : Himanshu Mishra</p>
</body>
</html>