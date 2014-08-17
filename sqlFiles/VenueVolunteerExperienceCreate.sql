CREATE TABLE `vve_followUpTracker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coordID` int(11) DEFAULT NULL,
  `volID` int(11) DEFAULT NULL,
  `followUpRequested` datetime DEFAULT NULL,
  `followUpCompletedDT` datetime DEFAULT NULL,
  `followUpCompleted` int(11) DEFAULT NULL,
  `followUpCompletedBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

CREATE TABLE `vve_venueMinistries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ministryName` varchar(50) NOT NULL,
  `ministryCoord` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `subMinistry` int(11) DEFAULT NULL,
  `parentMinistry` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

CREATE TABLE `vve_volSignUp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fName` text,
  `lName` text,
  `dob` text,
  `maleFemale` text,
  `stAdd` text,
  `city` text,
  `state` text,
  `zip` text,
  `homePhone` text,
  `cellPhone` text,
  `textMessage` text,
  `email` text,
  `maritalStat` text,
  `bringer` text,
  `ministry` text,
  `active` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


