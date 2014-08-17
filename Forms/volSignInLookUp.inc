<form method="post" action='signupprocessor.php'>
    <table border="1" class="center">
    <tr><td align="center">Last Name</td><td align="center">First Name</td><td colspan="1"></td></tr>
    
        <?php
            include "./dbInfo_inc.php";
			
            $volquery="SELECT id, fName, lName FROM vve_volSignUp WHERE lName = '$lName'";
            $volresult=mysql_query($volquery) or die ("Query to get data from vve_volSignUp failed: ".mysql_error());
            
            
			
            
            while ($volrow=mysql_fetch_array($volresult)) 
            {
                $volid=$volrow["id"];
                $fName=$volrow["fName"];
                $lName=$volrow["lName"];
                $ministry=$volrow["ministry"];
                echo "<tr>";
                echo "<td>$lName</td>";
                echo "<td>$fName</td>";
                echo "<td align=\"center\"><input name=\"signIn\" type=\"submit\" formaction=\"signIn.php?id=$volid\" formtarget=\"_self\" value=\"Sign In\"/></td>";
                echo "</tr>";
            }
			
			$date = date('l jS \of F Y h:i:s A', strtotime('+3 hours'));
			
        
         
        ?>
    </table>
    
    
</form>