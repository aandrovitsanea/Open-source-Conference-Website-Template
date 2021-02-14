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
            <li><a href="InfoPage.php">Subscribe</a></li>
        </ul>
    </div>
    <br>
    <div id="main">
<!----------------------------------- LOCATION & INSTRUCTIONS -------------------------------------------->
        <h2>Where To Find Us: </h2>
        <p>
            <b>The International Conference on Web Technologies</b> is taking place at <i>Odyssea Androutsou 3, Marousi, Athens</i>
        </p>
        <h3>Instructions: </h3>
        <p>
            As seen in the map below, <i>Odyssea Androutsou 3</i> is a 2-minute walk from the nearest <br> metro-station; <a href="https://en.wikipedia.org/wiki/Marousi_metro_station" style="text-decoration:none;color:blue;">Marousi</a>
        </p>
<!----------------------- EMBED GOOGLE MAP FROM: https://www.embedgooglemap.net/ ------------------------->
        <div id="map">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="350" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=odyssea%20androutsou%203,%20marousi&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://soap2day-to.com">soap2day</a><br><style>.mapouter{position:relative;text-align:right;height:350px;width:350px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:350px;}</style></div></div>
        </div>
<!----------------------------------- MORE CONFERENCES --------------------------------------------------->
        <h3>More Conferences Like ours: </h3>
        <h4 style="text-align:center;">JavaScript World Conference by Frontend Love</h4>
        <?php 
            echo "<a href='https://frontenddeveloperlove.com/'><img class='MoreConf' src='https://static.agilitycms.com/js-world.jpg'></a>"; 
        ?><br>
        <p>
            <b>Location:</b> All Virtual<br><br>
            <b>Dates:</b> February 22-26th, 2021<br><br>
            <b>Who:</b> JavaScript Frontend Developer Leaders from around the world.<br><br>
            <b>What:</b> 100+Talks, 20 Topics, Panel Discussions, In-depth Interviews & Updates from Creators of Libraries & Authors. 
            50,000 JavaScript Enthusiasts + a full week of content to help you level-up as a Frontend JavaScript Developer.
        </p>
        <h4 style="text-align:center;">React Summit – The Biggest React Conference Online</h4>
        <?php 
            echo "<a href='https://remote.reactsummit.com/'><img class='MoreConf' src='https://static.agilitycms.com/react-summit.jpg'></a>"; 
        ?><br>
        <p>
            <b>Location:</b> Online<br><br>
            <b>Dates:</b> April 14-16, 2021<br><br>
            <b>What about:</b> all things React<br><br>
            <b>Who:</b> international Front-end and Full-stack engineers in the cloud.<br><br>
            <b>Why:</b> To help you stay up-to-date on the latest React tech. 
            Next to the main conference talks with React pros and hands-on workshops, be prepared for awesome MCs and a number of virtual networking rooms focusing on multiple tech topics, 
            interactive entertainment, and engaging challenges for all participants.
        </p>
    </div>
</body>
</html>
