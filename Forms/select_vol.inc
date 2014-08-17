<?php
  
  include "./dbInfo_inc.php";
  
  $volquery="SELECT * FROM vve_volSignup where id=$volid";
  $volresult=mysql_query($volquery) or die ("Query to get data from vve_volSignup failed: ".mysql_error());
  
  $volrow=mysql_fetch_array($volresult);
  $fName=$volrow["fName"];
  $lName=$volrow["lName"];
  ?>