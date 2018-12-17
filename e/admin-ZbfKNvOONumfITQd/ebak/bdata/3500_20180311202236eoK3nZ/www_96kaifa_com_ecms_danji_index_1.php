<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_ecms_danji_index`;");
E_C("CREATE TABLE `www_96kaifa_com_ecms_danji_index` (
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
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('1','7','1','1508981888','1508981888','1508981888','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('2','7','1','1508981888','1508981888','1508981888','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('3','7','1','1508981888','1508981888','1508981888','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('4','7','1','1508981889','1508981889','1508981889','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('5','7','1','1508981889','1508981889','1508981889','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('6','7','1','1508981889','1508981889','1508981889','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('7','7','1','1508981889','1508981889','1508981889','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('8','7','1','1508981889','1508981889','1508981889','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('9','7','1','1508981890','1508981890','1508981890','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('10','7','1','1508981890','1508981890','1508981890','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('11','7','1','1508981890','1508981890','1508981890','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('12','7','1','1508981890','1508981890','1508981890','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('13','7','1','1508981890','1508981890','1508981890','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('14','7','1','1508981890','1508981890','1508981890','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('15','7','1','1508981891','1508981891','1508981891','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('16','7','1','1508981891','1508981891','1508981891','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('17','7','1','1508981891','1508981891','1508981891','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('18','7','1','1508981891','1508981891','1508981891','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('19','7','1','1508981891','1508981891','1508981891','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('20','7','1','1508981891','1508981891','1508981891','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('21','7','1','1508981892','1508981892','1508981892','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('22','7','1','1508981892','1508981892','1508981892','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('23','7','1','1508981892','1508981892','1508981892','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('24','7','1','1508981892','1508981892','1508981892','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('25','7','1','1508981892','1508981892','1508981892','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('26','7','1','1508981892','1508981892','1508981892','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('27','7','1','1508981893','1508981893','1508981893','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('28','7','1','1508981893','1508981893','1508981893','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('29','7','1','1508981893','1508981893','1508981893','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('30','7','1','1508981893','1508981893','1508981893','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('31','7','1','1508981893','1508981893','1508981893','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('32','7','1','1508981894','1508981894','1508981894','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('33','7','1','1508981894','1508981894','1508981894','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('34','7','1','1508981894','1508981894','1508981894','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('35','7','1','1508981895','1508981895','1508981895','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('36','7','1','1508981895','1508981895','1508981895','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('37','7','1','1508981895','1508981895','1508981895','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('38','7','1','1508981895','1508981895','1508981895','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('39','7','1','1508981896','1508981896','1508981896','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('40','7','1','1508981896','1508981896','1508981896','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('41','7','1','1508981896','1508981896','1508981896','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('42','7','1','1508981896','1508981896','1508981896','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('43','7','1','1508981897','1508981897','1508981897','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('44','7','1','1508981897','1508981897','1508981897','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('45','7','1','1508981897','1508981897','1508981897','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('46','7','1','1508981897','1508981897','1508981897','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('47','7','1','1508981898','1508981898','1508981898','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('48','7','1','1508981898','1508981898','1508981898','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('49','7','1','1508981898','1508981898','1508981898','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('50','7','1','1508981899','1508981899','1508981899','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('51','7','1','1508981900','1508981900','1508981900','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('52','7','1','1508981901','1508981901','1508981901','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('53','7','1','1508981901','1508981901','1508981901','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('54','7','1','1508981901','1508981901','1508981901','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('55','7','1','1508981901','1508981901','1508981901','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('56','7','1','1508981902','1508981902','1508981902','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('57','7','1','1508981902','1508981902','1508981902','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('58','7','1','1508981902','1508981902','1508981902','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('59','7','1','1508981902','1508981902','1508981902','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('60','7','1','1508981902','1508981902','1508981902','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('61','7','1','1508981902','1508981902','1508981902','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('62','7','1','1508981903','1508981903','1508981903','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('63','7','1','1508981903','1508981903','1508981903','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('64','7','1','1508981903','1508981903','1508981903','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('65','7','1','1508981903','1508981903','1508981903','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('66','7','1','1508981903','1508981903','1508981903','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('67','7','1','1508981903','1508981903','1508981903','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('68','7','1','1508981904','1508981904','1508981904','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('69','7','1','1508981904','1508981904','1508981904','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('70','7','1','1508981904','1508981904','1508981904','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('71','7','1','1508981904','1508981904','1508981904','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('72','7','1','1508981904','1508981904','1508981904','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('73','7','1','1508981904','1508981904','1508981904','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('74','7','1','1508981905','1508981905','1508981905','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('75','7','1','1508981905','1508981905','1508981905','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('76','7','1','1508981905','1508981905','1508981905','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('77','7','1','1508981905','1508981905','1508981905','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('78','7','1','1508981905','1508981905','1508981905','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('79','7','1','1508981905','1508981905','1508981905','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('80','7','1','1508981906','1508981906','1508981906','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('81','7','1','1508981906','1508981906','1508981906','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('82','7','1','1508981907','1508981907','1508981907','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('83','7','1','1508981907','1508981907','1508981907','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('84','7','1','1508981907','1508981907','1508981907','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('85','7','1','1508981907','1508981907','1508981907','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('86','7','1','1508981908','1508981908','1508981908','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('87','7','1','1508981908','1508981908','1508981908','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('88','7','1','1508981908','1508981908','1508981908','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('89','7','1','1508981908','1508981908','1508981908','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('90','7','1','1508981909','1508981909','1508981909','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('91','7','1','1508981909','1508981909','1508981909','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('92','7','1','1508981909','1508981909','1508981909','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('93','7','1','1508981909','1508981909','1508981909','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('94','7','1','1508981910','1508981910','1508981910','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('95','7','1','1508981910','1508981910','1508981910','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('96','7','1','1508981910','1508981910','1508981910','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('97','7','1','1508981910','1508981910','1508981910','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('98','7','1','1508981911','1508981911','1508981911','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('99','7','1','1508981911','1508981911','1508981911','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('100','7','1','1508981911','1508981911','1508981911','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('101','7','1','1508981913','1508981913','1508981913','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('102','7','1','1508981913','1508981913','1508981913','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('103','7','1','1508981913','1508981913','1508981913','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('104','7','1','1508981914','1508981914','1508981914','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('105','7','1','1508981914','1508981914','1508981914','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('106','7','1','1508981914','1508981914','1508981914','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('107','7','1','1508981914','1508981914','1508981914','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('108','7','1','1508981915','1508981915','1508981915','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('109','7','1','1508981915','1508981915','1508981915','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('110','7','1','1508981915','1508981915','1508981915','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('111','7','1','1508981915','1508981915','1508981915','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('112','7','1','1508981915','1508981915','1508981915','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('113','7','1','1508981915','1508981915','1508981915','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('114','7','1','1508981916','1508981916','1508981916','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('115','7','1','1508981916','1508981916','1508981916','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('116','7','1','1508981916','1508981916','1508981916','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('117','7','1','1508981916','1508981916','1508981916','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('118','7','1','1508981916','1508981916','1508981916','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('119','7','1','1508981917','1508981917','1508981917','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('120','7','1','1508981917','1508981917','1508981917','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('121','7','1','1508981917','1508981917','1508981917','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('122','7','1','1508981917','1508981917','1508981917','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('123','7','1','1508981918','1508981918','1508981918','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('124','7','1','1508981918','1508981918','1508981918','1');");
E_D("replace into `www_96kaifa_com_ecms_danji_index` values('125','7','1','1508981918','1508981918','1508981918','1');");

@include("../../inc/footer.php");
?>