<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_ecms_kaifu_data_1`;");
E_C("CREATE TABLE `www_96kaifa_com_ecms_kaifu_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('1','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('2','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('3','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('4','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('5','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('6','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('7','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('8','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('9','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('10','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('11','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('12','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('13','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('14','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('15','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('16','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('17','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('18','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('19','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('20','9','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_ecms_kaifu_data_1` values('21','9','','0','0','0','0','');");

@include("../../inc/footer.php");
?>