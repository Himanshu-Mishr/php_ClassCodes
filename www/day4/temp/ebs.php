<!DOCTYPE html>
<html>
<head>
    <title>EBS : Electric Billing System</title>
</head>
<body bgcolor="blue" text='blue'>
<font face="verdana">
<center>
    <form action="ebs_submit.php" method="GET" accept-charset="utf-8">
    <table bgcolor="white" width="600" border="1">
        <tr align='center'>
        <td colspan="2">
            <h1>Please Fill Up The Following Details</h1>
            West Bengal Electricity Dept
        </td>
        </tr>

        <tr align='center'><td>Date</td><td>
        <input type="text" name="day" size="5">
        <input type="text" name="month" size="5">
        <input type="text" name="year" size="5"></td></tr>

        <tr align='center'><td>Name</td><td><input type="text" name="name"></td></tr>
        <tr align='center'><td>Units Consumed</td><td><input type="text" name="units"></td></tr>
        <tr align='center'>
            <td colspan="2">
            <input type="submit" name="submit" value="submit">
            <input type="reset" name="reset" value="clear">
            </td>
        </tr>
    </table>
    </form>
</center>
</font>
</body>
</html>
