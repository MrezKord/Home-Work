<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--I am using bootsrtrap 5-->
</head>
<body>
    <div class="container pl-2">
        <!--json to array-->
        <?php $get_json = file_get_contents("4.json");$decode_json = json_decode($get_json,true); ?>
        <!--Creat a form-->
        <form action="4index.php" method="post">
            <h1>Student Data</h1>
            <div class="d-flex gap-2">
                <select name="selectmodel" class="form-select mr-3" style="width: 20%;">
                    <option value="age">sort by age</option>
                    <option value="agerevers">sort by age(revers)</option>
                    <option value="school">sort by school name</option>
                </select>
                <button type="submit" name="sort" class="btn btn-dark">Sort</button>
            </div>
            <table class="table table-dark table-striped mt-3 w-70">
                <tr>
                    <th>num</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>School</th>
                </tr>
                <!--Return the row table-->
                <?php if(!isset($_GET['submit'])) { ?>
                <?php for ($i=0; $i < count($decode_json); $i++) { ?>
                
                    <tr>
                        <td><?php echo($i+1); ?></td>
                    <?php foreach ($decode_json[$i] as $key => $value) { ?>
                        <td>
                            <?php echo $value ?>
                        </td>
                        <?php } ?>
                    </tr>
                <?php }} ?>
                <!--Return the sorted table-->
                <?php if(isset($_GET['result'])){ $result = unserialize($_GET['result']);  ?>
                    <?php for ($i=0; $i < count($result); $i++) { ?>
                
                <tr>
                    <td><?php echo($i+1); ?></td>
                <?php foreach ($result[$i] as $key => $value) { ?>
                    <td>
                        <?php echo $value ?>
                    </td>
                    <?php } ?>
                </tr>
                <?php }} ?>
            </table>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>