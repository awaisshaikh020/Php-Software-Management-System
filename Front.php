<?php

// clean garbage values using -> clean input function

function clean_input($field)
{
    $field = trim($field);
    $field = stripcslashes($field);
    $field = htmlspecialchars($field);
    return $field;
}

// front-login-form
if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "front@gmail.com" && $password == "123") {
        header("Location: display1.php");
    } else {
        echo " <script> alert('your email & password wrong  !!!  please Try again');</script>";
    }
}

// back-login-form
if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "back@gmail.com" && $password == "1234") {
        header("Location: display2.php");
    } else {
        echo " <script> alert('your email & password wrong  !!!  please Try again');</script>";
    }
}


// full-login-form
if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "full@gmail.com" && $password == "12345") {
        header("Location: display3.php");
    } else {
        echo " <script> alert('your email & password wrong  !!!  please Try again');</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front page</title>
    <!-- Bootstrap 5 css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- css link -->
    <link rel="stylesheet" href="style.css">

</head>

<body">

    <!-- top header Section -->
    <section class="top-header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="logo">
                        <img src="img/logo.png" alt="">
                    </div>
                    <div class="main-heading py-5 text-center">
                        <h1><span>WELCOME TO OUR SOFTWARE HOUSE !</span></h1>
                        <p>
                            I'm your go-to developer for all your web development needs. With expertise in front-end, back-end, and full stack development, I offer a comprehensive range of services. Whether you require a visually stunning user interface, a robust back-end system, or a complete end-to-end solution, I have the skills and experience to bring your project to life. My goal is to create seamless and efficient web applications that exceed your expectations.</p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4 g-3">

                    <!-- Services -->
                    <div class="card">
                        <img src="img/front-end.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Front End Developer</h5>
                            <p class="card-text">Html5 | Css3 | Bottstrap5 | Javascript | React Js</p>
                            <p>Create Static Websites</p>

                            <!-- button -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                Join Now
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fs-1" id="staticBackdropLabel1">FRONT END PORTAL</h5>
                                            <!-- spinner -->
                                            <div class="spinner-border text-primary mx-3" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <!-- Entry-form 1 -->
                                            <form method="POST" action="#" class="control">
                                                <div class="mb-3">
                                                    <label for="exampleInput$email" class="form-label">Email address</label>
                                                    <input type="email" name="email" placeholder="xyz@gmail.com" required class="form-control" id="exampleInput$email" aria-describedby="emailHelp">
                                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label">Password</label>
                                                    <input type="password" name="password" placeholder="password" required class="form-control">
                                                </div>

                                                <button type="submit" name="Login" class="btn btn-primary">Login</button>
                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 g-3">
                    <div class="card">
                        <img src="img/back-end.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Back End Developer</h5>
                            <p class="card-text">Php | Laravel | Python | Ruby</p>
                            <p>Create Dynamic Websites</p>

                            <!-- button -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                Join Now
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fs-1" id="staticBackdropLabel2">BACK END PORTAL</h5>
                                            <!-- spinner -->
                                            <div class="spinner-border text-primary mx-3" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <!-- Entry-form 2-->
                                            <form method="POST" action="#" class="control">
                                                <div class="mb-3">
                                                    <label for="exampleInput$email" class="form-label">Email address</label>
                                                    <input type="email" name="email" placeholder="xyz@gmail.com" required class="form-control" id="exampleInput$email" aria-describedby="emailHelp">
                                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label">Password</label>
                                                    <input type="password" name="password" placeholder="password" required class="form-control">
                                                </div>

                                                <button type="submit" name="Login" class="btn btn-primary">Login</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 g-3">
                    <div class="card">
                        <img src="img/full stack.avif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Full Stack Developer</h5>
                            <p class="card-text">Html5 | Css3 | Javascript | React Js | Php | Laravel </p>
                            <p>Create Static + Dynamic Websites</p>

                            <!-- button -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                                Join Now
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fs-1" id="staticBackdropLabel3">FULL STACK PORTAL</h5>
                                            <!-- spinner -->
                                            <div class="spinner-border text-primary mx-3" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <!-- Entry-form 3-->
                                            <form method="POST" action="#" class="control">
                                                <div class="mb-3">
                                                    <label for="exampleInput$email" class="form-label">Email address</label>
                                                    <input type="email" name="email" placeholder="xyz@gmail.com" required class="form-control" id="exampleInput$email" aria-describedby="emailHelp">
                                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label">Password</label>
                                                    <input type="password" name="password" placeholder="password" required class="form-control">
                                                </div>

                                                <button type="submit" name="Login" class="btn btn-primary">Login</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap 5 js link -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    </body>

</html>