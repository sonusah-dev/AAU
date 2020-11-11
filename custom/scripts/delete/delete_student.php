<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM students WHERE id = $id")) {
    header("location:../../showstudents.php?success=ok");
} else {
    echo mysqli_error($conn);
    header("location:../../showstudents.php?success=fail");
}
