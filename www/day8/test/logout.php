<?php
session_start();
session_destroy();
setcookie('user_id', $row[0], time()-60*60*8);
setcookie('uname', $row[0], time()-60*60*8);
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