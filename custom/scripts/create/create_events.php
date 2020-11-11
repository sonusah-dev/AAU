<?php

session_start();

include('../connection.php');

$title = $_POST['title'];
$organized_by = $_POST['organized_by'];
$starting_date = $_POST['starting_date'];
$ending_date = $_POST['ending_date'];
$sponsored_by = $_POST['sponsored_by'];
$venue = $_POST['venue'];
$level = $_POST['level'];
$event_type = $_POST['event_type'];
$event_year = $_POST['event_year'];

$query = "INSERT INTO events (title,organized_by,starting_date,ending_date,sponsored_by,venue,level,event_type,event_year)
            VALUES('$title','$organized_by','$starting_date','$ending_date','$sponsored_by','$venue','$level','$event_type','$event_year')";

if (mysqli_query($conn, $query)) {
    header('location:../../addevents.php?success=ok');
} else {
    echo mysqli_error($conn);
    // header('location:../../addevents.php?fail=ok');
}
