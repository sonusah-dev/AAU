<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM infrastructure WHERE id = $id")) {
    header("location:../../showinfrastructuredetails.php?success=ok");
} else {
    // echo mysqli_error($conn);
    header("location:../../showinfrastructuredetails.php?success=fail");
}
