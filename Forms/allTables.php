<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

  <table border="1">
  <tr><td>Ministry</td><td>First Name</td><td>Last Name</td><td></td></tr>
  
  <?php
    /*$mysqlserver="xdap373.bcbst.com";
    $mysqlusername="itbytomwilsondb";
    $mysqlpassword="Tntw2010";
	
    $link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());
    
    $dbname = 'venue_itbytomwilson_com';
    mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());*/
	
	include "./dbInfo_inc.php";
	
	$volquery="SELECT id, fName, lName, ministry FROM volSignup";
    $volresult=mysql_query($volquery) or die ("Query to get data from volSignup failed: ".mysql_error());
    
    
    
    while ($volrow=mysql_fetch_array($volresult)) {
    $volid=$volrow["id"];
    $fName=$volrow["fName"];
    $lName=$volrow["lName"];
    $ministry=$volrow["ministry"];
      echo "<tr><td>$ministry</td><td>$fName</td><td>$lName</td><td><a href='http://localhost:88/VenueForms/VolSelect/volDetails.php?id=$volid'>Select</a></td></tr>";
    }
    
  
     
    ?>
  </table>
</body>
</html>