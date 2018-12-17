<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_ecms_game_index`;");
E_C("CREATE TABLE `www_96kaifa_com_ecms_game_index` (
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
) ENGINE=MyISAM AUTO_INCREMENT=928 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('793','6','1','1508834908','1508834908','1508834908','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('794','6','1','1508834908','1508834908','1508834908','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('795','6','1','1508834908','1508834908','1508834908','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('796','6','1','1508834908','1508834908','1508834908','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('797','6','1','1508834909','1508834909','1508834909','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('798','6','1','1508834909','1508834909','1508834909','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('799','6','1','1508834909','1508834909','1508834909','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('800','6','1','1508834909','1508834909','1508834909','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('801','6','1','1508834910','1508834910','1508834910','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('802','6','1','1508834910','1508834910','1508834910','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('803','6','1','1508834910','1508834910','1508834910','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('804','6','1','1508834910','1508834910','1508834910','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('805','6','1','1508834910','1508834910','1508834910','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('806','6','1','1508834910','1508834910','1508834910','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('807','6','1','1508834911','1508834911','1508834911','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('808','6','1','1508834911','1508834911','1508834911','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('809','6','1','1508834911','1508834911','1508834911','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('810','6','1','1508834911','1508834911','1508834911','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('811','6','1','1508834911','1508834911','1508834911','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('812','6','1','1508834911','1508834911','1508834911','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('813','6','1','1508834912','1508834912','1508834912','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('814','6','1','1508834912','1508834912','1508834912','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('815','6','1','1508834912','1508834912','1508834912','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('816','6','1','1508834912','1508834912','1508834912','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('817','6','1','1508834912','1508834912','1508834912','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('818','6','1','1508834912','1508834912','1508834912','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('819','6','1','1508834913','1508834913','1508834913','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('820','6','1','1508834913','1508834913','1508834913','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('821','6','1','1508834913','1508834913','1508834913','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('822','6','1','1508834913','1508834913','1508834913','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('823','6','1','1508834913','1508834913','1508834913','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('824','6','1','1508834913','1508834913','1508834913','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('825','6','1','1508834914','1508834914','1508834914','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('826','6','1','1508834914','1508834914','1508834914','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('827','6','1','1508834915','1508834915','1508834915','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('828','6','1','1508834915','1508834915','1508834915','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('829','6','1','1508834915','1508834915','1508834915','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('830','6','1','1508834915','1508834915','1508834915','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('831','6','1','1508834916','1508834916','1508834916','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('832','6','1','1508834916','1508834916','1508834916','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('833','6','1','1508834916','1508834916','1508834916','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('834','6','1','1508834916','1508834916','1508834916','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('835','6','1','1508834917','1508834917','1508834917','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('836','6','1','1508834917','1508834917','1508834917','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('837','6','1','1508834917','1508834917','1509161266','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('838','6','1','1508834917','1508834917','1508834917','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('839','6','1','1508834918','1508834918','1508834918','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('840','6','1','1508834918','1508834918','1508834918','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('841','6','1','1508834918','1508834918','1508834918','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('842','6','1','1508834919','1508834919','1508834919','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('843','6','1','1508834920','1508834920','1508834920','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('844','6','1','1508834921','1508834921','1508834921','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('845','6','1','1508834921','1508834921','1508834921','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('846','6','1','1508834921','1508834921','1508834921','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('847','6','1','1508834921','1508834921','1508834921','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('848','6','1','1508834922','1508834922','1508834922','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('849','6','1','1508834922','1508834922','1508834922','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('850','6','1','1508834922','1508834922','1508834922','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('851','6','1','1508834922','1508834922','1508834922','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('852','6','1','1508834922','1508834922','1508834922','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('853','6','1','1508834922','1508834922','1508834922','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('854','6','1','1508834923','1508834923','1508834923','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('855','6','1','1508834923','1508834923','1508834923','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('856','6','1','1508834923','1508834923','1508834923','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('857','6','1','1508834923','1508834923','1508834923','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('858','6','1','1508834923','1508834923','1508834923','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('859','6','1','1508834923','1508834923','1508834923','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('860','6','1','1508834924','1508834924','1508834924','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('861','6','1','1508834924','1508834924','1508834924','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('862','6','1','1508834924','1508834924','1509161232','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('863','6','1','1508834924','1508834924','1508834924','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('864','6','1','1508834924','1508834924','1508834924','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('865','6','1','1508834924','1508834924','1508834924','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('866','6','1','1508834925','1508834925','1508834925','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('867','6','1','1508834925','1508834925','1508834925','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('868','6','1','1508834925','1508834925','1508834925','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('869','6','1','1508834925','1508834925','1508834925','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('870','6','1','1508834925','1508834925','1508834925','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('871','6','1','1508834925','1508834925','1508834925','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('872','6','1','1508834926','1508834926','1508834926','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('873','6','1','1508834926','1508834926','1508834926','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('874','6','1','1508834927','1508834927','1508834927','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('875','6','1','1508834927','1508834927','1508834927','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('876','6','1','1508834927','1508834927','1508834927','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('877','6','1','1508834927','1508834927','1508834927','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('878','6','1','1508834928','1508834928','1508834928','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('879','6','1','1508834928','1508834928','1508834928','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('880','6','1','1508834928','1508834928','1508834928','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('881','6','1','1508834928','1508834928','1508834928','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('882','6','1','1508834929','1508834929','1508834929','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('883','6','1','1508834929','1508834929','1508834929','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('884','6','1','1508834929','1508834929','1508834929','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('885','6','1','1508834929','1508834929','1508834929','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('886','6','1','1508834930','1508834930','1508834930','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('887','6','1','1508834930','1508834930','1508834930','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('888','6','1','1508834930','1508834930','1508834930','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('889','6','1','1508834930','1508834930','1508834930','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('890','6','1','1508834931','1508834931','1508834931','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('891','6','1','1508834931','1508834931','1508834931','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('892','6','1','1508834931','1508834931','1508834931','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('893','6','1','1508834933','1508834933','1508834933','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('894','6','1','1508834933','1508834933','1508834933','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('895','6','1','1508834933','1508834933','1508834933','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('896','6','1','1508834934','1508834934','1508834934','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('897','6','1','1508834934','1508834934','1508834934','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('898','6','1','1508834934','1508834934','1508834934','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('899','6','1','1508834934','1508834934','1508834934','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('900','6','1','1508834934','1508834934','1508834934','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('901','6','1','1508834934','1508834934','1508834934','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('902','6','1','1508834935','1508834935','1508834935','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('903','6','1','1508834935','1508834935','1508834935','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('904','6','1','1508834935','1508834935','1508834935','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('905','6','1','1508834935','1508834935','1508834935','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('906','6','1','1508834935','1508834935','1508834935','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('907','6','1','1508834935','1508834935','1508834935','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('908','6','1','1508834936','1508834936','1508834936','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('909','6','1','1508834936','1508834936','1508834936','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('910','6','1','1508834936','1508834936','1508834936','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('911','6','1','1508834936','1508834936','1508834936','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('912','6','1','1508834936','1508834936','1508834936','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('913','6','1','1508834936','1508834936','1508834936','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('914','6','1','1508834937','1508834937','1508834937','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('915','6','1','1508834937','1508834937','1508834937','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('916','6','1','1508834937','1508834937','1508834937','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('917','6','1','1508834937','1508834937','1508834937','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('918','6','1','1508834937','1508834937','1508834937','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('919','6','1','1508834937','1508834937','1508834937','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('920','6','1','1508834938','1508834938','1508834938','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('921','6','1','1508834938','1508834938','1508834938','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('922','6','1','1508834938','1508834938','1508834938','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('923','6','1','1508834938','1508834938','1508834938','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('924','6','1','1508834939','1508834939','1508834939','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('925','6','1','1509161570','1509161570','1509242334','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('926','6','1','1509161570','1509161570','1509242349','1');");
E_D("replace into `www_96kaifa_com_ecms_game_index` values('927','6','1','1509161571','1509161571','1509242361','1');");

@include("../../inc/footer.php");
?>