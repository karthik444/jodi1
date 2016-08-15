<?php
include ("db.php");
 $id=$_POST['id'];

$result=mysql_query("select age from jodi where ID='$id'");

$row=mysql_fetch_assoc($result);

$age= $row['age'];

$a = "18";

 

echo "<label>Age</label>";

echo "<label>";

echo "<select name=\"age\" id=\"age\">";

echo "<option value=\"\">Choose</option>";

 

while ($a <= 40)

{

    if ($a == $age)

    {

        echo "<option value=\"".$a.""\" selected=\"selected\">".$a."</option>";}

     

    else{

echo "<option value=\"".$a.""\">".$a."</option>";

}

$a++;

}

 

 

echo "</select>";

echo "</label>";

?>
