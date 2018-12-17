<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_ecms_libao_data_1`;");
E_C("CREATE TABLE `www_96kaifa_com_ecms_libao_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `writer` varchar(30) NOT NULL DEFAULT '',
  `befrom` varchar(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('1','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('2','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('3','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('4','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('5','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('6','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('7','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('8','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('9','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('10','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('11','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('12','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('13','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('14','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('15','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('16','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('17','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('18','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('19','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('20','8','','0','0','0','0','','','');");
E_D("replace into `www_96kaifa_com_ecms_libao_data_1` values('21','8','','0','0','0','0','','','');");

@include("../../inc/footer.php");
?>