<?php

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));
$volID=$_GET['id'];

include("dbInfo_inc.php");
$db_table='vve_volSignUp';
$query = "UPDATE ".$db_table." SET active = '0' WHERE id = " . $volID;
mysql_query($query);
mysql_close($link);

include("newVol.php");

?>
