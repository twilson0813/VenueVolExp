

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
    
	<?php 
	  $volid = $_GET['id'];
	  include "./select_vol.inc"; 
	?> 
	<div id="mainForm">




		<div id="formHeader">
				<h2 class="formInfo">VolunteerSignUp</h2>
				<p class="formInfo"></p>
		</div>


		<BR/><!-- begin form -->
		<form method=post enctype=multipart/form-data action=processor.php onSubmit="return validatePage1();"><ul class=mainForm id="mainForm_1">
		
				<li class="mainForm" id="fName">
					<label class="formFieldQuestion">First Name&nbsp;*</label>
                    <input class=mainForm type=text name=fName id=fName size='20' value=
					<?php 
					  
					  echo "'"; echo $fName; echo "'";
					   
					?>
                    ></li>

				<li class="mainForm" id="lName">
					<label class="formFieldQuestion">Last Name&nbsp;*</label><input class=mainForm type=text name=lName id=lName size='20' value=''></li>

				<li class="mainForm" id="dob">
					<label class="formFieldQuestion">Birth Date&nbsp;*</label><input type=text  name=dob id=dob value=""><button type=reset class=calendarStyle id=fieldDateTrigger_3></button><SCRIPT type='text/javascript'>   Calendar.setup({
								inputField     :    "field_3",
								ifFormat       :    "%m/%d/%Y",
								showsTime      :    false,
								button         :    "fieldDateTrigger_3",
								singleClick    :    true,
								step           :    1
								});</SCRIPT></li>

				<li class="mainForm" id="maleFemale">
					<label class="formFieldQuestion">Male or Female&nbsp;*</label><span><input class=mainForm type=radio name=maleFemale id=maleFemale_option_1 value="Male" /><label class=formFieldOption for="maleFemale_option_1">Male</label><input class=mainForm type=radio name=maleFemale id=maleFemale_option_2 value="Female" /><label class=formFieldOption for="maleFemale_option_2">Female</label></span></li>

				<li class="mainForm" id="stAdd">
					<label class="formFieldQuestion">Street Address&nbsp;*</label><input class=mainForm type=text name=stAdd id=stAdd size='20' value=''></li>

				<li class="mainForm" id="city">
					<label class="formFieldQuestion">City&nbsp;*</label><input class=mainForm type=text name=city id=city size='20' value=''></li>

				<li class="mainForm" id="state">
					<label class="formFieldQuestion">State&nbsp;*</label><select class=mainForm name=state id=state><option value=''> </option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option></SELECT></li>

				<li class="mainForm" id="zip">
					<label class="formFieldQuestion">Zip Code&nbsp;*</label><input class=mainForm type=text name=zip id=zip size='20' value=''></li>

				<li class="mainForm" id="homePhone">
					<label class="formFieldQuestion">Home Phone Number</label><input class=mainForm type=phone name=homePhone id=homePhone size=20 value="" style="background-image:url(imgs/phone.png); background-repeat: no-repeat;  padding: 2px 2px 2px 25px;"></li>

				<li class="mainForm" id="cellPhone">
					<label class="formFieldQuestion">Cell Phone Number</label><input class=mainForm type=phone name=cellPhone id=cellPhone size=20 value="" style="background-image:url(imgs/phone.png); background-repeat: no-repeat;  padding: 2px 2px 2px 25px;"></li>

				<li class="mainForm" id="textMessage">
					<label class="formFieldQuestion">Would you like to receive updates by text message?</label><span><input class=mainForm type=radio name=textMessage id=textMessage_option_1 value="No" /><label class=formFieldOption for="textMessage_option_1">No</label><input class=mainForm type=radio name=textMessage id=textMessage_option_2 value="Yes" /><label class=formFieldOption for="textMessage_option_2">Yes</label></span></li>

				<li class="mainForm" id="email">
					<label class="formFieldQuestion">Email Address&nbsp;*</label><input class=mainForm type=email name=email id=email size=20 value="" style="background-image:url(imgs/email.png); background-repeat: no-repeat;  padding: 2px 2px 2px 25px;"></li>

				<li class="mainForm" id="maritalStat">
					<label class="formFieldQuestion">Marital Status&nbsp;*</label><select class=mainForm name=maritalStat id=field_13><option value=''></option><option value="Select One">Select One</option><option value="Married">Married</option><option value="Single">Single</option></select></li>

				<li class="mainForm" id="bringer">
					<label class="formFieldQuestion">Have you become a Bringer?&nbsp;*</label><span><input class=mainForm type=radio name=bringer id=bringer_option_1 value="Yes" /><label class=formFieldOption for="bringer_option_1">Yes</label><input class=mainForm type=radio name=bringer id=bringer_option_2 value="No" /><label class=formFieldOption for="bringer_option_2">No</label></span></li>

				<li class="mainForm" id="ministry">
					<label class="formFieldQuestion">What area would you like to serve in?&nbsp;*</label><select class=mainForm name=ministry id=ministry><option value=''></option><option value="Parking">Parking</option><option value="Greeters">Greeters</option><option value="Hosts">Hosts</option><option value="Ushers">Ushers</option><option value="Alter Ministry">Alter Ministry</option><option value="Production">Production</option><option value="Worship">Worship</option><option value="Venue Kids">Venue Kids</option><option value="Check-In">Check-In</option><option value="Venue Kids Production">Venue Kids Production</option><option value="Venue Kids Worship">Venue Kids Worship</option><option value="Security">Security</option><option value="Connections">Connections</option></select></li>


		<!-- end of this page -->

		<!-- page validation -->
		<SCRIPT type=text/javascript>
		<!--
			function validatePage1()
			{
				retVal = true;
				if (validateField('fName','fName','text',1) == false)
 retVal=false;
if (validateField('lName','lName','text',1) == false)
 retVal=false;
if (validateDate('dob','dob','date',1,'','') == false)
 retVal=false;
if (validateField('maleFemale','maleFemale ','radio',1) == false)
 retVal=false;
if (validateField('stAdd','stAdd','text',1) == false)
 retVal=false;
if (validateField('city','city','text',1) == false)
 retVal=false;
if (validateField('state','state','state',1) == false)
 retVal=false;
if (validateField('zip','zip','text',1) == false)
 retVal=false;
if (validateField('homePhone','homePhone','phone',0) == false)
 retVal=false;
if (validateField('cellPhone','cellPhone','phone',0) == false)
 retVal=false;
if (validateField('textMessage','textMessage','radio',0) == false)
 retVal=false;
if (validateField('email','email','email',1) == false)
 retVal=false;
if (validateField('maritalStat','maritalStat','menu',1) == false)
 retVal=false;
if (validateField('bringer','bringer','radio',1) == false)
 retVal=false;
if (validateField('ministry','ministry','menu',1) == false)
 retVal=false;

				if(retVal == false)
				{
					alert('Please correct the errors.  Fields marked with an asterisk (*) are required');
					return false;
				}
				return retVal;
			}
		//-->
		</SCRIPT>

		<!-- end page validaton -->



		<!-- next page buttons --><li class="mainForm">
					<input id="saveForm" class="mainForm" type="submit" value="Submit" />
				</li>

			</form>
			<!-- end of form -->
		<!-- close the display stuff for this page -->
		</ul></div>

	</body>
	</html>