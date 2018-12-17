<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewssearch`;");
E_C("CREATE TABLE `www_96kaifa_com_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewssearch` values('1',0xe6a183e88ab1,'1509175473',0x7469746c65,'32',0x3139322e3136382e302e313838,'','3',0x6e65777374696d65,'0',0x3566306331306331623736656631326663633839666665333330653834663836,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e6a183e88ab125272929,'0');");
E_D("replace into `www_96kaifa_com_enewssearch` values('2',0xe6a183e88ab1,'1509178873',0x7469746c65,'1',0x3139322e3136382e302e313838,'','4',0x6e65777374696d65,'0',0x3963396161616135383434366436623035656133393437646165343961363034,0x67616d65,'1','0',0x20616e642028287469746c65204c494b45202725e6a183e88ab125272929,'0');");

@include("../../inc/footer.php");
?>