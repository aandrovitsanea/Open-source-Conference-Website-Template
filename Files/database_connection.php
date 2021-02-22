<?php

//echo "<br>Contact details<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personal";

// Δημιουργία σύνδεσης
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Έλεγχος σύνδεσης
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

//ορισμός charset της σύνδεσης ώστε να παρουσιάζονται τα ελληνικά σωστά
mysqli_set_charset($connection, "utf8");

?>
