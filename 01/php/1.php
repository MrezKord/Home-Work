<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatreu</title>
</head>
<body>
    <!--input temprature-->
    <form action="">
        <label>Temperature</label>
        <label><input type="number" name="Temperature"></label>
        <br>
        <br>
        <input type="submit">
    </form>
        <?php
        // get value 
        $t = $_GET['Temperature'];
        // if statement
        if ($t > 100)
            echo 'steam';
        elseif ($t < 0)
            echo 'ice';
        else
            echo 'water';
        ?>
</body>
</html>