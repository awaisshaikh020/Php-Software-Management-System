<?php

include "connection.php";
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $query = "DELETE FROM `full` WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Delete operation is successful";
        header("location:display3.php");
    } else {
        echo " Delete operation is not successful";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Operation</title>
    <!-- Bootstrap 5 css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
</body>

</html>