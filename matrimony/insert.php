
 
 
<?php
if(isset($_POST['submit']))
{

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("matri", $con);
 
$sql="INSERT INTO jodi(name, religion)
VALUES
('$_POST[name]','$_POST[religion]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con);
}

?>
 
 