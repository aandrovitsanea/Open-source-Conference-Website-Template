<!DOCTYPE html>
<html>
<head>
    <title>Contact us</title>
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
    <form id="subscription_form" method="post" action="mail.php">
    
    <table id="sub_table">
        <tr>
        <th colspan="2" id="third"><h3>Contact form</h3></th>
    </tr>
    <tr>
        <!-------------------------------------- FIRST NAME ------------------------------------------------->
        <td class="formTitle"><label for="fname">First name</label></td>
        <td><input pattern= "^[α-ωΑ-ΩA-Za-zάέίύήόώΆΈΊΎΌΏΉ]+$" placeholder = "Please type in your first name" type="text" id= "fname" name="fname" size="30" onfocus="de_Error('fnameError')" required>
        <br><small id="fnameError" class="errorText" hidden>Make sure that your are using only Greek or Latin characters</small>
        </td>
    <tr>
            <!-------------------------------------- LAST NAME ------------------------------------------------->
        <td class="formTitle"><label for="lname">Last name</label></td>
        <td><input placeholder="Please type in your last name" type="text" id="lname" name="lname" size="30" onfocus="de_Error('lnameError')" required>
        <br><small id="lnameError" class="errorText" hidden>Make sure that your are using only Greek or Latin characters</small>
        </td>
    </tr>
    <tr>
        <td class="formTitle"><label for="email">Email</label></td>
        <td><input placeholder="E-mail" type="email" name="email" id="email" pattern=".+@.+{.}.+" onfocus="de_Error('emailError')" required>
        <br><small id="emailError" class="errorText" hidden>Please enter a valid E-mail</small></td>
    </tr>   
    <tr>
        <td class="formTitle"><label for="message">Message</label>
        </td>
        <td><textarea type="message" name="message" id="message" rows="6" cols="25" required></textarea>
        </td>
    </tr> 
    <tr> 
    <td></td>
    <td>
    <input type="submit" value="Send" id="GreenButton">
    
    <input type="reset" value="Clear" id="RedButton">
    </td>
    </tr>      
    </form>
</div>
<script type="text/javascript" src="check_entries.js"></script>  
</body>
</html>
    
