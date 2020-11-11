<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM books WHERE id = $id")) {
    header("location:../../showbooksdetails.php?success=ok");
} else {
    // echo mysqli_error($conn);
    header("location:../../showbooksdetails.php?success=fail");
}
