<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM welfare_activity WHERE id = $id")) {
    header("location:../../showwelfareactivitiesdetails.php?success=ok");
} else {
    // echo mysqli_error($conn);
    header("location:../../showwelfareactivitiesdetails.php?success=fail");
}
