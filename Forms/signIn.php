<?php

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));
$volID=$_GET['id'];
$dts=date('Y-m-d H:i:s', strtotime('+3 hours'));

include("dbInfo_inc.php");
$db_table='vve_volSignIn';
$query = "INSERT into `".$db_table."` (volID, signInDTS) VALUES (".$volID.", '".$dts."')";
mysql_query($query);
mysql_close($link);

include("confirm.html");

?>
