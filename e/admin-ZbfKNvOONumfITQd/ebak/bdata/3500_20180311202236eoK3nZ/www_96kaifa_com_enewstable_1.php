<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewstable`;");
E_C("CREATE TABLE `www_96kaifa_com_enewstable` (
  `tid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tname` varchar(60) NOT NULL DEFAULT '',
  `tsay` text NOT NULL,
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `datatbs` text NOT NULL,
  `deftb` varchar(6) NOT NULL DEFAULT '',
  `yhid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `intb` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewstable` values('1',0x6e657773,0xe696b0e997bbe7b3bbe7bb9fe695b0e68daee8a1a8,0xe696b0e997bbe7b3bbe7bb9fe695b0e68daee8a1a8,'1',0x2c312c,0x31,'0','1','0');");
E_D("replace into `www_96kaifa_com_enewstable` values('9',0x67616d65,0xe7bd91e6b8b8e7b3bbe7bb9fe695b0e68daee8a1a8,0xe7bd91e6b8b8e7b3bbe7bb9fe695b0e68daee8a1a8,'0',0x2c312c,0x31,'0','9','0');");
E_D("replace into `www_96kaifa_com_enewstable` values('10',0x64616e6a69,0xe5b08fe6b8b8e6888fe7b3bbe7bb9fe695b0e68daee8a1a8,0xe5b08fe6b8b8e6888fe7b3bbe7bb9fe695b0e68daee8a1a8,'0',0x2c312c,0x31,'0','10','0');");
E_D("replace into `www_96kaifa_com_enewstable` values('11',0x6c6962616f,0xe7a4bce58c85e7b3bbe7bb9fe695b0e68daee8a1a8,0xe7a4bce58c85e7b3bbe7bb9fe695b0e68daee8a1a8,'0',0x2c312c,0x31,'0','11','0');");
E_D("replace into `www_96kaifa_com_enewstable` values('12',0x6b61696675,0xe5bc80e69c8de7b3bbe7bb9fe695b0e68daee8a1a8,0xe5bc80e69c8de7b3bbe7bb9fe695b0e68daee8a1a8,'0',0x2c312c,0x31,'0','12','0');");

@include("../../inc/footer.php");
?>