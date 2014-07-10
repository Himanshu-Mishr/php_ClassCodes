
<?php
$submit1=$_POST['submit1'];
$submit2=$_POST['submit2'];

if(isset($submit1)) {
	echo "<br>button1 is pressed";
}
else{
	echo "<br>button1 not pressed";
}



if(isset($submit2)) {
	echo "<br>button2 is pressed";
}
else{
	echo "<br>button2 not pressed";
}
?>