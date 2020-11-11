<?php

session_start();

include("../connection.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$type = $_POST['type'];
$email = $_POST['email'];
$password = $_POST['password'];


$query = "INSERT INTO users (first_name,last_name,dob,user_type,email,password)
            VALUES('$first_name','$last_name','$dob','$type','$email','$password')";

if (mysqli_query($conn, $query)) {
    header('location:../../addusers.php?success=ok');
} else {
    // echo mysqli_error($conn);
    header('location:../../addusers.php?fail=ok');
}
