<?php

session_start();

include("../connection.php");

$name = $_POST['name'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$qualification = $_POST['qualification'];
$specialization = $_POST['specialization'];

$query = "INSERT INTO faculty (faculty_name,faculty_address,dob,qualification,specialization)
            VALUES('$name','$address','$dob','$qualification','$specialization')";

if (mysqli_query($conn, $query)) {
    header('location:../../addfaculty.php?success=ok');
} else {
    echo mysqli_error($conn);
    // header('location:../../addfaculty.php?fail=ok');
}
