<!DOCTYPE html>
<html>
<head>
    <title>Registration form</title>
    <style>
        <?php 
         include 'Style.css'; 
        ?>
    </style>
</head>
<body>
<!------------------------------------------ LOGO and MENY BAR -------------------------------------------------------->
    <?php 
       include 'logo_navbar.php';
    ?><br>
<!-------------------------------------- ENLARGING IMAGE ------------------------------------------------->
<div id="main">

<?php

//echo "<br>Contact details<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personal";
/*
echo "<br>Establishing connection<br>";
echo "<br>=======================<br>";
echo "<br>";*/
// Δημιουργία σύνδεσης
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Έλεγχος σύνδεσης
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

//ορισμός charset της σύνδεσης ώστε να παρουσιάζονται τα ελληνικά σωστά
mysqli_set_charset($connection, "utf8");

/*
// drop table in case of re-running the script
if (!mysqli_query($connection, "DROP TABLE `conference_db`")){
            die("Could not drop table: " . mysqli_error($connection));
}


// // create table in case of re-running the script
// // in order to avoid inserting the same data many times
// 
if (!mysqli_query($connection, "CREATE TABLE `conference_db` (
                    `fname` varchar(100) NOT NULL,
                    `lname` varchar(100) NOT NULL,
                    `dob` DATE NOT NULL,
                    `gender` varchar(20) NOT NULL,
                    `country` varchar(100) NOT NULL,
                    `email` varchar(100) NOT NULL PRIMARY KEY,
                    `telephone` varchar(10) NOT NULL,
                    `username` varchar(8) NOT NULL,
                    `password` varchar(60) NOT NULL,
                    `consent` varchar(3)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8")){
            die("Could not create table: " . mysqli_error($connection));
}


// Create index on email
$index = "CREATE INDEX index_email ON `conference_db` (email(100));;";
                
if (!mysqli_query($connection, $index)) {
    die('Could not create index');
}*/


// Check if the email exists already in the database

$check_email = mysqli_query($connection, "SELECT COUNT(1) FROM `conference_db` WHERE `email` = '".$_POST['email']."';");

if(!$check_email) {
    die('Could not get email');
}

$row = mysqli_fetch_assoc($check_email);
if($row == Null) {
    die('mysqli_fetch_assoc error');

}

if($row["COUNT(1)"] == 1){
        echo "<h4 style= 'color:red;';>You have already and account under this email!</h4>";
}else{
    // use password_hash function to create a hash for the password the user provided
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT, []);
    
    // create query to upload the submitted data to the database
    $sql = "INSERT INTO `conference_db` (`fname`, `lname`, `dob`, `gender`, `country`, `email`, `telephone`, `username`, `password`,`consent`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['dob']."', '".$_POST['gender']."', '".$_POST['country']."', '".$_POST['email']."', '".$_POST['telephone']."', '".$_POST['username']."','".$pass."','".$_POST['consent']."');";

    //εκτέλεση ερωτήματος στη βάση
    $result = mysqli_query($connection, $sql);

    //έλεγχος αποτελεσμάτων
    if ($result) {
        //Εμφάνιση αποτελεσμάτων σε μορφή πίνακα
        echo "<br><h4 style= 'color:magenta;';>Thank you very much for subscribing to our conference!</h4><br>";
    };
    
    echo "<br><br>";
    echo "<p style='text-align: center;'>These are your key data</p>";
    echo "<br><br>";

    echo "<table style='border:1px solid black; border-collapse: collapse; width:70%'>";
    
    $sql2 = "SELECT `fname`, `lname`, `dob`, `email`, `username` FROM `conference_db` WHERE `email` = '".$_POST['email']."';";

    //εκτέλεση ερωτήματος στη βάση
    $result2 = mysqli_query($connection, $sql2);

    echo "<tr style='border:1px solid black; border-collapse: collapse;'><th>First name</th><th>Last name</th><th>Date of Birth</th><th>Email</th><th>Username</th></tr>";
        // Εμφάνιση αποτελεσμάτων στις γραμμές του πίνακα
        while($row = mysqli_fetch_assoc($result2)) {
        echo "<tr><td>".$row['fname']."</td>".
            "<td>".$row['lname']."</td>".
            "<td>".$row['dob']."</td>".
            "<td>".$row['email']."</td>".            
            "<td>".$row['username']."</td>";
        };
    echo "</table>" ;
    
    echo "<br><br><br><br>";

};

//κλείσιμο σύνδεσης
mysqli_close($connection);
?>

</div> 
</body>
</html>
