<?php

session_start();

include("../connection.php");

$name = $_POST['name'];
$description = $_POST['description'];


$query = "INSERT INTO infrastructure (grant_officer_name,description)
            VALUES('$name','$description')";

if (mysqli_query($conn, $query)) {
    header('location:../../addinfrastructuredetails.php?success=ok');
} else {
    echo mysqli_error($conn);
    // header('location:../../addinfrastructuredetails.php?fail=ok');
}
