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
        echo "<img id='logo' src='https://cdn.discordapp.com/attachments/808029496614715482/808681331424755752/logo2.png'>"; 
    ?><br>
<!---------------------------------------- MENU BAR ------------------------------------------------------>
    <div id="menu">
        <ul id="NavBar">
            <li><a href="HomePage.php">Home</a></li>
            <li><a href="InfoPage.php">About</a></li>
            <li><a href="LocationPage.php">Location</a></li>
            <li><a href="JuryPage.php">Jury</a></li>
            <li><a href="InfoPage.php">Program</a></li>
            <li><a href="InfoPage.php">Subscribe</a></li>
        </ul>
    </div>
    <br>
<!-------------------------------------- ENLARGING IMAGE ------------------------------------------------->
    <?php 
        echo "<img class='infoImage' src='https://b.scdn.gr/images/sku_main_images/018315/18315466/20190426010649_technologies_kai_programmatismos_ston_pagosmio_isto.jpeg'>"; 
    ?>
<!----------------------------------------- MAIN TEXT ---------------------------------------------------->
    <div id="main">
        <h2>Welcome to the home page</h2>
        <h3>Put Simply:</h3>
        <p>
        <b>The International Conference on Web Technologies</b> is the Worlds Premier Web Development Conference of 2021. <b>The International Conference on Web Technologies</b>
        is the Largest & Most Epic JavaScript Conference and Community Event of 2021.
        Learn & Talk directly with the JavaScript Frontend Developer Leaders from around the world.<br><br>
        <b>The International Conference on Web Technologies</b> takes place Monday 10nd October to Saturday 15th October 2021. 3+ Talks, 2 Topics, Panel Discussions,
        In-depth Interviews & Updates from Creators of Libraries & Authors.<br><br>
        Friday 26th February we begin with Javascript 24 Hour Conference the Largest & Most Epic JavaScript Conference in the World.
        Join 50,000 JavaScript Enthusiasts for a full week of content to help you level-up as a Frontend JavaScript Developer.<br><br>
        </p>
<!--------------------------------------- CONTENTS LIST -------------------------------------------------->        
        <h3>Contents:</h3>
        <ul id="contents">
            <li><b>Home: </b>You are here</li><br>
            <li><b>About: </b>In depth information about the Conference</li><br>
            <li><b>Location: </b>Where will the Conference take place</li><br>
            <li><b>Jury: </b>Meet the jury of the Conference</li><br>
            <li><b>Program: </b>The Program of the Conference</li><br>
            <li><b>Subscribe: </b>Do it</li><br>
        </ul>
    </div>
</body>
</html>
    
