<?php
include "connection.php";

// clean garbage values using -> clean input function

function clean_input($field)
{
    $field = trim($field);
    $field = stripcslashes($field);
    $field = htmlspecialchars($field);
    return $field;
}

// fetch data -> html-form
if (isset($_POST['submit'])) {
    $f_name      =  clean_input($_POST['f_name']);
    $fa_name     = clean_input($_POST['fa_name']);
    $email       = clean_input($_POST['email']);
    $nic         = clean_input($_POST['nic']);
    $cno         = clean_input($_POST['cno']);
    $designation = clean_input($_POST['designation']);
    $salary      = clean_input($_POST['salary']);
    $exp         = clean_input($_POST['exp']);


    $query = "INSERT INTO `back`( `First Name`, `Father Name`, `Email Address`, `Nic`, `Contact No`, `Designation`, `Salary`, `Experience`) VALUES (' $f_name','$fa_name','$email ',' $nic','$cno ','$designation','$salary','$exp')";


    $result = mysqli_query($conn, $query);

    if ($result) {
        echo " <script> alert('Data inserted  !!!  Thank you so much') 
        window.location.href = 'display2.php'; 
        </script>";
    } else {
        echo " Data is not inserted ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>front end members</title>
    <!-- Bootstrap 5 css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- css link -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <section class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <!-- logo -->
                    <a href="Front.php">
                        <div class="logo">
                            <img src="img/logo.png" class="img-fluid">
                        </div>
                    </a>

                    <!-- side image -->
                    <div class="img">
                        <img src="img/rm-image.webp" class="img-fluid" alt="">
                    </div>

                    <!-- back button -->
                    <a href="Front.php" class="btn btn-warning px-4 mt-5">Back</a>
                    <!-- show data button -->
                    <a href="display2.php" class="btn btn-warning px-4 mt-5">Employee Data</a>
                </div>
                <div class="col"></div>
                <div class="col-md-6 mt-5">

                    <!-- Front-End-Form -->
                    <form method="POST" action="#" class="control-create">

                        <div class="mb-3">
                            <label class="form-label2">First Name </label>
                            <i class="fa-duotone fa-user-vneck-hair"></i>
                            <input type="text" name="f_name" placeholder="First Name" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label2">Father Name</label>
                            <input type="text" name="fa_name" placeholder="Father Name" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label2">Nic</label>
                            <input type="number" name="nic" placeholder="422201-346733" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label2">Email address</label>
                            <input type="email" name="email" placeholder="xyz@gmail.com" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>


                        <div class="mb-3">
                            <label class="form-label2">Contact Number</label>
                            <input type="number" name="cno" placeholder="0342-6458341" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label2">Designation</label>
                            <input type="text" name="designation" placeholder="Front-developer" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label2">Experience</label>
                            <input type="text" name="exp" placeholder="5 years" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label2">Salary</label>
                            <input type="text" name="salary" placeholder="30,000" required class="form-control">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" required class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
</body>

</html>