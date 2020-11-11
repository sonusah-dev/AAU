<?php

session_start();

include('../connection.php');

$name = $_POST['name'];
$address = $_POST['address'];


$query = "INSERT INTO dignitaries (name,address)
            VALUES('$name','$address')";

if (mysqli_query($conn, $query)) {
    header('location:../../adddignitaries.php?success=ok');
} else {
    header('location:../../adddignitaries.php?fail=ok');
}
