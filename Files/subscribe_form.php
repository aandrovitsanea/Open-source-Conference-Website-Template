<!DOCTYPE html>
<html>
<head>
    <title>Registration form</title>
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
<!-------------------------------------- ENLARGING IMAGE ------------------------------------------------->
    
<form id="subscription_form">
<p>
<table id="third" >
            <tr><td colspan="4" id="third" ><b>Registration form</b></td></tr>
        </table>
<table id="main_table">
    <tr><td><label for="firstname">First name</label></td><td id="sec"  colspan="3"><input pattern="[A-Za-z]" placeholder="Please type in your first name" type="text" name="firstname" size="30"></tr>
    <tr><td><label for="lastname">Last name</label></td><td id="sec"  colspan="3"><input placeholder="Please type in your last name" type="text" name="lastname" size="30"></tr>
   
   <tr><td style="word-wrap: break-word; width=50%">Date of birth</td><td>
    <select type="text" name="birthday_day" id="birthday_day">
  <option value="head_day">Day</option>
  <option value="day_01">01</option>
  <option value="day_02">02</option>
  <option value="day_03">03</option>
  <option value="day_04">04</option>
  <option value="day_05">05</option>
  <option value="day_06">06</option>
  <option value="day_07">07</option>  
  <option value="day_08">08</option>
  <option value="day_09">09</option>  
  <option value="day_10">10</option>
  <option value="day_11">11</option>  
  <option value="day_12">12</option>  
  <option value="day_13">13</option>
  <option value="day_14">14</option>
  <option value="day_15">15</option>
  <option value="day_16">16</option>
  <option value="day_17">17</option>
  <option value="day_18">18</option>
  <option value="day_19">19</option>  
  <option value="day_20">20</option>
  <option value="day_21">21</option>  
  <option value="day_22">22</option>
  <option value="day_23">23</option>  
  <option value="day_24">24</option>  
  <option value="day_25">25</option>
  <option value="day_26">26</option>  
  <option value="day_27">27</option>
  <option value="day_28">28</option>  
  <option value="day_29">29</option>
  <option value="day_30">20</option>  
  <option value="day_31">31</option> 
  </select> </td><td><select type="text" name="birthday_month" id="birthday_month">
  <option value="head_month">Month</option>
  <option value="month_01">01</option>
  <option value="month_02">02</option>
  <option value="month_03">03</option>
  <option value="month_04">04</option>
  <option value="month_05">05</option>
  <option value="month_06">06</option>
  <option value="month_07">07</option>  
  <option value="month_08">08</option>
  <option value="month_09">09</option>  
  <option value="month_10">10</option>
  <option value="month_11">11</option>  
  <option value="month_12">12</option>  
  </select> </td><td><select type="text" name="birthday_year" id="birthday_year">
  <option value="head_month">Year</option>
  <option value="2021">2021</option>
  <option value="2020">2020</option>
  <option value="2019">2019</option>
  <option value="2018">2018</option>
  <option value="2017">2017</option>
  <option value="2016">2016</option>
  <option value="2015">2015</option>
  <option value="2014">2014</option>
  <option value="2013">2013</option>
  <option value="2012">2012</option>
  <option value="2011">2011</option>
  <option value="2010">2010</option>
  <option value="2009">2009</option>
  <option value="2008">2008</option>
  <option value="2007">2007</option>
  <option value="2006">2006</option>
  <option value="2005">2005</option>
  <option value="2004">2004</option>
  <option value="2003">2003</option>
  <option value="2002">2002</option>
  <option value="2001">2001</option>
  <option value="2000">2000</option>
  <option value="1999">1999</option>
  <option value="1998">1998</option>
  <option value="1997">1997</option>
  <option value="1996">1996</option>
  <option value="1995">1995</option>
  <option value="1994">1994</option>
  <option value="1993">1993</option>
  <option value="1992">1992</option>
  <option value="1991">1991</option>
  <option value="1990">1990</option>
  <option value="1989">1989</option>
  <option value="1988">1988</option>
  <option value="1987">1987</option>
  <option value="1986">1986</option>
  <option value="1985">1985</option>
  <option value="1984">1984</option>
  <option value="1983">1983</option>
  <option value="1982">1982</option>
  <option value="1981">1981</option>
  <option value="1980">1980</option>
  <option value="1979">1979</option>
  <option value="1978">1978</option>
  <option value="1977">1977</option>
  <option value="1976">1976</option>
  <option value="1975">1975</option>
  <option value="1974">1974</option>
  <option value="1973">1973</option>
  <option value="1972">1972</option>
  <option value="1971">1971</option>
  <option value="1970">1970</option>
  <option value="1969">1969</option>
  <option value="1968">1968</option>
  <option value="1967">1967</option>
  <option value="1966">1966</option>
  <option value="1965">1965</option>
  <option value="1964">1964</option>
  <option value="1963">1963</option>
  <option value="1962">1962</option>
  <option value="1961">1961</option>
  <option value="1960">1960</option>
  <option value="1959">1959</option>
  <option value="1958">1958</option>
  <option value="1957">1957</option>
  <option value="1956">1956</option>
  <option value="1955">1955</option>
  <option value="1954">1954</option>
  <option value="1953">1953</option>
  <option value="1952">1952</option>
  <option value="1951">1951</option>
  <option value="1950">1950</option>
  <option value="1949">1949</option>
  <option value="1948">1948</option>
  <option value="1947">1947</option>
  <option value="1946">1946</option>
  <option value="1945">1945</option>
  <option value="1944">1944</option>
  <option value="1943">1943</option>
  <option value="1942">1942</option>
  <option value="1941">1941</option>
  <option value="1940">1940</option>
  <option value="1939">1939</option>
  <option value="1938">1938</option>
  <option value="1937">1937</option>
  <option value="1936">1936</option>
  <option value="1935">1935</option>
  <option value="1934">1934</option>
  <option value="1933">1933</option>
  <option value="1932">1932</option>
  <option value="1931">1931</option>
  <option value="1930">1930</option>
  <option value="1929">1929</option>
  <option value="1928">1928</option>
  <option value="1927">1927</option>
  <option value="1926">1926</option>
  <option value="1925">1925</option>
  <option value="1924">1924</option>
  <option value="1923">1923</option>
  <option value="1922">1922</option>
  <option value="1921">1921</option>
  <option value="1920">1920</option>
  <option value="1919">1919</option>
  <option value="1918">1918</option>
  <option value="1917">1917</option>
  <option value="1916">1916</option>
  <option value="1915">1915</option>
  <option value="1914">1914</option>
  <option value="1913">1913</option>
  <option value="1912">1912</option>
  <option value="1911">1911</option>
  <option value="1910">1910</option>
  <option value="1909">1909</option>
  <option value="1908">1908</option>
  <option value="1907">1907</option>
  <option value="1906">1906</option>
  <option value="1905">1905</option>
  <option value="1904">1904</option>
  <option value="1903">1903</option>
  <option value="1902">1902</option>
  <option value="1901">1901</option>
  <option value="1900">1900</option>
</select></td></tr>
    
    <tr><td><label for="gender">Gender</label></td><td colspan="1"><label for="gender">Female</label> 
<input type="radio" name="gender" value="female"></td><td  colspan="1"><label for="gender">Non-binary</label> 
<input type="radio" name="gender" value="non_bin"></td><td  colspan="1"><label for="gender">Male</label> 
<input type="radio" name="gender" value="male"></td></tr>
        
    <tr><td><label for="country">Land</label></td><td colspan="2">Land:<select type="text"  name="country">
<option value="country">Land</option>
<option value="gb">UK</option>
<option value="gr" selected>Greece</option>
<option value="it">Italy</option>
<option value="fr">France</option>
<option value="de">Germany</option>
<option value="es">Spain</option>
</select></td><td></td></tr>    


<tr><td><label for="email">Email</label></td><td colspan ="2"><input placeholder="E-mail" type="email" name="email" id="email" pattern=".+@.+{.}.+"></td><td></td></tr>
<tr><td><label for="tel">Telephone</label></td><td colspan ="2"><input placeholder="Telephone" type="number" name="tel" id="tel"></td><td></td></tr>
<tr><td><label for="password">Password</label></td><td colspan ="2"><input type="password" name="password" maxlength ="8" required></td><td></td></tr>
<tr><td><label for="conf_password">Confirm Password</label></td><td colspan ="2"><input type="password" name="conf_password" maxlength ="8" required></td><td></td></tr>

<tr><td></td><td colspan="3"><input class="square-radio" type="radio" name="disclaimer" value="ds"><label for="payment">I agree with the terms of the conference</label></td></tr>    
</table>


<table id="third" >
            <tr><td></td><td></td><td></td><td></td><td id="third" ><input class="button" type="submit" value="Submit"></td><td id="third"></td><td id="third"><input class="button" type="reset" value="Cancel"></td>
        </table>

 </form>  
</p> 
</body>
</html>
    
