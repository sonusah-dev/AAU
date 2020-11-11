<?php

session_start();

include('../connection.php');

$activity = $_POST['activity'];
$activity_year = $_POST['activity_year'];
$pages = $_POST['pages'];


$query = "INSERT INTO salient_activity (activity,activity_year,pages)
            VALUES('$activity','$activity_year','$pages')";

if (mysqli_query($conn, $query)) {
    header('location:../../addsalientactivities.php?success=ok');
} else {
    // echo mysqli_error($conn);
    header('location:../../addsalientactivities.php?fail=ok');
}
