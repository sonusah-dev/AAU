<?php
session_start();
include('scripts/connection.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' and password = '$password' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_array($result);
    $_SESSION['id'] = $row['id'];
    $_SESSION['first_name'] = $row['first_name'];
    $_SESSION['last_name'] = $row['last_name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_type'] = $row['user_type'];
    header('location:dashboard.php');
} else {
    header('location:../index.html');
}
