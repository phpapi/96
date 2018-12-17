<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsbefrom`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsbefrom` (
  `befromid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `sitename` char(60) NOT NULL DEFAULT '',
  `siteurl` char(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`befromid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsbefrom` values('1',0x39364b61694661e6ba90e7a081,0x68747470733a2f2f7777772e39366b616966612e636f6d2f);");

@include("../../inc/footer.php");
?>