<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <!-- Main => Drive -->
    <!-- Navbar -->
    <div class="container-main p-5">
        <div class="items h-100 mx-5 shadow-lg rounded">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown link
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Show -->
            <section class="h-100">
                <div class="row">
                    <div class="col-12">
                        <div class="list-group control-group-list" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Home</a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
                        </div>
                    </div>
                    <!-- Section One Inputs(Files or Directory) -->
                    <div class="col-12">
                        <div class="tab-content position-relative" id="nav-tabContent">
                            <div class="tab-pane fade show active p-5 d-flex flex-row g-5 justify-content-between" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                <form class="row container" action="../index/creat.php" method="post" enctype="multipart/form-data">
                                    <?php if(isset($_GET['error-size'])  && $_GET['error-size'] !== "") { $error = $_GET['error-size'] ?>
                                    <div class="alert alert-danger col-12 mx-2" role="alert">
                                        <?php echo $error ?>
                                    </div>
                                    <?php } ?>
                                    <div class="col-6 px-2 row">
                                        <div class="mb-3 col-12">
                                            <label for="name-file" class="form-label">File Name</label>
                                            <input type="text" name="file-name" class="form-control" id="name-file">
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label for="formFile" class="form-label">Select Your File</label>
                                            <input class="form-control" name="file" type="file" id="formFile">
                                        </div>
                                        <div>
                                            <button type="submit" name="uplode-file" class="btn btn-dark">Uplode</button>
                                        </div>
                                    </div>
                                    <div class="col-6 row">
                                        <div class="col-12">
                                            <label for="name-directory" class="form-label">Directory Name</label>
                                            <input type="text" name="directory-name" class="form-control" id="name-directory">
                                        </div>
                                        <div class="col-12">
                                            <select class="form-select" name="select-folder" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <?php $Folders = unserialize($_GET['files_name']);
                                                foreach ($Folders as $key => $value) { ?>
                                                    <?php if (is_dir($value)) { ?>
                                                        <option value="<?php echo pathinfo($value, PATHINFO_BASENAME) ?>">
                                                            <?php echo pathinfo($value, PATHINFO_BASENAME) ?></option>
                                                <?php }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade size-section" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                <form class="d-flex flex-wrap flex-lg-row flex-md-column-reverse flex-sm-column-reverse g-4" action="../index/creat.php" method="post">
                                    <div class="col-lg-6 col-md-12 container p-2">
                                        <?php if (isset($_GET['files_name'])) { ?>
                                            <!-- Creat Table for Show File or Folders -->
                                            <table class="table table-dark table-hover">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Size</th>
                                                </tr>
                                                <?php
                                                $files = unserialize($_GET['files_name']); // Get File name and Folder Name
                                                if (!empty($_GET['files-register'])) {
                                                    $files = unserialize($_GET['files-register']); // Get File name and Folder Name After Register
                                                }
                                                // Creat Function for Calculate the Size of Files in Folders
                                                function get_dir_size($directory)
                                                {
                                                    $size = 0;
                                                    $files = glob($directory . '/*');
                                                    foreach ($files as $path) {
                                                        is_file($path) && $size += filesize($path);
                                                        is_dir($path)  && $size += get_dir_size($path);
                                                    }
                                                    return $size;
                                                }
                                                foreach ($files as $key => $value) {
                                                    $name = pathinfo($value, PATHINFO_BASENAME);
                                                    if (file_exists($value)) {
                                                ?>
                                                        <tr>
                                                            <td>
                                                                <input class="form-radio-input" name="select" type="radio" value="<?php echo $name ?>" id="flexCheckDefault">
                                                            </td>
                                                            <td>
                                                                <?php if (is_dir($value)) { ?>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-folder2" viewBox="0 0 16 16">
                                                                        <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5v-9zM2.5 3a.5.5 0 0 0-.5.5V6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5zM14 7H2v5.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V7z" />
                                                                    </svg>
                                                                    <span><?php echo $name ?></span>
                                                                <?php } ?>
                                                                <?php if (!is_dir($value)) { ?>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                                                                        <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z" />
                                                                    </svg>
                                                                    <span><?php echo $name ?></span>
                                                                <?php } ?>
                                                            </td>
                                                            <td>
                                                                <?php if (is_dir($value)) { ?>
                                                                    <span><?php echo get_dir_size($value) ?></span>
                                                                <?php } ?>
                                                                <?php if (!is_dir($value)) { ?>
                                                                    <span><?php echo filesize($value); ?></span>
                                                                <?php } ?>
                                                            </td>
                                                    <?php }
                                                } ?>

                                                        </tr>
                                            </table>
                                        <?php } ?>
                                    </div>
                                    <div class="container col-lg-6 col-md-12 row mb-sm-3">
                                        <div class="mb-3">
                                            <label for="rename-file" class="col-form-label">Name</label>
                                            <input type="text" name="rename-file" class="form-control" id="rename-file" placeholder="for rename">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <select class="form-select" name="select-folder-2" aria-label="Default select">
                                            <?php $Folders = unserialize($_GET['files_name']);?>
                                                <option value="<?php echo $Folders ?>" selected>Main</option>
                                                <?php foreach ($Folders as $key => $value) { ?>
                                                    <?php if (is_dir($value)) { ?>
                                                        <option value="<?php echo pathinfo($value, PATHINFO_BASENAME) ?>">
                                                            <?php echo pathinfo($value, PATHINFO_BASENAME) ?></option>
                                                <?php }
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <input type="radio" class="btn-check" name="options-file" value="delete" id="option1" autocomplete="off" checked>
                                            <label class="btn btn-secondary" for="option1">Delete</label>

                                            <input type="radio" class="btn-check" name="options-file" value="rename" id="option2" autocomplete="off">
                                            <label class="btn btn-secondary" for="option2">Rename</label>

                                            <input type="radio" class="btn-check" name="options-file" value="move" id="option4" autocomplete="off">
                                            <label class="btn btn-secondary" for="option4">Move</label>

                                            <button type="submit" class="btn btn-dark" name="select-modle">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
                            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>