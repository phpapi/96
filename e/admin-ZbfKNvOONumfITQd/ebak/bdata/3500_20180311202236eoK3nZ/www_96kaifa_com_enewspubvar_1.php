<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewspubvar`;");
E_C("CREATE TABLE `www_96kaifa_com_enewspubvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `varvalue` text NOT NULL,
  `varsay` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tocache` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `classid` (`classid`),
  KEY `tocache` (`tocache`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewspubvar` values('1',0x7777775f39366b616966615f636f6d5f6e616d65,0xe7bd91e7ab99e5908de7a7b0,0xe4bbbf33353030e6b8b8e6888f,'','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('2',0x7777775f39366b616966615f636f6d5f75726c,0xe7bd91e59d80efbc88e5b8a668747470efbc89,0x687474703a2f2f7777772e39366b616966612e636f6d,'','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('3',0x7777775f39366b616966615f636f6d5f75726c32,0xe7bd91e59d80efbc88e4b88de5b8a668747470efbc89,0x7777772e39366b616966612e636f6d,'','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('4',0x7777775f39366b616966615f636f6d5f6d75726c,0xe6898be69cbae7898855524c,0x687474703a2f2f6d2e39366b616966612e636f6d,'','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('5',0x7777775f39366b616966615f636f6d5f6261,0xe5a487e6a188e58fb7,0xe7b2a4494350e5a4873137303234353031e58fb72d32,'','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('6',0x7777775f39366b616966615f636f6d5f746f6e676a69,0xe7bb9fe8aea1e4bba3e7a081,'','','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('7',0x7777775f39366b616966615f636f6d5f7171,0x5151e58fb7,0x3231363137333732,'','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('8',0x7777775f39366b616966615f636f6d5f7778,0xe5beaee4bfa1e585ace4bc97e58fb7,0x39366b61696661,'','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('9',0x7777775f39366b616966615f636f6d5f71756e,0x5151e7bea4e993bee68ea5,0x687474703a2f2f7368616e672e71712e636f6d2f7770612f71756e7770613f69646b65793d39653963383965373336656635653838386564393937396265626661353031323762313230366130643364646265613730356536336230306537363138363862,'','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('10',0x7777775f39366b616966615f636f6d5f7765696475616e,0xe5beaee7abafe4b88be8bdbde993bee68ea5,0x23e5b9bfe5918ae993bee68ea5e5908ee58fb0e4bfaee694b9,'','0','0','1');");

@include("../../inc/footer.php");
?>