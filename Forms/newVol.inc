<form method="post" action='signupprocessor.php'>
    <table border="1" class="center">
    <tr><td align="center">Ministry</td><td align="center">First Name</td><td align="center">Last Name</td><td colspan="3"></td></tr>
    
        <?php
            include "./dbInfo_inc.php";
            
            $volquery="SELECT id, fName, lName, ministry, processed FROM vve_volSignUp WHERE processed!=1 and active=1";
            $volresult=mysql_query($volquery) or die ("Query to get data from vve_volSignUp failed: ".mysql_error());
            
            
            
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
                echo "<td align=\"center\"><input name=\"viewVol\" type=\"button\" value=\"View\" onclick=\"window.open('volDetails.php?id=$volid')\"/></td>";
                echo "<td align=\"center\"><input name=\"viewVol\" type=\"button\" value=\"Process\" onclick=\"window.open('signupprocessor.php?id=$volid')\"/></td>";
                echo "<td align=\"center\"><input name=\"viewVol\" type=\"submit\" value=\"Delete\" onclick=\"window.open('deleteRow.php?id=$volid')\"/></td>";
                echo "</tr>";
            }
			
			$date = date('l jS \of F Y h:i:s A');
			
        
         
        ?>
    </table>
    <input name="procAll" type="submit" value="Process All" formaction="processorAll.php"/>
    
</form>