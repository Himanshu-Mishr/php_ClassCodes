<?php
session_start();
session_destroy();
?>
<!DOCTYPE html=en>
<html>
<head>

</head>		

<body bgcolor='#0000' text='white'>
<?php

echo "<h1>LOGOUT</h1>";
header("location:login.php");
?>

</body>
</html>