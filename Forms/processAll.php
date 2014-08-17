<?php

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));
$volID=$_GET['id'];

include("dbInfo_inc.php");
$db_table='vve_volSignUp';
$volquery="SELECT id, fName, lName, ministry, processed FROM vve_volSignUp WHERE processed!=1 and active=1";
$volresult=mysql_query($volquery) or die ("Query to get data from vve_volSignUp failed: ".mysql_error());
            
            
while ($volrow=mysql_fetch_array($volresult)) 
{
	include("dbInfo_inc.php");
	$db_table='vve_followUpTracker';
	$query = "INSERT into `".$db_table."` (coordID,volID,followUpRequested) VALUES ('" . $volID . "','1','8/1/2014 14:45:00')";
	mysql_query($query);
	mysql_close($link);

	include("dbInfo_inc.php");
	$db_table='vve_volSignUp';
	$query = "UPDATE ".$db_table." SET processed = '1' WHERE id = " . $volID;
	mysql_query($query);
	mysql_close($link);

	include("dbInfo_inc.php");
	$volquery="SELECT * FROM vve_volSignUp where id=". $volID;
	$volresult=mysql_query($volquery) or die ("Query to get data from vve_volSignUp failed: ".mysql_error());
	$volrow=mysql_fetch_array($volresult);


	mail("tom@itbytomwilson.com","New Volunteer Form","Form data:

	You have a Volunteer interested in your ministry. Please follow up with them in the next 24 hours. 


	First Name: " . $volrow['fName'] . "
	Last Name: " . $volrow['lName'] . "
	Birth Date: " . $volrow['dob'] . "
	Male or Female: " . $volrow['maleFemale'] . "
	Street Address: " . $volrow['stAdd'] . "
	City: " . $volrow['city'] . "
	State: " . $volrow['state'] . "
	Zip Code: " . $volrow['zip'] . "
	Home Phone Number: " . $volrow['homePhone'] . "
	Cell Phone Number: " . $volrow['cellPhone'] . "
	Would you like to receive updates by text message?: " . $volrow['textMessage'] . "
	Email Address: " . $volrow['email'] . "
	Marital Status: " . $volrow['maritalStat'] . "
	Have you become a bringer?: " . $volrow['bringer'] . "
	What area would you like to serve in?: " . $volrow['ministry'] . "

	Thank You

	Claire Parker
	");

	mysql_query($query);
	mysql_close($link);
}

	include("confirm.html");

?>
