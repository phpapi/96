<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_ecms_libao_index`;");
E_C("CREATE TABLE `www_96kaifa_com_ecms_libao_index` (
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
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('1','8','1','1509004324','1509004395','1509004395','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('2','8','1','1509004475','1509004663','1509004663','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('3','8','1','1509004757','1509004860','1509004860','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('4','8','1','1509004946','1509005019','1509613806','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('5','8','1','1509005144','1509005180','1509005180','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('6','8','1','1509005182','1509005310','1509005310','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('7','8','1','1509005325','1509005569','1509005569','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('8','8','1','1509007385','1509007500','1509007500','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('9','8','1','1509007502','1509007792','1509007792','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('10','8','1','1509011350','1509011553','1509011553','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('11','8','1','1509011644','1509011699','1509011699','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('12','8','1','1509011701','1509011799','1509011799','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('13','8','1','1509011997','1509012061','1509012061','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('14','8','1','1509012249','1509012405','1509012405','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('15','8','1','1509012419','1509012675','1509012675','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('16','8','1','1509012801','1509012846','1509012846','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('17','8','1','1509014209','1509014393','1509014393','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('18','8','1','1509014578','1509014735','1509014735','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('19','8','1','1509014770','1509014838','1509014838','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('20','8','1','1509014971','1509015107','1509015107','1');");
E_D("replace into `www_96kaifa_com_ecms_libao_index` values('21','8','1','1509015708','1509015826','1509605316','1');");

@include("../../inc/footer.php");
?>