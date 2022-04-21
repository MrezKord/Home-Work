<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobaile phone charge</title>
</head>
<body>
    <!--input number-->
    <form action="">
        <label>charge</label>
        <label><input type="number" name="k"></label>
        <br>
        <br>
        <input type="submit">
    </form>
<?php
//get value
$k = $_GET['k'];
//if statement
if ($k > 0 && $k <= 100)
    echo(($k * ($k + 1)) / 2); // addition of numbers from 1 to $k
else
    echo("out of range");


?>
</body>
</html>