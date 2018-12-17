<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsclassadd`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  `seotitle` varchar(255) NOT NULL DEFAULT '',
  `eclasspagetext` mediumtext NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('1','','',0xe69c80e696b04835e6b8b8e6888fe8b584e8aeaf,'');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('2','','',0xe696b0e997bb,'');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('3','','',0xe694bbe795a5,'');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('4','','',0xe6b4bbe58aa8,'');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('5','','',0xe585ace5918a,'');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('6','','',0xe69c80e696b04835e6b8b8e6888f5fe69c80e696b0e6898be69cbae9a1b5e6b8b8e5a4a7e585a8,'');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('7','','',0xe69c80e783ade69c80e696b0e6898be69cbae59ca8e7babfe58d95e69cbae5b08fe6b8b8e6888f2c4835e5b08fe6b8b8e6888fe5a4a7e585a8,'');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('8','','',0x4835e6b8b8e6888fe7a4bce58c855fe6898be69cbae9a1b5e6b8b8e7a4bce58c855fe6bf80e6b4bbe7a081,'');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('9','','',0xe69c80e696b04835e6b8b8e6888fe5bc80e69c8de8a1a85fe6898be69cbae9a1b5e6b8b8e5bc80e69c8de5bc80e6b58be8a1a8,'');");

@include("../../inc/footer.php");
?>