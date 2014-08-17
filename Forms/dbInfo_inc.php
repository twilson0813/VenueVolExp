<?php
/*add db info below */

$mysqlserver="mysql.itbytomwilson.com";
$mysqlusername="itbytomwilsondb";
$mysqlpassword="Tntw2010";
$dbname = 'venue_itbytomwilson_com';

$link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());
mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

?>