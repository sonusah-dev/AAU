<?php

session_start();

include("../connection.php");

$book_name = $_POST['book_name'];
$book_type = $_POST['book_type'];
$quantity = $_POST['quantity'];
$procurement = $_POST['procurement_year'];

$query = "INSERT INTO books (book_name,book_type,quantity,procurement_year)
            VALUES('$book_name','$book_type','$quantity','$procurement')";

if (mysqli_query($conn, $query)) {
    header('location:../../addbooks.php?success=ok');
} else {
    echo mysqli_error($conn);
    // header('location:../../addbooks.php?fail=ok');
}
