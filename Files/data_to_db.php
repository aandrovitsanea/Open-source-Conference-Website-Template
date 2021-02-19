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


// drop table in case of re-running the script
if (!mysqli_query($conn, "DROP TABLE `conference_db`")){
            echo "Error: " . mysqli_error($conn);
}
// create table in case of re-running the script
// in order to avoid inserting the same data many times
if (!mysqli_query($conn, "CREATE TABLE `conference_db` (
                    `flname` varchar(100) NOT NULL,
                    `lname` varchar(100) NOT NULL,
                    `dob` DATE NOT NULL,
                    `gender` varchar(100) NOT NULL,
                    `country` varchar(100) NOT NULL,
                    `email` varchar(100) NOT NULL
                    `telephone` INT(20) NOT NULL,
                    `password` varchar(100) NOT NULL,
                    `consent` char(2) NOT NULL
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8")){
            echo "Create Error: " . mysqli_error($conn);
}


//Δημιουργία ερωτήματος
$sql = "INSERT INTO `me`(`flname`, `lname`, `dob`, `gender`, `country`, `email`, `telephone`, `password`,`consent`) VALUES
('".$_POST['flname']."','"$_POST['lname']."','"$_POST['dob']."','"$_POST['gender']."',"$_POST['country'].",'"$_POST['email']."','"$_POST['telephone']."','"$_POST['password']."','"$_POST['consent']."');";


//εκτέλεση ερωτήματος στη βάση
$result = mysqli_query($conn, $sql);

//έλεγχος αποτελεσμάτων
if ($result) {
    //Εμφάνιση αποτελεσμάτων σε μορφή πίνακα
    echo "<br>αποθηκευση οκ<br>";
}

//κλείσιμο σύνδεσης
mysqli_close($conn);
?>
