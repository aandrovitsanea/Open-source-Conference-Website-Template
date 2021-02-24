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
<!------------------------------------------ LOGO & MENU BAR -------------------------------------------------------->
    <?php 
       include 'logo_navbar.php';
    ?><br>
        <h3>Get to know our jury</h3>  

    <table id="jury_table">
<!------------------------------------------ NAMES & PHOTOW -------------------------------------------------------->
        <tr>
            <th>Prof. David Garcia</th>
            <th>Prof. Donna Miller</th>
            <th>Prof. Michalis Pappalis</th>
            <th>Prof. Kira Johnson</th>
        </tr>
        <tr>
            <td><?php 
                echo "<img class = 'zoom_jury' src='img/David.png'>";  
            ?></td>
            <td><?php 
                echo "<img class = 'zoom_jury' src='img/donna.png'>";  
            ?></td>
            <td><?php 
                echo "<img class = 'zoom_jury' src='img/Michalis.png'>";  
            ?></td>
            <td><?php 
                echo "<img class = 'zoom_jury' src='img/Kira.png'>";  
            ?></td>
        </tr>
<!------------------------------------------ CAPTIONS & PAPERS -------------------------------------------------------->
        <tr>
            <td class="caption">Academic Assistant Professor University of California, Berkeley</td>
            <td class="caption">Associate Chair of the Office of Investor Diversity of the University of Pireaus, Greece</td>
            <td class="caption">Associate Assistant Chancellor of the Committee on Learning Diversity</td>
            <td class="caption">Associate Vice Chancellor of the Office of Investor Partnerships</td>
        </tr>
        <td colspan="4" style="text-align:center;color:purple;"><b>Papers:</b></td>
        <tr>
            <td>
                <ul>
                    <li>Web Technologies: Interpreting Problematic Fragmentation and Artifice</li><br>
                    <li>Legacy and Representation: Assembling the Invader and/in Web Technologies</li><br>
                    <li>Composing the/a/an Reserved Disease in Web Technologies: Understatement and Advocacy</li><br>
                    <li>Remarking the/a/an Charming Illness in Web Technologies: Flashback and Postmodernity</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Web Technologies: Calculating Frank Demolition and Semiotics</li><br>
                    <li>Fragmentation and Supplement: Identifying the Native and/in Web Technologies</li><br>
                    <li>Coding Amiable Technologies: Portmanteau and Hyperbaton in Web Technologies</li><br>
                    <li>Testing the/a/an Essentialist Postmodernity in Web Technologies: Symbol and Homosexuality</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Planing Encoded Corporeality: Web Technologies and/in the Flock</li><br>
                    <li>Identity and Object: Supporting the Marginalized and/in Web Technologies</li><br>
                    <li>Concluding Convicted Withdrawal: Inversion and Synecdoche in Web Technologies</li><br>
                    <li>Contesting the/a/an Helpful Xenophobia in Web Technologies: Foil and Gender</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Transgressing Gregarious Xenophobia: Web Technologies and/in the Marginalized</li><br>
                    <li>Artifacts and Capitalism: Dissecting the Subaltern and/in Web Technologies</li><br>
                    <li>Defamiliarizing Communicative Fuzziness: Asyndeton and Analogy in Web Technologies</li><br>
                    <li>Describing the/a/an Courageous Oppression in Web Technologies: Motif and Subjectivity</li>
                </ul>
            </td>
        </tr>
    </table>      
    <div id="main">   
        <footer>
            <p style = "font-size: 12px">Disclaimer: This site has been created in the framework of the final assignment of the undergraduate course "Web Technologies" of the Department of Informatics of the University of Pireaus. All names, titles of papers/presentation and photos are fictional, created with the tools <a href="https://www.name-generator.org.uk/">Name Generator</a>, <a href="https://www.rewordmyessay.com/essay-titles-generator/">Reword My Essay</a> and <a href="https://thispersondoesnotexist.com/">This Person Does Not Exist</a>.</p>
            <p style = "font-size: 12px">Read our <a href="terms_of_use.php">terms of use</a>.</p>
        </footer>
    </div>
    </body>
</html>
