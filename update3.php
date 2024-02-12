<?php
include "connection.php";

// clean garbage values using -> clean input function
function clean_input($field)
{
    $field = trim($field);
    $field = stripslashes($field);
    $field = htmlspecialchars($field);
    return $field;
}

//get value url using get method 
$id = $_GET['updateid'];

//query
$query = "SELECT * FROM `full` where id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

//create list-form
$f_name      = $row['First Name'];
$fa_name     = $row['Father Name'];
$email       = $row['Email Address'];
$nic         = $row['Nic'];
$cno         = $row['Contact No'];
$designation = $row['Designation'];
$salary      = $row['Salary'];
$exp         = $row['Experience'];

// click to update button
if (isset($_POST['update'])) {
    $f_name      =  clean_input($_POST['f_name']);
    $fa_name     = clean_input($_POST['fa_name']);
    $email       = clean_input($_POST['email']);
    $nic         = clean_input($_POST['nic']);
    $cno         = clean_input($_POST['cno']);
    $designation = clean_input($_POST['designation']);
    $salary      = clean_input($_POST['salary']);
    $exp         = clean_input($_POST['exp']);

    $query = "UPDATE `full` SET `Id`='$id',`First Name`='  $f_name ',`Father Name`='$fa_name',`Email Address`='$email',`Nic`='$nic ',`Contact No`='$cno',`Designation`=' $designation',`Salary`='$salary ',`Experience`='$exp' Where id=$id";

    // query
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Update operation is successful";
        header("location:display3.php");
    } else {
        echo " update operation is not successful";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Operation</title>
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
                    <div class="logo">
                        <img src="img/logo.png" alt="">
                    </div>

                    <!-- side image -->
                    <div class="img">
                        <img src="img/rm-image.webp" class="img-fluid" alt="">
                    </div>

                    <!-- back button -->
                    <a href="Front.php" class="btn btn-warning px-4 mt-5">Back</a>
                    <!-- show data button -->
                    <a href="display3.php" class="btn btn-warning px-4 mt-5">Employee Data</a>
                </div>
                <div class="col"></div>
                <div class="col-md-6 mt-5">

                    <!-- Front-End-Form -->
                    <form method="POST" action="#" class="control-create">

                        <div class="mb-3">
                            <label class="form-label2">First Name </label>
                            <i class="fa-duotone fa-user-vneck-hair"></i>
                            <input type="text" name="f_name" placeholder="First Name" value="<?php echo $f_name; ?>" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label2">Father Name</label>
                            <input type="text" name="fa_name" placeholder="Father Name" value="<?php echo $fa_name; ?>" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label2">Nic</label>
                            <input type="number" name="nic" placeholder="422201-346733" value="<?php echo $nic; ?>" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label2">Email address</label>
                            <input type="email" name="email" placeholder="xyz@gmail.com" value=" <?php echo $email; ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>


                        <div class="mb-3">
                            <label class="form-label2">Contact Number</label>
                            <input type="number" name="cno" placeholder="0342-6458341" value="<?php echo $cno; ?>" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label2">Designation</label>
                            <input type="text" name="designation" placeholder="Front-developer" value=" <?php echo $designation; ?>" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label2">Experience</label>
                            <input type="text" name="exp" placeholder="5 years" value=" <?php echo $exp; ?>" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label2">Salary</label>
                            <input type="text" name="salary" placeholder="30,000" value="<?php echo $salary; ?>" required class="form-control">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" required class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
</body>

</html>