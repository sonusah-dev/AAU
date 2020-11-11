<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM publication WHERE id = $id")) {
    header("location:../../showpublicationdetails.php?success=ok");
} else {
    // echo mysqli_error($conn);
    header("location:../../showpublicationdetails.php?success=fail");
}
