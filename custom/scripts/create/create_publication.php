<?php

session_start();

include('../connection.php');

$publication_number = $_POST['publication_number'];
$author = $_POST['author'];
$publication_year = $_POST['publication_year'];
$title = $_POST['title'];
$journal_name = $_POST['journal_name'];
$journal_volume = $_POST['journal_volume'];
$journal_pages = $_POST['journal_pages'];
$doi_number = $_POST['doi_number'];
$naac_score = $_POST['naac_score'];
$impact_factor = $_POST['impact_factor'];
$department = $_POST['department'];
$kvk = $_POST['kvk'];
$research_station = $_POST['research_station'];
$isbn = $_POST['isbn'];
$editors = $_POST['editors'];
$published_type = $_POST['published_type'];
$publisher_name = $_POST['publisher_name'];
$publication_type = $_POST['publication_type'];

$query = "INSERT INTO publication (publication_number,author,publication_year,title,journal_name,journal_volume,journal_pages,doi_number,naac_score,
    impact_factor,department,kvk,research_station,isbn,editors,published_type,publisher_name,publication_type)
    VALUES('$publication_number','$author','$publication_year','$title','$journal_name','$journal_volume','$journal_pages','$doi_number','$naac_score',
    '$impact_factor','$department','$kvk','$research_station','$isbn','$editors','$published_type','$publisher_name','$publication_type')";

if (mysqli_query($conn, $query)) {
    header('location:../../addpublication.php?success=ok');
} else {
    // echo mysqli_error($conn);
    header('location:../../addpublication.php?fail=ok');
}
