<?php
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$name=$_POST['name'];
$units=$_POST['units'];

echo "
<!DOCTYPE html>
<html>
<head>
    <title>EBS : Electric Billing System</title>
</head>
<body bgcolor='blue' text='blue'>
<font face='verdana'>
<center>
    <form action='ebs_submit.php' method='POST' accept-charset='utf-8'>
    <table bgcolor='white' width='600' border='1'>
        <tr align='center'>
        <td colspan='2'>
            <h3>Electric Bill For ".$name." as on ".$day."-".$month."-".$year."</h3>
        </td>
        </tr>

        <tr align='center'><td>Total Units</td><td>".$units."</td></tr>";
$free_units=0;
$price_per_units=0;
if ($units < 1000) {
    $free_units=0;
    $price_per_units=0.10;
} 
else if($units <= 3000) {
    $free_units=50;  
    $price_per_units=0.20;
}
else {
    $free_units=100;
    $price_per_units=0.30;
}
$units_accountalbe=$units-$free_units;
$total=$units_accountalbe*$price_per_units;
echo "
        <tr align='center'><td>Free Units</td><td>".$free_units."</td></tr>
        <tr align='center'><td>Price Per Units</td><td>".$price_per_units."</td></tr>";

if ($total <= 500) {
    echo "<tr align='center'><td>Total(INR)</td><td>".$total."</td></tr>";
} else {
    echo "<tr align='center'><td>Total(INR)</td><td text='red' color='red'><font color='red'>".$total."</font></td></tr>";
}



echo "   </table>
    </form>
</center>
</font>
</body>
</html>

";
?>
