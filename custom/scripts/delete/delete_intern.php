<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM internship WHERE id = $id")) {
    header("location:../../showfellowshipdetails.php?success=ok");
} else {
    // echo mysqli_error($conn);
    header("location:../../showfellowshipdetails.php?success=fail");
}
