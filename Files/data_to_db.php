<?php

//echo "<br>Contact details<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personal";

echo "<br>Establishing connection<br>";
// Δημιουργία σύνδεσης
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Έλεγχος σύνδεσης
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//ορισμός charset της σύνδεσης ώστε να παρουσιάζονται τα ελληνικά σωστά
mysqli_set_charset($conn, "utf8");

// // drop table in case of re-running the script
// if (!mysqli_query($conn, "DROP TABLE `conference_db`")){
//             echo "Error: " . mysqli_error($conn);
// }
// 
// echo "<br><br>";
// echo "Create new table";
// echo "<br><br>";
// // create table in case of re-running the script
// // in order to avoid inserting the same data many times
// 
if (mysqli_query($conn, "CREATE TABLE `conference_db` (
                    `fname` varchar(100) NOT NULL,
                    `lname` varchar(100) NOT NULL,
                    `dob` DATE NOT NULL,
                    `gender` varchar(100) NOT NULL,
                    `country` varchar(100) NOT NULL,
                    `email` varchar(100) NOT NULL,
                    `telephone` varchar(20) NOT NULL,
                    `password` varchar(100) NOT NULL
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8")){
            echo "Create Error: " . mysqli_error($conn);
}

echo "Query";
echo "<br><br>";
//Δημιουργία ερωτήματος

//$sql = "SELECT * FROM `conference_db`;";
$sql = "INSERT INTO `conference_db` (`fname`, `lname`, `dob`, `gender`, `country`, `email`, `telephone`, `password`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['dob']."', '".$_POST['gender']."', '".$_POST['country']."', '".$_POST['email']."', '".$_POST['telephone']."', '".$_POST['password']."');";

//$sql = "INSERT INTO `conference_db` (`fname`, `lname`, `dob`, `gender`, `country`, `email`, `telephone`, `password`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['dob']."', '".$_POST['gender']."', 'Germany', '".$_POST['email']."', '".$_POST['telephone']."', '".$_POST['password']."');";

//εκτέλεση ερωτήματος στη βάση
$result = mysqli_query($conn, $sql);

//έλεγχος αποτελεσμάτων
if ($result) {
    //Εμφάνιση αποτελεσμάτων σε μορφή πίνακα
    echo "<br>Thank you very much for subscribing to our conference!<br>";
   };
   
echo "<br><br>";
echo "These are your main data";
echo "<br><br>";

echo "<table style='border:1px solid black'>";

$sql2 = "SELECT `fname`, `lname`, `dob`, `email` FROM `conference_db` WHERE `email` = '".$_POST['email']."';";

//εκτέλεση ερωτήματος στη βάση
$result2 = mysqli_query($conn, $sql2);

echo "<tr><th>First name</th><th>Last name</th><th>Date of Birth</th><th>Email</th></tr>";
    // Εμφάνιση αποτελεσμάτων στις γραμμές του πίνακα
    while($row = mysqli_fetch_assoc($result2)) {
    echo "<tr><td>".$row['fname']."</td>".
         "<td>".$row['lname']."</td>".
         "<td>".$row['dob']."</td>".
         "<td>".$row['email']."</td>.</tr>";
    }
echo "</table>" ;

//κλείσιμο σύνδεσης
mysqli_close($conn);
?>
