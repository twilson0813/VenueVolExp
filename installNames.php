

	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
	<html>
	<head>
		<title>VolunteerSignUp - created by phpFormGenerator</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"><link href="style.css" rel="stylesheet" type="text/css">
		<!-- calendar stuff -->
		      <link rel="stylesheet" type="text/css" href="calendar/calendar-blue2.css" />
		      <script type="text/javascript" src="calendar/calendar.js"></script>
		      <script type="text/javascript" src="calendar/calendar-en.js"></script>
		      <script type="text/javascript" src="calendar/calendar-setup.js"></script>
		<!-- END calendar stuff -->

	    <!-- expand/collapse function -->
	    <SCRIPT type=text/javascript>
		<!--
		function collapseElem(obj)
		{
			var el = document.getElementById(obj);
			el.style.display = 'none';
		}


		function expandElem(obj)
		{
			var el = document.getElementById(obj);
			el.style.display = '';
		}


		//-->
		</SCRIPT>
		<!-- expand/collapse function -->


		<!-- expand/collapse function -->
		    <SCRIPT type=text/javascript>
			<!--

			// collapse all elements, except the first one
			function collapseAll()
			{
				var numFormPages = 1;

				for(i=2; i <= numFormPages; i++)
				{
					currPageId = ('mainForm_' + i);
					collapseElem(currPageId);
				}
			}


			//-->
			</SCRIPT>
		<!-- expand/collapse function -->


		 <!-- validate -->
		<SCRIPT type=text/javascript>
		<!--
			function validateField(fieldId, fieldBoxId, fieldType, required)
			{
				fieldBox = document.getElementById(fieldBoxId);
				fieldObj = document.getElementById(fieldId);

				if(fieldType == 'text'  ||  fieldType == 'textarea'  ||  fieldType == 'password'  ||  fieldType == 'file'  ||  fieldType == 'phone'  || fieldType == 'website')
				{
					if(required == 1 && fieldObj.value == '')
					{
						fieldObj.setAttribute("class","mainFormError");
						fieldObj.setAttribute("className","mainFormError");
						fieldObj.focus();
						return false;
					}

				}


				else if(fieldType == 'menu'  || fieldType == 'country'  || fieldType == 'state')
				{
					if(required == 1 && fieldObj.selectedIndex == 0)
					{
						fieldObj.setAttribute("class","mainFormError");
						fieldObj.setAttribute("className","mainFormError");
						fieldObj.focus();
						return false;
					}

				}


				else if(fieldType == 'email')
				{
					if((required == 1 && fieldObj.value=='')  ||  (fieldObj.value!=''  && !validate_email(fieldObj.value)))
					{
						fieldObj.setAttribute("class","mainFormError");
						fieldObj.setAttribute("className","mainFormError");
						fieldObj.focus();
						return false;
					}

				}



			}

			function validate_email(emailStr)
			{
				apos=emailStr.indexOf("@");
				dotpos=emailStr.lastIndexOf(".");

				if (apos<1||dotpos-apos<2)
				{
					return false;
				}
				else
				{
					return true;
				}
			}


			function validateDate(fieldId, fieldBoxId, fieldType, required,  minDateStr, maxDateStr)
			{
				retValue = true;

				fieldBox = document.getElementById(fieldBoxId);
				fieldObj = document.getElementById(fieldId);
				dateStr = fieldObj.value;


				if(required == 0  && dateStr == '')
				{
					return true;
				}


				if(dateStr.charAt(2) != '/'  || dateStr.charAt(5) != '/' || dateStr.length != 10)
				{
					retValue = false;
				}

				else	// format's okay; check max, min
				{
					currDays = parseInt(dateStr.substr(0,2),10) + parseInt(dateStr.substr(3,2),10)*30  + parseInt(dateStr.substr(6,4),10)*365;
					//alert(currDays);

					if(maxDateStr != '')
					{
						maxDays = parseInt(maxDateStr.substr(0,2),10) + parseInt(maxDateStr.substr(3,2),10)*30  + parseInt(maxDateStr.substr(6,4),10)*365;
						//alert(maxDays);
						if(currDays > maxDays)
							retValue = false;
					}

					if(minDateStr != '')
					{
						minDays = parseInt(minDateStr.substr(0,2),10) + parseInt(minDateStr.substr(3,2),10)*30  + parseInt(minDateStr.substr(6,4),10)*365;
						//alert(minDays);
						if(currDays < minDays)
							retValue = false;
					}
				}

				if(retValue == false)
				{
					fieldObj.setAttribute("class","mainFormError");
					fieldObj.setAttribute("className","mainFormError");
					fieldObj.focus();
					return false;
				}
			}
		//-->
		</SCRIPT>
		<!-- end validate -->




	</head>

	<body onLoad="collapseAll()">

	<div id="mainForm">




		<div id="formHeader">
				<h2 class="formInfo">VolunteerSignUp</h2>
				<p class="formInfo"></p>
		</div>


		<BR/><form method=post action=install.php><ul class=mainForm><li class=mainForm><label class=formFieldQuestion>
<?php
 if(isset($_POST['submit']))
  {
	 mysql_connect($_POST['dbHostName'], $_POST['dbUser'], $_POST['dbPassword']);
	 mysql_select_db($_POST['dbName']);
	 mysql_query("CREATE TABLE `" . $_POST['dbTable']  . "` (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id) ,
	 field_1 TEXT ,
	 field_2 TEXT ,
	 field_3 TEXT ,
	 field_4 TEXT ,
	 field_5 TEXT ,
	 field_6 TEXT ,
	 field_7 TEXT ,
	 field_8 TEXT ,
	 field_9 TEXT ,
	 field_10 TEXT ,
	 field_11 TEXT ,
	 field_12 TEXT ,
	 field_13 TEXT ,
	 field_14 TEXT ,
	 field_15 TEXT )") or die("Error! Table not be created.");

	echo "Table created. ";

	 $handle = fopen('config.inc.php', 'w');
	$content = "<?php
 \$db_host = \"" . $_POST['dbHostName'] . "\";";
	$content .= "\$db_user = \"" . $_POST['dbUser'] . "\";";
	$content .= "\$db_pass = \"" . $_POST['dbPassword'] . "\";";
	$content .= "\$db_name = \"" . $_POST['dbName'] . "\";";
	$content .= "\$db_table = \"" . $_POST['dbTable'] . "\";";
	$content .= "
?>";

	 if (fwrite($handle, $content) === FALSE)
	{
		echo "Cannot write to file.";
 		exit;
 	}

	 fclose($handle);

	echo "Configuration file written (config.inc.php). ";

}
 else
{ ?>
<li class="mainForm"><label class="formFieldQuestion">Hostname&nbsp;&nbsp;</label><input class=mainForm type=text name=dbHostName size='20' value='mysql.itbytomwilson.com'></li><li class="mainForm"><label class="formFieldQuestion">User&nbsp;&nbsp;</label><input class=mainForm type=text name=dbUser size='20' value='itbytomwilsondb'></li><li class="mainForm"><label class="formFieldQuestion">Password&nbsp;&nbsp;</label><input class=mainForm type=text name=dbPassword size='20' value=''></li><li class="mainForm"><label class="formFieldQuestion">Database&nbsp;&nbsp;</label><input class=mainForm type=text name=dbName size='20' value='venue_itbytomwilson_com'></li><li class="mainForm"><label class="formFieldQuestion">Table&nbsp;&nbsp;</label><input class=mainForm type=text name=dbTable size='20' value='volSignUp'></li><li class="mainForm"><input class=mainForm type=submit name=submit value='Install'></li></form>
<?php }

?></div><div id="footer"><p class="footer"><a class=footer href=http://phpformgen.sourceforge.net>Generated by phpFormGenerator</a></p></div>

	</body>
	</html>