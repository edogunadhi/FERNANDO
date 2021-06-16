<?php 

$serverName = "localhost";
$dBUsername = "wonosari_dyavas21";
$dBPassword = "cvctemplarz21";
$dBName = "wonosari_phpproject01";


// $serverName = "localhost";
// $dBUsername = "root";
// $dBPassword = "";
// $dBName = "phpproject01";


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
}