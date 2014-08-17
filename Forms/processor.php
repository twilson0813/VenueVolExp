<?php

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));

include("config.inc.php");
$link = mysql_connect($db_host,$db_user,$db_pass);
if(!$link) die ('Could not connect to database: '.mysql_error());
mysql_select_db($db_name,$link);
$query = "INSERT into `".$db_table."` (field_1,field_2,field_3,field_4,field_5,field_6,field_7,field_8,field_9,field_10,field_11,field_12,field_13,field_14,field_15,field_16,field_17,field_18) VALUES ('" . $_POST['field_1'] . "','" . $_POST['field_2'] . "','" . $_POST['field_3'] . "','" . $_POST['field_4'] . "','" . $_POST['field_5'] . "','" . $_POST['field_6'] . "','" . $_POST['field_7'] . "','" . $_POST['field_8'] . "','" . $_POST['field_9'] . "','" . $_POST['field_10'] . "','" . $_POST['field_11'] . "','" . $_POST['field_12'] . "','" . $_POST['field_13'] . "','" . $_POST['field_14'] . "','" . $_POST['field_15'] . "','" . $_POST['field_16'] . "','" . $_POST['field_17'] . "','" . $_POST['field_18'] . "')";
mysql_query($query);
mysql_close($link);

mail("tom@itbytomwilson.com","phpFormGenerator - Form submission","Form data:

First Name: " . $_POST['field_1'] . " 
Last Name: " . $_POST['field_2'] . " 
Birth Date: " . $_POST['field_3'] . " 
Male or Female: " . $_POST['field_4'] . " 
Street Address: " . $_POST['field_5'] . " 
City: " . $_POST['field_6'] . " 
State: " . $_POST['field_7'] . " 
Zip Code: " . $_POST['field_8'] . " 
Home Phone Number: " . $_POST['field_9'] . " 
Cell Phone Number: " . $_POST['field_10'] . " 
Would you like to receive updates by text message?: " . $_POST['field_11'] . " 
Email Address: " . $_POST['field_12'] . " 
Marital Status: " . $_POST['field_13'] . " 
Have you become a bringer?: " . $_POST['field_14'] . " 
What area would you like to serve in?: " . $_POST['field_15'] . " 
venueBasics: " . $_POST['field_16'] . " 
backgroundCheck: " . $_POST['field_17'] . " 
contacted: " . $_POST['field_18'] . " 


 powered by phpFormGenerator.
");

include("confirm.html");

?>