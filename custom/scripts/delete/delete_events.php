<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM events WHERE id = $id")) {
    header("location:../../showevents.php?success=ok");
} else {
    // echo mysqli_error($conn);
    header("location:../../showevents.php?success=fail");
}
