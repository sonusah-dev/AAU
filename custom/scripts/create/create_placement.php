<?php

session_start();

include("../connection.php");

$name = $_POST['name'];
$placement_year = $_POST['placement_year'];
$package = $_POST['package'];
$company = $_POST['company'];
$type = $_POST['type'];
$period = $_POST['period'];

$query = "INSERT INTO placement (student_name,placement_year,package,company,industry_type,time_period)
            VALUES('$name','$placement_year','$package','$company','$type','$period')";

if (mysqli_query($conn, $query)) {
    header('location:../../addplacementdetails.php?success=ok');
} else {
    echo mysqli_error($conn);
    // header('location:../../addplacementdetails.php?fail=ok');
}
