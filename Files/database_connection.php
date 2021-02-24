<?php

//echo "<br>Contact details<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personal";

// Establish connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection σύνδεσης
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// set charset of connection to print greek letters correctly
mysqli_set_charset($connection, "utf8");

?>
