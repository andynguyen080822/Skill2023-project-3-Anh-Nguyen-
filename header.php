<?php
session_start();

// CONNECT TO THE DATABASE
$conn = mysqli_connect("localhost", "root", "", "id20758508_adventures");
if ($conn ===false) {
    die("ERROR: Could not connect. ". mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="utility.js"> </script>
    <title>Halifax Canoe and Kayak</title>
    
</head>
<body>
        <header id="topBanner">
             <a class="middleText"> Halifax Canoe and Kayak </a>
             <img class="leftSide" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" height="40px" alt="menu icon">
             <img class="rightSide" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png" height="40px" alt="company logo">
        </header>
