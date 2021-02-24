<!DOCTYPE html>
<html>
<head>
    <title>Contact form</title>
    <style>
        <?php 
         include 'Style.css'; 
        ?>
    </style>
</head>
<body>
<!--- LOGO and MENY BAR -->
    <?php 
       include 'logo_navbar.php';
    ?><br>
    
<div id="main">

<?php

include("database_connection.php"); // import database connection


// // drop table in case of re-running the script
// if (!mysqli_query($connection, "DROP TABLE `messages`")){
//             die("Could not drop table: " . mysqli_error($connection));
// }
// 
// // // create table in case of re-running the script
// // // in order to avoid inserting the same data many times
// // 
// if (!mysqli_query($connection, "CREATE TABLE `messages` (
//                     `fname` varchar(100) NOT NULL,
//                     `lname` varchar(100) NOT NULL,
//                     `email` varchar(100) NOT NULL PRIMARY KEY,
//                     `message` varchar(1000) NOT NULL
//                     ) ENGINE=InnoDB DEFAULT CHARSET=utf8")){
//             die("Could not create table: " . mysqli_error($connection));
// }
// 
// // Create index on email
// $index = "CREATE INDEX index_email_msg ON `messages` (email(100));";
// 
// if (!mysqli_query($connection, $index)) {
//     die('Could not create index');
// };


// create query to upload the submitted data to the database
$sql = "INSERT INTO `messages` (`fname`, `lname`, `email`, `message`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."', '".$_POST['message']."');";

//perform a query
$result = mysqli_query($connection, $sql);

if ($result) {
    //print results / rows as table
    echo "<h4 style= 'color: purple'>Dear ".$_POST['fname'].", thank you very much for your message!</h4><br>";
    echo "<h4>We will come back to you as soon as possible.";
    echo "<h4>Anna, Leonidas";
};
    
//close connection
mysqli_close($connection);
?>
    
</div> 
</body>
</html>
    
    
    
    
    
    
    
    
    
    
