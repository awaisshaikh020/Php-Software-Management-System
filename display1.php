<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>front end data</title>
    <!-- Bootstrap 5 css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <!-- jQuery cdn link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- jQuery app.js link -->
    <script src="app.js"></script>
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- logo -->
                    <a href="Front.php">
                        <div class="logo">
                            <img src="img/logo.png" class="img-fluid">
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mb-4 g-4 text-center justify-content-center">
                <div class="col-auto">

                    <!-- main-heading -->
                    <span class="heading">
                        <h1>FRONT END EMPLOYEE DATA 2023</h1>
                    </span>
                </div>

                <div class="col-md-2">

                    <!-- Add button -->
                    <a href="create1.php" class="btn btn-warning ">Add Employee</a>
                </div>
            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-md-6">

                    <!-- Search button -->
                    <form class="d-flex">
                        <input class="form-control me-2 justify-content-start" type="search" placeholder="search" aria-label="Search" id="search">
                        <button class="btn btn-outline-success me-2" type="submit" id="search_btn">Search</button>

                        <!-- rest-button -->
                        <a href="display1.php" class="btn btn-outline-danger">Reset</a>
                    </form>
                </div>
            </div>

            <!-- alert meeasge no record found -->
            <div class="row text-center">
                <div class="col">
                    <div class="alert alert-danger" id="noRecordFound" role="alert" style="display: none;">
                        No record found
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- table -->
                <table class="table table text-center table-hover table-bordered table-striped">
                    <thead>
                        <tr class=" text-center bg-dark text-white  bg-dark text-white">
                            <th scope="col">#ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Father Name</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Nic</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Experience</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">


                        <!-- applying php -->
                        <?php
                        include "connection.php";

                        $query = "SELECT * FROM `data` ORDER BY `First Name` ASC";

                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            $row =  mysqli_fetch_array($result);

                            while ($row =  mysqli_fetch_array($result)) {
                                // must table name
                                $id          = $row['Id'];
                                $f_name      = $row['First Name'];
                                $fa_name     = $row['Father Name'];
                                $email       = $row['Email Address'];
                                $nic         = $row['Nic'];
                                $cno         = $row['Contact No'];
                                $designation = $row['Designation'];
                                $salary      = $row['Salary'];
                                $exp         = $row['Experience'];


                                // print values & put variables

                                echo '<tr class="text-center">
                            <th scope="row">'    . $id . '</th>
                            <td>' . $f_name      . '</td>
                            <td>' . $fa_name     . '</td>
                            <td>' . $email       . '</td>
                            <td>' . $nic         . '</td>
                            <td>' . $cno         . '</td>
                            <td>' . $designation . '</td>
                            <td>' . $salary      . '</td>
                            <td>' . $exp         . '</td>
                            <td><a href="update1.php? updateid= ' . $id . '" class = "text-light btn btn-primary">Update</a></td>
                            <td><a href="delete1.php? deleteid= ' . $id . '" class = "text-light btn btn-danger">Delete</a></td>
                            </tr>';
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>