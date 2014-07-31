<?php
  
  include "./dbInfo_inc.php";
  
  $minQuery="SELECT * FROM venueMinistries";
  $minResult=mysql_query($minQuery) or die ("Query to get data from venueMinistries failed: ".mysql_error());
  
  
  ?>