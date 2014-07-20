<?php
/*add db info below */

$mysqlserver="{db url}";
$mysqlusername="{db username}";
$mysqlpassword="{db user pass}";
$dbname = '{db name}';

$link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());
mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

?>