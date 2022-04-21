<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pythagorean theorem</title>
</head>
<body>
    <!--input numbers-->
    <form action="">
        <label>Number1</label>
        <label><input type="number" name="number1" placeholder=""></label>
        <br>
        <label>Number2</label>
        <label><input type="number" name="number2"></label>
        <br>
        <label>Number3</label>
        <label><input type="number" name="number3"></label>
        <br>
        <br>
        <input type="submit">
            
    </form>
        <?php
            // get value
            $a = $_GET['number1'];
            $b = $_GET['number2'];
            $c = $_GET['number3'];
            // sort numbers
            $numbers = array();
            array_push($numbers, $a, $b, $c); // append to $numbers
            rsort($numbers); // reverse sort $numbers
            // if statement
            if ($a > 0 && $b > 0 && $c > 0){
                if (($numbers[0]**2) == ($numbers[1]**2) + ($numbers[2]**2)) // Check the pythagorean theorem
                    echo "Yes";
                else
                    echo "No";
            }else
                echo "Error";
        ?>
</body>
</html>