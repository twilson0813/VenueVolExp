<?php

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));

include("config.inc.php");
$link = mysql_connect($db_host,$db_user,$db_pass);
if(!$link) die ('Could not connect to database: '.mysql_error());
mysql_select_db($db_name,$link);
$query = "INSERT into `".$db_table."` (fName,lName,dob,maleFemale,stAdd,city,state,zip,homePhone,cellPhone,textMessage,email,maritalStat,bringer,ministry) VALUES ('" . $_POST['fName'] . "','" . $_POST['lName'] . "','" . $_POST['dob'] . "','" . $_POST['maleFemale'] . "','" . $_POST['stAdd'] . "','" . $_POST['city'] . "','" . $_POST['state'] . "','" . $_POST['zip'] . "','" . $_POST['homePhone'] . "','" . $_POST['cellPhone'] . "','" . $_POST['textMessage'] . "','" . $_POST['email'] . "','" . $_POST['maritalStat'] . "','" . $_POST['bringer'] . "','" . $_POST['ministry'] . "')";
mysql_query($query);
mysql_close($link);

mail("tom@itbytomwilson.com","phpFormGenerator - Form submission","Form data:

First Name: " . $_POST['fName'] . "
Last Name: " . $_POST['lName'] . "
Birth Date: " . $_POST['dob'] . "
Male or Female: " . $_POST['maleFemale'] . "
Street Address: " . $_POST['stAdd'] . "
City: " . $_POST['city'] . "
State: " . $_POST['state'] . "
Zip Code: " . $_POST['zip'] . "
Home Phone Number: " . $_POST['homePhone'] . "
Cell Phone Number: " . $_POST['cellPhone'] . "
Would you like to receive updates by text message?: " . $_POST['textMessage'] . "
Email Address: " . $_POST['email'] . "
Marital Status: " . $_POST['maritalStat'] . "
Have you become a bringer?: " . $_POST['bringer'] . "
What area would you like to serve in?: " . $_POST['ministry'] . "


 powered by phpFormGenerator.
");

include("confirm.html");

?>