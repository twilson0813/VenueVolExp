<?php
  
  include "./dbInfo_inc.php";
  
  $volquery="SELECT * FROM volSignup where id=$volid";
  $volresult=mysql_query($volquery) or die ("Query to get data from volSignup failed: ".mysql_error());
  
  $volrow=mysql_fetch_array($volresult);
  $fName=$volrow["fName"];
  $lName=$volrow["lName"];
  ?>