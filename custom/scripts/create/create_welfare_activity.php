<?php

session_start();

include('../connection.php');

$activity = $_POST['activity'];
$activity_year = $_POST['activity_year'];
$detail = $_POST['details'];


$query = "INSERT INTO welfare_activity (activity,activity_year,details)
            VALUES('$activity','$activity_year','$detail')";

if (mysqli_query($conn, $query)) {
    header('location:../../addwelfareactivities.php?success=ok');
} else {
    echo mysqli_error($conn);
    // header('location:../../addwelfareactivities.php?fail=ok');
}
