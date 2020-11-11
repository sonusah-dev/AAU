<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM placement WHERE id = $id")) {
    header("location:../../showplacementdetails.php?success=ok");
} else {
    // echo mysqli_error($conn);
    header("location:../../showplacementdetails.php?success=fail");
}
