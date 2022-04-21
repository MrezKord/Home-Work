<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            border-radius: 4px;
            transition: 0.5;
            outline: none;
        }
        input:focus{
            border: 1px solid blue;
        }
        button{
            border: none;
            border-radius: 4px;
            background-color: black;
            color: white;
        }
        button:hover{
            background-color: red;
            color: white;
        }
        div{
            margin-top: 30px;
            color: black;
            font-weight: bold;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <label>Text :</label>
        <input type="text" name="my_text">
        <button type="submit" name="ok">Show</button>
    </form>
    <div>
        <?php
            $a = '';
            if (isset($_POST['ok'])){
               $a = $_POST['my_text'];
            }
            
            $b = strtolower($a);
            $array = [];
            $t = [];
            for ($i=0; $i < strlen($b); $i++) {
                $array[] = $b[$i];
            }
            $d = array_unique($array);

            foreach ($array as  $value) {
                $c = 0;
                foreach ($array as  $j) {
                    if ($value == $j){
                        $c += 1;
                    }
                }$t[] = $c;
            }

            $r = array_combine($array,$t);
            $u = '';
            foreach ($r as $key => $val) {
                $u = $u.$key.$val;
            }

            $s = implode("",$d);

            $output = $s." ".$u;
            echo $output;

        ?>
    </div>
</body>
</html>