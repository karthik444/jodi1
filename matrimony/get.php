<?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        echo "Connections are made successfully::";
      $selected = mysql_select_db("matri", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM jodi ");
      while( $row = mysql_fetch_assoc( $result ) ){
            
              $id=$row['id'];
              $username=$row['username'];
              $password=$row['password'];
              $religion=$row['religion'];
              $gender=$row['gender'];
              $marital=$row['marital'];
              $image=$row['image'];
            
          }
      
      mysql_close($connector); ?>
      <!DOCTYPE html>
<html lang="en">
<body>
<table border="0" cellpadding="0" style="border:3px double #CC7D06; border-collapse: collapse; padding-left:4px; padding-right:4px; padding-top:1px; padding-bottom:1px;table-layout: fixed;" width="100%" id="table4">
					<tbody><tr>
						<td width="313" bgcolor="#CE7F09"><b>
						<font color="#FFFFFF" face="Courier New" size="2">
						<a href="search_result.php?page=1"><font color="#FFFFFF">First</font></a> | 
						<a href="search_result.php?page=18"><font color="#FFFFFF">&lt;&lt; Previous</font></a></font></b></td>
						<td width="105" bgcolor="#CE7F09">
						<font color="#FFFFFF"><font face="Courier New" size="2">Page </font><font face="Courier New">
						<select size="1" name="page1" onchange="form_sub1()">
						<option value="1">&nbsp;&nbsp; 1 &nbsp;</option><option value="2">&nbsp;&nbsp; 2 &nbsp;</option><option value="3">&nbsp;&nbsp; 3 &nbsp;</option><option value="4">&nbsp;&nbsp; 4 &nbsp;</option><option value="5">&nbsp;&nbsp; 5 &nbsp;</option><option value="6">&nbsp;&nbsp; 6 &nbsp;</option><option value="7">&nbsp;&nbsp; 7 &nbsp;</option><option value="8">&nbsp;&nbsp; 8 &nbsp;</option><option value="9">&nbsp;&nbsp; 9 &nbsp;</option><option value="10">&nbsp;&nbsp; 10 &nbsp;</option><option value="11">&nbsp;&nbsp; 11 &nbsp;</option><option value="12">&nbsp;&nbsp; 12 &nbsp;</option><option value="13">&nbsp;&nbsp; 13 &nbsp;</option><option value="14">&nbsp;&nbsp; 14 &nbsp;</option><option value="15">&nbsp;&nbsp; 15 &nbsp;</option><option value="16">&nbsp;&nbsp; 16 &nbsp;</option><option value="17">&nbsp;&nbsp; 17 &nbsp;</option><option value="18">&nbsp;&nbsp; 18 &nbsp;</option><option value="19" selected="">&nbsp;&nbsp; 19 &nbsp;</option>						</select>
						</font></font></td>
						<td width="234" bgcolor="#CE7F09">
						<p align="right">
						<b>
						<font color="#FFFFFF" face="Courier New" size="2">&nbsp;
						<a href="search_result.php?page=19"><font color="#FFFFFF">Next &gt;&gt;</font></a> | 
						<a href="search_result.php?page=19"><font color="#FFFFFF">Last</font></a></font></b></p></td>
					</tr>
					<tr>
						<td width="671" colspan="3" align="center" valign="top">
												<table border="0" cellpadding="6" style="border-collapse: collapse" width="100%" id="table5">
							<tbody><tr>
								<td width="337" colspan="2">&nbsp;</td>
								<td width="297" colspan="2">
								&nbsp;</td>
							</tr>
							<tr>
								<td width="337" bgcolor="#D45D02" colspan="2"><b>
								<span lang="ta"><font size="2" color="#FFFFFF">
								பெயர் </font></span>
								<font size="2" color="#FFFFFF">: </font>
								<span lang="ta"><font size="2" color="#FFFFFF">T.karthikeyan</font></span></b></td>
								<td width="297" bgcolor="#D45D02" colspan="2">
								<p align="right"><b><span lang="ta">
								<font size="2" color="#FFFFFF">&nbsp;Register id
								</font></span><font size="2" color="#FFFFFF">:9588</font></b></p></td>
							</tr>
							<tr>
								<td width="140"><font size="2">பெயர் </font>
								<span lang="en-us"><font size="2">: </font>
								</span></td>
								<td width="190"><b><span lang="en-us">
								<font size="2">$username</font></span></b></td>
								<td width="146"><font size="2">complexion</font></td>
								<td width="142">&nbsp;<b>
								<span lang="en-us"><font size="2">white</font></span></b>
								</td>
							</tr>
							<tr>
								<td width="140" bgcolor="#FEF8ED">
								<font size="2">Religion</font></td>
								<td width="190" bgcolor="#FEF8ED"><b>
								<span lang="en-us"><font size="2">Hindhu-Nadar-Men</font></span></b></td>
								<td width="146" bgcolor="#FEF8ED">
								<font size="2">Subcaste</font></td>
								<td width="142" bgcolor="#FEF8ED"><b>
								<span lang="en-us"><font size="2">-</font></span></b></td>
							</tr>
														<tr>
								<td width="140"><font size="2">Date of birth</font></td>
								<td width="190"><b><span lang="en-us">
								<font size="2">19.05.1994</font></span></b></td>
								<td width="146"><font size="2">Age</font></td>
								<td width="142"><b><span lang="en-us">
								<font size="2">20</font></span></b></td>
							</tr>
							<tr>
								<td width="140" bgcolor="#FEF8ED">
								<font size="2">Education Qualification</font></td>
								<td width="190" bgcolor="#FEF8ED"><b>
								<span lang="en-us"><font size="2">B.Sc,B.Ed</font></span></b></td>
								<td width="146" bgcolor="#FEF8ED">
								<font size="2">Height</font></td>
								<td width="142" bgcolor="#FEF8ED"><b>
								<span lang="en-us"><font size="2">5.3</font></span></b></td>
							</tr>
							<tr>
								<td width="140"><font size="2">working</font></td>
								<td width="492" colspan="3"><b>
								<span lang="en-us"><font size="2"></font></span></b></td>
							</tr>
							<tr>
								<td width="140" bgcolor="#FEF8ED">
								<font size="2">income</font></td>
								<td width="190" bgcolor="#FEF8ED"><b>
								<span lang="en-us"><font size="2"></font></span></b></td>
								<td width="146" bgcolor="#FEF8ED">
								<font size="2">working place</font></td>
								<td width="142" bgcolor="#FEF8ED"><b>
								<span lang="en-us"><font size="2"></font></span></b></td>
							</tr>
							<tr>
								<td width="140"><font size="2">Father name</font></td>
								<td width="190"><b><span lang="en-us">
								<font size="2">P.thalaimalai</font></span></b></td>
								<td width="146"><font size="2">Mother name</font></td>
								<td width="142"><b><span lang="en-us">
								<font size="2">P.Gandhi mathi</font></span></b></td>
							</tr>
														<tr>
								<td width="140" bgcolor="#FEF8ED">
								<font size="2"></font>
								<font size="1">(இவரையும் சேர்த்து)</font></td>
								<td width="190" bgcolor="#FEF8ED"><b>
								<span lang="en-us"><font size="2">3</font></span></b></td>
								<td width="146" bgcolor="#FEF8ED">
								<font size="2">ஆண் <span lang="en-us">: <b></b></span></font></td>
								<td width="142" bgcolor="#FEF8ED">
								<font size="2">பெண்<span lang="en-us"> :<b>3</b></span></font></td>
							</tr>
							<tr>
								<td width="140"><font size="2">திருமணமானவர்</font></td>
								<td width="190"><b><span lang="en-us">
								<font size="2"></font></span></b></td>
								<td width="146"><font size="2">ஆண்</font><span lang="en-us">&nbsp; 
								: <b></b></span></td>
								<td width="142"><font size="2">பெண்<span lang="en-us"> 
								:<b></b></span></font></td>
							</tr>
							<tr>
								<td width="140" bgcolor="#FEF8ED">
								<font size="2">பூர்வீகம்</font></td>
								<td width="190" bgcolor="#FEF8ED"><b>
								<span lang="en-us"><font size="2">தஞ்சை</font></span></b></td>
								<td width="146" bgcolor="#FEF8ED">
								<font size="2">இருப்பிடம்</font></td>
								<td width="142" bgcolor="#FEF8ED"><b>
								<span lang="en-us"><font size="2">தஞ்சை</font></span></b></td>
							</tr>
							<tr>
								<td width="140"><font size="2">குல தெய்வம்</font></td>
								<td width="492" colspan="3"><b>
								<span lang="en-us"><font size="2"></font></span></b></td>
							</tr>
							<tr>
								<td width="140" bgcolor="#FEF8ED">
								<font size="2">சீர் வருசை</font></td>
								<td width="190" bgcolor="#FEF8ED"><b>
								<span lang="en-us"><font size="2">நேரில்</font></span></b></td>
								<td width="146" bgcolor="#FEF8ED">
								&nbsp;</td>
								<td width="142" bgcolor="#FEF8ED"></td>
							</tr>
							<tr>
								<td width="140"><font size="2">சொத்துக்கள்</font></td>
								<td width="492" colspan="3"><b>
								<span lang="en-us"><font size="2">சொந்தவீடு</font></span></b></td>
							</tr>
							<tr>
								<td width="140" bgcolor="#FEF8ED">
								<font size="2">நட்சத்திரம்</font></td>
								<td width="190" bgcolor="#FEF8ED"><b>
								<span lang="en-us"><font size="2">பூரம்-2ம்</font></span></b></td>
								<td width="146" bgcolor="#FEF8ED">
								<font size="2">ராசி&nbsp;:&nbsp;<b>சிம்மம்</b> </font></td>
								<td width="142" bgcolor="#FEF8ED">
								<span lang="en-us"><font size="2">லக்னம் 
								: <b>துலாம்</b></font></span></td>
							</tr>
							<tr>
								<td width="140"><font size="2">திசை இருப்பு
								</font></td>
								<td width="190"><b><span lang="en-us">
								<font size="2">சுக்கிரன்</font></span></b></td>
								<td width="146"><font size="2">வருடம்</font></td>
								<td width="142"><b><span lang="en-us">
								<font size="2">10</font></span></b></td>
							</tr>
							<tr>
								<td width="140" bgcolor="#FEF8ED">
								<font size="2">மாதம்</font></td>
								<td width="190" bgcolor="#FEF8ED"><b>
								<span lang="en-us"><font size="2">00</font></span></b></td>
								<td width="146" bgcolor="#FEF8ED">
								<font size="2">நா<span lang="ta">ள்</span></font></td>
								<td width="142" bgcolor="#FEF8ED"><b>
								<span lang="en-us"><font size="2">29</font></span></b></td>
							</tr>
														<tr>
								<td width="140" bgcolor="#FEF8ED">
								<font size="2">எதிர்பார்ப்பு</font></td>
								<td width="478" bgcolor="#FEF8ED" colspan="3"><b><span lang="en-us"><font size="2">டிகிரி,PGடிகிரி,நல்லகுடும்பம்</font></span></b></td>
							</tr>
							<tr>
								<td width="140" bgcolor="#FEF8ED">
								<font size="2">கல்வி தகுதி</font></td>
								<td width="190" bgcolor="#FEF8ED"><b>	<span lang="en-us"><font size="2">Post  Graduate</font></span></b></td>
								<td width="146" bgcolor="#FEF8ED">&nbsp;</td>
								<td width="142" bgcolor="#FEF8ED">&nbsp;</td>
							</tr>
														<tr>
								<td width="140" bgcolor="#402903" align="center">
								<a href="javascript:post_value1('Zm5hZGFyQDk1ODguanBn');">
								<b><font color="#FFFFFF">ஜாதக கட்டம்</font></b></a></td>
									<td width="190" bgcolor="#402903" align="center">
									<p align="right">
																		</p></td>
								<td width="288" bgcolor="#402903" colspan="2" align="center">
																<a href="javascript:post_value2('Zm5hZGFyQDk1ODguanBn');">
								<b><font color="#FFFFFF">தொலைபேசி எண்</font></b></a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="member_print.php?id_id=Zm5hZGFyITk1ODghczg5dDM=" target="_blank">
								<b><font color="#FFFFFF">Print</font></b></a></td>
							</tr>
													</tbody></table>
												<table border="0" cellpadding="6" style="border-collapse: collapse" width="100%" id="table5">
							<tbody><tr>
								<td width="337" colspan="2">&nbsp;</td>
								<td width="297" colspan="2">
								&nbsp;</td>
							</tr>
							
								</body>
								</html>