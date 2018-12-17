<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsmoreport`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsmoreport` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` char(60) NOT NULL DEFAULT '',
  `purl` char(255) NOT NULL DEFAULT '',
  `ppath` char(255) NOT NULL DEFAULT '',
  `postpass` char(120) NOT NULL DEFAULT '',
  `postfile` char(255) NOT NULL DEFAULT '',
  `tempgid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `mustdt` tinyint(1) NOT NULL DEFAULT '0',
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `closeadd` tinyint(1) NOT NULL DEFAULT '0',
  `headersign` char(255) NOT NULL DEFAULT '',
  `openadmin` tinyint(1) NOT NULL DEFAULT '0',
  `rehtml` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`),
  KEY `isclose` (`isclose`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsmoreport` values('1',0xe4b8bbe8aebfe997aee7abaf,0x2f,0x463a2f777777726f6f742f333530302f7765622f,0x637a35577a464c475556454d655a5245656a7534733363534a4a397a4b6e547941657863425a425853305a306b5262623756574f337a714b42697154,'','0','0','0','0','','0','0');");
E_D("replace into `www_96kaifa_com_enewsmoreport` values('2',0xe6898be69cbae8aebfe997aee7abaf,0x687474703a2f2f6d2e39366b616966612e636f6d2f,0x463a2f777777726f6f742f333530302f6d2f,0x69466a53344563334869387955394f646a6731436c7a73363649654b335a7173634471584e4454376f6663474d383731793472774a74734e506e4e32,'','2','0','0','0','','0','0');");

@include("../../inc/footer.php");
?>