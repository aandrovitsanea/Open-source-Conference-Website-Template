<?php
echo "<br>Contact details<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personal";

echo "<br>Establishing connection<br>";
// Δημιουργία σύνδεσης
$conn = mysqli_connect($servername, $username, $password, $dbname);
