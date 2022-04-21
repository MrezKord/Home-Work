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
    <!-- First Page (Register or Login) -->
    <div class="bg-my-color row">
        <div class="text-center pt-5 col-12">
            <h1>Hello My Friend</h1>
            <h2>Welcome to my drive <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-emoji-wink" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm1.757-.437a.5.5 0 0 1 .68.194.934.934 0 0 0 .813.493c.339 0 .645-.19.813-.493a.5.5 0 1 1 .874.486A1.934 1.934 0 0 1 10.25 7.75c-.73 0-1.356-.412-1.687-1.007a.5.5 0 0 1 .194-.68z" />
                    </svg>
                </span></h2>
        </div>
        <!-- Login Button(whit modal) -->
        <div class="col-12 d-flex justify-content-center mb-2 p-3">
            <div class="row g-5 w-25 h-75">
                <button type="button" name="login" class="btn btn-dark col-12" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Login</button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Please Enter Your Information</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="../index/index.php" method="POST">
                            <?php if (isset($_POST['error'])) {
                                $error = $_POST['error']; ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $error ?>
                                </div>
                            <?php } ?>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="first-name" class="col-form-label">Name:</label>
                                    <input type="text" name="name" class="form-control" id="first-name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="col-form-label">Email:</label>
                                    <input type="email" name="user-email" class="form-control" id="first-name">
                                </div>
                                <div class="mb-3">
                                    <label for="user_password" class="col-form-label">Password:</label>
                                    <input type="password" name="password" class="form-control" id="user_password">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="open-drive" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Register Button(whit modal) -->
        <div class="col-12 d-flex justify-content-center mb-5 p-3">
            <div class="row g-5 w-25 h-75">
                <button type="button" class="btn btn-dark col-12" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Register</button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Please Enter Your Information</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="index/index.php" method="POST">
                            <?php if (isset($_POST['error'])) {
                                $error = $_POST['error']; ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $error ?>
                                </div>
                            <?php } ?>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="first-name" class="col-form-label">Name:</label>
                                    <input type="text" name="name-register" class="form-control" id="first-name">
                                </div>
                                <div class="mb-3">
                                    <label for="user_email" class="col-form-label">Password:</label>
                                    <input type="email" name="email-register" class="form-control" id="user_password">
                                </div>
                                <div class="mb-3">
                                    <label for="user_password" class="col-form-label">Password:</label>
                                    <input type="password" name="password-register" class="form-control" id="user_password">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="register" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>