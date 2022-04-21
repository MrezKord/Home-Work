<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=text]{
            display: block;
            margin-left: 30px;
            height: 20px;
            transition: 1s;
            outline: none;
            border-radius: 4px;
        }
        input[type=text]:focus{
            border: 1px solid blue;
        }
        .td_padding{
            padding-left: 70px;
        }
        input[type=radio]{
            display: block;
            margin-bottom: 10px;
        }
        .label-radio{
            display: block;
            margin-bottom : 5px;
            color: #837572;
            font-family: Arial, Helvetica, sans-serif;            
        }
        .input-valid{
            border: 1px solid red;
        }
        button{
            border: none;
            width: 70px;
            height: 40px;
            background-color: blue;
            color: white;
            font-weight: bold;
            font-size: 16px;

        }
        button:hover{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        function valid($a){
            if (isset($_POST['ok'])){
                if(empty($_POST[$a]))
                    echo "input-valid";
            }
        }
    
    
    ?>
    <form action="" method="POST">
        <div style="direction: rtl;">
            <div>
                <table style="padding-bottom: 10px;">
                    <tr>
                        <td>
                            <label><b> نام </b><span style="color: red;">*</span></label>
                            <input type="text" pattern="[ا-ی]{2,}" name="name" class="<?php valid('name')?>">
                        </td>
                        <td>
                            <label><b> نام خانوادگی</b><span style="color: red;">*</span></label>
                            <input type="text" name="lname" class="<?php valid('lname')?>">
                        </td>
                        <td>
                            <label><b> نام پدر </b><span style="color: red;">*</span></label>
                            <input type="text" name="fname" class="<?php valid('fname')?>">
                        </td>               
                    </tr>
                </table>
                <br>
                <br>
                <table style="width: 200px">
                    <tr>
                        <td class="td_padding">
                            <label><b> شماره شناسنامه </b><span style="color: red;">*</span></label>
                            <input type="text" style="width: 220px;" pattern="([1-9]\d{3})|(00\d{8})|([1-9]\d{7})|(\+98\d{10,})" name="numbers" class="<?php valid('numbers')?>">
                        </td>
                        <td class="td_padding">
                            <label><b> شماره ملی</b><span style="color: red;">*</span></label>
                            <input type="text" style="width: 220px;" name="numberm" class="<?php valid('numberm')?>">
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <table>
                    <tr>
                        <td style="padding-left: 40px;">
                            <label style="display: block;"><b> وضعیت تحصیلی</b> <span style="color: red;">*</span></label>
                            <small style="color: #837572;"><i> دانشجو یا دانش آموخته دوره</i></small>
                            <br>
                            <label class="label-radio"> دانشجو کارشناسی</label>
                            <label class="label-radio">دانش آموخته کارشناسی</label>
                            <label class="label-radio">دانشجو کارشناسی ارشد</label>
                            <label class="label-radio">دانش آموخته کارشناسی ارشد</label>
                            <label class="label-radio">دانشجو دکترا</label>
                            <label class="label-radio">دانش آموخته دکترا</label>
                        </td>
                        <td style="padding-left: 40px;">
                            <label style="display: block;">&nbsp;</label>
                            <br>
                            <input type="radio" name="education" class="<?php valid('education')?>">
                            <input type="radio" name="education" class="<?php valid('education')?>">
                            <input type="radio" name="education" class="<?php valid('education')?>">
                            <input type="radio" name="education" class="<?php valid('education')?>">
                            <input type="radio" name="education" class="<?php valid('education')?>">
                            <input type="radio" name="education" class="<?php valid('education')?>">
                        </td>
                        <td style="padding-left: 40px;padding-right: 70px">
                            <label style="display: block;"><b> شغل</b> <span style="color: red;">*</span></label>
                            <br>
                            <label class="label-radio">دانشجو </label>
                            <label class="label-radio">دبیر</label>
                            <label class="label-radio">استاد</label>
                            <label class="label-radio">شاغل بخش دولتی</label>
                            <label class="label-radio">شاغل بخش خصوصی</label>
                            <label class="label-radio">بازنشسته</label>
                        </td>
                        <td style="padding-left: 40px;">
                            <label style="display: block;">&nbsp;</label>
                            <br>
                            <input type="radio" name="job" class="<?php valid('job')?>">
                            <input type="radio" name="job" class="<?php valid('job')?>">
                            <input type="radio" name="job" class="<?php valid('job')?>">
                            <input type="radio" name="job" class="<?php valid('job')?>">
                            <input type="radio" name="job" class="<?php valid('job')?>">
                            <input type="radio" name="job" class="<?php valid('job')?>">
                        </td>
                    </tr>
                </table>
                <br>
                <table style="width: 200px">
                    <tr>
                        <td class="td_padding">
                            <label><b> نشانی محل سکونت</b><span style="color: red;">*</span></label>
                            <input type="text" style="width: 220px;" name="loca" class="<?php valid('loca')?>">
                        </td>
                        <td class="td_padding">
                            <label><b> نشانی محل کار</b></label>
                            <input type="text" style="width: 220px;">
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <table style="width: 200px">
                    <tr>
                        <td class="td_padding">
                            <label><b> تلفن همراه</b><span style="color: red;">*</span></label>
                            <input type="text" style="width: 220px;" pattern="(\+989|09)\d{9}" name="phone" class="<?php valid('phone')?>">
                        </td>
                        <td class="td_padding">
                            <label><b>تلفن ثابت</b></label>
                            <input type="text" style="width: 220px;" pattern="0\d{10}" name="phones" >
                        </td>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <td style="padding-left: 300px;">
                            <label><b> نشانی پست الکترونیکی</b><span style="color: red;">*</span></label>
                            <input type="text" style="width: 550px;height : 20px" name="em" pattern="/\w+@\w+\.\w{2,}/" class="<?php valid('em')?>">
                        </td>
                    </tr>
                    <tr>
                    <td style="padding-top: 20px;">
                        <label><b> کدامنیتی</b></label>
                        <input type="text" style="width: 300px;height : 20px;">
                    </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 20px;">
                            <button type="submit" name="ok">ثبت فرم</button>
                        </td>                   
                    </tr>
                    <tr>
                        <td style="color: red;">
                            <?php 
                                if (isset($_POST['ok'])){
                                    $a = ['name','fname','lname','numbers','numberm','education','job','phone','em'];
                                    $b = ['name','numbers','phone','phones','em'];
                                    $regex = ['/[ا-ی]{2,}/','/([1-9]\d{3})|(00\d{8})|([1-9]\d{7})|(\+98\d{10,})/','/(\+989|09)\d{9}/','/0\d{10}/','/\w+@\w+\.\w{2,}/'];
                                    $c = array_combine($b,$regex);
                                    for ($i=0; $i < count($a); $i++) { 
                                        if (empty($_POST[$a[$i]])){
                                        echo "کاربر گرامی لطفا فیلد های خالی را پر کنید";
                                        break;}
                                    }$d = [];
                                    $y = [];
                                    $x = [];
                                    $p =[];
                                    $q = [];
                                    // }
                                    // for ($j=0; $j < count($a); $j++) { 
                                        
                                    //     if (!empty($_POST[$a[$j]])){
                                    //     preg_match($regex[0],$b[0],$d);
                                    //     if ($d[0][0] != $_POST[$b[0]] )
                                    //         echo "نام وارد شده معتبر نمی باشد";
                                    //     preg_match($regex[1],$b[1],$y);
                                    //     if ($y[0][0] != $_POST[$b[0]])
                                    //         echo "شماره شناسنامه وارد شده معتبر نمی باشد";
                                    //     preg_match($regex[2],$b[2],$x);
                                    //     if ($x[0][0] != $_POST[$b[0]])
                                    //         echo "شماره تلفن همراه معتبرنمی باشد";
                                    //     preg_match($regex[3],$b[3],$x);
                                    //     if ($p[0][0] != $_POST[$b[0]])
                                    //         echo "شماره تلفن ثابت معتبر نمی باشد";
                                    //     preg_match($regex[4],$b[4],$x);
                                    //     if ($q[0][0] != $_POST[$b[0]])
                                    //         echo "آدرس الکترونیکی وارده شده معتبر نمی باشد";
                                        }
                                    
                                    
                                    
                            
                            
                            
                            
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</body>
</html>