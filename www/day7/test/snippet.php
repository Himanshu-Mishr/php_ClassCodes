

// to make connection after submit button .......
if(isset($_GET['submit']))
$con=mysqli_connect('localhost', 'root', 'himanshu', 'student');
if($con) {
}


// inserting data (new data)...............................
if(isset($_GET['submit']))
$str="insert into student_details values('".$stud_id."','".$stud_name."','".$address."',".$contact_no.",'".$email_id."');";
echo $str;
mysqli_query($con, $str);


// printing table ................................
$str='select * from student_details';
$result=mysqli_query($con, $str);
while ($row=mysqli_fetch_array($result)) {
	echo "<tr align='center'><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
}


// updating with primary key
if(isset($_GET['submit']))
	$str="update student_details set stud_name='".$stud_name."', address='".$address."', contact_no=".$contact_no.", email_id='".$email_id."'  where stud_id='".$stud_id."';";
	echo $str;
	mysqli_query($con, $str);


// deleting the item
if(isset($_GET['submit']))
$str="delete from dhaba_menu where item_id='".$id."'";
echo $str;
mysqli_query($con, $str);
	

// printing a particular ID .....................,
<?php
if(isset($_GET['submit']))
$id=$_GET['id'];
$str='select * from student_details where stud_id='.$id.';';
$result=mysqli_query($con, $str);
$row=mysqli_fetch_array($result);
echo "<table border='1' width='500'>";
echo "<tr align='center'><td>student ID</td><td>".$row[0]."</td></tr>";
echo "<tr align='center'><td>Student Name</td><td>".$row[1]."</td></tr>";
echo "<tr align='center'><td>Student Address</td><td>".$row[2]."</td></tr>";
echo "<tr align='center'><td>Student Contact</td><td>".$row[3]."</td></tr>";
echo "<tr align='center'><td>Student Email Address</td><td>".$row[4]."</td></tr>";
echo "</table>";
?>

<!DOCTYPE html=en>
<html>
<head>
</head>		

<body>
</body>
</html>


// --------------- 
$flag=0;
$con=mysqli_connect('localhost', 'root', 'himanshu', 'student');
if(!$con) {
	die('Could Not Connect!!!');
}
else {
	$str='select * from student_details';
	$result=mysqli_query($con, $str);
	while ($row=mysqli_fetch_array($result)) {

		echo "<option value=".$row[0].">".$row[0]."</option>";
	}
	$flag=1;
}
$stud_id=$_GET['id'];
echo "</select>