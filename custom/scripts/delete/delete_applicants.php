<?php

session_start();
include("../connection.php");
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM applicants WHERE id = $id")) {
    header("location:../../showseekingapplicants.php?successs=ok");
} else {
    // echo mysqli_error($conn);
    header("location:../../showseekingapplicants.php?successs=fail");
}
