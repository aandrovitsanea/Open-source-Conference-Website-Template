<!DOCTYPE html>
<html>
<head>
<metacharset="utf-8">
    <style>
        <?php 
         include 'Style.css'; 
        ?>
    </style>
</head>
<body>

<!-- LOGO --->
    <?php 
        echo "<a href='index.php'>
                <img id='logo' src='img/logo.png'>
              </a>";  
    ?><br>
<!--- MENU BAR --->
    <div id="menu">
        <ul id="NavBar">
            <li><a href="index.php">Home</a></li>
            <li><a href="InfoPage.php">About</a></li>
            <li><div href="LocationPage.php" class="dropdown">
                        <button class="dropbtn">Location 
                        <i class="fa fa-caret-down"></i>
                        </button>
                    <div class="dropdown-content">
                        <a href="#loc">Venue</a>
                        <a href="#stay">Accommodation</a>
                        <a href="#guide">City guide</a>
                        <a href="#other_conf">More conferences</a>
                    </div></li>
            <li><a href="JuryPage.php">Jury</a></li>
            <li><a href="Program.php">Program</a></li>
            <li><a href="subscribe_form.php">Subscribe</a></li>
            <li><a href="contact_form.php">Contact us</a></li>
        </ul>
    </div>
    <br>
</html>
    
