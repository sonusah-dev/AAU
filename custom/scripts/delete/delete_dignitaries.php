<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM dignitaries WHERE id = $id")) {
    header("location:../../showdignitaries.php?success=ok");
} else {
    // echo mysqli_error($conn);
    header("location:../../showdignitaries.php?sucess=fail");
}
