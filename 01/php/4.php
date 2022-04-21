<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Lozenge</title>
</head>
<body>
    <!--input number-->
    <form action="">
        <div>
            <label>Diameter</label>
            <input type="number" name="n" placeholder="Enter a number">
        </div>
        <br>
        <input type="submit">
    </form>
    <p align = "center">
        <?php
        //get value
        $n = $_GET['n'];
        $s = "";
        $y = "";
        $r = intdiv($n,2);
        for ($i = 0;$i < 2*$n;$i++)
            $s = $s.' ';
        for ($x = 0;$x < 2*$n;$x++)
            $y = $y.'*';
        //get an odd number and peform operation
        if ($n % 2 != 0 && ($n > 0 && $n <= 19)){
    
            for ($j = 0;$j <= $r;$j++){  
                $s[$r + $j] = '*';          
                $s[$r - $j] = '*';               
                $s[$r + $j + $n] = '*';
                $s[$r - $j + $n] = '*';
                echo ($s).'<br>';
            }
    
            for ($t = 0;$t < $r;$t++){
                $y[$t] = ' ';
                $y[2*$r - $t] = ' ';
                $y[$t + $n] = ' ';
                $y[$n + 2*$r - $t] = ' ';
                echo $y.'<br>';
                }
            //if even number...
            }else
            echo "Enter the number again."

        ?>

    </p>
</body>
</html>