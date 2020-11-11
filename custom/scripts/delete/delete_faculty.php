<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM faculty WHERE id = $id")) {
    header("location:../../showfaculty.php?success=ok");
} else {
    // echo mysqli_error($conn);
    header("location:../../showfaculty.php?success=fail");
}
