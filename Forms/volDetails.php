<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form>
	<?php
		$volid = $_GET['id'];
		include "./dbInfo_inc.php";
		
		$volquery="SELECT * FROM volSignup where id=$volid";
		$volresult=mysql_query($volquery) or die ("Query to get data from volSignup failed: ".mysql_error());
		
		while ($volrow=mysql_fetch_array($volresult)) {
			$fName=$volrow["fName"];
			$lName=$volrow["lName"];
            

            }

 
    ?>
    <li class="mainForm" id="fName">
    <label class="formFieldQuestion">First Name&nbsp;*
    <?php
	    echo "</label><input class=mainForm type=text name=fName id=fName size='20' value='$fName'></li>";
	?>
    </form>
</body>
</html>