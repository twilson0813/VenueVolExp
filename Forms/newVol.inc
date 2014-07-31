<form method="post">
    <table border="1" class="center">
    <tr><td align="center">Ministry</td><td align="center">First Name</td><td align="center">Last Name</td><td colspan="3"></td></tr>
    
        <?php
            include "./dbInfo_inc.php";
            
            $volquery="SELECT id, fName, lName, ministry FROM volSignUp";
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
                echo "<td align=\"center\"><input name=\"viewVol\" type=\"button\" value=\"View\" onclick=\"window.open('volDetails.php?id=$volid')\"/></td>";
                echo "<td align=\"center\"><input name=\"viewVol\" type=\"submit\" value=\"Process\" formaction=\"processor.php\"/></td>";
                echo "<td align=\"center\"><input name=\"viewVol\" type=\"submit\" value=\"Delete\" formaction=\"deactivate.php\"/></td>";
                echo "</tr>";
            }
        
         
        ?>
    </table>
    <input name="procAll" type="submit" value="Process All" formaction="processorAll.php"/>
</form>