<?php 
// (Header page including connection to the database)
include "header.php";

// RETRIVE DATA FROM THE FORM
$heading = $_POST['heading'];
$tripDate = $_POST['tripDate'];
$duration = $_POST['duration'];
$summary = $_POST['summary'];
$image = $_POST['image'];

// FINETUNE THE INPUTED TEXT
$heading = preg_replace('/[^a-zA-Z0-9\s]/', '', $heading);
$duration = preg_replace('/[^a-zA-Z0-9\s]/', '', $duration);
$summary = preg_replace('/[^a-zA-Z0-9\s]/', '', $summary);

?> 
<h1> Admin - Confirm </h1>

<?php
// ADD INFO TO THE DATABASE
$sql = "INSERT INTO adventures (heading, tripDate, duration, summary, image)
        VALUES ('$heading', '$tripDate', '$duration', '$summary', '$image')";

if (mysqli_query($conn, $sql)) {
    echo "New record created SUCCESSFULLY <br><hr>";}
else {
    echo "ERROR: ". $sql . " " . mysqli_error($conn);
}

// PRINT OUT THE DATA THAT HAS JUST KEYED IN THE FORM
echo "HERE IS THE ADVENTURE THAT YOU HAVE JUST ADDED:". "<br>";
echo "Heading: " . $heading ." <br>";
echo "Trip date: " . $tripDate . " <br>";
echo "Duration:" .$duration . "day(s) <br>";
echo "Summary: <br>" . $summary . " <br>";
echo "Image". $image ." <br>";

// LINK TO LIST OF ADVENTURES
?>
<hr>
<h2> <a href="all-adventures.php">View all listing adventures</a> </h2>
<h5> <a href="admin-add.php">Back to Add-adventure form</a> </h5><hr>



</body>
