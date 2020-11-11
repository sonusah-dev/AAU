<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM users WHERE id = $id")) {
    header("location:../../showuserdetails.php?success=ok");
} else {
    echo mysqli_error($conn);
    header("location:../../showuserdetails.php?success=fail");
}
