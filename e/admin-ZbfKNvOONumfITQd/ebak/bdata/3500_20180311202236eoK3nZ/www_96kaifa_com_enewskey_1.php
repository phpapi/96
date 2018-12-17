<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewskey`;");
E_C("CREATE TABLE `www_96kaifa_com_enewskey` (
  `keyid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `keyname` char(50) NOT NULL DEFAULT '',
  `keyurl` char(200) NOT NULL DEFAULT '',
  `cid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`keyid`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewskey` values('1',0x39364b61694661e6ba90e7a081,0x68747470733a2f2f7777772e39366b616966612e636f6d2f,'0');");
E_D("replace into `www_96kaifa_com_enewskey` values('2',0xe7bd91e7ab99e6a8a1e69dbf,0x68747470733a2f2f7777772e39366b616966612e636f6d2f,'0');");

@include("../../inc/footer.php");
?>