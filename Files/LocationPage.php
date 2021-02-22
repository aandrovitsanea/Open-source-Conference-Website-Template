<!DOCTYPE html>
<html>
<head>
    <title>Location</title>
    <style>
        <?php 
         include 'Style.css'; 
        ?>
    </style>
</head>
<body>
<!------------------------------------------ LOGO -------------------------------------------------------->
    <?php 
        echo "<a href='index.php'>
                <img id='logo' src='img/logo.png'>
              </a>";  
    ?><br>
<!---------------------------------------- MENU BAR ------------------------------------------------------>
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
        </ul>
    </div>
    <br>
    <div id="main">
<!----------------------------------- LOCATION & INSTRUCTIONS -------------------------------------------->
                
        <h2 id="loc">Where To Find Us</h2>
        <p>
            <b>The International Conference on Web Technologies</b> is taking place in the heart of the busy city of Athens, at Syntagma Square, <i>Leoforos Vasilisis Amalias 133, Athina 105 57</i>.
        </p>
        <p>
            The venue is a 2-minute walk from the nearest metro-station; <a href="https://en.wikipedia.org/wiki/Syntagma_metro_station" style="text-decoration:none;color:blue;">Syntagma</a>.
        </p>
<!----------------------- EMBED GOOGLE MAP FROM: https://www.embedgooglemap.net/ ------------------------->
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1111.954170666153!2d23.735067268376994!3d37.97523107488494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd3edda00197%3A0xc496fdfe023ef242!2sMonument%20of%20the%20Unknown%20Soldier!5e0!3m2!1sen!2sgr!4v1614035008681!5m2!1sen!2sgr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        
<!----------------------------------- CITY GUIDE --------------------------------------------------->        
        <h2 id="stay">Where To Stay</h2>
        <p>
            There is a great variety of hotel in the city of Athens. For options 1 - 6 you can get a discount, upon mentioning of our conference. <br> <b>Hurry up and book upfront!</b>
        </p>
        
        <ol>            
            <li><a href="http://lycabettus.athenshotels.it" class="external">St. George Lycabettus Boutique Hotel</a></li>
            <li><a href="http://newhotel.athenshotels.it" class="external">New Hotel</a></li>
            <li><a href="http://royalolympichotel.athenshotels.it" class="external">Royal Olympic Hotel</a></li>
            <li><a href="http://electrapalace.athenshotels.it" class="external">Electra Palace Athens</a></li>
            <li><a href="http://semiramis.athenshotels.it" class="external">Semiramis Hotel</a></li>
            <li><a href="http://divanicaravel.athenshotels.it" class="external">Divani Caravel</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=1875127&amp;action=form_hotel_description">Sofitel Athens Airport</a></li>
            <li><a href="http://classicalkinggeorge.athenshotels.it" class="external">King George, a Luxury Collection Hotel, Athens</a></li>
            <li><a href="http://crowneplaza.athenshotels.it" class="external">Crowne Plaza Athens City Centre</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=1919048&amp;action=form_hotel_description">Hotel Grande Bretagne, a Luxury Collection Hotel, Athens</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=124988&amp;action=form_hotel_description">Athens Marriott Hotel</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=2048523&amp;action=form_hotel_description">Electra Metropolis Athens</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=124254&amp;action=form_hotel_description">Hilton Athens</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=2017185&amp;action=form_hotel_description">NJV Athens Plaza Hotel</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=2019174&amp;action=form_hotel_description">Wyndham Grand Athens</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=139223&amp;action=form_hotel_description">Athenaeum InterContinental</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=641226&amp;action=form_hotel_description">AthensWas</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=1892613&amp;action=form_hotel_description">COCO-MAT Athens BC</a></li>
            <li><a href="http://divaniacropolis.athenshotels.it" class="external">Divani Palace Acropolis</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=1847136&amp;action=form_hotel_description">Glyfada Riviera Hotel</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=1370224&amp;action=form_hotel_description">Grand Hyatt Athens</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=2019839&amp;action=form_hotel_description">Grecotel Pallas Athena</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=1899262&amp;action=form_hotel_description">Life Gallery</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=1370950&amp;action=form_hotel_description">Perianth Hotel</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=1952673&amp;action=form_hotel_description">The Pinnacle Athens</a></li>
            <li><a href="?param[lang]=en&amp;param[idmarea]=1&amp;param[loc_country]=GRC&amp;param[loc]=HIATH&amp;param[idhtl]=1951467&amp;action=form_hotel_description">Theoxenia Palace Hotel</a></li>
            <br class="clear">
        </ol> 
        
        <h2 id="guide">City guide</h2>
        <p>
            Each neighbourhood in Athens has its own unique attractions an character. Explore the cafes you can't miss in Exarchia, the vibrant nightlife in Gazi and the coolest shopping in Kokuaki. Discover your new favourite Athenian neighbourhood <a href="http://www.thisisathens.org" target="iframe">with or without guides</a>.
         
            
        </p>
        
        <br><br>
            <iframe src="http://www.wikipedia.org" name="iframe" width="500" height="400" ></iframe>
            
            <br><br>    
    
        
<!----------------------------------- MORE CONFERENCES --------------------------------------------------->
        <h2 id ="other_conf">More Conferences Like Ours</h2>
        <ul>
        <li>
        <h4 style="text-align:center;">JavaScript World Conference by Frontend Love</h4>
        </li>
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
        <li>
        <h4 style="text-align:center;">React Summit – The Biggest React Conference Online</h4>
        <br><br>
        </li>
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
        </ul>
    </div>
</body>
</html>
