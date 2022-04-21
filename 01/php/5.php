<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text</title>
</head>
<body>
    <form action="">
        <!--input values-->
        <div>
            <label>Text</label>
            <label><input type="text" name="myText" placeholder="Enter a text"></label>
        </div>
        <br>
        <div>
            <label>Size</label>
            <label><input type="number" name="myNumber" placeholder="Choise a size font"></label>
        </div>
        <br>
        <div>
            <label>Color</label>
            <label><input type="text" name="myColor" placeholder="Choise a color"></label>
        </div>
        <br>
        <label><input type="submit"></label>
    </form>
    <?php
    // get values
    $size = $_GET['myNumber'].'px'; // concat the unit to the number
    $text = $_GET['myText'];
    $color = $_GET['myColor'];
    echo "<p style='color:$color; font-size:$size;'> $text </p>" 
?>
</body>
</html>