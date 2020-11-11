<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM salient_research WHERE id = $id")) {
    header("location:../../showresearchfindingdetails.php?success=ok");
} else {
    // echo mysqli_error($conn);
    header("location:../../showresearchfindingdetails.php?success=fail");
}
