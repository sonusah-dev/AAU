<?php

session_start();

include("../connection.php");

$title = $_POST['title'];
$author = $_POST['author'];
$publication_year = $_POST['publication_year'];

$query = "INSERT INTO popular_publication(title,author,publication_year)
            VALUES('$title','$author','$publication_year')";

if (mysqli_query($conn, $query)) {
    header('location:../../addpopularsinsession.php?success=ok');
} else {
    // echo mysqli_error($conn);
    header('location:../../addpopularsinsession.php?fail=ok');
}
