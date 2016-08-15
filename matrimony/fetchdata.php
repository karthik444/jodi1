<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Demo Form Result</title>
<link rel="stylesheet" href="css/ex.css" type="text/css" />
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">

<script type="text/javascript">
    $(document).ready(function () {
        $('#table_id').dataTable();
    });
</script>

<style>
.myButton {
  -moz-box-shadow:inset 0px 1px 0px 0px #f29c93;
  -webkit-box-shadow:inset 0px 1px 0px 0px #f29c93;
  box-shadow:inset 0px 1px 0px 0px #f29c93;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fe1a00), color-stop(1, #ce0100));
  background:-moz-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
  background:-webkit-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
  background:-o-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
  background:-ms-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
  background:linear-gradient(to bottom, #fe1a00 5%, #ce0100 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fe1a00', endColorstr='#ce0100',GradientType=0);
  background-color:#fe1a00;
  -moz-border-radius:6px;
  -webkit-border-radius:6px;
  border-radius:6px;
  border:1px solid #d83526;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:15px;
  font-weight:bold;
  padding:6px 24px;
  text-decoration:none;
  text-shadow:0px 1px 0px #b23e35;
}
.myButton:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ce0100), color-stop(1, #fe1a00));
  background:-moz-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
  background:-webkit-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
  background:-o-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
  background:-ms-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
  background:linear-gradient(to bottom, #ce0100 5%, #fe1a00 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ce0100', endColorstr='#fe1a00',GradientType=0);
  background-color:#ce0100;
}
.myButton:active {
  position:relative;
  top:1px;
}



</style>


</head>
<body bgcolor="#EEFDEF">

<h1>Form Submission Result</h1>
<form>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("matri", $con);
 
$result = mysql_query("SELECT * FROM `jodi`");
 
echo "<table border='1' id='table_id' 
class='table table-condensed table-striped table-hover'>
<thead>
<tr>
<th>ID</th>
<th>Religion</th>
<th>Gender</th>
<th>Marital</th>
<th>Dob</th>
<th>Caste</th>
<th>Subcaste</th>
<th>Education</th>
<th>Occupation</th>
<th>Working</th>
<th>Income</th>
<th>Height</th>
<th>Complexion</th>
<th>Profile</th>
<th>Email</th>
<th>Confirm</th>
<th>Loginpass</th>
<th>Confirmpass</th>
<th>Star</th>
<th>Rasi</th>
<th>Laknam</th>
<th>Father</th>
<th>Mother</th>
<th>Brother</th>
<th>Sister</th>
<th>Native</th>
<th>Residence</th>
<th>Kulatheyevam</th>
<th>Dowry</th>
<th>Property</th>
<th>Expectquali</th>
<th>Address</th>
<th>Mobile</th>
<th>Image</th>
</tr>";
echo "</thead>";
echo "<tbody>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['religion'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['marital'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['caste'] . "</td>";
  echo "<td>" . $row['subcaste'] . "</td>";
  echo "<td>" . $row['education'] . "</td>";
  echo "<td>" . $row['occupation'] . "</td>";
  echo "<td>" . $row['working'] . "</td>";
  echo "<td>" . $row['income'] . "</td>";
  echo "<td>" . $row['height'] . "</td>";
  echo "<td>" . $row['complexion'] . "</td>";
  echo "<td>" . $row['profile'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['confirm'] . "</td>";
  echo "<td>" . $row['loginpass'] . "</td>";
  echo "<td>" . $row['confirmpass'] . "</td>";
  echo "<td>" . $row['star'] . "</td>";
  echo "<td>" . $row['rasi'] . "</td>";
  echo "<td>" . $row['laknam'] . "</td>";
  echo "<td>" . $row['father'] . "</td>";
  echo "<td>" . $row['mother'] . "</td>";
  echo "<td>" . $row['brother'] . "</td>";
  echo "<td>" . $row['sister'] . "</td>";
  echo "<td>" . $row['native'] . "</td>";
  echo "<td>" . $row['residence'] . "</td>";
  echo "<td>" . $row['kulatheyevam'] . "</td>";
  echo "<td>" . $row['dowry'] . "</td>";
  echo "<td>" . $row['property'] . "</td>";
  echo "<td>" . $row['expectedquali'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['mobile'] . "</td>";
  echo "<td>" . $row['image'] . "</td>";
  echo "</tr>";
  }
  echo "</tbody>";
echo "</table>";
 
mysql_close($con);
?>


</form>
</body>
</html>