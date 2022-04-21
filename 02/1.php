<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .input-group{
            border: 1px solid red;
        }
        #success{
            margin-top: 40px;
            color: green;
            font-size: 20px;

        }
        button:hover{
            background-color: black;
            color: white;
        }
        
    </style>
    
</head>
<body>
    <div>
        <h1>Test Form Validation</h1>
        <form action="" method="POST">
            <table>
                <?php if (isset($_POST['button'])) {
                $n = '';
                preg_match('/[a-zA-Z]{6,}/',$_POST['Name_1'],$a);
                foreach ($a as $value) {
                    $n = $value;
                }
                }?>
                <?php 
                if (isset($_POST['button'])){
                $d = [];
                $v = '';
                preg_match('/\+989\d{9}|09\d{9}/',$_POST['phone'],$d);
                foreach ($d as $j) {
                    $v = $j;
                }
                }?>
                 <?php 
                if (isset($_POST['button'])){
                $q = [];
                $m = '';
                preg_match('/\w+@[a-zA-Z]+\.[a-zA-Z]{2,}/',$_POST['email'],$q);
                foreach ($q as $i) {
                    $m = $i;
                }
                }?>
                <tr>
                    <td>Name<span style="color: red;">*</span></td>
                    <td><input type="text" name="Name_1" class="<?php if (isset($_POST['button'])){if (empty($_POST['Name_1'])) {echo "input-group";} elseif ($n != $_POST['Name_1']) echo "input-group";} ?>"></td>
                    <td style="color: red;"><?php if (isset($_POST['button'])){if (empty($_POST['Name_1'])) {echo "&nbsp;&nbsp;  Please enter your name!";}
                    if ($n != $_POST['Name_1']) echo "Invalid format";} ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Zip Code<span style="color: red;">*</span></td>
                    <td><input type="number" name="Zipcode" class="<?php if (isset($_POST['button'])){if (empty($_POST['Zipcode'])) echo "input-group";} ?>"></td>
                    <td style="color: red;"><?php if (isset($_POST['button'])){if (empty($_POST['Zipcode'])) echo "&nbsp;&nbsp;  Please enter your Zip code!";} ?></td>
                </tr>
                <tr>
                    <td>Country<span style="color: red;">*</span></td>
                    <td>
                        <input list="country" name="Country" class="<?php if (isset($_POST['button'])){if (empty($_POST['Country'])) echo "input-group";} ?>" >
                            <datalist id="country">
                                <option value="Iran">
                                <option value="Qatar">
                                <option value="Italy">
                            </datalist>
                    </td>
                    <td style="color: red;"><?php if (isset($_POST['button'])){if (empty($_POST['Country'])) echo "&nbsp;&nbsp;  Please choise a country!";} ?></td>
                </tr>
                <tr>
                    <td>Gender<span style="color: red;">*</span></td>
                    <td>
                        <input type="radio" name="Gender" class="<?php if (isset($_POST['button'])){if (empty($_POST['Gender'])) echo "input-group";} ?>">
                        <label>Male</label>
                        <input type="radio" name="Gender">
                        <label>Female</label>
                    
                    </td>
                    <td style="color: red;"><?php if (isset($_POST['button'])){if (empty($_POST['Gender'])) echo "&nbsp;&nbsp;  Please select an option";} ?></td>
                </tr>
                <tr>
                    <td>Prefernces<span style="color: red;">*</span></td>
                    <td>
                        <input type="checkbox" name="red" class="<?php if (isset($_POST['button'])){if (empty($_POST['red'])) echo "input-group";} ?>">
                        <label>Red</label>
                        <input type="checkbox" name="green" class="<?php if (isset($_POST['button'])){if (empty($_POST['green'])) echo "input-group";} ?>">
                        <label>Green</label>
                        <input type="checkbox" name="blue" class="<?php if (isset($_POST['button'])){if (empty($_POST['blue'])) echo "input-group";} ?>">
                        <label>Blue</label>

                    </td>
                    <td style="color: red;"><?php if (isset($_POST['button'])){if (empty($_POST['red']) && empty($_POST['green']) && empty($_POST['blue'])) {echo "&nbsp;&nbsp;  Please select an option";}} ?></td>
                </tr>
                <tr>
                    <td>Phone<span style="color: red;">*</span></td>
                    <td><input type="text" name="phone" class="<?php if (isset($_POST['button'])){if (empty($_POST['phone'])) {echo "input-group";} elseif ($v != $_POST['phone']) echo "input-group";} ?>"></td>
                    <td style="color: red;"><?php if (isset($_POST['button'])){if (empty($_POST['phone'])) {echo "&nbsp;&nbsp;  Please enter your phone number!";}
                    if ($v != $_POST['phone']) echo "Invalid format";} ?></td>
                </tr>
                    <td>Email<span style="color: red;">*</span></td>
                    <td><input type="text" name="email" class="<?php if (isset($_POST['button'])){if (empty($_POST['email'])) {echo "input-group";} elseif ($m != $_POST['email']) echo "input-group";} ?>"></td>
                    <td style="color: red;"><?php if (isset($_POST['button'])){if (empty($_POST['email'])) {echo "&nbsp;&nbsp;  Please enter your email!";}
                    if ($m != $_POST['email']) echo "Invalid format";} ?></td>
                <tr>
                    <td>password(6-8 characters)<span style="color: red;">*</span></td>
                    <td><input type="password" name="mypassword" class="<?php if (isset($_POST['button'])){if (empty($_POST['mypassword'])) echo "input-group";} ?>"></td>
                    <td style="color: red;"><?php if (isset($_POST['button'])){if (empty($_POST['mypassword'])) echo "&nbsp;&nbsp;  Please enter your password!";} ?></td>
                </tr>
                <tr>
                    <td>Verify password<span style="color: red;">*</span></td>
                    <td><input type="password" name="password" class="<?php if (isset($_POST['button'])){if (empty($_POST['password'])) echo "input-group";} ?>"></td>
                    <td style="color: red;"><?php if (isset($_POST['button'])){if (empty($_POST['password'])) echo "&nbsp;&nbsp;  Please enter your Zip code!";} ?></td>

                </tr>
                <tr>
                    <td></td>
                    <td>
                    <button type="submit" name="button">SEND</button>
                    <button type="button">CLEAR</button>
                    </td>
                </tr>
            </table>
            <p id="success">
                <?php
                if (isset($_POST['button'])){
                    if (!empty($_POST['password']) && !empty($_POST['mypassword'] && !empty($_POST['email'] && !empty($_POST['phone'] && (!empty($_POST['red']) || !empty($_POST['green']) || !empty($_POST['blue'])) && 
                    !empty($_POST['Gender']) && !empty($_POST['Country']) && !empty($_POST['Zipcode']) && !empty($_POST['Name_1']) && !empty($_POST['Name_1'])
                    && $n == $_POST['Name_1'] && $v == $_POST['phone']) && $m == $_POST['email']))){
                            echo "Your information was successfully registed.";
                    }
                }
                
                
                ?>
            </p>
        </form>
    </div>
</body>
</html>