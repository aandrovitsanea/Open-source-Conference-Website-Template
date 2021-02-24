<?php

session_start(); // start session

if(!isset($_SESSION["email"])) // if no email is stored 
{
 header("location:login.php"); // redirect to login page
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Program</title>
    <style>
        <?php 
         include 'Style.css'; 
        ?>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<!-- LOGO & MENU BAR -->
    <?php 
       include 'logo_navbar.php';
    ?><br>
    
    <div id="main">
    
     <?php    
        include("database_connection.php"); // import database connection
        
        $user_data  = mysqli_query($connection, "SELECT `gender`, `fname` , `lname` FROM `registration` WHERE `email` = '".$_SESSION["email"]."';");
        $row = mysqli_fetch_assoc($user_data);
        if ($row['gender']!= 'non_bin'){        
            echo "<h4 style='color:green'>Hello, ".$row['gender']." ".$row['lname']."!</h4>";
        }else{
            echo "<h4 style='color:blue'>Hello ".$row['fname']."!</h4>"; 
        }
        echo "<h4 style='color:#800080'>Welcome to the program of the scheduled talks.</h4>";
        
        //close connection
        mysqli_close($connection);
     ?>
     <form method="get" action="logout.php">
        <button type="submit" id="RedButton">Logout</button>
    </form>
    <br><br><br>
     
    <table class = "center" id="ProgramTable"> 
        <tr >
            <th>Day</th>
            <th>Time</th>
            <th>Speaker</th>
            <th>Title</th>
        </tr>

        <tr>
            <td>Friday, 08 - 10 - 2021</td>
            <td>9.00 am</td>
            <td>Jessica Gagliardi</td>
            <td>The changes in the web technologies</td>
        </tr>
        <tr>
            <td></td>
            <td>9.20 am</td>
            <td>Austyn Ping Reynolds</td>
            <td>How web technologies affect the mankind</td>
        </tr>
        <tr>
            <td></td>
            <td>9.50 am</td>
            <td>Jadwiga Radhika Marlowe</td>
            <td>What positive and/or negative effects have web technologies?</td>
        </tr>
        <tr>
            <td></td>
            <td>10.50 am</td>
            <td>Ligaya Winslow</td>
            <td>The causes of web technologies</td>
        </tr>
        <tr>
            <td></td>
            <td>11.20 am</td>
            <td>Archana Struna</td>
            <td>Choosing web technologies for the future</td>
        </tr>
        <tr>
            <td></td>
            <td>11.50 am</td>
            <td>Iusta Asselman</td>
            <td>Role of web technologies in world development</td>
        </tr>
        <tr>
            <td></td>
            <td>12.20 pm</td>
            <td>Efthalia Maisuradze</td>
            <td>Out of the ashes: web technologies</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:right">12.40 pm - 2.50 pm</td>
            <td colspan="2" style="text-align:center"> <strong>Lunch break</strong></td>
        </tr>
        <tr>
            <td></td>
            <td>2.30 pm</td>
            <td>Gwenda Johannessen</td>
            <td>Nowhere to hide: web technologies</td>
        </tr>
        <tr>
            <td></td>
            <td>3.00 pm</td>
            <td>Chimwala Hüseynov</td>
            <td>The role of web technologies in modern economy</td>
        </tr>


        <tr>
            <td>Saturday, 09 - 10 - 2021</td>
            <td>9.00 am</td>
            <td>Angelita Kimberley</td>
            <td>Identifying and Addressing web technologies: Reflections on and in the Extracurriculum of Writing</td></tr>
        <tr>
            <td></td>
            <td>9.20 am</td>
            <td>Quinn Egger</td>
            <td>How web technologies affect the mankind</td>
        </tr>
        <tr>
            <td></td>
            <td>9.50 am</td>
            <td>Diana Meissner</td>
            <td>New Currents in web technologies: Reflections on and of the Network</td>
        </tr>
        <tr>
            <td></td>
            <td>10.50 am</td>
            <td>Thora Fitzroy</td>
            <td>Web technologies and personal privacy</td>
        </tr>
        <tr>
            <td></td>
            <td>11.20 am</td>
            <td>Chita Wiley</td>
            <td>Cultural influence on web technologies: traditional vs modern</td>
        </tr>
        <tr>
            <td></td>
            <td>11.50 am</td>
            <td>Madelaine Dalton</td>
            <td>The inescapable effects of web technologies</td>
        </tr>
        <tr>
            <td></td>
            <td>12.20 pm</td>
            <td>Brooke Roth</td>
            <td>The experience of web technologies</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:right">12.40 pm - 2.50 pm</td>
            <td colspan="2" style="text-align:center"> <strong>Lunch break</strong> </td>
        </tr>
        <tr>
            <td></td>
            <td>2.30 pm</td>
            <td>Indy Santos</td>
            <td>Web technologies influence on the earth</td>
        </tr>
        <tr>
            <td></td>
            <td>3.00 pm</td>
            <td>Teri Troelsen</td>
            <td>Web technologies: the truth and reality</td>
        </tr>

        <tr>
            <td>Sunday, 10 - 10 - 2021</td>
            <td>9.00 am</td>
            <td>Matilde Sinclair</td>
            <td>The dark side of the web technologies</td>
        </tr>
        <tr>
            <td></td>
            <td>9.20 am</td>
            <td>Flick Meyer</td>
            <td>How web technologies affect childhood</td>
        </tr>
        <tr>
            <td></td>
            <td>9.50 am</td>
            <td>Helena Carlsen</td>
            <td>What comes with web technologies?</td>
        </tr>
        <tr>
            <td></td>
            <td>10.50 am</td>
            <td>Diamantina Travers</td>
            <td>The innovations of web technologies</td>
        </tr>
        <tr>
            <td></td>
            <td>11.20 am</td>
            <td>Ibbie Hollands</td>
            <td>Applied web technologies for the future</td>
        </tr>
        <tr>
            <td></td>
            <td>11.50 am</td>
            <td>Laney Böhme</td>
            <td>Role of web technologies in marginalizing groups</td>
        </tr>
        <tr>
            <td></td>
            <td>12.20 pm</td>
            <td>Nance Rodgers</td>
            <td>Out of the reach: web technologies</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:right">12.40 pm - 2.50 pm</td>
            <td colspan="2" style="text-align:center"> <strong>Lunch break</strong> </td>
        </tr>
        <tr>
            <td></td>
            <td>2.30 pm</td>
            <td>Blanca Skeates</td>
            <td>Nowhere to find: web technologies</td>
        </tr>
        <tr>
            <td></td>
            <td>3.00 pm</td>
            <td>Drina Berger</td>
            <td>The role of web technologies in sexism</td>
        </tr>
    </table>
    
    <footer>
        <p style = "font-size: 12px">Disclaimer: This site has been created in the framework of the final assignment of the undergraduate course "Web Technologies" of the Department of Informatics of the University of Pireaus. All names, titles of papers/presentation and photos are fictional, created with the tools <a href="https://www.name-generator.org.uk/">Name Generator</a>, <a href="https://www.rewordmyessay.com/essay-titles-generator/">Reword My Essay</a> and <a href="https://thispersondoesnotexist.com/">This Person Does Not Exist</a>.</p>
        <p style = "font-size: 12px">Read our <a href="terms_of_use.php">terms of use</a>.</p>
    </footer>
    </div>
    </body>
</html>
