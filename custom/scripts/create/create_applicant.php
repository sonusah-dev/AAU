<?php

session_start();

include("../connection.php");

$name = $_POST['name'];
$dob = $_POST['dob'];
$applying_year = $_POST['applying_year'];
$applied_for_degree = $_POST['applied_for_degree'];
$examination_passed = $_POST['examination_passed'];
$last_academic_percent = $_POST['last_academic_percent'];

$query = "INSERT INTO applicants (name,dob,applying_year,applied_for_degree,examinaton_passed,last_academic_percent)
            VALUES('$name','$dob','$applying_year','$applied_for_degree','$examination_passed','$last_academic_percent')";

if (mysqli_query($conn, $query)) {
    header('location:../../addapplicants.php?success=ok');
} else {
    // echo mysqli_error($conn);
    header('location:../../addapplicants.php?fail=ok');
}
