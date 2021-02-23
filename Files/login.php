<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        <?php 
         include 'Style.css'; 
        ?>
    </style>
</head>
<body><!------------------------------------------ LOGO and MENY BAR -------------------------------------------------------->
    <?php 
       include 'logo_navbar.php';
    ?><br>
<!-------------------------------------- ENLARGING IMAGE ------------------------------------------------->
    
    <div id="main">
   <h3>Login to access the program of the conference</h3>
   <br />
   <form method="post" action ="login_script.php">
   <table id="sub_table">
    <tr>
        <td class="formTitle"><label>Email</label></td>
        <td colspan="3"><input type="text" name="email" id="email">
        </td>
    </tr>
    <tr>
        <td class="formTitle"><label>Password</label></td>
        <td colspan="3"><input type="password" name="password" id="password">
        </td>
    </tr>
    <tr>
            <td></td>
            <td><input type="submit" name="login" id="login" value="Login"></td>
            <td></td>
    </tr>
    </table>
</form>
  </div>
 </body>
</html>
