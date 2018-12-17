<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsmember`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsmember` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `rnd` char(20) NOT NULL DEFAULT '',
  `email` char(50) NOT NULL DEFAULT '',
  `registertime` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userdate` int(10) unsigned NOT NULL DEFAULT '0',
  `money` float(11,2) NOT NULL DEFAULT '0.00',
  `zgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `havemsg` tinyint(1) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `salt` char(8) NOT NULL DEFAULT '',
  `userkey` char(12) NOT NULL DEFAULT '',
  `ingid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `agid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isern` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  KEY `groupid` (`groupid`),
  KEY `ingid` (`ingid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsmember` values('1',0x7777772e39366b616966612e636f6d,0x3663306264636165353966323335346134666364376561346361616637623465,0x7632436135725242515144697177777069514773,0x7777774039366b616966612e636f6d,'1509268591','1','0','0','0.00','0','0','1',0x764b63434d35,0x614e6f645650466759395269,'0','0','0');");
E_D("replace into `www_96kaifa_com_enewsmember` values('2',0x7777772e626f79646f776e2e636f6d,0x3963643561326230323362363332343561343964663137666631613963336164,0x3333574474425739354c49445754317545554f66,0x77777740626f79646f776e2e636f6d,'1509358295','1','0','0','0.00','0','1','1',0x6c5266416143,0x4831655a695476574b7a6a77,'0','0','0');");
E_D("replace into `www_96kaifa_com_enewsmember` values('3',0x39366b616966612e636f6d,0x3736303038643134303561626335643234316563303137653633623461626662,0x646c7445577067413169356a536a49346934326c,0x774039366b616966612e636f6d,'1509503358','1','0','0','0.00','0','1','1',0x594943515953,0x564e416c476a334737757148,'0','0','0');");

@include("../../inc/footer.php");
?>