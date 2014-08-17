<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
    <form method="post">
        <table border="1">
        <tr><td>Ministry</td><td>First Name</td><td>Last Name</td><td colspan="3"></td></tr>
        
			<?php
				include "./dbInfo_inc.php";
				
				$volquery="SELECT id, fName, lName, ministry FROM volSignUp where lName=$lName";
				$volresult=mysql_query($volquery) or die ("Query to get data from volSignup failed: ".mysql_error());
				
				
				
				while ($volrow=mysql_fetch_array($volresult)) 
				{
					$volid=$volrow["id"];
					$fName=$volrow["fName"];
					$lName=$volrow["lName"];
					$ministry=$volrow["ministry"];
					echo "<tr>";
					echo "<td>$ministry</td>";
					echo "<td>$fName</td>";
					echo "<td>$lName</td>";
					echo "<td><input name=\"viewVol\" type=\"button\" value=\"View\" onclick=\"window.open('volDetails.php?id=$volid')\"/></td>";
					echo "<td><input name=\"viewVol\" type=\"submit\" value=\"Process\" formaction=\"processor.php\"/></td>";
					echo "<td><input name=\"viewVol\" type=\"submit\" value=\"Delete\" formaction=\"form.php\"/></td>";
					echo "</tr>";
				}
            	echo '<input name="testButton" type="submit" value="test" formaction="processor.php"/>';
            
             
            ?>
        </table>
    </form>
</body>
</html>