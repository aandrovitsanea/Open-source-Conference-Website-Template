<?php

        include("database_connection.php"); // import database connection
        
        
        $password = mysqli_query($connection, "SELECT `password` FROM `registration` WHERE `email` = '".$_POST['email']."';"); // extract the hash saved as password in the database

        $row = mysqli_fetch_assoc($password); // fetch the result of the query

        // check if I get a result (not null) and the given hash created from the posted password matches the hash stored in the database
        
        if($row != null && password_verify($_POST['password'], $row['password'])){
            session_start(); // start session
            $_SESSION["email"] = $_POST['email']; // store email to session; use as marker to check if user is logged in 
            header("location:Program.php"); // redirect to the Program page
        }else{
            echo "<h4 style= 'color:red;';>You haven't signed up to our conference.<br><br></h4>";
            echo "<h4>Please sign up <a href='subscribe_form.php'>here</a>.</h4>";
        }
        
        //κλείσιμο σύνδεσης
        mysqli_close($connection);

        ?> 
        
<!DOCTYPE html>
<html>
<head>

<title>Program</title>
    <style>
        <?php 
         include 'logo_navbar.php';
        ?>
    </style>
   
</head>
<body>
    
    <div id="main">

        
        
    </div>
  </body>
</html>
