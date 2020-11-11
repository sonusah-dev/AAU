<?php

session_start();

include("../connection.php");

$title = $_POST['title'];
$objective = $_POST['objective'];
$pi = $_POST['pi'];
$co_pi = $_POST['co_pi'];
$project_detail = $_POST['project_details'];
$funding_agency = $_POST['funding_agency'];
$project_amount = $_POST['project_amount'];
$project_period = $_POST['project_period'];
$starting_date = $_POST['start_date'];
$ending_date = $_POST['end_date'];
$status = $_POST['status'];

$query = "INSERT INTO research (title,objective,pi,co_pi,project_detail,funding_agency,project_amount,project_period,starting_year,ending_date,status)
            VALUES('$title','$objective','$pi','$co_pi','$project_detail','$funding_agency','$project_amount','$project_period','$starting_date','$ending_date','$status')";

if (mysqli_query($conn, $query)) {
    header('location:../../addresearch.php?success=ok');
} else {
    echo mysqli_error($conn);
    // header('location:../../addresearch.php?fail=ok');
}
