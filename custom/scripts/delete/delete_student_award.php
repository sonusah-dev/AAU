<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM student_award WHERE id = $id")) {
    header("location:../../showawardstohonours.php?success=ok");
} else {
    echo mysqli_error($conn);
    header("location:../../showawardstohonours.php?success=fail");
}
