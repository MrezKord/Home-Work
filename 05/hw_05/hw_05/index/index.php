<?php
session_start();
// Login ------ First Page
if (isset($_POST['login'])) {
    $login = $_POST['login'];
}

// submit --------- Modal && User Name and Password
$users_name_password = json_decode("../Data.json", true);
if (isset($_POST['open-drive'])) {
    $submit = $_POST['open-drive'];
    $user_name = $_POST['name'];
    $user_password = $_POST['password'];
    $user_email = $_POST['user-email'];
    $paht_user = $user_name . "_" . $user_email;
    // Creat Text File for Rigestering 
    if (file_exists('../Data.json')) {
        $final_data = fileWriteAppend($user_name, $user_password);
        if (file_put_contents('../Data.json', $final_data)) {
            $message = "<label class='text-success'>Data added Success fully</p>";
        }
    } else {
        $final_data = fileCreateWrite($user_name, $user_password);
        if (file_put_contents('../Data.json', $final_data)) {
            $message = "<label class='text-success'>File createed and  data added Success fully</p>";
        }
    }
}

// Creat a Directory for Data
$paht_each_user = "../Data_Users/" . $paht_user;
$_SESSION['paht_each_user'] = $paht_each_user;
if (!is_dir("../Data_Users")) {
    mkdir("../Data_Users");
}
if (!is_dir($paht_each_user)) {
    mkdir($paht_each_user);
}

function fileWriteAppend($user_name, $user_password)
{
    $current_data = file_get_contents('../Data.json');
    $array_data = json_decode($current_data, true);
    $extra = array(
        $user_name => $user_password,
    );
    $array_data[] = $extra;
    $final_data = json_encode($array_data);
    return $final_data;
}
function fileCreateWrite($user_name, $user_password)
{
    $file = fopen("../Data.json", "w");
    $array_data = array();
    $extra = array(
        $user_name => $user_password
    );
    $array_data[] = $extra;
    $final_data = json_encode($array_data);
    fclose($file);
    return $final_data;
}

// Registering
if (isset($_POST['register'])) {
    $user_name_register = $_POST['name-register'];
    $user_email_register = $_POST['email-register'];
    $user_password_register = $_POST['password_register'];
    $paht_user_register = $user_name_register . "_" . $user_email_register;
    $json = "../Data.json";
    $data_json = json_decode($json, true);
    for ($i = 0; $i < count($data_json); $i++) {
        foreach ($data_json[$i] as $key => $value) {
            if ($key == $user_name_register && $value == $user_password_register) {
                $file_path = "../Data_Users/" . $paht_user_register;
                $files = glob($paht_each_user . "/*");
                $_SESSION['file_register'] = $files;
            } else {
                $error = "Name or Password Invalid";
            }
        }
    }
}







if (!isset($_POST['open-drive']) && !isset($_POST['register'])) {
    header("Location: ../Forms/start.php?");
}
if (isset($_POST['open-drive']) || isset($_POST['register'])) {
    header("Location: ../Forms/form_main.php?files-register=" . urlencode($container_files));
}
