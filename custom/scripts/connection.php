<?php

$server = "localhost";
$user = "root";
$password = "mysql;";
$db = "agri_db";

$conn = mysqli_connect($server, $user, $password, $db);

if (!$conn) {
    die("Failed to connect with Mysql database!") . mysqli_connect_errno($conn);
}
