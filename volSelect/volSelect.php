<body>

    <form method="get" action="http://www.yourwebskills.com/files/examples/process.php">

        <select id="vol" name="vol">

            <?php

            $mysqlserver="xdap373.bcbst.com";
            $mysqlusername="itbytomwilsondb";
            $mysqlpassword="Tntw2010";
            $link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

            $dbname = 'venue_itbytomwilson_com';
            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

            $volquery="SELECT id, fName, lName FROM volSignup";
            $volresult=mysql_query($volquery) or die ("Query to get data from volSignup failed: ".mysql_error());

            while ($volrow=mysql_fetch_array($volresult)) {
            $volid=$volrow["id"];
			$fName=$volrow["fName"];
			$lName=$volrow["lName"];
                echo "<option>
                    $fName $lName
                </option>";

            }

            ?>

        </select>

    </form>

</body>
