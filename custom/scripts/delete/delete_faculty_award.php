<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM faculty_award WHERE id = $id")) {
    header("location:../../showawardstofaculty.php?success=ok");
} else {
    // echo mysqli_error($conn);
    header("location:../../showawardstofaculty.php?success=fail");
}
