<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="canonical" href="http://www.alessioatzeni.com/wp-content/tutorials/jquery/simple-tooltip/index.php" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="scripts/jquery.cycle.all.js"></script>
   
<style type="text/css">
#container {
overflow:hidden;
position:relative;
width:80%;
margin-bottom:20px;
margin-top:10px;
margin-left:auto;
margin-right:auto;
}

h3 {
    font-size: 600%;
}
h2{
  font-size: 400%;
  text-align: center;

}
.right{
   height: auto;
width: 80%;
display: inline;
}
.leftimage {
width:20%;
display: inline-block;
float: left;
}

@media (min-width: 768px) {
  .sidebar-nav .navbar .navbar-collapse {
    padding: 0;
    max-height: none;
  }
  .sidebar-nav .navbar ul {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;
  }
}


</script>
</style>


</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><font size="7">Jodi Matrimony</font></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><font size="5">Home</font></a></li>
        <li><a href="register.php"><font size="5">Free Registration</font></a></li>
        <li><a href="search.php"><font size="5">Search</font></a></li>
        <li><a href="main_login.php"><font size="5">Member Login</font></a></li>
        <li><a href="contactus.php"><font size="5">Contact Us</font></a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="container">
<div class="leftimage">
  
  <img src="image\matri.jpg">
  </div>
<div class="right"><h3><font color="red">jodi<font size="7" color="sky blue">matrimony<br> Cell:8870753707 </h3></font> </font></div> 
</div>
<div class="container">
<div class="row">
  <div class="col-sm-3">
    <div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="visible-xs navbar-brand">Sidebar menu</span>
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><font size="4">Logout</font></a></li>
            <li><a href="#"><font size="4">Profile</font></a></li>
            <li><a href="#"><font size="4">Payment</font></a></li>
            <li><a href="#"><font size="4">Contact Us</font></a></li>
            <li><a href="#"><font size="4">Photo Upload</font></a></li>
            <li><a href="#"><font size="4">View History</font></a></li>
            
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  
<div>
<h2>Free Register</h2>
<fieldset width="70" height="70">
<form class="form-inline" action="" method="post" enctype="multipart/form-data" >


<div class="form-group">
  <label>Name:</label>
  <input class="form-control input-md" type="text" name="name">
  <br><br>
  <label>Religion:</label>
  <select name="religion">
  <option>Select</option>
  <option>Hindu</option>
  <option>Muslim</option>
  <option>Christian</option>
  <option>Widwor</option>
</select><br><br>
  <label>Gender:</label>
  <input type="radio" name="sex" value="male">Male

  <input type="radio" name="sex1" value="female">Female<br><br>

<label>Date Of Birth:</label>
<select name="month" onchange="return wait_for_load(this, event, function() { editor_date_month_change(this, 'birthday_day','birthday_year'); });">
<option value="na">Month</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>

<select name="day">
<option value="na">Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>

<select name="year">
<option value="na">Year</option>
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
</select><br><br>
 <label>Marital Status:</label>
  <input type="radio" name="marital">Unmarried
  <input type="radio" name="marital1">Widow/Widower

  <input type="radio" name="marital2">Divorced<br><br>
  <label>Caste:</label>
  <select name="caste">
  <option>Select</option>
  <option>Adi Dravida</option>
  <option>Arunthathiyar</option>
  <option>Badaga</option>
  <option>Boyar</option>
  <option>Brahmin-Gurukal</option>
  <option>Brahmin-lyengar</option>
  <option>Brahmin-lyer</option>
  <option>Brahmin-others</option>
  <option>Chattada Sri Vaishnava</option>
  <option>Chettiar</option>
  <option>Chettiar</option>
  <option>Devandra Kula Vellalar</option>
  <option>Deva/Thevar/Mukkulathar</option>
  <option>Gounder</option>
  <option>intercaste</option>
  <option>Karaneegar</option>
  <option>Konguvellala Gounder</option>
  <option>Krishnavaka</option>
  <option>Kulalar</option>
  <option>Kuravan</option>
  <option>Kurumbar</option>
  <option>Maruthuvar</option>
  <option>Meenavar</option>
  <option>Mudaliyar</option>
  <option>muthuraja</option>
  <option>Nadar</option>
  <option>Naicker</option>
  <option>Naidu</option>
  <option>Pandaram</option>
  <option>parkava Kulam</option>
  <option>Pillai</option>
  <option>Reddy</option>
  <option>SC</option>
  <option>ST</option>
  <option>Senai Thalaivar</option>
  <option>Senguntha Mudaliyar</option>
  <option>Sourashtra</option>
  <option>Sozhiya Vellalar</option>
  <option>Urali Gounder</option>
  <option>Valluvan</option>
  <option>Vannar</option>
  <option>Vannia Kula Kshatriyar</option>
  <option>Veera Saivam</option>
  <option>Vellalar</option>
  <option>Vettuva Gounder</option>
  <option>Vishwa Karma</option>
  <option>Vokkaliga</option>
  <option>Yadav</option>
</select><br><br>
<label>Sub Caste:</label>
  <input type="text" name="subcaste">
  <br><br>
<label>Education:</label>
  <input type="text" name="education">
  <br><br>
<label>Occupation:</label>
  <input type="text" name="occupation">
  <br><br>
<label>Working Place:</label>
  <input type="text" name="working">
  <br><br>
<label>Income:</label>
  <input type="text" name="income">
  <br><br>
 <label>Height:</label>
  <select name="height">
  <option>Select</option>
  <option>4ft 5in</option>
  <option>4ft 6in</option>
  <option>4ft 7in</option>
  <option>4ft 8in</option>
  <option>4ft 9in</option>
  <option>4ft 10in</option>
  <option>4ft 11in</option>
<option>5ft</option>
  <option>5ft 1in</option>
  <option>5ft 2in</option>
<option>5ft 3in</option>
<option>5ft 4in</option>
  <option>5ft 5in</option>
  <option>5ft 6in</option>
  <option>5ft 7in</option>
  <option>5ft 8in</option>
  <option>5ft 9in</option>
  <option>5ft 10in</option>
  <option>5ft 11in</option>
  <option>6ft</option>
  <option>6ft 1in</option>
  <option>6ft 2in</option>
  <option>6ft 3in</option>
  <option>6ft 4in</option>
  <option>6ft 5in</option>
  <option>6ft 6in</option>
  <option>6ft 7in</option>
  <option>6ft 8in</option>
  <option>6ft 9in</option>
  <option>6ft 10in</option>
  <option>6ft 11in</option>
  <option>7ft</option>
  </select><br><br>
 <label>Complexion:</label>
  <select name="complexion">
  <option>Fair</option>
  <option>Wheatish</option>
  <option>Dark</option>
</select><br><br>
<label>Profile Created By:</label>
  <select name="profile">
  <option>Self</option>
  <option>Parents</option>
  <option>Guradian</option>
  <option>Relatives</option>
  <option>friends</option>
</select><br><br>
<label>Email Id:</label>
  <input type="text" name="email">
  <br><br>
<label>Confirm Email Id:</label>
  <input type="text" name="confirm">
  <br><br>
<label>Login Password:</label>
  <input type="text" name="loginpass">
  <br><br>
<label>Confirm Password:</label>
  <input type="text" name="confirmpass">
  <br><br>
 <label>Star(Nakshatra):</label>
  <select name="star">
  <option>Ashwini</option>
  <option>Bharani</option>
  <option>Kruttika</option>
  <option>Rohini</option>
  <option>Mriga</option>
  <option>Aardra</option>
  <option>Punarvasu</option>
  <option>Pushya</option>
  <option>Aashlesha</option>
  <option>Magha</option>
  <option>Poorva Falguni</option>
  <option>Uttara Falguni</option>
  <option>Hasta</option>
  <option>Chitra</option>
  <option>Swaati</option>
  <option>Vishaakha</option>
  <option>Anuraadha</option>
  <option>Jyeshtha</option>
  <option>Mool</option>
   <option>Poorvaashaadha</option>
    <option>Uttaraashaadha</option>
    <option>Shravan</option>
    <option>Dhanishtha</option>
   <option>Shatataaraka</option>
</select><br><br>
<label>Rasi:</label>
  <select name="rasi">
  <option>Mesha</option>
  <option>Vrishaba</option>
  <option>Mithuna</option>
  <option>Karkata</option>
   <option>Simha</option>
  <option>Kanya</option>
  <option>Tula</option>
  <option>Vrischika</option>
      <option>Dhanus</option>
     <option>Makara</option>
     <option>Kumbha</option>
    <option>Meena</option>
</select><br><br>
<label>Laknam:</label>
  <select name="laknam">
  <option>Mesha</option>
  <option>Vrishaba</option>
  <option>Mithuna</option>
  <option>Karkata</option>
   <option>Simha</option>
  <option>Kanya</option>
  <option>Tula</option>
  <option>Vrischika</option>
      <option>Dhanus</option>
     <option>Makara</option>
     <option>Kumbha</option>
    <option>Meena</option>
</select><br><br>
<label>Father Name:</label>
  <input type="text" name="fathername"><br><br>
<label>Mother Name:</label>
  <input type="text" name="mothername">
  <br><br>
<label>Brothers:</label>
<select name="brothers">
  <option>0</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
<option>15</option>
</select><br><br>
<label>Sisters:</label>
<select name="sisters">
  <option>0</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
<option>15</option>
</select><br><br>

<label>Native Place:</label>
  <input type="text" name="native">
  <br><br>
<label>Current Residence:</label>
  <input type="text" name="residence">
  <br><br>
<label>Kula theyvam:</label>
  <input type="text" name="theyvam">
  <br><br>
<label>Expecting Dowry:</label>

  <input type="text" name="dowry">
  <br><br>
<label>Property:</label>
<input type="text" name="property">
  <br><br>
<label>Expected Qualification:</label>
  <input type="text" name="qualification">
  <br><br>
<label>Address:</label>
<textarea name="address"></textarea><br><br>
<label>Mobile Number:</label>
<input type="text" name="mobile">
  <br><br>
<label>Select image to upload:</label>
    <input type="file" name="file"><br><br>
    <input type="submit" name="submit" value="Register"/>
	</div>

 
</form>
</fieldset>
</div>
  </div>

</body>
</html>



<?php
if(isset($_POST['submit']))
{
 
   
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("matri", $con);
$name=$_FILES['file']['name'];
   $type=$_FILES['file']['type'];
   if($type=='image/jpeg' || $type=='image/png' || $type=='image/gif' || $type=='image/pjpeg')
   {
if(file_exists(dirname($_SERVER['DOCUMENT_ROOT']).'/htdocs/matrimony/uploads/'.$name))
     {
      echo'file is already present';
     }
     else
     {
      $up=move_uploaded_file($_FILES['file']['tmp_name'],dirname($_SERVER['DOCUMENT_ROOT']).'/htdocs/matrimony/uploads/'.$name);
      
  
 
$sql="INSERT INTO jodi(name, religion,gender,marital,dob,caste,subcaste,education,occupation,working,income,height,complexion,profile,email,confirm,loginpass,confirmpass,star,rasi,laknam,father,mother,brother,sister,native,residence,kulatheyevam,dowry,property,expectedquali,address,mobile,image)
VALUES
('$_POST[name]','$_POST[religion]','$_POST[sex]','$_POST[marital]','$_POST[month]','$_POST[caste]','$_POST[subcaste]','$_POST[education]','$_POST[occupation]','$_POST[working]','$_POST[income]','$_POST[height]','$_POST[complexion]','$_POST[profile]','$_POST[email]','$_POST[confirm]','$_POST[loginpass]','$_POST[confirmpass]','$_POST[star]','$_POST[rasi]','$_POST[laknam]','$_POST[fathername]','$_POST[mothername]','$_POST[brothers]','$_POST[sisters]','$_POST[native]','$_POST[residence]','$_POST[theyvam]','$_POST[dowry]','$_POST[property]','$_POST[qualification]','$_POST[address]','$_POST[mobile]','$name')";
 if($up && $sql)
  {
   echo'image uploaded and stored';
  }
  elseif(!$up) 
  {
   echo'image not uploaded';
  }
  elseif(!$sql)
  {
   echo'image not stored';
  }
 }
   }
   else
   {
    echo'Invalid file type';
   }
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con);
}

?>