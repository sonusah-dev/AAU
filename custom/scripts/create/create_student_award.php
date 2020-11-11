<?php

session_start();

include("../connection.php");

$student_name = $_POST['student_name'];
$detail = $_POST['detail'];


$query = "INSERT INTO student_award (student_name,detail)
            VALUES('$student_name','$detail')";

if (mysqli_query($conn, $query)) {
    header('location:../../addawardstohonours.php?success=ok');
} else {
    echo mysqli_error($conn);
    // header('location:../../addawardstohonours.php?fail=ok');
}
