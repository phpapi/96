<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsmemberadd`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsmemberadd` (
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `oicq` varchar(25) NOT NULL DEFAULT '',
  `msn` varchar(120) NOT NULL DEFAULT '',
  `mycall` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zip` varchar(8) NOT NULL DEFAULT '',
  `spacestyleid` smallint(6) NOT NULL DEFAULT '0',
  `homepage` varchar(200) NOT NULL DEFAULT '',
  `saytext` text NOT NULL,
  `company` varchar(255) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `userpic` varchar(200) NOT NULL DEFAULT '',
  `spacename` varchar(255) NOT NULL DEFAULT '',
  `spacegg` text NOT NULL,
  `viewstats` int(11) NOT NULL DEFAULT '0',
  `regip` varchar(20) NOT NULL DEFAULT '',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `regipport` varchar(6) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsmemberadd` values('1','','','','','','','','1','','','','',0x2f642f66696c652f702f323031372d31312d30322f34346261643965313531353435363661633239613536383135376564343434652e6a7067,'','','1',0x3139322e3136382e302e313838,'1520515036',0x3132372e302e302e31,'57',0x3538373235,0x3531333430);");
E_D("replace into `www_96kaifa_com_enewsmemberadd` values('2','','','','','','','','1',0x7777772e626f79646f776e2e636f6d,0x7777772e626f79646f776e2e636f6d,'','','','','','0',0x3139322e3136382e302e313838,'1509358295',0x3139322e3136382e302e313838,'1',0x3539383638,0x3539383638);");
E_D("replace into `www_96kaifa_com_enewsmemberadd` values('3','','','','','','','','1','','','','','','','','0',0x3139322e3136382e302e313838,'1509503358',0x3139322e3136382e302e313838,'1',0x3531373732,0x3531373732);");

@include("../../inc/footer.php");
?>