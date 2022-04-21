<?php
session_start();
$paht_each_user = $_SESSION['paht_each_user'];
$error = "";
if (isset($_POST['uplode-file']) && ($_FILES['file']['size'] <= 3000000)) {
    // Move File to Correct Address
    $name_file = $_POST['file-name'];
    $path_info_extension = pathinfo($_FILES['file']['name']);
    $extension = $path_info_extension['extension'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    move_uploaded_file($tmp_name, $paht_each_user . "/" . $name_file . "." . $extension);
    // Creat Directory in Parent Directory
    $name_directory = $_POST['directory-name'];
    $path_directory = $paht_each_user . "/" . $name_directory;
    if (!is_dir($path_directory)) {
        mkdir($path_directory);
    }
}else{
    $error = "File Size is to Large";
}
// Send Data for Show in Files Table
$files = glob($paht_each_user . "/*");
$container_file_name = serialize($files);
if (isset($_SESSION['file_register'])) {
    $file_register = serialize($_SESSION['file_register']);
}

// Send Data for Select Folder
$path_file = $paht_each_user . "/" . $name_file . "." . $extension;
foreach ($files as $key => $value) {
    $folder_name = pathinfo($value, PATHINFO_BASENAME);
    if ($_POST['select-folder'] == $folder_name && is_dir($value)) {
        rename($path_file, $paht_each_user . "/" . $folder_name . "/" . $name_file . "." . $extension);
    }
}
// Delete Files or Folders ---- start
// Function for Delete Folder
function delete_directory($directory)
{
    $files = glob($directory . '/*');
    foreach ($files as $path) {
        is_file($path) && unlink($path);
        is_dir($path)  && rmdir($path);
    }
}
// ------------------------

foreach ($files as $k => $val) {
    $name = pathinfo($val, PATHINFO_BASENAME);
    $ext = pathinfo($val,PATHINFO_EXTENSION);
    // Delete File or Folder -------------
    if (isset($_POST['options-file'])){
        $condition = $_POST['select'];
        if ($_POST['options-file'] == 'delete' && $name == $condition) {
            if (is_dir($val)) {
                delete_directory($val);
                rmdir($val);
            }
            elseif(!is_dir($val)){
                unlink($val);
            }
        }
        // Rename File or Folder -------------
        elseif ($_POST['options-file'] == 'rename' && $name == $condition) {
            $rename = $_POST['rename-file'];
            if (is_dir($val)) {
                rename($val,$paht_each_user.'/'.$rename);
            }
            elseif (!is_dir($val)) {
                rename($val,$paht_each_user.'/'.$rename.'.'.$ext);
            }
        }
    }
}
$container = $_POST['select-folder-2'];
foreach ($files as $key => $value_dir) {
    if ($container == $value_dir ) {
        $result = serialize(glob($value_dir."/*"));
    }
        
}

header("Location: ../Forms/form_main.php?files_name=" . urlencode($container_file_name)."&file_register=".urlencode($file_register)."&error-size=$error"."&result=".urlencode($result));

// print_r(pathinfo("back.jpg"));