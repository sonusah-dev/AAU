<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM popular_publication WHERE id = $id")) {
    header("location:../../showpopularsessions.php?success=ok");
} else {
    // echo mysqli_error($conn);
    header("location:../../showpopularsessions.php?success=fail");
}
