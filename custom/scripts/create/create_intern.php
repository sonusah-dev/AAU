<?php

session_start();

include("../connection.php");

$name = $_POST['name'];
$type = $_POST['type'];
$duration = $_POST['duration'];
$remark = $_POST['remark'];

$query = "INSERT INTO internship (intern_name,intern_type,duration,remark)
            VALUES('$name','$type','$duration','$remark')";

if (mysqli_query($conn, $query)) {
    header('location:../../addintern.php?success=ok');
} else {
    echo mysqli_error($conn);
    // header('location:../../addintern.php?fail=ok');
}
