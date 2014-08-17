<?php
  
  include "./dbInfo_inc.php";
  
  $minQuery="SELECT * FROM vve_venueMinistries";
  $minResult=mysql_query($minQuery) or die ("Query to get data from vve_venueMinistries failed: ".mysql_error());
  
  
  ?>