<!DOCTYPE html>
<html>
<head>
    <title>Jury</title>
    <style>
        <?php 
         include 'Style.css'; 
        ?>
    </style>
</head>
<body>
<!------------------------------------------ LOGO and MENY BAR -------------------------------------------------------->
    <?php 
       include 'logo_navbar.php';
    ?><br>
    <div id="main">
        <h2>Get to know our jury</h2>        
<table class = "center">
  <tr>
    <th>Name</th>
    <th>Photo</th>
    <th>Position</th>
    <th>Publications</th>
  </tr>
  <br><br><br><br>
  <tr>
    <td>David Garcia</td>
    <td><?php 
        echo "<a href='index.php'>
                <img id='jury_pic' class = 'zoom_jury' src='img/David.png'>
              </a>";  
    ?></td>
    <td>Academic Assistant Professor University of California, Berkeley</td>
    <td><ul><li>Web Technologies: Interpreting Problematic Fragmentation and Artifice</li><li>Legacy and Representation: Assembling the Invader and/in Web Technologies</li><li>Composing the/a/an Reserved Disease in Web Technologies: Understatement and Advocacy</li><li>Remarking the/a/an Charming Illness in Web Technologies: Flashback and Postmodernity</li></ul></td>
  </tr>
   <br><br><br><br>
 
  <tr>
    <td>Donna Miller</td>
    <td><?php 
        echo "<a href='index.php'>
                <img id='jury_pic' class = 'zoom_jury' src='img/donna.png'>
              </a>";  
    ?></td>
    <td>Associate Chair of the Office of Investor Diversity of the University of Pireaus, Greece</td>
    <td><ul><li>Web Technologies: Calculating Frank Demolition and Semiotics</li><li>Fragmentation and Supplement: Identifying the Native and/in Web Technologies</li><li>Coding Amiable Technologies: Portmanteau and Hyperbaton in Web Technologies</li><li>Testing the/a/an Essentialist Postmodernity in Web Technologies: Symbol and Homosexuality</li></ul></td>
  </tr>
  <tr>
    <td>Michalis Pappalis</td>
    <td><?php 
        echo "<a href='index.php'>
                <img id='jury_pic' class = 'zoom_jury' src='img/Michalis.png'>
              </a>";  
    ?></td>
    <td>Associate Assistant Chancellor of the Committee on Learning Diversity</td>
    <td><ul><li>Planing Encoded Corporeality: Web Technologies and/in the Flock</li><li>Identity and Object: Supporting the Marginalized and/in Web Technologies</li><li>Concluding Convicted Withdrawal: Inversion and Synecdoche in Web Technologies</li><li>Contesting the/a/an Helpful Xenophobia in Web Technologies: Foil and Gender</li></ul></td>
  </tr>
  <tr>
    <td>Kira Johnson</td>
    <td><?php 
        echo "<a href='index.php'>
                <img id='jury_pic' class = 'zoom_jury' src='img/Kira.png'>
              </a>";  
    ?></td>
    <td>Associate Vice Chancellor of the Office of Investor Partnerships</td>
    <td><ul><li>Transgressing Gregarious Xenophobia: Web Technologies and/in the Marginalized</li><li>Artifacts and Capitalism: Dissecting the Subaltern and/in Web Technologies</li><li>Defamiliarizing Communicative Fuzziness: Asyndeton and Analogy in Web Technologies</li><li>Describing the/a/an Courageous Oppression in Web Technologies: Motif and Subjectivity</li></ul></td>
  </tr>
</table>         
        <footer>
            <p style = "font-size: 12px">Disclaimer: This site has been created in the framework of the final assignment of the undergraduate course "Web Technologies" of the Department of Informatics of the University of Pireaus. All names, titles of papers/presentation and photos are fictional, created with the tools <a href="https://www.name-generator.org.uk/">Name Generator</a>, <a href="https://www.rewordmyessay.com/essay-titles-generator/">Reword My Essay</a> and <a href="https://thispersondoesnotexist.com/">This Person Does Not Exist</a>.</p>
            <p style = "font-size: 12px">Read our <a href="terms_of_use.php">terms of use</a>.</p>
        </footer>
        
        </div>
    </body>
</html>
