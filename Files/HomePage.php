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
        /*echo "<a href='HomePage.php'>
                <img id='logo' src='logo_bw.png'>
              </a>";*/  
        echo "<a href='HomePage.php'>
                <img id='logo' src='logo2.png'>
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
<!-------------------------------------- ENLARGING IMAGE ------------------------------------------------->
    <?php 
        echo "<img id='map_main' class='zoom' height='300' width='800' src='map_athens.png'>"; 
    ?>
    <div id="main">
        <h2>Welcome to our home page</h2>
        
        <p>It is our great pleasure that it has been possible for the University of Pireaus to organise the 1st international conference on Web Technologies in Athens, which is a conference on the topic of all application related to the web.</p>
        
        <p>It is more or less impossible to plan a conference in a foreign country without a local partner. For this reason, it was a special pleasure that the Institute of Information Technologies helped us with words and deeds. We are grateful to Ms. Prof. Dr.  Thekla Nefeli and Mr. Dr.  Neofytos Marinos  for this support.</p>

        <p>We would therefore like to extend a heartfelt thank you to the University of Athens and representatives of the various labs for their understanding and support, most notably Ms. Dr. Effrosyni Kontos , Ms. Dr.  Agni Pachis , Ms. Dr.  Angelina Marinos , Mr. Dr. Elias Papadopoulos , Ms. Dr.  Ismini Stavros .</p>

        <p>The goal of the conference is to bring scientists from various disciplines together for a fruitful exchange of ideas.</p>

        We wish you all an interesting, fruitful and harmonious conference in Athens.
        </p>
    </div>
</body>
</html>
    
