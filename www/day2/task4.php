
<!DOCTYPE html=en>
<html>
	<head>
	<meta charset='utf-8'>
	</head>
	
	<body>
	<form name='form1' action='driver_post.php' method='POST'>
	<table>
	Name : <input type='text' name='name' placeholder='enter your name here'><br>
	Address : <input type='text' name='address' placeholder='Address'><br>
	Email : <input type='email' name='email' placeholder='enter valid email'><br>
	
	Select your Gender<br>
	Male : <input type='radio' name='gender' value='male'><br>
	Female : <input type='radio' name='gender' value='female'><br>
	
	Select Your board : <select name='board'>
		<option value='ICSE'> ICSE</option>
		<option value='CBSE'> CBSE</option>
		<option value='WBHS'> WBHS</option>
		<option value='Others'> Others</option></select>
	
	Select Course : <select name='course'>
		<option value='BCA'> BCA</option>
		<option value='BBA'> BBA</option>
		<option value='MCA'> MCA</option>
		</select><br>
	Submit <input type='submit' name='submit' value='Submit'>
	Reset <input type='reset' name='reset'><br>
	</table>
	</form>
	</body>
</html>
