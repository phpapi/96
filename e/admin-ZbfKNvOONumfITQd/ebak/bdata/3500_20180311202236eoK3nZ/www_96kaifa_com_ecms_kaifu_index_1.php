<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_ecms_kaifu_index`;");
E_C("CREATE TABLE `www_96kaifa_com_ecms_kaifu_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('1','9','1','1540610946','1509075016','1509080250','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('2','9','1','1540612026','1509076059','1509080261','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('3','9','1','1509076061','1509076089','1509082820','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('4','9','1','1509076091','1509076125','1509082865','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('5','9','1','1509078317','1509078339','1509082861','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('6','9','1','1509078355','1509078380','1509078380','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('7','9','1','1540614382','1509078456','1509080271','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('8','9','1','1509078470','1509078490','1509082854','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('9','9','1','1509078492','1509078555','1509078555','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('10','9','1','1509078557','1509078593','1509078593','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('11','9','1','1509078595','1509078648','1509078648','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('12','9','1','1509078650','1509078730','1509614341','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('13','9','1','1509078751','1509078776','1509614349','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('14','9','1','1509078779','1509078798','1509082782','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('15','9','1','1509078800','1509078880','1509078880','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('16','9','1','1509078882','1509078901','1509082840','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('17','9','1','1509078904','1509079003','1509079003','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('18','9','1','1509079005','1509079158','1509079158','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('19','9','1','1509079342','1509079957','1509079957','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('20','9','1','1509080038','1509080056','1509614360','1');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_index` values('21','9','1','1509080085','1509080142','1509699733','1');");

@include("../../inc/footer.php");
?>