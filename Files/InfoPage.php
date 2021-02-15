<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style>
        <?php 
         include 'Style.css'; 
        ?>
    </style>
</head>
<body>
<!------------------------------------------ LOGO -------------------------------------------------------->
    <?php 
        echo "<a href='HomePage.php'>
                <img id='logo' src='logo_bw.png'>
              </a>";  
    ?><br>
<!---------------------------------------- MENU BAR ------------------------------------------------------>
    <div id="menu">
        <ul id="NavBar">
            <li><a href="HomePage.php">Home</a></li>
            <li><a href="InfoPage.php">About</a></li>
            <li><a href="LocationPage.php">Location</a></li>
            <li><a href="JuryPage.php">Jury</a></li>
            <li><a href="Program.php">Program</a></li>
            <li><a href="subscribe_form.php">Subscribe</a></li>
        </ul>
    </div>
    <br>
    <div id="main">
        <h2>Welcome to the Information page</h2>
        
        <p>The purpose of the 1st International Conference on Web Technologies is to bring together researchers, engineers and practitioners interested in the technological advances and business applications of web-based information systems.</p>
        
        <p>The conference covers different aspects of Web Information Systems, namely Internet Technology, Web Interfaces and Applications, Society, e-Communities, e-Business, Web Intelligence and Mobile Information Systems. </p>
        
        <p>It focuses on real world applications; therefore authors should highlight the benefits of Web Information Systems and Technologies for industry and services, in addition to academic applications. Ideas on how to solve business problems using web-based information systems and technologies, will be discussed at the conference.</p>
        
    </div>
</body>
</html>
