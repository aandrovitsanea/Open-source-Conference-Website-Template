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
<!-- LOGO and MENY BAR -->
    <?php 
       include 'logo_navbar.php';
    ?><br>
    
<!-- ENLARGING IMAGE -->
<div id="main">

<?php

include("database_connection.php"); // import database connection

// Check if the email exists already in the database

$check_email = mysqli_query($connection, "SELECT COUNT(1) FROM `registration` WHERE `email` = '".$_POST['email']."';");

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
    $sql = "INSERT INTO `registration` (`fname`, `lname`, `dob`, `gender`, `country`, `email`, `telephone`, `username`, `password`,`consent`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['dob']."', '".$_POST['gender']."', '".$_POST['country']."', '".$_POST['email']."', '".$_POST['telephone']."', '".$_POST['username']."','".$pass."','".$_POST['consent']."');";

    //perform query
    $result = mysqli_query($connection, $sql);

    //check result
    if ($result) {
        echo "<br><h4 style= 'color:magenta;';>Thank you very much for subscribing to our conference!</h4><br>";
    };
    
    echo "<br><br>";
    echo "<p style='text-align: center;'>These are your key data</p>";
    echo "<br><br>";

    echo "<table style='border:1px solid black; border-collapse: collapse; width:70%'>";
    
    $sql2 = "SELECT `fname`, `lname`, `dob`, `email`, `username` FROM `registration` WHERE `email` = '".$_POST['email']."';";

    //perform a query
    $result2 = mysqli_query($connection, $sql2);

    echo "<tr style='border:1px solid black; border-collapse: collapse;'><th>First name</th><th>Last name</th><th>Date of Birth</th><th>Email</th><th>Username</th></tr>";
        // Print results / rows as table
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

//close connection
mysqli_close($connection);
?>

</div> 
</body>
</html>
