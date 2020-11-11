<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM research WHERE id = $id")) {
    header("location:../../showresearchprojectdetails.php?success=ok");
} else {
    echo mysqli_error($conn);
    header("location:../../showresearchprojectdetails.php?success=fail");
}
