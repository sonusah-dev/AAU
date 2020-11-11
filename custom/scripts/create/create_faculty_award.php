<?php

session_start();

include("../connection.php");

$faculty_name = $_POST['faculty_name'];
$detail = $_POST['detail'];


$query = "INSERT INTO faculty_award (faculty_name,detail)
            VALUES('$faculty_name','$detail')";

if (mysqli_query($conn, $query)) {
    header('location:../../addawardstofaculty.php?success=ok');
} else {
    echo mysqli_error($conn);
    // header('location:../../addawardstofaculty.php?fail=ok');
}
