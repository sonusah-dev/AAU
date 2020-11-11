<?php

session_start();

include("../connection.php");

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    $department = $_POST['department'];
    $address = $_POST['address'];
    $registration = $_POST['registration'];
    $addmission_year = $_POST['addmission_year'];
    $degree = $_POST['degree'];
    $current_year = $_POST['current_year'];

    $query = "INSERT INTO students (name,dob,gender,category,department,address,registration_no,addmission_year,degree, current_year)
            VALUES('$name','$dob','$gender','$category','$department','$address','$registration','$addmission_year','$degree', '$current_year')";

    if (mysqli_query($conn, $query)) {
        header('location:../../addstudents.php?success=ok');
    } else {
        // echo mysqli_error($conn);
        header('location:../../addstudents.php?fail=ok');
    }
} else {
    header('location:../../adminlogin.php');
}
