<?php
$to=$_POST['to'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$from="swapan@nettech.net.in";
$headers="From:" . $from;
mail($to,$subject,$message,$headers);

echo "<center><h2>Mail Sent.</h2></center>";
?>